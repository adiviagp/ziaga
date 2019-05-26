<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\content;
use App\category;
use paginate;
use App\User;

class mainController extends Controller
{
    public function index(){
      // $bdpb_jabar = file_get_contents("https://adiviagp.com/jabar.json");
      // $jabar = json_decode($bdpb_jabar);
      // $bdpb_jateng = file_get_contents("https://adiviagp.com/jateng.json");
      // $jateng = json_decode($bdpb_jateng);
      // $bdpb_jatim = file_get_contents("https://adiviagp.com/jatim.json");
      // $jatim = json_decode($bdpb_jatim);
      $content = content::paginate(6);
      $category = category::all();
      return view('home.index',compact('content','category'));
    }
    public function konten($id){
      $content = content::find($id);
      return view('home.post', compact('content'));
    }
    public function kategori($id){
      $konten = content::where('category_id',$id)->get();
      $kategori = category::find($id);
      return view('home.category', compact('kategori','konten'));
    }
    public function allkonten(){
      $konten = content::all();
      return view('home.allcontent', compact('konten'));
    }
    public function cari(Request $request){
      $cari = $request->cari;
      if($cari != ""){
        $content = content::where('title','LIKE','%'. $cari . '%')
                    ->orWhere('isi_artikel','LIKE','%'. $cari . '%')
                    ->get();

            if(count($content) > 0){
              return view('home.cari')->withDetails($content)->withQuery($cari);
            }

      }
      return view('home.cari')->withMessage("Data tidak ditemukan..");
    }
    public function profile($id){
      $profile = user::find($id);
      $content = content::where('user_id',$id)->get();
      return view('home.user', compact('profile','content'));
    }
}
