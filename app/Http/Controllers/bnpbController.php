<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\content;
use Auth;
use App\User;
use App\category;
use DB;
use paginate;

class bnpbController extends Controller
{
  public function dashboard(content $content){
    $archive = content::where('status_id',0)->count();
    $post = DB::table('contents')->count();
    $trash = content::where('status_id',2)->count();
    $viewer = DB::table('views')->count();
    $contentviewer = DB::table('contents')
      ->join('views', 'contents.id','=','views.viewable_id')
      ->join('categories', 'contents.category_id','=','categories.id')
      ->where('contents.status_id',1)
      ->select('title', 'kategori', DB::raw('count(viewable_id) as viewer'))
      ->groupBy('kategori')
      ->get();
    $label = DB::table('contents')
    ->join('categories', 'contents.category_id','=','categories.id')
    ->where('contents.status_id',1)
    ->select('kategori as name', DB::raw('count(category_id) as y'))
    ->groupBy('kategori')
    ->get();
    $vieww = DB::table('views')
    ->select(DB::raw('DATE_FORMAT(views.viewed_at, "%Y,%m,%d") as x'), DB::raw('count(*) as y'))
    ->groupBy('x')
    ->get();

//KODE DSS DIMULAI DARI SINI
    //Declare
        $statusArtikel = "Normal";
        $statusViewer = "Normal";
        $keputusan = "Normal";
        $startDate = new \DateTime(Date('Y-m-d', strtotime('-30 days')));
        $endDate = new \DateTime(Date('Y-m-d', strtotime('+0 days')));
        $interval = \DateInterval::createFromDateString('1 day');
        $days = new \DatePeriod($startDate, $interval, $endDate);

    //Regresi Viewer
        $totalView = array(); $jumlahView=0; $i=0;
        foreach($days as $day){
          $viewData = DB::table('views')
          ->select(DB::raw('count(*) as total'))
          ->where(DB::raw('DATE_FORMAT(viewed_at, "%Y-%m-%d")'), $day->format('Y-m-d'))
          ->groupBy('viewed_at')
          ->get();
          $totalView[$i] = $viewData->count();
          if($totalView[$i] != 0){
            $jumlahView++;
          }
          $i++;
        }
        $prediksiView = $totalView[0];
        for($j=1; $j<sizeof($totalView); $j++){
          $prediksiView = floor(abs($prediksiView - $totalView[$j] /2));
        }
        $viewToday = DB::table('views')
        ->select(DB::raw('count(*) as total'))
        ->where(DB::raw('DATE_FORMAT(viewed_at, "%Y-%m-%d")'), date('Y-m-d'))
        ->groupBy('viewed_at')
        ->get();
        $viewToday = $viewToday->count();

        if($viewToday < $prediksiView) $statusViewer = "Penurunan";
        elseif($viewToday > $prediksiView) $statusViewer = "Kenaikan";

    //Regresi Artikel
        $totalArtikel = array(); $jumlahArtikel=0; $i=0;
        foreach($days as $day){
          $artikelData = DB::table('contents')
          ->select(DB::raw('count(*) as total'))
          ->where('status_id',1)
          ->where(DB::raw('DATE_FORMAT(updated_at, "%Y-%m-%d")'), $day->format('Y-m-d'))
          ->groupBy('updated_at')
          ->get();
          $totalArtikel[$i] = $artikelData->count();
          if($totalArtikel[$i] != 0){
            $jumlahArtikel++;
          }
          $i++;
        }
        $prediksiArtikel = $totalArtikel[0];
        for($j=1; $j<sizeof($totalArtikel); $j++){
          $prediksiArtikel = ceil(abs($prediksiArtikel - $totalArtikel[$j] /2));
        }
        $artikelToday = DB::table('contents')
        ->select(DB::raw('count(id) as total'))
        ->where('status_id',1)
        ->where(DB::raw('DATE_FORMAT(updated_at, "%Y-%m-%d")'), date('Y-m-d'))
        ->groupBy('updated_at')
        ->get();
        $artikelToday = $artikelToday->count();

        if($artikelToday < $prediksiArtikel) $statusArtikel = "Kurang";
        elseif($artikelToday > $prediksiArtikel) $statusArtikel = "Berlebih";

    //Membuat Keputusan
        if    ($statusViewer == "Penurunan" && $statusArtikel == "Berlebih") $keputusan = "Evaluasi Artikel dan Kontributor";
        elseif($statusViewer == "Kenaikan" && $statusArtikel == "Kurang") $keputusan = "Butuh Tambahan Artikel Segera";
        elseif($statusViewer == "Kenaikan" && $statusArtikel == "Berlebih") $keputusan = "Butuh Tambahan Artikel Segera";
        elseif($statusViewer == "Penurunan" && $statusArtikel == "Kurang") $keputusan = "Evaluasi Artikel dan Kontributor";

//MENGHITUNG NILAI FUZZY DIMULAI DARI SINI
    //Variabel Permintaan
        $requestX = 5;

        if($requestX <= 4) {$reqArtikel_Kurang = 1;}
        elseif($requestX > 4 && $requestX <12) {$reqArtikel_Kurang = (12-$requestX)/8;}
        elseif($requestX >= 12) {$reqArtikel_Kurang = 0;}
        $reqArtikel_Kurang = 7/8;//Data Sementara

        if($requestX <= 4) {$reqArtikel_Berlebih = 0;}
        elseif($requestX > 4 && $requestX < 12) {$reqArtikel_Berlebih = ($requestX-4)/8;}
        elseif($requestX >= 12) {$reqArtikel_Berlebih = 1;}
        $reqArtikel_Berlebih = 1/8;//Data Sementara

    //Variabel Persediaan
        $requestY = 10;

        if($requestY <= 4) {$reqArtikel_Penurunan = 1;}
        elseif($requestY > 4 && $requestY < $post) {$reqArtikel_Penurunan = ($post-$jumlahArtikel)/$post-4;}
        elseif($requestY >= $post) {$reqArtikel_Penurunan = 0;}
        $reqArtikel_Penurunan = 4/10;//Data Sementara

        if($requestY <= 4) {$reqArtikel_Kenaikan = 0;}
        elseif($requestY > 4 && $requestY <12) {$reqArtikel_Kenaikan = ($jumlahArtikel-4)/$post-4;}
        elseif($requestY >= 12) {$reqArtikel_Kenaikan = 1;}
        $reqArtikel_Kenaikan = 6/10;//Data Sementara

    //Variabel Keputusan
        $r1 = min($reqArtikel_Kurang, $reqArtikel_Kenaikan);
        $z1 = -1*($r1*8 - 12);
        if($z1 <= 4) $z1 = 1;
        elseif($z1 > 4 && $z1 < 12) $z1 = -1*($r1*8 - 12);
        elseif($z1 >= 12) $z1 = 0;
        $r1=6/10; $z1=7.2;//Data Sementara

        $r2 = min($reqArtikel_Kurang, $reqArtikel_Penurunan);
        $z2 = -1*($r2*8 - 12);
        if($z2 <= 4) $z2 = 1;
        elseif($z2 > 4 && $z2 < 12) $z2 = -1*($r2*8 - 12);
        elseif($z2 >= 12) $z2 = 0;
        $r2=4/10; $z2=8.8;//Data Sementara

        $r3 = min($reqArtikel_Berlebih, $reqArtikel_Kenaikan);
        $z3 = ($r3*8) - 4;
        if($z3 <= 4) $z3 = 0;
        elseif($z3 > 4 && $z3 < 12) $z3 = ($r3*8) - 4;
        elseif($z3 >= 12) $z3 = 1;
        $r3=1/8; $z3=0;//Data Sementara

        $r4 = min($reqArtikel_Berlebih, $reqArtikel_Penurunan);
        $z4 = ($r4*8) - 4;
        if($z4 <= 4) $z4 = 0;
        elseif($z4 > 4 && $z4 < 12) $z1 = ($r4*8) - 4;
        elseif($z4 >= 12) $z4 = 1;
        $r4=1/8; $z4=0;//Data Sementara


        $z = ($r1*$z1 + $r2*$z2 + $r3*$z3 + $r4*$z4) / ($r1 + $r2 + $r3 + $r4);




    return view('dashboard.BNPB.index', compact('archive','post','trash','viewer','label','contentviewer','vieww','keputusan','statusViewer','statusArtikel','z'));
  }

