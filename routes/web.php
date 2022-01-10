<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

// 投稿ページを表示
Route::get('/create', [FormController::class, 'postpage']);
// 投稿をコントローラーに送信
Route::get('/newpost', [FormController::class, 'savenew']);