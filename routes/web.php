<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ChatbotController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ppdb', function () {
    return view('ppdb');
});

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

Route::get('/program/{slug?}', function ($slug = null) {
    return view('welcome', ['pageTitle' => 'Program: ' . ($slug ? strtoupper($slug) : 'Utama')]);
});

Route::get('/career-center', function () {
    return view('welcome', ['pageTitle' => 'Career Center']);
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/artikel', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/artikel/{slug}', [ArticleController::class, 'show'])->name('articles.show');


Route::get('/clear-cache', function () {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    return 'Cache berhasil dibersihkan! Silakan buka kembali halaman utama.';
});

Route::post('/api/chatbot/conversations', [ChatbotController::class, 'createConversation']);
Route::post('/api/chatbot/chat', [ChatbotController::class, 'sendMessage']);
