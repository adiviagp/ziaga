<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\content;
use Auth;
use App\category;
use App\User;
use DB;

class contributorController extends Controller
{
    public function dashboard(){
      $user = Auth::id();
      $archive = content::where('status_id',0)->where('user_id', $user)->count();
      $post = content::where('status_id',1)->where('user_id', $user)->count();
      $trash = content::where('status_id',2)->where('user_id', $user)->count();
      $label = DB::table('contents')
      ->join('categories', 'contents.category_id','=','categories.id')
      ->where('contents.status_id',1)->where('user_id', $user)
      ->select('kategori as name', DB::raw('count(category_id) as y'))
      ->groupBy('kategori')
      ->get();
      return view('dashboard.Contributor.index', compact('archive','post','trash','label'));
    }
    // list data
    public function posts(){
      $punya = Auth::id();
      $content = content::where('status_id','!=',0)->where('status_id','!=',2)->where('user_id',$punya)->get();
      return view('dashboard.Contributor.posts', compact('content'));
    }
    // form create
    public function postsCreate(){
      $categories = category::all();
      return view('dashboard.Contributor.create-post', compact('categories'));
    }
    // validation store data
    public function validation($request){
      return $this->validate($request, [
        'title' => 'required|max:255',
        'category_id' => 'required|max:255',
        'description' => 'required',
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
            return redirect()->back()->with('success','Post berhasil di Archive');
            break;

        // Publish
        case 3:
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
            return redirect()->back()->with('success','Post berhasil di Publish, Dan Menunggu Proses Verivikasi');
            break;
        }
    }

    public function postsEdit($id){
      $categories = category::all();
      $content = content::find($id);
      return view('dashboard.Contributor.edit-post', compact('content','categories'));
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
        $content -> status_id = $request->status_id;
        $content->save();
        return redirect()->back()->with('success','Data berhasil di edit');

    }

    public function archives(){
      $punya = Auth::id();
      $content = content::where('status_id',0)->where('user_id',$punya)->get();
      return view('dashboard.Contributor.archives',compact('content'));
    }
    public function trash(){
      $punya = Auth::id();
      $content = content::where('status_id',2)->where('user_id',$punya)->get();
      return view('dashboard.Contributor.trash', compact('content'));
    }
    public function setting(){
      $auth = Auth::user()->id;
      $setting = user::find($auth);
      return view('dashboard.Contributor.settings', compact('setting','auth'));
    }
    public function settingUpdate(Request $request, $id){
      $auth = Auth::user()->id;
      $setting = user::find($auth);
      if($request->hasfile('foto'))
      {
        $getimageName = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('images'), $getimageName);
        $setting->foto = $getimageName;
      }
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
