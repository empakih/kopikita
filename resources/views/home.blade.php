<x-layout title="Beranda | Kopikita">

    <main class="pt-[80px]"> <!-- Offset for fixed nav -->

    <!-- 1. Hero Section (statis) -->
    <section class="w-full h-[calc(100vh-80px)] min-h-[520px] relative overflow-hidden">
        <img alt="Biji kopi dan alat seduh Kopikita" fetchpriority="high" decoding="async" class="absolute inset-0 w-full h-full object-cover" src="{{ asset('images/hero.jpg') }}"/>
        <div class="absolute inset-0 bg-gradient-to-r from-deep-forest/65 via-deep-forest/35 to-deep-forest/20"></div>
        <div class="relative z-10 h-full max-w-container-max mx-auto px-gutter flex items-center">
            <div class="max-w-[34rem] text-white reveal-on-scroll">
                <span class="bg-primary text-white px-5 py-1.5 rounded-full font-label-md text-label-md mb-6 inline-block shadow-sm">Toko Kopi & Alat Seduh</span>
                <h1 class="font-headline-xl text-headline-xl mb-4 leading-tight" style="text-shadow: 0 2px 14px rgba(0,0,0,0.5)">Biji Kopi & Alat Seduh Pilihan, Langsung ke Rumahmu</h1>
                <p class="font-body-lg text-body-lg text-white/90 mb-8" style="text-shadow: 0 1px 10px rgba(0,0,0,0.5)">Dari biji arabika lokal sampai alat seduh manual — semua yang kamu butuhkan untuk ngopi enak di rumah ada di Kopikita.</p>
                <a href="{{ route('katalog') }}" class="inline-flex items-center gap-2 bg-primary text-on-primary px-xl py-3 rounded-lg font-label-lg text-label-lg hover:bg-deep-forest transition-all shadow-md">
                    Belanja Sekarang <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 2. Produk Terlaris -->
    <section class="py-xl bg-surface-container-high relative overflow-hidden" id="produk">
        <span class="absolute top-0 left-1/2 -translate-x-1/2 text-[18rem] text-primary/5 font-black pointer-events-none select-none tracking-tighter leading-none hidden lg:block whitespace-nowrap z-0">KOPI</span>

        <div class="max-w-container-max mx-auto px-gutter relative z-10">
            <div class="text-center mb-lg reveal-on-scroll relative z-10">
                <h2 class="font-headline-xl text-headline-xl text-on-surface mb-xs hidden md:block">Produk Terlaris</h2>
                <h2 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface mb-xs md:hidden">Produk Terlaris</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl mx-auto">Pilihan biji dan alat yang paling banyak diburu pelanggan Kopikita.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-md">
                @forelse($products as $index => $product)
                <div class="bg-white rounded-xl overflow-hidden border border-glass-border flex flex-col hover:shadow-lg transition-all duration-300 group reveal-on-scroll" data-delay="{{ ($index + 1) * 100 }}">
                    <div class="h-64 overflow-hidden bg-surface-container-low flex items-center justify-center p-sm">
                        <img alt="{{ $product->name }}" loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="{{ $product->image ? asset('storage/' . $product->image) : asset($product->category === 'Biji Kopi' ? 'images/produk-biji.jpg' : 'images/produk-alat.jpg') }}"/>
                    </div>
                    <div class="p-md flex flex-col flex-grow">
                        <h3 class="font-headline-md text-headline-md text-on-surface mb-xs">{{ $product->name }}</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-md flex-grow text-justify">{{ $product->description }}</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="font-label-lg text-label-lg text-primary">{{ $product->formatted_price }}</span>
                            <a class="bg-primary-container text-on-primary-container px-sm py-2 rounded-lg font-label-lg text-label-lg hover:bg-primary hover:text-on-primary transition-colors" href="{{ route('product-detail', $product->id) }}">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center text-on-surface-variant py-10">
                    <p>Belum ada produk.</p>
                </div>
                @endforelse
            </div>
            <div class="flex justify-center mt-lg"><a class="inline-flex items-center gap-2 bg-primary text-on-primary px-xl py-3 rounded-lg font-label-lg text-label-lg hover:bg-deep-forest transition-all shadow-md" href="{{ route('katalog') }}">Lihat Semua Produk <span class="material-symbols-outlined">arrow_forward</span></a></div>
        </div>
    </section>

    <!-- 3. Tentang Kami -->
    <section class="py-xl bg-surface-bright relative overflow-hidden" id="tentang-kami">
        <span class="absolute top-20 -left-10 text-[18rem] text-primary/5 font-black pointer-events-none select-none tracking-tighter leading-none hidden lg:block z-0">ABOUT</span>

        <div class="max-w-container-max mx-auto px-gutter relative z-10">
            <div class="text-center max-w-4xl mx-auto mb-16 reveal-on-scroll relative z-10">
                <span class="bg-primary text-white px-5 py-1.5 rounded-full font-label-md text-label-md mb-6 inline-block shadow-sm">Tentang Kami</span>
                <h2 class="font-headline-xl text-headline-xl text-primary mb-4">Teman Belanja Kebutuhan Ngopimu</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant">Kopikita adalah toko yang menyediakan biji kopi dan peralatan seduh pilihan. Kami bantu kamu menemukan biji dan alat yang pas, biar ngopi di rumah jadi semudah dan seenak di kafe.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="flex flex-col gap-10 reveal-on-scroll" data-delay="200">
                    <div class="flex gap-5 items-start">
                        <div class="flex-shrink-0 w-14 h-14 bg-primary rounded-xl flex items-center justify-center text-white shadow-lg shadow-primary/30">
                            <span class="material-symbols-outlined text-3xl">coffee</span>
                        </div>
                        <div>
                            <h3 class="font-headline-md text-headline-md text-primary mb-1 font-bold">Biji Segar & Berkualitas</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">Biji arabika & robusta lokal yang dipanggang fresh, dikemas rapi sebelum dikirim.</p>
                        </div>
                    </div>
                    <div class="flex gap-5 items-start">
                        <div class="flex-shrink-0 w-14 h-14 bg-primary rounded-xl flex items-center justify-center text-white shadow-lg shadow-primary/30">
                            <span class="material-symbols-outlined text-3xl">blender</span>
                        </div>
                        <div>
                            <h3 class="font-headline-md text-headline-md text-primary mb-1 font-bold">Alat Seduh Lengkap</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">Dari V60, French Press, sampai grinder — semua kebutuhan seduh ada di satu tempat.</p>
                        </div>
                    </div>
                    <div class="flex gap-5 items-start">
                        <div class="flex-shrink-0 w-14 h-14 bg-primary rounded-xl flex items-center justify-center text-white shadow-lg shadow-primary/30">
                            <span class="material-symbols-outlined text-3xl">local_shipping</span>
                        </div>
                        <div>
                            <h3 class="font-headline-md text-headline-md text-primary mb-1 font-bold">Dikirim ke Seluruh Indonesia</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">Pesananmu dikemas aman dan dikirim ke mana saja kamu berada.</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-3xl overflow-hidden shadow-2xl relative border-[6px] border-white/50 reveal-on-scroll" data-delay="400">
                    <img alt="Biji kopi dan alat seduh" loading="lazy" decoding="async" class="w-full h-auto object-cover aspect-[4/3] hover:scale-[1.03] transition-transform duration-700" src="{{ asset('images/about.jpg') }}"/>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Artikel Terbaru -->
    <section class="py-xl bg-surface-container-high" id="artikel">
        <div class="max-w-container-max mx-auto px-gutter">
            <div class="flex justify-between items-end mb-lg reveal-on-scroll">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface hidden md:block">Cerita & Tips Seputar Kopi</h2>
                    <h2 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface md:hidden">Cerita & Tips Seputar Kopi</h2>
                </div>
                <a class="hidden md:inline-flex items-center gap-1 text-primary font-label-lg text-label-lg hover:underline" href="{{ route('artikel') }}">
                    Lihat Semua <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-md">
                @forelse($articles as $index => $article)
                <article class="bg-white rounded-xl overflow-hidden border border-glass-border flex flex-col h-full hover:shadow-lg transition-shadow duration-300 reveal-on-scroll" data-delay="{{ ($index + 1) * 100 }}">
                    <div class="h-48 relative overflow-hidden">
                        <img alt="{{ $article->title }}" loading="lazy" decoding="async" class="w-full h-full object-cover" src="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : asset('images/artikel.jpg') }}"/>
                        <div class="absolute top-4 left-4">
                            <span class="bg-white/90 backdrop-blur-md text-primary px-3 py-1 rounded-full text-label-sm font-label-sm shadow-sm">{{ $article->category ?? 'Artikel' }}</span>
                        </div>
                    </div>
                    <div class="p-md flex-grow flex flex-col">
                        <div class="text-outline font-label-sm text-label-sm mb-xs">{{ \Carbon\Carbon::parse($article->published_at ?? $article->created_at)->translatedFormat('d M Y') }}</div>
                        <h3 class="font-headline-md text-headline-md text-on-surface mb-sm line-clamp-2">{{ $article->title }}</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-md flex-grow line-clamp-2">{{ strip_tags($article->content) }}</p>
                        <a class="inline-flex items-center gap-1 text-primary font-label-lg text-label-lg hover:text-primary-container transition-colors mt-auto" href="{{ route('artikel.detail', $article->slug) }}">
                            Baca Selengkapnya <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                </article>
                @empty
                <div class="col-span-full text-center text-on-surface-variant py-10">
                    <p>Belum ada artikel.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- 5. Contact CTA -->
    <section class="py-xl bg-surface-bright relative overflow-hidden" id="kontak">
        <div class="max-w-container-max mx-auto px-gutter relative z-10">
            <div class="bg-gradient-to-br from-deep-forest to-primary rounded-3xl p-lg md:p-2xl shadow-xl border border-glass-border/30 relative overflow-hidden reveal-on-scroll" data-delay="100">
                <div class="absolute -right-16 -top-16 w-64 h-64 rounded-full bg-white/5 blur-2xl pointer-events-none"></div>
                <div class="absolute -left-16 -bottom-16 w-64 h-64 rounded-full bg-amber-300/10 blur-2xl pointer-events-none"></div>

                <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-lg text-center lg:text-left">
                    <div class="max-w-2xl">
                        <h2 class="font-headline-xl text-headline-xl text-white mb-sm">Mau Belanja atau Tanya Stok?</h2>
                        <p class="font-body-lg text-body-lg text-white/85">
                            Hubungi kami untuk pemesanan, tanya ketersediaan biji, atau rekomendasi alat seduh yang pas buat kamu. Kami siap bantu!
                        </p>
                    </div>
                    <div class="shrink-0">
                        <a href="{{ route('konsultasi') }}" class="inline-flex items-center gap-3 bg-white text-primary px-8 py-4 rounded-full font-headline-md text-headline-md hover:bg-amber-50 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 group">
                            Hubungi Kami
                            <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

</x-layout>
