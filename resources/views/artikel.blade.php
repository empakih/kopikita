<x-layout title="Artikel | Kopikita">
    @push('styles')
        <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .card-hover-shadow {
            transition: all 0.3s ease;
        }
        .card-hover-shadow:hover {
            box-shadow: 0 20px 40px rgba(111, 78, 55, 0.10);
            transform: translateY(-4px);
        }
        </style>
    @endpush

    <main class="pt-32 pb-xl">
<!-- Hero Title Section -->
<section class="max-w-container-max mx-auto px-gutter mb-xl reveal-on-scroll" data-delay="100">
<div class="flex flex-col items-center text-center max-w-3xl mx-auto">
<span class="bg-primary/10 text-primary px-4 py-1 rounded-full font-label-sm text-label-sm mb-4 uppercase tracking-wider">Blog Kopikita</span>
<h1 class="font-headline-xl text-headline-xl md:text-headline-xl text-on-surface mb-6">
    Cerita &amp; Tips Seputar Kopi
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">
    Mulai dari cara menyeduh di rumah, mengenal jenis biji, sampai resep favorit ala Kopikita.
</p>
</div>
</section>
<!-- Filter Navigation (client-side, tanpa reload) -->
<section class="max-w-container-max mx-auto px-gutter mb-lg reveal-on-scroll" data-delay="200">
<div class="flex flex-wrap gap-xs items-center border-b border-outline-variant/30 pb-base" id="article-filters" data-filter-items="#article-grid .article-item" data-filter-empty="#empty-filter">
<button type="button" data-category="Semua" class="filter-btn active cursor-pointer px-md py-sm font-label-lg text-label-lg transition-colors text-primary border-b-2 border-primary">Semua</button>
@foreach($categories as $cat)
<button type="button" data-category="{{ $cat }}" class="filter-btn cursor-pointer px-md py-sm font-label-lg text-label-lg transition-colors text-on-surface-variant hover:text-primary">{{ $cat }}</button>
@endforeach
</div>
</section>
<!-- Article Grid -->
<section class="max-w-container-max mx-auto px-gutter">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-md" id="article-grid">
    @forelse($articles as $index => $article)
    <article class="article-item reveal-on-scroll bg-surface-container-lowest rounded-xl border border-outline-variant/20 overflow-hidden card-hover-shadow group flex flex-col h-full" data-category="{{ $article->category }}" data-delay="{{ ($index % 3 + 1) * 100 }}">
        <div class="relative h-64 overflow-hidden">
            <img loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="{{ $article->title }}" src="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : asset('images/artikel.jpg') }}"/>
            @if($article->category)
            <div class="absolute top-4 left-4">
                <span class="bg-white/90 backdrop-blur-md text-primary px-3 py-1 rounded-full text-label-sm font-label-sm shadow-sm">{{ $article->category }}</span>
            </div>
            @endif
        </div>
        <div class="p-md flex flex-col flex-grow">
            <h3 class="font-headline-md text-headline-md text-on-surface mb-xs line-clamp-2">{{ $article->title }}</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant mb-md line-clamp-3">
                {{ Str::limit(strip_tags($article->content), 150) }}
            </p>
            <div class="mt-auto flex items-center justify-between">
                <a class="text-primary font-label-lg text-label-lg flex items-center gap-base group/link" href="{{ route('artikel.detail', $article->slug) }}">
                    Baca Selengkapnya
                    <span class="material-symbols-outlined text-[18px] group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
        </div>
    </article>
    @empty
    <div class="col-span-full text-center text-on-surface-variant py-10">
        <p>Belum ada artikel.</p>
    </div>
    @endforelse
</div>

<!-- Pesan saat hasil filter kosong -->
<div id="empty-filter" class="hidden text-center text-on-surface-variant py-16">
    <span class="material-symbols-outlined text-5xl mb-2">search_off</span>
    <p class="font-body-lg text-body-lg">Belum ada artikel di kategori ini.</p>
</div>
</section>

</main>
</x-layout>
