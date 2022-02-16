<?php

use Illuminate\Support\Facades\Route;
use App\Http\Requests\TestFormRequest;

//お問い合わせ
Route::get('/', [App\Http\Controllers\ContactController::class, 'contacts.index'])->name('index');

// 確認ページ
Route::post('/confirm', [App\Http\Controllers\ContactController::class, 'contacts.confirm'])->name('confirm');

// 完了ページ
Route::get('/thanks', [App\Http\Controllers\ContactController::class, 'contacts.thanks'])->name('thanks');