<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Tampilkan halaman dashboard Super Admin.
     */
    public function index()
    {
        $totalArticles = Article::count();
        $categoriesCount = Article::distinct('category')->count('category');
        $recentArticles = Article::orderBy('published_at', 'desc')
            ->orderBy('id', 'desc')
            ->take(6)
            ->get();

        $categoryDistribution = Article::selectRaw('category, count(*) as count')
            ->groupBy('category')
            ->orderBy('count', 'desc')
            ->get();

        return view('admin.dashboard', compact(
            'totalArticles',
            'categoriesCount',
            'recentArticles',
            'categoryDistribution'
        ));
    }
}