  // Kontributor
  public function kontributor(){
    $kontributor = DB::table('contents')
    ->join('users', 'contents.user_id','=','users.id')
    ->where('users.role_id',0)->where('contents.status_id',1)
    ->select('namaDepan', 'namaBelakang', DB::raw('count(user_id) as total'))
    ->groupBy('user_id')
    ->get();
    return view('dashboard.BNPB.contributors',compact('kontributor'));
  }

  // list data
  public function posts(){
    $content = content::where('status_id',1)->get();
    return view('dashboard.BNPB.posts', compact('content'));
  }

  //Pending Posts
  public function pending_posts(){
    $content = content::where('status_id',3)->get();
    return view('dashboard.BNPB.pending-posts', compact('content'));
  }

  // kategori
  public function kategori(){
    $kategori = category::all();
    return view('dashboard.BNPB.category', compact('kategori'));
  }
  public function createKategori(Request $request){

    $kategori = new category;
    $kategori -> kategori = $request->kategori;
    $kategori -> description = $request->description;
    if($request->hasfile('thumbnail'))
    {
      $getimageName = $request->thumbnail->getClientOriginalName();
      $request->thumbnail->move(public_path('images'), $getimageName);
      $kategori->thumbnail = $getimageName;
    }
    $kategori->save();
    return redirect()->back()->with('success','Data berhasil di simpan');

  }

