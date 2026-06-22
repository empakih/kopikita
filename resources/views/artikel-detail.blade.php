<x-layout :title="($article->meta_title ?: $article->title) . ' | Kopikita'">
    @push('head')
        <meta name="description" content="{{ $article->meta_description ?: Str::limit(strip_tags($article->content), 155) }}"/>
    @endpush
    <div id="read-progress" class="fixed top-0 left-0 h-1 bg-primary z-[60] transition-all duration-100 ease-out" style="width:0"></div>
    <main class="pt-20">
<!-- Hero Section -->
<header class="w-full bg-surface-container-lowest">
<div class="max-w-container-max mx-auto px-gutter pt-xl pb-lg">
<div class="max-w-4xl mx-auto flex flex-col gap-sm reveal-on-scroll" data-delay="100">
@if($article->category)
<span class="inline-flex items-center px-sm py-1 rounded-full bg-primary-container/10 text-primary font-label-lg text-label-lg w-fit">
    {{ $article->category }}
</span>
@endif
<h1 class="font-headline-xl text-headline-xl text-on-background leading-tight">
    {{ $article->title }}
</h1>
<div class="flex items-center gap-md mt-xs border-t border-outline-variant/30 pt-sm">
<div class="flex items-center gap-xs">
<div class="w-10 h-10 rounded-full bg-surface-dim overflow-hidden flex items-center justify-center text-primary font-bold">
    {{ strtoupper(substr($article->author ?? 'Admin', 0, 1)) }}
</div>
<div>
<p class="font-label-lg text-label-lg text-on-surface">{{ $article->author ?? 'Tim Kopikita' }}</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Penulis</p>
</div>
</div>
<div class="h-8 w-px bg-outline-variant/50"></div>
<div class="flex items-center gap-xs text-on-surface-variant">
<span class="material-symbols-outlined text-body-md">calendar_today</span>
<span class="font-body-sm text-body-sm">{{ \Carbon\Carbon::parse($article->published_at ?? $article->created_at)->translatedFormat('d F Y') }}</span>
</div>
</div>
</div>
</div>
<div class="max-w-container-max mx-auto px-gutter">
<div class="aspect-[21/9] w-full rounded-xl overflow-hidden shadow-xl shadow-primary/5 reveal-on-scroll" data-delay="200">
<img alt="{{ $article->title }}" class="w-full h-full object-cover" loading="lazy" decoding="async" src="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : asset('images/artikel.jpg') }}"/>
</div>
</div>
</header>
<!-- Article Content -->
<article class="max-w-container-max mx-auto px-gutter py-xl reveal-on-scroll" data-delay="300">
<div class="max-w-3xl mx-auto flex flex-col gap-lg prose prose-green max-w-none">
    {!! $article->content !!}
</div>
</article>
<!-- Artikel Terkait -->
@if($relatedArticles->isNotEmpty())
<section class="bg-surface-bright py-xl">
<div class="max-w-container-max mx-auto px-gutter">
<div class="flex justify-between items-end mb-lg reveal-on-scroll" data-delay="100">
<div>
<h2 class="font-headline-lg text-headline-lg text-on-surface">Artikel Terkait</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Cerita &amp; tips kopi lainnya buat kamu</p>
</div>
<a class="text-primary font-label-lg text-label-lg flex items-center gap-xs hover:gap-sm transition-all" href="{{ route('artikel') }}">
    Lihat Semua Artikel <span class="material-symbols-outlined">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
    @foreach($relatedArticles as $index => $related)
    <div class="group bg-surface-container-lowest rounded-xl overflow-hidden border border-outline-variant/20 hover:border-primary/30 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5 cursor-pointer reveal-on-scroll" data-delay="{{ ($index + 1) * 100 }}" onclick="window.location.href='{{ route('artikel.detail', $related->slug) }}'">
        <div class="aspect-video overflow-hidden relative">
            <img alt="{{ $related->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" decoding="async" src="{{ $related->thumbnail ? asset('storage/' . $related->thumbnail) : asset('images/artikel.jpg') }}"/>
            @if($related->category)
            <div class="absolute top-4 left-4">
                <span class="bg-white/90 backdrop-blur-md text-primary px-3 py-1 rounded-full text-label-sm font-label-sm shadow-sm">{{ $related->category }}</span>
            </div>
            @endif
        </div>
        <div class="p-md flex flex-col gap-xs">
            <h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary transition-colors line-clamp-2">{{ $related->title }}</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2">{{ Str::limit(strip_tags($related->content), 100) }}</p>
        </div>
    </div>
    @endforeach
</div>
</div>
</section>
@endif
</main>

    @push('scripts')
        <script>
        // Progress bar baca artikel (didaftarkan sekali, aman terhadap navigasi Turbo).
        if (!window.__articleProgress) {
            window.__articleProgress = true;
            window.addEventListener('scroll', () => {
                const bar = document.getElementById('read-progress');
                if (!bar) return;
                const h = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                bar.style.width = (h > 0 ? (window.scrollY / h) * 100 : 0) + '%';
            });
        }
        </script>
    @endpush
</x-layout>
