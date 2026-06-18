<x-layout title="Detail Menu | Kopikita">
    @push('styles')
    <style>
        .product-content ul { list-style-type: disc; padding-left: 1.5rem; margin-top: 0.5rem; margin-bottom: 0.5rem; }
        .product-content ol { list-style-type: decimal; padding-left: 1.5rem; margin-top: 0.5rem; margin-bottom: 0.5rem; }
        .product-content p { margin-bottom: 0.5rem; }
        .product-content h2, .product-content h3 { font-weight: bold; margin-top: 1.5rem; margin-bottom: 0.5rem; color: #2a1e16; }
        .product-content h2 { font-size: 1.5rem; }
        .product-content h3 { font-size: 1.25rem; }
        .product-content a { color: #6F4E37; text-decoration: underline; }
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
<img alt="{{ $product->name }}" decoding="async" class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" src="{{ $product->image ? asset('storage/' . $product->image) : asset($product->category === 'Biji Kopi' ? 'images/produk-biji.jpg' : 'images/produk-alat.jpg') }}"/>
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
                        Tanya / Pesan Produk Ini
                    </a>
</div>
</div>
</section>
<!-- Keunggulan Section -->
<section class="mt-xl py-xl border-t border-outline-variant/30">
<div class="text-center mb-lg reveal-on-scroll" data-delay="100">
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-xs">Kenapa Kopikita?</h2>
<div class="h-1 w-20 bg-primary mx-auto rounded-full"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-md">
<!-- Keunggulan 1 -->
<div class="p-lg rounded-xl bg-surface-container-lowest border border-outline-variant/20 hover:border-primary/30 transition-all group reveal-on-scroll" data-delay="100">
<div class="w-12 h-12 rounded-lg bg-primary-container/10 flex items-center justify-center mb-md group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-primary text-[32px]">coffee</span>
</div>
<h4 class="font-headline-md text-headline-md text-on-surface mb-sm">Biji Segar</h4>
<p class="font-body-md text-body-md text-on-surface-variant">Biji arabika lokal yang dipanggang fresh setiap minggu agar aromanya selalu terjaga.</p>
</div>
<!-- Keunggulan 2 -->
<div class="p-lg rounded-xl bg-surface-container-lowest border border-outline-variant/20 hover:border-primary/30 transition-all group reveal-on-scroll" data-delay="200">
<div class="w-12 h-12 rounded-lg bg-primary-container/10 flex items-center justify-center mb-md group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-primary text-[32px]">verified</span>
</div>
<h4 class="font-headline-md text-headline-md text-on-surface mb-sm">Rasa Konsisten</h4>
<p class="font-body-md text-body-md text-on-surface-variant">Takaran yang presisi memastikan setiap cangkir punya rasa yang sama enaknya.</p>
</div>
<!-- Keunggulan 3 -->
<div class="p-lg rounded-xl bg-surface-container-lowest border border-outline-variant/20 hover:border-primary/30 transition-all group reveal-on-scroll" data-delay="300">
<div class="w-12 h-12 rounded-lg bg-primary-container/10 flex items-center justify-center mb-md group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-primary text-[32px]">payments</span>
</div>
<h4 class="font-headline-md text-headline-md text-on-surface mb-sm">Harga Ramah</h4>
<p class="font-body-md text-body-md text-on-surface-variant">Kopi berkualitas dengan harga yang bersahabat untuk dinikmati setiap hari.</p>
</div>
</div>
</section>
</main>
</x-layout>
