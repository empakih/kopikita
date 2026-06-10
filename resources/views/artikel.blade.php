<x-layout title="Edukasi | Smartani">
    @push('styles')
        <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .glass-nav {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .card-hover-shadow {
            transition: all 0.3s ease;
        }
        .card-hover-shadow:hover {
            box-shadow: 0 20px 40px rgba(80, 200, 120, 0.08);
            transform: translateY(-4px);
        }
    </style>
    @endpush

    <main class="pt-32 pb-xl">
<!-- Hero Title Section -->
<section class="max-w-container-max mx-auto px-gutter mb-xl reveal-on-scroll" data-delay="100">
<div class="flex flex-col items-center text-center max-w-3xl mx-auto">
<span class="bg-primary/10 text-primary px-4 py-1 rounded-full font-label-sm text-label-sm mb-4 uppercase tracking-wider">Artikel Terbaru</span>
<h1 class="font-headline-xl text-headline-xl md:text-headline-xl text-on-surface mb-6">
    Wawasan &amp; Edukasi
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">
    Temukan panduan praktis, inovasi agroteknologi terbaru, dan praktik berkelanjutan untuk memajukan pertanian modern Anda.
</p>
</div>
</section>
<!-- Filter Navigation -->
<section class="max-w-container-max mx-auto px-gutter mb-lg reveal-on-scroll" data-delay="200">
<div class="flex flex-wrap gap-xs items-center border-b border-outline-variant/30 pb-base">
<a href="{{ route('artikel') }}" class="px-md py-sm font-label-lg text-label-lg transition-colors {{ !$category || $category == 'Semua' ? 'text-primary border-b-2 border-primary' : 'text-on-surface-variant hover:text-primary' }}">Semua</a>
@foreach($categories as $cat)
<a href="{{ route('artikel', ['category' => $cat]) }}" class="px-md py-sm font-label-lg text-label-lg transition-colors {{ $category == $cat ? 'text-primary border-b-2 border-primary' : 'text-on-surface-variant hover:text-primary' }}">{{ $cat }}</a>
@endforeach
</div>
</section>
<!-- Article Grid -->
<section class="max-w-container-max mx-auto px-gutter">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-md">
    @forelse($articles as $index => $article)
    <article class="bg-surface-container-lowest rounded-xl border border-outline-variant/20 overflow-hidden card-hover-shadow group flex flex-col h-full reveal-on-scroll" data-delay="{{ ($index % 3 + 1) * 100 }}">
        <div class="relative h-64 overflow-hidden">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="{{ $article->title }}" src="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : 'https://placehold.co/600x400/1E293B/50C878?text=' . urlencode($article->title) }}"/>
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
<!-- Pagination -->
<div class="mt-xl flex justify-center items-center gap-sm">
    {{ $articles->links() }}
</div>
</section>

<!-- FAQ Section -->
@if(isset($faqs) && count($faqs) > 0)
<section class="py-xl bg-surface-container-low border-t border-outline-variant/30 mt-24">
    <div class="max-w-container-max mx-auto px-gutter relative z-10">
        <div class="text-center mb-10 reveal-on-scroll" data-delay="100">
            <h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">FAQ Artikel & Publikasi</h2>
            <p class="font-body-md text-body-md text-on-surface-variant">Pertanyaan seputar artikel dan edukasi Smartani.</p>
        </div>
        <div class="max-w-3xl mx-auto space-y-4">
            @foreach($faqs as $index => $faq)
            <div class="accordion-item bg-white/70 backdrop-blur-xl border border-outline-variant/30 shadow-sm rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-md group reveal-on-scroll" data-delay="{{ ($index + 1) * 100 }}">
                <button class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none cursor-pointer" onclick="this.parentElement.classList.toggle('active')">
                    <span class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors pr-6">{{ $faq->question }}</span>
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary border border-outline-variant/20 group-hover:bg-primary group-hover:text-white transition-all duration-300">
                        <span class="material-symbols-outlined accordion-icon transition-transform duration-500" data-icon="expand_more">expand_more</span>
                    </div>
                </button>
                <div class="accordion-content px-6 pb-6 pt-0 text-on-surface-variant font-body-lg text-body-lg leading-relaxed">
                    <div class="pt-4 border-t border-outline-variant/20">
                        {!! nl2br(e($faq->answer)) !!}
                    </div>
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
        document.addEventListener('turbo:load', () => {
            // Simple micro-interaction for filter tabs
            const filterButtons = document.querySelectorAll('section button[class*="font-label-lg"]');
            filterButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterButtons.forEach(b => {
                        b.classList.remove('text-primary', 'border-b-2', 'border-primary');
                        b.classList.add('text-on-surface-variant');
                    });
                    btn.classList.remove('text-on-surface-variant');
                    btn.classList.add('text-primary', 'border-b-2', 'border-primary');
                });
            });

            // Sticky header opacity on scroll
            const scrollHandler = () => {
                const header = document.querySelector('header');
                if (header) {
                    if (window.scrollY > 20) {
                        header.classList.add('shadow-sm', 'shadow-primary/5');
                    } else {
                        header.classList.remove('shadow-sm', 'shadow-primary/5');
                    }
                }
            };
            window.removeEventListener('scroll', scrollHandler);
            window.addEventListener('scroll', scrollHandler);
        });
    </script>
    @endpush
</x-layout>
