<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home',['title' => 'Altruh Website Kepedulian Sesama Mahasiswa'] );
});
Route::get('/Bantuan', function () {
    return view('bantuan',['title'=> 'Bantuan'] );
});
Route::get('/GalangBantuan', function () {
    return view('galang',['title'=> 'Galang Bantuan'] );
});
