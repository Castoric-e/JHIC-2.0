<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    /**
     * Tampilkan daftar artikel dengan pencarian dan pagination.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        $category = $request->query('category');

        $query = Article::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        if ($category) {
            $query->where('category', $category);
        }

        $articles = $query->orderBy('published_at', 'desc')
            ->orderBy('id', 'desc')
            ->paginate(10)
            ->withQueryString();

        $categories = Article::select('category')->distinct()->pluck('category');

        return view('admin.articles.index', compact('articles', 'categories', 'search', 'category'));
    }

    /**
     * Tampilkan formulir pembuatan artikel baru.
     */
    public function create()
    {
        $categories = Article::select('category')->distinct()->pluck('category')->filter()->values();
        return view('admin.articles.create', compact('categories'));
    }

    /**
     * Simpan artikel baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'read_time' => 'required|string|max:50',
            'published_at' => 'required|date',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,avif|max:4096',
        ], [
            'title.required' => 'Judul artikel wajib diisi.',
            'category.required' => 'Kategori wajib dipilih atau diisi.',
            'read_time.required' => 'Estimasi waktu baca wajib diisi.',
            'published_at.required' => 'Tanggal publikasi wajib diisi.',
            'content.required' => 'Konten artikel tidak boleh kosong.',
            'image.image' => 'File harus berupa gambar.',
            'image.max' => 'Ukuran gambar maksimal adalah 4MB.',
        ]);

        // Generate slug yang unik
        $baseSlug = Str::slug($validated['title']);
        $slug = $baseSlug;
        $counter = 1;
        while (Article::where('slug', $slug)->exists()) {
            $slug = "{$baseSlug}-{$counter}";
            $counter++;
        }

        $imagePath = 'pages/articles/artikel-img.avif'; // default
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $uploadDir = public_path('assets/uploads/articles');
            if (!File::exists($uploadDir)) {
                File::makeDirectory($uploadDir, 0755, true, true);
            }
            $fileName = time() . '_' . Str::random(8) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $fileName);
            $imagePath = 'uploads/articles/' . $fileName;
        }

        Article::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'category' => $validated['category'],
            'read_time' => $validated['read_time'],
            'published_at' => $validated['published_at'],
            'content' => $validated['content'],
            'image' => $imagePath,
            'detail_image' => null,
        ]);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Artikel baru berhasil diterbitkan!');
    }

    /**
     * Tampilkan formulir edit artikel.
     */
    public function edit(Article $article)
    {
        $categories = Article::select('category')->distinct()->pluck('category')->filter()->values();
        return view('admin.articles.edit', compact('article', 'categories'));
    }

    /**
     * Perbarui artikel yang ada.
     */
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'read_time' => 'required|string|max:50',
            'published_at' => 'required|date',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,avif|max:4096',
        ], [
            'title.required' => 'Judul artikel wajib diisi.',
            'category.required' => 'Kategori wajib dipilih atau diisi.',
            'read_time.required' => 'Estimasi waktu baca wajib diisi.',
            'published_at.required' => 'Tanggal publikasi wajib diisi.',
            'content.required' => 'Konten artikel tidak boleh kosong.',
            'image.image' => 'File harus berupa gambar.',
            'image.max' => 'Ukuran gambar maksimal adalah 4MB.',
        ]);

        // Perbarui slug jika judul berubah
        if ($article->title !== $validated['title']) {
            $baseSlug = Str::slug($validated['title']);
            $slug = $baseSlug;
            $counter = 1;
            while (Article::where('slug', $slug)->where('id', '!=', $article->id)->exists()) {
                $slug = "{$baseSlug}-{$counter}";
                $counter++;
            }
            $article->slug = $slug;
        }

        // Upload gambar baru jika ada
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $uploadDir = public_path('assets/uploads/articles');
            if (!File::exists($uploadDir)) {
                File::makeDirectory($uploadDir, 0755, true, true);
            }
            $fileName = time() . '_' . Str::random(8) . '.' . $file->getClientOriginalExtension();
            $file->move($uploadDir, $fileName);
            $article->image = 'uploads/articles/' . $fileName;
        }

        $article->title = $validated['title'];
        $article->category = $validated['category'];
        $article->read_time = $validated['read_time'];
        $article->published_at = $validated['published_at'];
        $article->content = $validated['content'];
        $article->save();

        return redirect()->route('admin.articles.index')
            ->with('success', 'Artikel berhasil diperbarui!');
    }

    /**
     * Hapus artikel dari database.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('admin.articles.index')
            ->with('success', 'Artikel berhasil dihapus!');
    }
}
