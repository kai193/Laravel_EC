<?php

use Illuminate\Support\Facades\Route;

// このファイルはLaravelのルーティング設定を行います。

// ルート'/'（ホームページ）にアクセスした際の処理を定義しています。
// 'welcome'ビューを返すように設定されています。
Route::get('/', function () {
    return view('welcome');
});

// 上記のコードは、ユーザーがウェブサイトのルートURLにアクセスした時に、
// 'welcome'という名前のビューファイルを表示するよう指示しています。
// このビューファイルは通常、resources/views/welcome.blade.phpに配置されています。
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/E-sport', function () {
    return view('E-sport');
})->name('E-sport');

Route::get('/language', function () {
    return view('language');
})->name('language');

Route::get('/programming', function () {
    return view('programming');
})->name('programming');

Route::get('/cooking', function () {
    return view('cooking');
})->name('cooking');

Route::get('/music', function () {
    return view('music');
})->name('music');

Route::get('/language', function () {
    return view('language');
})->name('language');

Route::get('/design', function () {
    return view('design');
})->name('design');

Route::get('/E-sport', function () {
    return view('E-sport');
})->name('E-sport');

Route::get('/detail_music', function () {
    return view('detail_music');
})->name('detail_music');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/Member', function () {
    return view('Member');
})->name('Member');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/detail_Programming', function () {
    return view('detail_Programming');
})->name('detail_Programming');
