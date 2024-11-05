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
