<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;

class authController extends Controller
{
  public function masuk(){
    return view('auth.masuk');
  }
  public function daftar(){
    return view('auth.daftar');
  }
  public function validation($request){
  return $this->validate($request, [
    'namaDepan' => 'required|max:255',
    'namaBelakang' => 'required|max:255',
    'email' => 'required|max:255|unique:users',
    'password' => 'required|min:6|max:255',
  ]);
}
  public function daftarkan(Request $request){
      $this->validation($request);
      $request['password'] = bcrypt($request->password);
      $daftar = new User;
      $daftar->namaDepan = $request->namaDepan;
      $daftar->namaBelakang = $request->namaBelakang;
      $daftar->email = $request->email;
      $daftar->password = $request->password;
      $daftar->role_id = 0;
      $daftar -> save();
      return redirect()->back()->with('success','Daftar Sukses !');
    }
    public function masukkan(Request $request){
      $this -> validate($request,[
        'email' => 'required|max:255',
        'password' => 'required|max:255',
      ]);
      if(Auth::attempt(['email' => $request -> email,'password' => $request -> password, 'role_id' => 0])){
        return redirect('/kontributor/dashboard');
      }
      if(Auth::attempt(['email' => $request -> email,'password' => $request -> password, 'role_id' => 1])){
        return redirect('/bnpb/dashboard');
      }
      return redirect()->back()->with('failed','Login Gagal !');
    }
    public function getLogout(){
      Auth::logout();
      Session::flush();
      return Redirect('/masuk');
}
}
