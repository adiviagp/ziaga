<?php

// Main Controller untuk landing

Route::get('/','mainController@index');


//View profile user
Route::get('/profile/{id}', 'mainController@profile');

//Article
Route::get('/post/{id}', 'mainController@konten');
//Lihat Kategori
Route::get('/kategori/{id}', 'mainController@kategori');
Route::get('/konten', 'mainController@allkonten');

//Tambah Kategori
Route::get('/bnpb/kategori/tambah', function(){
  return view('dashboard.BNPB.create-category');
});
//Edit Kategori
Route::get('/bnpb/kategori/edit/{id}', function(){
  return view('dashboard.BNPB.edit-category');
});
//
Route::post('/cari','mainController@cari');

/** AUTH AREA **/
Route::get('/masuk','authController@masuk');
Route::get('/daftar','authController@daftar');
Route::post('/masuk','authController@masukkan');
Route::post('/daftar','authController@daftarkan');
Route::get('/keluar','authController@getLogout');

/** CONTRIBUTORS AREA **/
Route::group(['middleware' => 'kontributor'], function () {
    //Index
    Route::get('/kontributor/dashboard', 'contributorController@dashboard');
    //Post
    Route::get('/kontributor/posts', 'contributorController@posts');
    //Create-Post
    Route::get('/kontributor/posts/create', 'contributorController@postsCreate');
    //Create-Post
    Route::post('/kontributor/posts/create', 'contributorController@postsCreatePost');
    //Edit-Post
    Route::get('/kontributor/posts/{id}/edit', 'contributorController@postsEdit');
    //Update-Post
    Route::put('/kontributor/posts/{id}/update', 'contributorController@postUpdate');
    Route::put('/kontributor/posts/{id}/status', 'contributorController@status');

    //Archives
    Route::get('/kontributor/archives','contributorController@archives');
    //Trash
    Route::get('/kontributor/trash', 'contributorController@trash');
    //Settings
    Route::get('/kontributor/settings', 'contributorController@setting');
    Route::put('/kontributor/{id}/settingUpdate', 'contributorController@settingUpdate');

/** END OF CONTRIBUTORS AREA **/
});

Route::group(['middleware' => 'bnpb'], function () {

    /** BNPB AREA **/
    //Index
    Route::get('/bnpb/dashboard','bnpbController@dashboard');
    //Contributors
    Route::get('/bnpb/kontributor', 'bnpbController@kontributor');
    //posts
    Route::get('/bnpb/posts', 'bnpbController@posts');
    //Pending posts
    Route::get('/bnpb/pending-posts','bnpbController@pending_posts');
    //Category
    Route::get('/bnpb/kategori', 'bnpbController@kategori');
    //Category
    Route::post('/bnpb/kategori', 'bnpbController@createKategori');
    //Archives
    Route::get('/bnpb/archives', 'bnpbController@archives');
    //Trash
    Route::get('/bnpb/trash', 'bnpbController@trash');
    //Settings
    Route::get('/bnpb/settings', 'bnpbController@setting');
    Route::put('/bnpb/{id}/settingUpdate', 'bnpbController@settingUpdate');

    //Create-Post
    Route::get('/bnpb/posts/create', 'bnpbController@postsCreate');
    //Create-Post
    Route::post('/bnpb/posts/create', 'bnpbController@postsCreatePost');
    //Edit-Post
    Route::get('/bnpb/posts/{id}/edit', 'bnpbController@postsEdit');
    //Update-Post
    Route::put('/bnpb/posts/{id}/update', 'bnpbController@postUpdate');
    Route::put('/bnpb/posts/{id}/status', 'bnpbController@status');

});
