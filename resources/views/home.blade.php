<x-layout title="Beranda | Smartani">
    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    @endpush

    <main class="pt-[80px]"> <!-- Offset for fixed nav -->
<!-- 2. Hero Section (Swiper Slider) - Dikelola dari Admin (Hero Slider) -->
<section class="w-full h-[600px] relative">
<div class="swiper heroSwiper w-full h-full">
<div class="swiper-wrapper">
    @forelse($heroSlides as $slide)
    @php
        $heroSrc = \Illuminate\Support\Str::startsWith($slide->image, ['http://', 'https://'])
            ? $slide->image
            : asset('storage/' . $slide->image);
    @endphp
    <div class="swiper-slide w-full h-full">
        <img alt="{{ $slide->title ?? 'Smartani Greenhouse' }}" class="w-full h-full object-cover" src="{{ $heroSrc }}"/>
    </div>
    @empty
    <div class="swiper-slide w-full h-full">
        <img alt="Smartani Greenhouse" class="w-full h-full object-cover" src="https://plus.unsplash.com/premium_photo-1661963367713-b85abde75a23?auto=format&fit=crop&w=1600&q=80"/>
    </div>
    @endforelse
</div>
<div class="swiper-pagination"></div>
</div>
</section>
<!-- 3. Fitur Section -->
<section class="py-xl bg-surface-bright relative overflow-hidden" id="fitur">
    <div class="max-w-container-max mx-auto px-gutter text-center mb-xl relative z-10 reveal-on-scroll">
        <span class="bg-primary text-white px-5 py-1.5 rounded-full font-label-md text-label-md mb-6 inline-block shadow-sm">Features</span>
        <h2 class="font-headline-xl text-headline-xl text-primary mb-xs hidden md:block">Fitur Terdepan Smartani</h2>
        <h2 class="font-headline-lg-mobile text-headline-lg-mobile text-primary mb-xs md:hidden">Fitur Terdepan Smartani</h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl mx-auto">Inilah fitur-fitur unggulan Smartani yang membawa Greenhouse Anda ke level berikutnya.</p>
    </div>

    <div class="max-w-container-max mx-auto px-gutter relative z-10">
        <!-- Features Carousel: Single Highlight Layout -->
        <div class="swiper featureSwiper overflow-hidden pb-12 pt-4 px-2 relative reveal-on-scroll" data-delay="100">
            <div class="swiper-wrapper">
                @forelse($features as $index => $feature)
                <div class="swiper-slide px-4 md:px-12">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center bg-white rounded-[2rem] p-6 lg:p-12 border border-glass-border shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:shadow-[0_20px_40px_rgba(80,200,120,0.1)] transition-all duration-500">
                        <!-- Text Content -->
                        <div class="order-2 lg:order-1 flex flex-col justify-center text-left">
                            @php
                                $icons = ['mark_email_unread', 'insights', 'settings_b_roll', 'energy_savings_leaf'];
                                $icon = $icons[$index % count($icons)];
                            @endphp
                            <div class="w-16 h-16 rounded-2xl bg-surface-container flex items-center justify-center mb-6 text-primary shadow-sm">
                                <span class="material-symbols-outlined text-4xl">{{ $icon }}</span>
                            </div>
                            <h3 class="font-headline-lg text-headline-lg text-primary mb-4 font-bold">{{ $feature->title }}</h3>
                            <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed mb-8">{{ $feature->description }}</p>
                            
                            <button onclick="openVideoModal('{{ addslashes($feature->title) }}')" class="inline-flex items-center justify-center gap-3 bg-primary text-white px-8 py-4 rounded-xl hover:bg-deep-forest transition-colors shadow-lg shadow-primary/30 w-fit group cursor-pointer">
                                <span class="material-symbols-outlined text-2xl group-hover:scale-110 transition-transform">play_circle</span>
                                <span class="font-label-lg text-label-lg font-bold">Tonton Demo</span>
                            </button>
                        </div>
                        
                        <!-- Image / Video Preview -->
                        <div class="order-1 lg:order-2 relative rounded-3xl overflow-hidden aspect-video lg:aspect-[4/3] shadow-2xl group cursor-pointer" onclick="openVideoModal('{{ addslashes($feature->title) }}')">
                            @php
                                $images = [
                                    'https://lh3.googleusercontent.com/aida-public/AB6AXuD-gDV8pqBISwtgmNZagFpvR30DI7FV5vT59ZzeOK0jyVs7W71PUoDaHHaeVxIqDk-Ew4rqhap43A6zFMv6xy4m7ydKb_OEZVmMKxe9CidbC_O5LNmcnL3Ore_O7aPbXT5PxNlG5yUDmteBxuucZivtk9ZMTWeY9dt9DhG4ghag69exBD20InTuGIx53cX9yIVTIYcyHHRPczsK2vfJesPsOhA2nSD2D-lbDoINpdAXRm230dtOvyQrA5iAekfI9rU_nBn9dzltr2qc', // Dashboard/Tech
                                    'https://lh3.googleusercontent.com/aida-public/AB6AXuBD-OLjDYvjhfTrwIpdDPA31s9k8F9iSmLuVJlCUGwGdBl4-zqHIXlNC1lJcZj1jfc1MqMhtJNF9_HDDr_Jt4XwCsryVZSgRI8DU7GYU0ZnERaUpfAgXPYzJWHvRWAGEZjmPcKMWJXRx93TD4nI3J4XOMlwEU5xxiP5CWAFkcmjsHF519CX0KNIOZeceduelJnq-U0pDwAXI7VvCbq2fTN1jLtEh1R9624RBLEo9VjID5MrwU45DLSrBSQADr2tQLeEETbYAeRDOyIu', // Sensor
                                    'https://lh3.googleusercontent.com/aida-public/AB6AXuByn1redhjgGzbCPZM_qVOaTBeA32xXXj9p3p3GWDiyw0RZn_fsX3xO0srgSbYSxPXNyrzg67nXcB0T7YMaAz84ic0Plt6oDEQowCiRLE47MZOkOUCZ4rHADC-JTrdCmYpQJgcxCJ0yWYiCTXN7ddjm3YNfFrsitu9zVh6hFBFF9-8ei-LCqCH39fTUWu7t7UAnseDvPC4QbKWJfqoi71Xroo8w9iR3nt6t3OO73KNBt4b4DEAZm7IcYr4fNLibXhwT82zpwuyodwdf', // Analytics
                                    'https://lh3.googleusercontent.com/aida-public/AB6AXuDJwo3lJZ9klDunyAcf6T7K5S-0l5BDYiAnoJb3E70ti0Z0m3INa2f1ADRQuY8fS1qcIMgwYLMMA6wxnHf5DzMJ__pX_oSHeEGVudTb05_r5bZ3RrBzwTDUaBOqJlqrmCJ33EMcKD63ll6kETfwHQgH_F_UTfmsasEplfLT8svDcpGhyBNTjXpBRg6sDvWK4yAG8FsHox1Na1VjQvr5dU8eA0GSTDe75kVSW-ZrEMsi6UzvdzpPCtXBqgNtkbQSsiM_jvyfwohdrLbj'  // Farmer
                                ];
                                $bgImage = $feature->image_path ? asset('storage/' . $feature->image_path) : $images[$index % count($images)];
                            @endphp
                            <img src="{{ $bgImage }}" alt="{{ $feature->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <!-- Overlay & Big Play Icon -->
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors duration-300 flex items-center justify-center">
                                <div class="w-20 h-20 rounded-full bg-white/30 backdrop-blur-md flex items-center justify-center border border-white/50 text-white shadow-[0_0_30px_rgba(255,255,255,0.4)] group-hover:scale-110 group-hover:bg-primary/90 group-hover:border-primary transition-all duration-300">
                                    <span class="material-symbols-outlined text-5xl ml-1">play_arrow</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="w-full text-center text-on-surface-variant py-10">
                    <p>Belum ada data fitur.</p>
                </div>
                @endforelse
            </div>
            
            <!-- Navigation Arrows -->
            <div class="swiper-button-next !text-primary !w-14 !h-14 !bg-white/90 backdrop-blur !rounded-full shadow-lg border border-glass-border after:!text-2xl hidden md:flex hover:!bg-primary hover:!text-white transition-colors !right-2 lg:!right-4 cursor-pointer"></div>
            <div class="swiper-button-prev !text-primary !w-14 !h-14 !bg-white/90 backdrop-blur !rounded-full shadow-lg border border-glass-border after:!text-2xl hidden md:flex hover:!bg-primary hover:!text-white transition-colors !left-2 lg:!left-4 cursor-pointer"></div>
            
            <!-- Pagination Controls -->
            <div class="swiper-pagination feature-pagination !relative !bottom-0 mt-6"></div>
        </div>
    </div>
    
    <!-- Video Modal -->
    <div id="videoModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/90 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300 pointer-events-none">
        <div class="relative w-full max-w-4xl mx-4 transform scale-95 transition-transform duration-300" id="videoModalContent">
            <!-- Close Button -->
            <button onclick="closeVideoModal()" class="absolute -top-12 right-0 text-white hover:text-primary transition-colors cursor-pointer">
                <span class="material-symbols-outlined text-4xl">close</span>
            </button>
            <!-- Video Container -->
            <div class="relative w-full aspect-video bg-black rounded-2xl overflow-hidden border border-white/10 shadow-2xl">
                <!-- Simulated Video Preview -->
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-8 text-center bg-gradient-to-br from-gray-900 to-black">
                    <span class="material-symbols-outlined text-6xl text-primary mb-4 animate-pulse">smart_display</span>
                    <h3 id="videoModalTitle" class="font-headline-md text-headline-md mb-2 font-bold">Feature Video</h3>
                    <p class="font-body-md text-body-md text-white/60 max-w-[80%] md:max-w-[60%] mx-auto">Memutar pratinjau interaktif untuk fitur ini. Di tahap akhir, ini akan diganti dengan pemutar video asli.</p>
                </div>
            </div>
        </div>
    
    <!-- Background subtle glow elements -->
    <div class="absolute top-1/2 left-0 w-[500px] h-[500px] bg-primary/5 rounded-full blur-[120px] -translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>
    <div class="absolute top-1/2 right-0 w-[500px] h-[500px] bg-secondary/5 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
