<x-layout title="Produk | Kopikita">
    @push('styles')
        <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .product-card-gradient {
            background: linear-gradient(180deg, #ffffff 0%, #faf6f0 100%);
        }
        .custom-shadow {
            box-shadow: 0 20px 40px rgba(111, 78, 55, 0.10);
        }
        </style>
    @endpush

    <main class="pt-32 pb-xl">
<!-- Hero Section -->
<section class="max-w-container-max mx-auto px-gutter mb-xl reveal-on-scroll" data-delay="100">
<div class="flex flex-col items-center text-center max-w-3xl mx-auto">
<span class="bg-primary/10 text-primary px-4 py-1 rounded-full font-label-sm text-label-sm mb-4 uppercase tracking-wider">Produk Kopikita</span>
<h1 class="font-headline-xl text-headline-xl md:text-headline-xl text-on-surface mb-6">
                    Biji & <span class="text-primary">Alat Seduh</span> untuk Ngopi di Rumah
                </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">
                    Dari biji single origin sampai grinder dan alat seduh manual — pilih yang sesuai kebutuhanmu, kami kirim sampai rumah.
                </p>
</div>
</section>
<!-- Category Filter (client-side, tanpa reload) -->
<section class="max-w-container-max mx-auto px-gutter mb-lg reveal-on-scroll" data-delay="200">
    <div class="flex flex-wrap gap-xs items-center border-b border-outline-variant/30 pb-base" id="product-filters" data-filter-items="#product-grid .product-item" data-filter-empty="#empty-filter">
        <button type="button" data-category="Semua" class="filter-btn active cursor-pointer px-md py-sm font-label-lg text-label-lg transition-colors text-primary border-b-2 border-primary">Semua</button>
        @foreach($categories as $cat)
        <button type="button" data-category="{{ $cat }}" class="filter-btn cursor-pointer px-md py-sm font-label-lg text-label-lg transition-colors text-on-surface-variant hover:text-primary">{{ $cat }}</button>
        @endforeach
    </div>
</section>

<!-- Product Grid -->
<section class="max-w-container-max mx-auto px-gutter">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-lg" id="product-grid">
    @forelse($products as $index => $product)
    <div class="product-item reveal-on-scroll product-card-gradient border border-glass-border rounded-xl overflow-hidden group hover:custom-shadow transition-all duration-300 flex flex-col h-full" data-category="{{ $product->category }}" data-delay="{{ ($index % 3 + 1) * 100 }}">
        <div class="h-64 overflow-hidden relative flex-shrink-0">
            @php
                // Gambar produk dari folder lokal. Kalau belum ada gambar khusus,
                // pakai gambar default sesuai kategori (biji vs alat).
                $fallback = $product->category === 'Biji Kopi' ? 'images/produk-biji.jpg' : 'images/produk-alat.jpg';
                $imgSrc = $product->image ? asset('storage/' . $product->image) : asset($fallback);
            @endphp
            <img loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="{{ $product->name }}" src="{{ $imgSrc }}"/>
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
                <span class="font-label-lg text-label-lg text-primary">{{ $product->formatted_price }}</span>
                <a class="bg-primary-container text-on-primary-container px-sm py-2 rounded-lg font-label-lg text-label-lg hover:bg-primary hover:text-on-primary transition-colors" href="{{ route('product-detail', $product->id) }}">Lihat Detail</a>
            </div>
        </div>
    </div>
    @empty
    <div class="col-span-full text-center text-on-surface-variant py-10">
        <p>Belum ada produk dalam katalog.</p>
    </div>
    @endforelse
    </div>

    <!-- Pesan saat hasil filter kosong -->
    <div id="empty-filter" class="hidden text-center text-on-surface-variant py-16">
        <span class="material-symbols-outlined text-5xl mb-2">search_off</span>
        <p class="font-body-lg text-body-lg">Belum ada produk di kategori ini.</p>
    </div>

    <!-- CTA Banner -->
    <div class="bg-deep-forest rounded-2xl p-lg md:p-xl flex flex-col md:flex-row justify-between items-center text-center md:text-left text-white relative overflow-hidden gap-lg mt-xl shadow-2xl shadow-deep-forest/20 reveal-on-scroll" data-delay="100">
        <div class="relative z-10 flex flex-col md:flex-row items-center md:items-start gap-md">
            <div class="w-16 h-16 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
                <span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1;">local_cafe</span>
            </div>
            <div>
                <h3 class="font-headline-lg text-headline-lg mb-2">Beli Grosir atau untuk Kedai?</h3>
                <p class="font-body-md text-body-md opacity-80 max-w-2xl">Kami melayani pembelian biji dan alat dalam jumlah banyak untuk kedai, kantor, atau reseller. Hubungi kami untuk harga grosir spesial.</p>
            </div>
        </div>
        <a href="{{ route('konsultasi') }}" class="inline-flex justify-center items-center gap-2 bg-primary-container text-on-primary-container px-8 py-4 rounded-xl font-label-lg text-label-lg relative z-10 hover:brightness-110 transition-all flex-shrink-0">
            <span class="material-symbols-outlined text-[20px]">chat</span>
            Hubungi Kami
        </a>
    </div>
</section>
</main>
</x-layout>
