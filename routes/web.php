<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\SitemapController;

Route::get('/sitemap.xml', [SitemapController::class, 'index']);

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
    if ($slug === 'ekstrakurikuler' || $slug === 'ekstrakulikuler') {
        return view('program.ekstrakurikuler');
    }
    if ($slug === 'backpacker') {
        return view('program.backpacker');
    }
    if ($slug === 'idn-mengajar' || $slug === 'mengajar') {
        return view('program.idn-mengajar');
    }
    if ($slug === 'edurace') {
        return view('program.edurace');
    }
    if ($slug === 'ldks') {
        return view('program.ldks');
    }
    if ($slug === 'live-in') {
        return view('program.live-in');
    }
    if ($slug === 'business-survival') {
        return view('program.business-survival');
    }
    if ($slug === 'it-camp') {
        return view('program.it-camp');
    }
    if ($slug === 'idn-bersyukur' || $slug === 'bersyukur') {
        return view('program.idn-bersyukur');
    }
    if ($slug === 'pkl' || $slug === 'magang') {
        return view('program.pkl');
    }
    return view('welcome', ['pageTitle' => 'Program: ' . ($slug ? strtoupper($slug) : 'Utama')]);
});

Route::get('/career-center', function () {
    return view('career-center');
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
Route::post('/api/chatbot/chat/stream', [ChatbotController::class, 'streamMessage']);
