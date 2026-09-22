<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $articles = Article::orderBy('updated_at', 'desc')->get();

        $staticUrls = [
            '/',
            '/ppdb',
            '/tentang-kami',
            '/program/pkl',
            '/program/idn-mengajar',
            '/program/ekstrakurikuler',
            '/program/edurace',
            '/program/ldks',
            '/program/live-in',
            '/program/business-survival',
            '/program/backpacker',
            '/program/it-camp',
            '/program/idn-bersyukur',
            '/career-center',
            '/kontak',
            '/artikel',
        ];

        $xml = view('sitemap', compact('staticUrls', 'articles'))->render();

        return response($xml, 200)
            ->header('Content-Type', 'text/xml');
    }
}
