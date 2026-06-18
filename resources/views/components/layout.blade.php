<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ $title ?? 'Kopikita — Kopi Susu & Manual Brew' }}</title>

    {{-- Turbo: jangan tampilkan versi cache dulu (hindari "kedip refresh 2x") --}}
    <meta name="turbo-cache-control" content="no-preview"/>

    <!-- Preconnect untuk mempercepat load Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>

    <!-- Font teks (Inter) — non-blocking: halaman tampil dulu, font menyusul -->
    <link rel="stylesheet" media="print" onload="this.media='all'" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"/>
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"/></noscript>
    <!-- Font ikon (Material Symbols) — tetap blocking biar ikon tak sempat tampil sebagai teks -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    <!-- Vite (Tailwind V4 & JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')

    <!-- Animasi Scroll Mulus (Tanpa Jitter) -->
    <style>
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(1.5rem);
            transition-property: opacity, transform;
            transition-duration: 800ms;
            transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            will-change: transform, opacity;
        }
        .reveal-on-scroll.is-revealed {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md antialiased selection:bg-primary/20">

<!-- TopNavBar -->
<nav id="main-nav" class="bg-white/80 backdrop-blur-md border-b border-glass-border shadow-sm transition-all duration-300 ease-in-out fixed top-0 w-full z-50">
    <div class="flex justify-between items-center px-gutter py-4 max-w-container-max mx-auto">
        <!-- Logo -->
        <a id="nav-logo" data-testid="nav-logo" href="{{ route('home') }}" class="font-headline-md text-headline-md font-bold text-primary flex items-center gap-2">
            <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">local_cafe</span>
            Kopikita
        </a>

        <!-- Desktop Nav -->
        <div class="hidden md:flex items-center gap-8">
            <a id="nav-home" data-testid="nav-home" class="font-label-lg text-label-lg {{ request()->routeIs('home') ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary transition-colors' }}" href="{{ route('home') }}">Beranda</a>
            <a id="nav-products" data-testid="nav-products" class="font-label-lg text-label-lg {{ request()->routeIs('katalog') ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary transition-colors' }}" href="{{ route('katalog') }}">Produk</a>
            <a id="nav-articles" data-testid="nav-articles" class="font-label-lg text-label-lg {{ request()->routeIs('artikel*') ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary transition-colors' }}" href="{{ route('artikel') }}">Artikel</a>
            <a id="nav-faq" data-testid="nav-faq" class="font-label-lg text-label-lg {{ request()->routeIs('faq') ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary transition-colors' }}" href="{{ route('faq') }}">FAQ</a>
        </div>

        <!-- CTA + Mobile Menu Button -->
        <div class="flex items-center gap-4">
            <a id="nav-contact" data-testid="nav-contact" href="{{ route('konsultasi') }}" class="hidden md:inline-block bg-primary text-on-primary px-6 py-2 rounded-full font-label-lg text-label-lg hover:bg-on-primary-fixed-variant transition-all shadow-sm">
                Kontak
            </a>
            <!-- Mobile Hamburger -->
            <button id="mobile-menu-btn" class="md:hidden text-primary focus:outline-none" aria-label="Open Menu">
                <span id="menu-icon-open" class="material-symbols-outlined">menu</span>
                <span id="menu-icon-close" class="material-symbols-outlined" style="display:none">close</span>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white/95 backdrop-blur-md border-t border-glass-border">
        <div class="flex flex-col px-gutter py-sm gap-1">
            <a id="nav-home-mobile" data-testid="nav-home-mobile" class="font-label-lg text-label-lg py-3 border-b border-glass-border {{ request()->routeIs('home') ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('home') }}">Beranda</a>
            <a id="nav-products-mobile" data-testid="nav-products-mobile" class="font-label-lg text-label-lg py-3 border-b border-glass-border {{ request()->routeIs('katalog') ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('katalog') }}">Produk</a>
            <a id="nav-articles-mobile" data-testid="nav-articles-mobile" class="font-label-lg text-label-lg py-3 border-b border-glass-border {{ request()->routeIs('artikel*') ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('artikel') }}">Artikel</a>
            <a id="nav-faq-mobile" data-testid="nav-faq-mobile" class="font-label-lg text-label-lg py-3 border-b border-glass-border {{ request()->routeIs('faq') ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('faq') }}">FAQ</a>
            <a id="nav-contact-mobile" data-testid="nav-contact-mobile" href="{{ route('konsultasi') }}" class="mt-3 mb-2 text-center bg-primary text-on-primary px-6 py-3 rounded-full font-label-lg text-label-lg hover:bg-on-primary-fixed-variant transition-all shadow-sm">
                Kontak
            </a>
        </div>
    </div>
</nav>

{{ $slot }}

<!-- Footer -->
<footer class="bg-surface-container-low border-t border-glass-border">
    <div class="w-full px-gutter py-xl flex flex-col md:flex-row justify-between max-w-container-max mx-auto gap-lg">
        <!-- Info Column -->
        <div class="md:w-1/3">
            <a href="{{ route('home') }}" class="font-headline-md text-headline-md text-primary mb-sm flex items-center gap-2">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">local_cafe</span>
                Kopikita
            </a>
            <p class="font-body-sm text-body-sm text-on-surface-variant mb-md mt-3">
                Toko biji kopi dan alat seduh pilihan. Kami bantu kamu menemukan biji dan peralatan yang pas untuk ngopi enak di rumah, dikirim ke seluruh Indonesia.
            </p>
            <div class="flex gap-3 mt-4">
                <!-- Instagram -->
                <a class="w-10 h-10 rounded-full bg-white border border-glass-border flex items-center justify-center text-on-surface-variant hover:text-white hover:bg-gradient-to-tr hover:from-amber-500 hover:to-purple-600 transition-all duration-300 hover:scale-110 shadow-sm hover:shadow-lg" href="#" aria-label="Instagram" target="_blank">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                    </svg>
                </a>
                <!-- Facebook -->
                <a class="w-10 h-10 rounded-full bg-white border border-glass-border flex items-center justify-center text-on-surface-variant hover:text-white hover:bg-[#1877F2] transition-all duration-300 hover:scale-110 shadow-sm hover:shadow-lg" href="#" aria-label="Facebook" target="_blank">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/>
                    </svg>
                </a>
                <!-- WhatsApp -->
                <a class="w-10 h-10 rounded-full bg-white border border-glass-border flex items-center justify-center text-on-surface-variant hover:text-white hover:bg-[#25D366] transition-all duration-300 hover:scale-110 shadow-sm hover:shadow-lg" href="#" aria-label="WhatsApp" target="_blank">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                </a>
                <!-- TikTok -->
                <a class="w-10 h-10 rounded-full bg-white border border-glass-border flex items-center justify-center text-on-surface-variant hover:text-white hover:bg-black transition-all duration-300 hover:scale-110 shadow-sm hover:shadow-lg" href="#" aria-label="TikTok" target="_blank">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.17-2.86-.74-3.99-1.72-.28-.24-.53-.5-.77-.78-.07 1.93-.02 3.87-.04 5.81-.04 1.84-.33 3.73-1.22 5.37-.9 1.7-2.46 3.08-4.29 3.76-1.79.69-3.79.77-5.63.25-1.92-.51-3.69-1.7-4.83-3.32-1.24-1.72-1.73-3.93-1.42-6.05.28-2.02 1.44-3.9 3.19-5.01 1.61-1.06 3.59-1.47 5.47-1.19.02 1.4.01 2.81.02 4.21-.92-.25-1.93-.15-2.77.33-.87.49-1.47 1.39-1.62 2.39-.21 1.25.33 2.59 1.33 3.33.88.66 2.05.8 3.11.41.97-.33 1.75-1.12 2.07-2.09.28-.79.24-1.66.25-2.48.02-3.41-.01-6.82.02-10.23z"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Navigation Column -->
        <div class="md:w-1/3">
            <h4 class="font-label-lg text-label-lg text-on-surface mb-sm">Navigasi</h4>
            <ul class="space-y-2 font-body-sm text-body-sm flex flex-col">
                <li><a id="footer-about" data-testid="footer-about" class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('home') }}#tentang-kami">Tentang Kami</a></li>
                <li><a id="footer-products" data-testid="footer-products" class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('katalog') }}">Produk</a></li>
                <li><a id="footer-articles" data-testid="footer-articles" class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('artikel') }}">Artikel</a></li>
                <li><a id="footer-faq" data-testid="footer-faq" class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('faq') }}">FAQ</a></li>
                <li><a id="footer-contact" data-testid="footer-contact" class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('konsultasi') }}">Kontak</a></li>
            </ul>
        </div>

        <!-- Newsletter Column -->
        <div class="md:w-1/3">
            <h4 class="font-label-lg text-label-lg text-on-surface mb-sm">Newsletter</h4>
            <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">Dapatkan info menu baru dan promo spesial dari Kopikita.</p>
            <form class="flex gap-2" data-turbo="false" onsubmit="return false;">
                <input
                    class="flex-grow rounded-lg border border-outline-variant bg-white focus:border-primary focus:ring-1 focus:ring-primary py-2 px-3 font-body-sm text-body-sm outline-none transition-colors"
                    placeholder="Email kamu"
                    type="email"
                />
                <button
                    class="bg-primary text-on-primary px-4 py-2 rounded-lg hover:bg-on-primary-fixed-variant transition-colors flex items-center justify-center"
                    type="submit"
                    aria-label="Subscribe"
                >
                    <span class="material-symbols-outlined">send</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-glass-border">
        <div class="max-w-container-max mx-auto px-gutter py-4 flex flex-col sm:flex-row justify-between items-center gap-2 text-center sm:text-left">
            <p class="font-body-sm text-body-sm text-on-surface-variant">© 2026 Kopikita. Ngopi santai, setiap hari.</p>
            <div class="flex gap-4 font-body-sm text-body-sm">
                <a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Kebijakan Privasi</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>