  // form create
  public function postsCreate(){
    $categories = category::all();
    return view('dashboard.BNPB.create-post', compact('categories'));
  }
  // validation store data
  public function validation($request){
    return $this->validate($request, [
      'title' => 'required|max:255',
      'category_id' => 'required|max:255',
      'description' => 'required|max:255',
      'isi_artikel' => 'required',
      'thumbnail' => 'required',
      'thumbnail.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);
  }
  // store data create
  public function postsCreatePost(Request $request){
    $this->validation($request);
    switch ($request->input('status_id')) {

      // Archive
      case 0:
          $content = new content;
          $content -> title = $request->title;
          $content -> category_id = $request->category_id;
          $content -> description = $request->description;
          $content -> isi_artikel = $request->isi_artikel;
          $content -> user_id = Auth::user()->id;
          $content -> status_id = $request->status_id;
          if($request->hasfile('thumbnail'))
          {
            $getimageName = $request->thumbnail->getClientOriginalName();
            $request->thumbnail->move(public_path('images'), $getimageName);
            $content->thumbnail = $getimageName;
          }
          $content->save();
          return redirect()->back()->with('success','Data berhasil di Archive');
          break;

      // Publish
      case 1:
          $content = new content;
          $content -> title = $request->title;
          $content -> category_id = $request->category_id;
          $content -> description = $request->description;
          $content -> isi_artikel = $request->isi_artikel;
          $content -> user_id = Auth::user()->id;
          $content -> status_id = $request->status_id;
          if($request->hasfile('thumbnail'))
          {
            $getimageName = $request->thumbnail->getClientOriginalName();
            $request->thumbnail->move(public_path('images'), $getimageName);
            $content->thumbnail = $getimageName;
          }
          $content->save();
          return redirect()->back()->with('success','Data berhasil di Publish');
          break;
      }
  }

  public function postsEdit($id){
    $categories = category::all();
    $content = content::find($id);
    return view('dashboard.BNPB.edit-post', compact('content','categories'));
  }

  public function postUpdate(Request $request, $id){
    $content = content::find($id);
    $content -> title = $request->title;
    $content -> category_id = $request->category_id;
    $content -> description = $request->description;
    $content -> isi_artikel = $request->isi_artikel;
    $content -> user_id = Auth::user()->id;
    $content -> status_id = $request->status_id;
    if($request->hasfile('thumbnail'))
    {
      $getimageName = $request->thumbnail->getClientOriginalName();
      $request->thumbnail->move(public_path('images'), $getimageName);
      $content->thumbnail = $getimageName;
    }
    $content->save();
    return redirect()->back()->with('success','Data berhasil di edit');
}

    public function status(Request $request, $id){
      $content = content::find($id);
      switch ($request->input('status_id')) {

        case 0:
          $content -> status_id = $request->status_id;
          $content->save();
          return redirect()->back()->with('success','Data berhasil di archive');
        break;
        case 1:
          $content -> status_id = $request->status_id;
          $content->save();
          return redirect()->back()->with('success','Data berhasil di publish');
        break;
        case 2:
          $content -> status_id = $request->status_id;
          $content->save();
          return redirect()->back()->with('success','Data berhasil di hapus');
        break;
        case 3:
          $content -> status_id = $request->status_id;
          $content->save();
          return redirect()->back()->with('success','Data berhasil di pending');
        break;
        case 4:
          $content -> status_id = $request->status_id;
          $content->save();
          return redirect()->back()->with('success','Data berhasil di tolak');
        break;
      }
  }

  public function archives(){
    $content = content::where('status_id',0)->get();
    return view('dashboard.BNPB.archives',compact('content'));
  }
  public function trash(){
    $content = content::where('status_id',2)->get();
    return view('dashboard.BNPB.trash', compact('content'));
  }
  public function setting(){
    $auth = Auth::user()->id;
    $setting = user::find($auth);
    return view('dashboard.BNPB.settings', compact('setting','auth'));
  }
  public function settingUpdate(Request $request, $id){
    $auth = Auth::user()->id;
    $setting = user::find($auth);

    $setting -> namaDepan = $request -> namaDepan;
    $setting -> namaBelakang = $request -> namaBelakang;
    $setting -> alamat = $request -> alamat;
    $setting -> kota = $request -> kota;
    $setting -> provinsi = $request -> provinsi;
    $setting -> kodePos = $request -> kodePos;
    $setting -> tentangSaya = $request -> tentangSaya;
    $setting->save();

    return redirect()->back()->with('success','Data berhasil di edit');
}
}
