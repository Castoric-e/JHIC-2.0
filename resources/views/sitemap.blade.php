{!! '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($staticUrls as $url)
        <url>
            <loc>{{ url($url) }}</loc>
            <lastmod>{{ date('Y-m-d') }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>{{ $url === '/' ? '1.0' : '0.8' }}</priority>
        </url>
    @endforeach

    @foreach ($articles as $article)
        <url>
            <loc>{{ route('articles.show', $article->slug) }}</loc>
            <lastmod>{{ $article->updated_at ? $article->updated_at->format('Y-m-d') : date('Y-m-d') }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>