</section>

<!-- Sensors Interactive Section -->
@if($sensors->count() > 0)
<section class="py-xl bg-surface-container-low relative overflow-hidden" id="sensor">
    <div class="max-w-container-max mx-auto px-gutter text-center mb-xl relative z-10 reveal-on-scroll">
        <h2 class="font-headline-xl text-headline-xl text-primary mb-xs hidden md:block">Kemampuan Sensor Pintar</h2>
        <h2 class="font-headline-lg-mobile text-headline-lg-mobile text-primary mb-xs md:hidden">Kemampuan Sensor Pintar</h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl mx-auto">Pantau berbagai aspek lingkungan greenhouse Anda secara akurat dan real-time.</p>
    </div>
    
    <div class="max-w-container-max mx-auto px-gutter relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach($sensors as $index => $sensor)
            <div class="bg-surface-container-lowest rounded-2xl p-6 border border-glass-border shadow-sm hover:shadow-lg transition-all duration-300 text-center flex flex-col items-center group reveal-on-scroll" data-delay="{{ ($index + 1) * 100 }}">
                <div class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-4 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                    <span class="material-symbols-outlined text-3xl">{{ $sensor->icon ?? 'sensors' }}</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm text-on-surface mb-2">{{ $sensor->name }}</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">{{ $sensor->description }}</p>
                <div class="mt-auto font-title-lg text-title-lg text-primary font-bold">
                    {{ $sensor->value_dummy }} <span class="text-sm font-normal text-on-surface-variant">{{ $sensor->unit }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- New: Produk Terpopuler Section -->
<section class="py-xl bg-white relative overflow-hidden" id="produk">
<!-- Massive Faint Watermark -->
<span class="absolute top-0 left-1/2 -translate-x-1/2 text-[18rem] text-primary/5 font-black pointer-events-none select-none tracking-tighter leading-none hidden lg:block whitespace-nowrap z-0">PRODUK</span>

<div class="max-w-container-max mx-auto px-gutter relative z-10">
<div class="text-center mb-lg reveal-on-scroll relative z-10">
<h2 class="font-headline-xl text-headline-xl text-on-surface mb-xs hidden md:block">Produk Unggulan Kami</h2>
<h2 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface mb-xs md:hidden">Produk Unggulan Kami</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl mx-auto">Dapatkan perangkat terbaik untuk ekosistem pertanian cerdas Anda.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-md">
    @forelse($products as $index => $product)
    <div class="bg-white rounded-xl overflow-hidden border border-glass-border flex flex-col hover:shadow-lg transition-all duration-300 group reveal-on-scroll" data-delay="{{ ($index + 1) * 100 }}">
        <div class="h-64 overflow-hidden bg-surface-container-low flex items-center justify-center p-sm">
            <img alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="{{ $product->image ? asset('storage/' . $product->image) : 'https://placehold.co/400x300/1E293B/50C878?text=' . urlencode($product->name) }}"/>
        </div>
        <div class="p-md flex flex-col flex-grow">
            <h3 class="font-headline-md text-headline-md text-on-surface mb-xs">{{ $product->name }}</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant mb-md flex-grow text-justify">{{ $product->description }}</p>
            <div class="flex justify-between items-center mt-auto">
                <span class="font-label-lg text-label-lg text-primary">{{ $product->price_label ?? 'Rp ' . number_format($product->price, 0, ',', '.') }}</span>
                <a class="bg-primary-container text-on-primary-container px-sm py-2 rounded-lg font-label-lg text-label-lg hover:bg-primary hover:text-on-primary transition-colors" href="{{ route('product-detail', $product->id) }}">Lihat Detail</a>
            </div>
        </div>
    </div>
    @empty
    <div class="col-span-full text-center text-on-surface-variant py-10">
        <p>Belum ada produk unggulan.</p>
    </div>
    @endforelse
</div>
<div class="flex justify-center mt-lg"><a class="inline-flex items-center gap-2 bg-primary text-on-primary px-xl py-3 rounded-lg font-label-lg text-label-lg hover:bg-deep-forest transition-all shadow-md" href="{{ route('katalog') }}">Lihat Semua Produk <span class="material-symbols-outlined">arrow_forward</span></a></div></div>
</section>
<section class="py-xl bg-surface-container-low relative overflow-hidden" id="tentang-kami">
    <!-- Massive Faint Watermark -->
    <span class="absolute top-20 -left-10 text-[18rem] text-primary/5 font-black pointer-events-none select-none tracking-tighter leading-none hidden lg:block z-0">ABOUT US</span>

    <div class="max-w-container-max mx-auto px-gutter relative z-10">
        <!-- Top Section -->
        <div class="text-center max-w-4xl mx-auto mb-16 reveal-on-scroll relative z-10">
            <span class="bg-primary text-white px-5 py-1.5 rounded-full font-label-md text-label-md mb-6 inline-block shadow-sm">About Us</span>
            <h2 class="font-headline-xl text-headline-xl text-primary mb-4">Empowering the Future of Eco-Friendly Greenhouse</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant">Kami memiliki misi untuk mewujudkan pertanian modern yang tidak hanya produktif, tetapi juga berkelanjutan dan ramah lingkungan. Bersama Smartani, teknologi hadir untuk mendampingi dan memberdayakan manusia, bukan menggantikannya.</p>
        </div>

        <!-- Bottom Section: Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left Column: 3 Items -->
            <div class="flex flex-col gap-10 reveal-on-scroll" data-delay="200">
                <!-- Item 1 -->
                <div class="flex gap-5 items-start">
                    <div class="flex-shrink-0 w-14 h-14 bg-primary rounded-xl flex items-center justify-center text-white shadow-lg shadow-primary/30">
                        <span class="material-symbols-outlined text-3xl">home_iot_device</span>
                    </div>
                    <div>
                        <h3 class="font-headline-md text-headline-md text-primary mb-1 font-bold">Seamless Greenhouse Management</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">Semua proses greenhouse dalam satu dashboard, mudah dipahami, dengan mudah.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex gap-5 items-start">
                    <div class="flex-shrink-0 w-14 h-14 bg-primary rounded-xl flex items-center justify-center text-white shadow-lg shadow-primary/30">
                        <span class="material-symbols-outlined text-3xl">trending_up</span>
                    </div>
                    <div>
                        <h3 class="font-headline-md text-headline-md text-primary mb-1 font-bold">Technology Grows with Farmers</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">Solusi pertanian berbasis AI yang dirancang untuk mendampingi petani dalam mengelola lahan secara cerdas.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex gap-5 items-start">
                    <div class="flex-shrink-0 w-14 h-14 bg-primary rounded-xl flex items-center justify-center text-white shadow-lg shadow-primary/30">
                        <span class="material-symbols-outlined text-3xl">public</span>
                    </div>
                    <div>
                        <h3 class="font-headline-md text-headline-md text-primary mb-1 font-bold">Eco-Friendly Practices</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">Mendukung tujuan pembangunan berkelanjutan (SDG) dan prinsip ESG untuk bumi yang lebih baik.</p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Image -->
            <div class="rounded-3xl overflow-hidden shadow-2xl relative border-[6px] border-white/50 reveal-on-scroll" data-delay="400">
                <img alt="Millennial Farmer with Tablet" class="w-full h-auto object-cover aspect-[4/3] hover:scale-[1.03] transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJwo3lJZ9klDunyAcf6T7K5S-0l5BDYiAnoJb3E70ti0Z0m3INa2f1ADRQuY8fS1qcIMgwYLMMA6wxnHf5DzMJ__pX_oSHeEGVudTb05_r5bZ3RrBzwTDUaBOqJlqrmCJ33EMcKD63ll6kETfwHQgH_F_UTfmsasEplfLT8svDcpGhyBNTjXpBRg6sDvWK4yAG8FsHox1Na1VjQvr5dU8eA0GSTDe75kVSW-ZrEMsi6UzvdzpPCtXBqgNtkbQSsiM_jvyfwohdrLbj"/>
            </div>

        </div>
    </div>
    
    <!-- Background glow -->
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-primary/10 rounded-full blur-[150px] pointer-events-none translate-x-1/3 -translate-y-1/3"></div>
</section>
<!-- 5. Our Team Section -->
<section class="py-xl bg-surface-bright relative overflow-hidden" id="tim">
    <div class="max-w-container-max mx-auto px-gutter relative z-10">
        <div class="text-center mb-12 reveal-on-scroll">
            <h2 class="font-headline-xl text-headline-xl text-primary mb-6">Tim Dibalik Smartani</h2>
            <div class="max-w-5xl mx-auto space-y-4">
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    Didorong oleh inovasi, ditenagai pengetahuan, dan dibuktikan oleh pengalaman. Inilah kekuatan tim Smartani. Kami adalah perpaduan akademisi dan praktisi, menghadirkan solusi pertanian yang canggih, tepat guna, dan kontekstual. Pertanian modern bukan sekadar otomatisasi, tapi tentang keberdayaan yang berkelanjutan untuk petani dan ekosistem pangan. Inilah komitmen kami untuk bangsa. Bersama, kita majukan pertanian. Bersama, kita bangun negeri.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Team Member 1 -->
            <div class="group relative rounded-2xl overflow-hidden aspect-[3/4] cursor-pointer shadow-md hover:shadow-xl transition-all duration-500 reveal-on-scroll" data-delay="100">
                <img alt="Muhammad Ihsan Fawzi" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter grayscale group-hover:grayscale-0" src="https://placehold.co/400x500/1E293B/50C878?text=CEO"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 w-full p-6 translate-y-6 group-hover:translate-y-0 transition-transform duration-500 ease-out">
                    <p class="font-label-md text-label-md text-primary mb-1 uppercase tracking-widest font-bold">CEO</p>
                    <h3 class="font-title-lg text-title-lg text-white mb-1 leading-snug">Muhammad Ihsan Fawzi,<br><span class="text-sm text-white/80 font-normal">S.Kom., M.Kom.</span></h3>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="group relative rounded-2xl overflow-hidden aspect-[3/4] cursor-pointer shadow-md hover:shadow-xl transition-all duration-500 reveal-on-scroll" data-delay="200">
                <img alt="Murti Wisnu Ragil S" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter grayscale group-hover:grayscale-0" src="https://placehold.co/400x500/1E293B/50C878?text=COO"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 w-full p-6 translate-y-6 group-hover:translate-y-0 transition-transform duration-500 ease-out">
                    <p class="font-label-md text-label-md text-primary mb-1 uppercase tracking-widest font-bold">COO</p>
                    <h3 class="font-title-lg text-title-lg text-white mb-1 leading-snug">Murti Wisnu Ragil S,<br><span class="text-sm text-white/80 font-normal">S.T., M.T.</span></h3>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="group relative rounded-2xl overflow-hidden aspect-[3/4] cursor-pointer shadow-md hover:shadow-xl transition-all duration-500 reveal-on-scroll" data-delay="300">
                <img alt="Zakiyyan Zain Alkaf" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter grayscale group-hover:grayscale-0" src="https://placehold.co/400x500/1E293B/50C878?text=CTO"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 w-full p-6 translate-y-6 group-hover:translate-y-0 transition-transform duration-500 ease-out">
                    <p class="font-label-md text-label-md text-primary mb-1 uppercase tracking-widest font-bold">CTO</p>
                    <h3 class="font-title-lg text-title-lg text-white mb-1 leading-snug">Zakiyyan Zain Alkaf,<br><span class="text-sm text-white/80 font-normal">S.T., M.T.</span></h3>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="group relative rounded-2xl overflow-hidden aspect-[3/4] cursor-pointer shadow-md hover:shadow-xl transition-all duration-500 reveal-on-scroll" data-delay="400">
                <img alt="Radita Dwi Putera" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter grayscale group-hover:grayscale-0" src="https://placehold.co/400x500/1E293B/50C878?text=CMO"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 w-full p-6 translate-y-6 group-hover:translate-y-0 transition-transform duration-500 ease-out">
                    <p class="font-label-md text-label-md text-primary mb-1 uppercase tracking-widest font-bold">CMO</p>
                    <h3 class="font-title-lg text-title-lg text-white mb-1 leading-snug">Radita Dwi Putera,<br><span class="text-sm text-white/80 font-normal">S.T., M.T.</span></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 6. Latest Articles Section -->
<section class="py-xl bg-surface-container" id="artikel">
<div class="max-w-container-max mx-auto px-gutter">
<div class="flex justify-between items-end mb-lg reveal-on-scroll">
<div>
<h2 class="font-headline-lg text-headline-lg text-on-surface hidden md:block">Wawasan &amp; Edukasi Terbaru</h2>
<h2 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface md:hidden">Wawasan &amp; Edukasi Terbaru</h2>
</div>
<a class="hidden md:inline-flex items-center gap-1 text-primary font-label-lg text-label-lg hover:underline" href="{{ route('artikel') }}">
                        Lihat Semua <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-md">
    @forelse($articles as $index => $article)
    <article class="bg-white rounded-xl overflow-hidden border border-glass-border flex flex-col h-full hover:shadow-lg transition-shadow duration-300 reveal-on-scroll" data-delay="{{ ($index + 1) * 100 }}">
        <div class="h-48 relative overflow-hidden">
            <img alt="{{ $article->title }}" class="w-full h-full object-cover" src="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : 'https://placehold.co/600x400/1E293B/50C878?text=' . urlencode($article->title) }}"/>
            <div class="absolute top-4 left-4">
                <span class="bg-white/90 backdrop-blur-md text-primary px-3 py-1 rounded-full text-label-sm font-label-sm shadow-sm">{{ $article->category ?? 'Wawasan' }}</span>
            </div>
        </div>
        <div class="p-md flex-grow flex flex-col">
            <div class="text-outline font-label-sm text-label-sm mb-xs">{{ \Carbon\Carbon::parse($article->published_at ?? $article->created_at)->translatedFormat('d M Y') }}</div>
            <h3 class="font-headline-md text-headline-md text-on-surface mb-sm line-clamp-2">{{ $article->title }}</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant mb-md flex-grow line-clamp-2">{{ strip_tags($article->content) }}</p>
            <a class="inline-flex items-center gap-1 text-primary font-label-lg text-label-lg hover:text-primary-container transition-colors mt-auto" href="{{ route('artikel.detail', $article->slug ?? 'contoh') }}">
                Baca Selengkapnya <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
            </a>
        </div>
    </article>
    @empty
    <div class="col-span-full text-center text-on-surface-variant py-10">
        <p>Belum ada artikel terbaru.</p>
    </div>
    @endforelse
</div>
</div>
</section>
<!-- 7. FAQ Section -->
<section class="py-xl bg-white relative overflow-hidden" id="faq">
    <!-- Ambient Glow Backgrounds -->
    <div class="absolute top-20 left-0 w-96 h-96 bg-primary/10 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-secondary/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-container-max mx-auto px-gutter grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-24 items-start relative z-10">
        
        <!-- Left Column: Sticky Header -->
        <div class="lg:sticky lg:top-32 reveal-on-scroll relative lg:col-span-5" data-delay="100">
            <!-- Massive Faint Watermark -->
            <span class="absolute -top-16 -left-8 text-[12rem] text-primary/5 font-black pointer-events-none select-none tracking-tighter leading-none hidden lg:block">FAQ</span>
            
            <div class="w-16 h-16 rounded-2xl bg-white border border-glass-border shadow-md flex items-center justify-center mb-8 text-primary relative z-10">
                <span class="material-symbols-outlined text-3xl">psychology_alt</span>
            </div>
            
            <h2 class="font-headline-xl text-headline-xl text-on-surface mb-6 relative z-10">
                Punya<br><span class="text-primary">Pertanyaan?</span>
            </h2>
            
            <p class="font-body-lg text-body-lg text-on-surface-variant mb-10 leading-relaxed relative z-10">
                Temukan jawaban tentang bagaimana Smartani dapat mentransformasi efisiensi dan hasil panen di greenhouse Anda.
            </p>

            <a href="#kontak" class="inline-flex items-center gap-2 text-primary font-label-lg hover:text-deep-forest transition-colors relative z-10 group">
                Hubungi Konsultan Kami 
                <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
            </a>
        </div>

        <!-- Right Column: Glassmorphism Accordions -->
        <div class="space-y-6 relative z-10 lg:col-span-7">
            @foreach($faqs as $index => $faq)
            <div class="accordion-item bg-white/70 backdrop-blur-xl border border-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] rounded-3xl overflow-hidden transition-all duration-300 hover:shadow-xl hover:bg-white reveal-on-scroll group" data-delay="{{ 100 + ($index * 100) }}">
                <button class="w-full px-6 lg:px-8 py-6 text-left flex justify-between items-center focus:outline-none cursor-pointer" onclick="this.parentElement.classList.toggle('active')">
                    <span class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors pr-6">{{ $faq->question }}</span>
                    <div class="flex-shrink-0 w-12 h-12 rounded-full bg-surface-container flex items-center justify-center text-primary border border-primary/10 group-hover:bg-primary group-hover:text-white transition-all duration-300 shadow-sm">
                        <span class="material-symbols-outlined accordion-icon transition-transform duration-500" data-icon="expand_more">expand_more</span>
                    </div>
                </button>
                <div class="accordion-content px-6 lg:px-8 pb-8 pt-0 text-on-surface-variant font-body-lg text-body-lg leading-relaxed">
                    <div class="pt-6 border-t border-glass-border">
                        {!! nl2br(e($faq->answer)) !!}
                    </div>
                </div>
            </div>
            @endforeach
            
            <div class="mt-8 text-center sm:text-left">
                <a href="{{ route('faq') }}" class="inline-flex items-center gap-2 bg-white/50 backdrop-blur-md border border-glass-border px-6 py-3 rounded-xl font-label-lg text-label-lg text-on-surface-variant hover:bg-white hover:text-primary hover:shadow-md transition-all group">
                    Lihat Semua FAQ
                    <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- 8. Contact CTA Section -->
<section class="py-xl bg-surface-container-low relative overflow-hidden" id="kontak">
    <!-- Massive Faint Watermark -->
    <span class="absolute top-20 -right-10 text-[18rem] text-primary/5 font-black pointer-events-none select-none tracking-tighter leading-none hidden lg:block z-0">CONSULT</span>

    <div class="max-w-container-max mx-auto px-gutter relative z-10">
        <div class="bg-gradient-to-br from-deep-forest to-primary rounded-3xl p-lg md:p-2xl shadow-xl border border-glass-border/30 relative overflow-hidden reveal-on-scroll" data-delay="100">
            <!-- Decorative Abstract Circles -->
            <div class="absolute -right-16 -top-16 w-64 h-64 rounded-full bg-white/5 blur-2xl pointer-events-none"></div>
            <div class="absolute -left-16 -bottom-16 w-64 h-64 rounded-full bg-emerald-300/10 blur-2xl pointer-events-none"></div>

            <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-lg text-center lg:text-left">
                <div class="max-w-2xl">
                    <h2 class="font-headline-xl text-headline-xl text-white mb-sm">Konsultasikan Greenhouse Anda</h2>
                    <p class="font-body-lg text-body-lg text-white/85">
                        Tim ahli agroteknologi kami siap membantu Anda merancang, mengoptimalkan, dan mengintegrasikan ekosistem pertanian digital presisi yang sesuai dengan kebutuhan Anda.
                    </p>
                </div>
                <div class="shrink-0">
                    <a href="{{ route('konsultasi') }}" class="inline-flex items-center gap-3 bg-white text-primary px-8 py-4 rounded-full font-headline-md text-headline-md hover:bg-emerald-50 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 group">
                        Mulai Konsultasi
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
        // Initialize Hero Swiper
        const heroSwiper = new Swiper('.heroSwiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            }
        });

        // Initialize Features Swiper
        const featureSwiper = new Swiper('.featureSwiper', {
            slidesPerView: 1,
            spaceBetween: 32,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.feature-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            }
        });

        // Video Modal Functions
        function openVideoModal(title) {
            const modal = document.getElementById('videoModal');
            const modalContent = document.getElementById('videoModalContent');
            const titleEl = document.getElementById('videoModalTitle');
            
            titleEl.textContent = title;
            modal.classList.remove('hidden');
            
            // Trigger animation
            setTimeout(() => {
                modal.classList.remove('opacity-0', 'pointer-events-none');
                modalContent.classList.remove('scale-95');
                modalContent.classList.add('scale-100');
            }, 10);
        }

        function closeVideoModal() {
            const modal = document.getElementById('videoModal');
            const modalContent = document.getElementById('videoModalContent');
            
            modal.classList.add('opacity-0', 'pointer-events-none');
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        // Close modal when clicking outside
        document.getElementById('videoModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeVideoModal();
            }
        });


    </script>

    @endpush
</x-layout>
