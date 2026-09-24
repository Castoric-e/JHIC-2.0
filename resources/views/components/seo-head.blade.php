@props([
    'title' => "IDN Boarding School - Menghafal Al-Qur'an, Membangun Teknologi",
    'description' => "IDN Boarding School adalah Sekolah SMP & SMA IT Terbaik di Bogor yang berfokus pada Menghafal Al-Qur'an dan Penguasaan Teknologi (IT), Coding, Cyber Security, dan UI/UX.",
    'keywords' => "IDN Boarding School, Sekolah IT Bogor, SMP IT Bogor, SMA IT Terbaik, Boarding School Tahfizh, Sekolah Coding, PPDB IDN",
    'image' => asset('assets/logos/logo_idn.png'),
    'type' => "website",
    'article' => null
])

<!-- Primary Meta Tags -->
<title>{{ $title }}</title>
<meta name="title" content="{{ $title }}">
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $keywords }}">
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ url()->current() }}">

<!-- Open Graph / Facebook / WhatsApp -->
<meta property="og:type" content="{{ $article ? 'article' : $type }}">
<meta property="og:site_name" content="IDN Boarding School">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $image }}">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $image }}">

<!-- JSON-LD Structured Data for Educational Organization -->
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'EducationalOrganization',
    'name' => 'IDN Boarding School',
    'url' => url('/'),
    'logo' => asset('assets/logos/logo_idn.png'),
    'description' => "Sekolah SMP & SMA IT Terbaik di Bogor yang berfokus pada Menghafal Al-Qur'an dan Penguasaan Teknologi (IT).",
    'address' => [
        '@type' => 'PostalAddress',
        'addressLocality' => 'Bogor',
        'addressRegion' => 'Jawa Barat',
        'addressCountry' => 'ID'
    ],
    'sameAs' => [
        'https://www.instagram.com/idnboardingschool',
        'https://www.youtube.com/@idnboardingschool'
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>

@if ($article)
<!-- JSON-LD Structured Data for News Article -->
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'NewsArticle',
    'mainEntityOfPage' => [
        '@type' => 'WebPage',
        '@id' => url()->current()
    ],
    'headline' => $title,
    'image' => [
        $image
    ],
    'datePublished' => (string) ($article->published_at ?? $article->created_at),
    'dateModified' => (string) $article->updated_at,
    'author' => [
        '@type' => 'Organization',
        'name' => 'IDN Boarding School'
    ],
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'IDN Boarding School',
        'logo' => [
            '@type' => 'ImageObject',
            'url' => asset('assets/logos/logo_idn.png')
        ]
    ],
    'description' => $description
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endif

<!-- Tailwind CSS v4 Fallback Script for Production/Railway -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
