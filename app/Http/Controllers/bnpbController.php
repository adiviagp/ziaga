<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\content;
use Auth;
use App\User;
use App\category;
use DB;

class bnpbController extends Controller
{
  public function dashboard(content $content){
    $archive = content::where('status_id',0)->count();
    $post = content::where('status_id',1)->count();
    $trash = content::where('status_id',2)->count();
    $contentt = content::where('status_id',1)->get();
    $htg = content::all();
    $label = DB::table('contents')
    ->join('categories', 'contents.category_id','=','categories.id')
    ->where('contents.status_id',1)
    ->select('kategori as name', DB::raw('count(category_id) as y'))
    ->groupBy('kategori')
    ->get();
    return view('dashboard.BNPB.index', compact('archive','post','trash','label','contentt','htg'));
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
