<x-layout title="Detail Produk | Smartani">
    @push('styles')
    <style>
        .product-content ul { list-style-type: disc; padding-left: 1.5rem; margin-top: 0.5rem; margin-bottom: 0.5rem; }
        .product-content ol { list-style-type: decimal; padding-left: 1.5rem; margin-top: 0.5rem; margin-bottom: 0.5rem; }
        .product-content p { margin-bottom: 0.5rem; }
        .product-content h2, .product-content h3 { font-weight: bold; margin-top: 1.5rem; margin-bottom: 0.5rem; color: #1f2937; }
        .product-content h2 { font-size: 1.5rem; }
        .product-content h3 { font-size: 1.25rem; }
        .product-content a { color: #50C878; text-decoration: underline; }
    </style>
    @endpush
    <main class="pt-32 pb-xl px-gutter max-w-container-max mx-auto">
<!-- Breadcrumb -->
<nav class="flex items-center gap-xs mb-md text-on-surface-variant font-label-sm text-label-sm">
<span><a href="{{ route('katalog') }}" class="hover:text-primary transition-colors">Produk</a></span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
<span class="text-primary font-bold">{{ $product->name }}</span>
</nav>
<!-- Product Detail Section -->
<section class="grid grid-cols-1 md:grid-cols-2 gap-xl items-start">
<!-- Left: Product Image -->
<div class="relative group overflow-hidden rounded-xl bg-surface-container-lowest border border-outline-variant/30 shadow-sm reveal-on-scroll" data-delay="100">
<img alt="{{ $product->name }}" class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" src="{{ $product->image ? asset('storage/' . $product->image) : 'https://placehold.co/600x400/50C878/FFFFFF?text=' . urlencode($product->name) }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/5 to-transparent pointer-events-none"></div>
</div>
<!-- Right: Product Info -->
<div class="flex flex-col space-y-md reveal-on-scroll" data-delay="200">
<div>
@if($product->category)
<span class="bg-primary-container/10 text-primary px-xs py-1 rounded-full font-label-sm text-label-sm inline-block mb-sm">{{ $product->category }}</span>
@endif
<h1 class="font-headline-xl text-headline-xl text-on-surface leading-tight">{{ $product->name }}</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-sm">{{ $product->description }}</p>
</div>
<div class="py-md border-y border-outline-variant/30">
<div class="flex items-baseline gap-xs">
<span class="font-headline-md text-headline-md text-primary">{{ $product->price_label ?? 'Rp ' . number_format($product->price, 0, ',', '.') }}</span>
</div>
</div>
<div class="product-content text-on-surface-variant font-body-md text-body-md">
    {!! $product->content !!}
</div>
<div class="pt-md flex flex-col sm:flex-row gap-sm">
<a href="{{ route('konsultasi') }}" class="flex-1 bg-primary text-on-primary py-md rounded-lg font-label-lg text-label-lg flex justify-center items-center gap-sm hover:bg-deep-forest transition-all active:scale-[0.98] shadow-lg shadow-primary/20">
<span class="material-symbols-outlined">chat</span>
                        Hubungi Kami
                    </a>
</div>
</div>
</section>
<!-- Features Section -->
<section class="mt-xl py-xl border-t border-outline-variant/30">
<div class="text-center mb-lg reveal-on-scroll" data-delay="100">
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-xs">Keunggulan Smartani</h2>
<div class="h-1 w-20 bg-primary mx-auto rounded-full"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-md">
<!-- Feature 1 -->
<div class="p-lg rounded-xl bg-surface-container-lowest border border-outline-variant/20 hover:border-primary/30 transition-all group reveal-on-scroll" data-delay="100">
<div class="w-12 h-12 rounded-lg bg-primary-container/10 flex items-center justify-center mb-md group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-primary text-[32px]">sensors</span>
</div>
<h4 class="font-headline-md text-headline-md text-on-surface mb-sm">Akurasi Tinggi</h4>
<p class="font-body-md text-body-md text-on-surface-variant">Menggunakan sensor kelas industri dengan kalibrasi otomatis untuk data yang lebih valid.</p>
</div>
<!-- Feature 2 -->
<div class="p-lg rounded-xl bg-surface-container-lowest border border-outline-variant/20 hover:border-primary/30 transition-all group reveal-on-scroll" data-delay="200">
<div class="w-12 h-12 rounded-lg bg-primary-container/10 flex items-center justify-center mb-md group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-primary text-[32px]">cloud_sync</span>
</div>
<h4 class="font-headline-md text-headline-md text-on-surface mb-sm">Cloud Terintegrasi</h4>
<p class="font-body-md text-body-md text-on-surface-variant">Akses data kapan saja melalui dashboard web dan mobile yang user-friendly dan responsif.</p>
</div>
<!-- Feature 3 -->
<div class="p-lg rounded-xl bg-surface-container-lowest border border-outline-variant/20 hover:border-primary/30 transition-all group reveal-on-scroll" data-delay="300">
<div class="w-12 h-12 rounded-lg bg-primary-container/10 flex items-center justify-center mb-md group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-primary text-[32px]">energy_savings_leaf</span>
</div>
<h4 class="font-headline-md text-headline-md text-on-surface mb-sm">Efisiensi Energi</h4>
<p class="font-body-md text-body-md text-on-surface-variant">Sistem manajemen daya cerdas memastikan perangkat beroperasi tanpa perawatan bertahun-tahun.</p>
</div>
</div>
</section>
</main>

    @push('scripts')
        <script>
        document.addEventListener('turbo:load', () => {
            const productImg = document.querySelector('img[src="https://lh3.googleusercontent.com/aida/AP1WRLvA2FRHlm-1jVFhNtoBh9bRk1xvI1CMDV_6pWUp5fRVG19DDsnw-qPDTVCyR52kEKx74QnAwhD4xKKEHFRECSOOrEEdtvxzYY_KP7cXA-FO7MQ-WVa5gMsyocPIKnUSp3onACnNGv6bnW5VrJM2qiE0Z4Cf6mWANX8QK32k00BPvgoeDS4Jx_fjW8ZqeCXk0EHq0BJ59tsckRykqI-9uX5_lZxPTJYKhepe2DZK4slYvarCcZpau3TL5sY"]');
            if (productImg) {
                productImg.parentElement.addEventListener('mousemove', (e) => {
                    const rect = productImg.getBoundingClientRect();
                    const x = ((e.clientX - rect.left) / rect.width) * 100;
                    const y = ((e.clientY - rect.top) / rect.height) * 100;
                    productImg.style.transformOrigin = `${x}% ${y}%`;
                });
            }
        });
    </script>
    @endpush
</x-layout>