@stack('scripts')

<!-- Script: navigasi Turbo, menu mobile, shadow navbar, animasi reveal -->
<script>
    // Animasi muncul saat di-scroll — dijalankan tiap halaman (elemen baru tiap nav Turbo).
    function initReveal() {
        const els = document.querySelectorAll('.reveal-on-scroll');
        if (!els.length) return;
        const obs = new IntersectionObserver((entries, o) => {
            entries.forEach((e) => {
                if (e.isIntersecting) { e.target.classList.add('is-revealed'); o.unobserve(e.target); }
            });
        }, { threshold: 0.05, rootMargin: '0px 0px -20px 0px' });
        els.forEach((el) => {
            const d = el.getAttribute('data-delay');
            if (d) el.style.transitionDelay = d + 'ms';
            obs.observe(el);
        });
    }

    // Dipasang sekali saja (aman terhadap render ulang Turbo).
    if (!window.__kopikitaInit) {
        window.__kopikitaInit = true;

        // Toggle menu mobile via event delegation. Pakai style.display langsung supaya
        // pasti (tidak bentrok dengan CSS 'display:inline-block' dari font ikon Google).
        document.addEventListener('click', (e) => {
            if (!e.target.closest('#mobile-menu-btn')) return;
            const menu = document.getElementById('mobile-menu');
            const open = menu.classList.toggle('hidden') === false; // true bila menu kini terbuka
            const ico = document.getElementById('menu-icon-open');
            const icc = document.getElementById('menu-icon-close');
            if (ico) ico.style.display = open ? 'none' : '';
            if (icc) icc.style.display = open ? '' : 'none';
        });

        // Bayangan navbar saat scroll
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('main-nav');
            if (nav) nav.classList.toggle('shadow-md', window.scrollY > 50);
        });

        document.addEventListener('turbo:load', initReveal);
        // Fallback kalau Turbo gagal dimuat: tetap jalan saat load biasa.
        document.addEventListener('DOMContentLoaded', () => { if (!window.Turbo) initReveal(); });
    }
</script>

</body>
</html>
