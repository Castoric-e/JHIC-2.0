<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\CareerJob;
use App\Models\ContactMessage;
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
        $totalJobs = CareerJob::count();
        $activeJobsCount = CareerJob::active()->count();
        $totalMessages = ContactMessage::count();
        $unreadMessagesCount = ContactMessage::unread()->count();

        $recentArticles = Article::orderBy('published_at', 'desc')
            ->orderBy('id', 'desc')
            ->take(6)
            ->get();

        $recentMessages = ContactMessage::orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $categoryDistribution = Article::selectRaw('category, count(*) as count')
            ->groupBy('category')
            ->orderBy('count', 'desc')
            ->get();

        return view('admin.dashboard', compact(
            'totalArticles',
            'categoriesCount',
            'totalJobs',
            'activeJobsCount',
            'totalMessages',
            'unreadMessagesCount',
            'recentArticles',
            'recentMessages',
            'categoryDistribution'
        ));
    }
}
