<x-layout title="Katalog Produk | Smartani">
    @push('styles')
        <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-header {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(80, 200, 120, 0.15);
        }
        .product-card-gradient {
            background: linear-gradient(180deg, #ffffff 0%, #f0f9f4 100%);
        }
        .custom-shadow {
            box-shadow: 0 20px 40px rgba(80, 200, 120, 0.08);
        }
    </style>
    @endpush

    <main class="pt-32 pb-xl">
<!-- Hero Section -->
<section class="max-w-container-max mx-auto px-gutter mb-xl reveal-on-scroll" data-delay="100">
<div class="flex flex-col items-center text-center max-w-3xl mx-auto">
<span class="bg-primary/10 text-primary px-4 py-1 rounded-full font-label-sm text-label-sm mb-4 uppercase tracking-wider">Katalog Produk 2024</span>
<h1 class="font-headline-xl text-headline-xl md:text-headline-xl text-on-surface mb-6">
                    Inovasi <span class="text-primary">Presisi</span> Untuk Pertanian Masa Depan
                </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">
                    Temukan rangkaian perangkat keras dan lunak AI-driven yang dirancang untuk mengoptimalkan hasil panen, efisiensi sumber daya, dan keberlanjutan ekosistem tani Anda.
                </p>
</div>
</section>
<!-- Category Filter -->
<section class="max-w-container-max mx-auto px-gutter mb-lg reveal-on-scroll" data-delay="200">
    <div class="flex flex-wrap gap-xs items-center border-b border-outline-variant/30 pb-base">
        <a href="{{ route('katalog') }}" class="px-md py-sm font-label-lg text-label-lg transition-colors {{ !$category || $category == 'Semua' ? 'text-primary border-b-2 border-primary' : 'text-on-surface-variant hover:text-primary' }}">Semua</a>
        @foreach($categories as $cat)
        <a href="{{ route('katalog', ['category' => $cat]) }}" class="px-md py-sm font-label-lg text-label-lg transition-colors {{ $category == $cat ? 'text-primary border-b-2 border-primary' : 'text-on-surface-variant hover:text-primary' }}">{{ $cat }}</a>
        @endforeach
    </div>
</section>

<!-- Product Grid -->
<section class="max-w-container-max mx-auto px-gutter">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-lg">
    @forelse($products as $index => $product)
    <div class="product-card-gradient border border-glass-border rounded-xl overflow-hidden group hover:custom-shadow transition-all duration-300 flex flex-col h-full reveal-on-scroll" data-delay="{{ ($index % 3 + 1) * 100 }}">
        <div class="h-64 overflow-hidden relative flex-shrink-0">
            @php
                $fallbackImages = [
                    'Paket'    => 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?auto=format&fit=crop&w=800&q=80',
                    'Hardware' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80',
                    'Software' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80',
                    'default'  => 'https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?auto=format&fit=crop&w=800&q=80',
                ];
                $imgSrc = $product->image
                    ? asset('storage/' . $product->image)
                    : ($fallbackImages[$product->category] ?? $fallbackImages['default']);
            @endphp
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="{{ $product->name }}" src="{{ $imgSrc }}"/>
            @if($product->category)
            <div class="absolute top-4 left-4">
                <span class="bg-white/90 backdrop-blur-md text-primary px-3 py-1 rounded-full text-label-sm font-label-sm shadow-sm">{{ $product->category }}</span>
            </div>
            @endif
        </div>
        <div class="p-md flex flex-col flex-grow">
            <h3 class="font-headline-md text-headline-md text-on-surface mb-xs">{{ $product->name }}</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant mb-md flex-grow text-justify line-clamp-2">
                {{ $product->description }}
            </p>
            <div class="flex justify-between items-center mt-auto">
                <span class="font-label-lg text-label-lg text-primary">{{ $product->price_label ?? 'Rp ' . number_format($product->price, 0, ',', '.') }}</span>
                <a class="bg-primary-container text-on-primary-container px-sm py-2 rounded-lg font-label-lg text-label-lg hover:bg-primary hover:text-on-primary transition-colors" href="{{ route('product-detail', $product->id) }}">Lihat Detail</a>
            </div>
        </div>
    </div>
    @empty
    <div class="col-span-full text-center text-on-surface-variant py-10">
        <p>Belum ada produk dalam katalog.</p>
    </div>
    @endforelse

<!-- CTA Banner -->
<div class="col-span-full bg-deep-forest rounded-2xl p-lg md:p-xl flex flex-col md:flex-row justify-between items-center text-center md:text-left text-white relative overflow-hidden gap-lg mt-md shadow-2xl shadow-deep-forest/20 reveal-on-scroll" data-delay="100">
    <div class="absolute inset-0 opacity-10">
        <svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern height="40" id="grid" patternunits="userSpaceOnUse" width="40">
                    <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1"></path>
                </pattern>
            </defs>
            <rect fill="url(#grid)" height="100%" width="100%"></rect>
        </svg>
    </div>
    <div class="relative z-10 flex flex-col md:flex-row items-center md:items-start gap-md">
        <div class="w-16 h-16 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
            <span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1;">agriculture</span>
        </div>
        <div>
            <h3 class="font-headline-lg text-headline-lg mb-2">Butuh Solusi Kustom Skala Besar?</h3>
            <p class="font-body-md text-body-md opacity-80 max-w-2xl">Kami melayani instalasi infrastruktur pertanian pintar untuk lahan korporasi (B2B) dan program pemerintah. Dapatkan rancangan teknologi yang disesuaikan khusus dengan kontur dan iklim lahan Anda.</p>
        </div>
    </div>
    <a href="{{ route('konsultasi') }}" class="inline-flex justify-center items-center gap-2 bg-primary-container text-on-primary-container px-8 py-4 rounded-xl font-label-lg text-label-lg relative z-10 hover:brightness-110 transition-all flex-shrink-0">
        <span class="material-symbols-outlined text-[20px]">calendar_month</span>
        Jadwalkan Konsultasi
    </a>
</div>
</div>
<!-- Pagination -->
<div class="mt-xl flex justify-center items-center gap-sm">
    {{ $products->links() }}
</div>
</section>

@if($faqs->isNotEmpty())
<!-- FAQ Section -->
<section class="py-xl bg-surface-container-low border-t border-outline-variant/30 mt-24 relative">
    <!-- Background glows -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-[80px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-secondary/5 rounded-full blur-[80px] pointer-events-none"></div>
    
    <div class="max-w-4xl mx-auto px-gutter relative z-10">
        <div class="text-center mb-12 reveal-on-scroll" data-delay="100">
            <div class="w-16 h-16 rounded-2xl bg-white border border-glass-border shadow-md flex items-center justify-center mx-auto mb-6 text-primary">
                <span class="material-symbols-outlined text-3xl">psychology_alt</span>
            </div>
            <h2 class="font-headline-xl text-headline-xl text-on-surface mb-xs">Pertanyaan Seputar <span class="text-primary">Produk</span></h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">Temukan jawaban cepat untuk berbagai pertanyaan yang paling sering diajukan oleh pelanggan kami.</p>
        </div>
        
        <div class="space-y-6">
            @foreach($faqs as $index => $faq)
            <div class="accordion-item bg-white/70 backdrop-blur-xl border border-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] rounded-3xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:bg-white group reveal-on-scroll" data-delay="{{ ($index + 1) * 100 }}">
                <button class="w-full px-6 lg:px-8 py-6 text-left flex justify-between items-center focus:outline-none cursor-pointer" onclick="this.parentElement.classList.toggle('active')">
                    <span class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors pr-6">{{ $faq->question }}</span>
                    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-surface-container flex items-center justify-center text-primary border border-primary/10 group-hover:bg-primary group-hover:text-white transition-all duration-300 shadow-sm">
                        <span class="material-symbols-outlined accordion-icon transition-transform duration-500">expand_more</span>
                    </div>
                </button>
                <div class="accordion-content px-6 lg:px-8 pb-8 pt-0 text-on-surface-variant font-body-lg text-body-lg leading-relaxed">
                    <div class="pt-6 border-t border-glass-border">
                        {!! nl2br(e($faq->answer)) !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- Newsletter sudah ada di footer global (layout.blade.php) --}}
</main>

    @push('scripts')
        <script>
        // Micro-interactions
        document.querySelectorAll('.group').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('custom-shadow');
            });
            card.addEventListener('mouseleave', () => {
                card.classList.remove('custom-shadow');
            });
        });

        // Sticky Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('nav');
            if (window.scrollY > 50) {
                header.classList.add('shadow-md');
                header.classList.replace('py-4', 'py-2');
            } else {
                header.classList.remove('shadow-md');
                header.classList.replace('py-2', 'py-4');
            }
        });
    </script>
    @endpush
</x-layout>
