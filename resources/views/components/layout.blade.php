<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ $title ?? 'Smartani Precision Agriculture' }}</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    <!-- Smooth Page Transitions (Modern Browser SPA feel) -->

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
<nav id="main-nav" class="bg-white/80 dark:bg-surface-container/80 backdrop-blur-md border-b border-glass-border shadow-sm transition-all duration-300 ease-in-out fixed top-0 w-full z-50">
    <div class="flex justify-between items-center px-gutter py-4 max-w-container-max mx-auto">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="font-headline-md text-headline-md font-bold text-primary flex items-center gap-2">
            <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">eco</span>
            Smartani
        </a>

        <!-- Desktop Nav -->
        <div class="hidden md:flex items-center gap-8">
            <a class="font-label-lg text-label-lg {{ request()->routeIs('home') ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary transition-colors' }}" href="{{ route('home') }}">Home</a>
            <a class="font-label-lg text-label-lg {{ request()->routeIs('katalog') ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary transition-colors' }}" href="{{ route('katalog') }}">Products</a>
            <a class="font-label-lg text-label-lg {{ request()->routeIs('artikel*') ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary transition-colors' }}" href="{{ route('artikel') }}">Articles</a>
            <a class="font-label-lg text-label-lg {{ request()->routeIs('faq') ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary transition-colors' }}" href="{{ route('faq') }}">FAQ</a>
        </div>

        <!-- CTA + Mobile Menu Button -->
        <div class="flex items-center gap-4">
            <a href="{{ route('konsultasi') }}" class="hidden md:inline-block bg-primary text-on-primary px-6 py-2 rounded-full font-label-lg text-label-lg hover:bg-on-primary-fixed-variant transition-all shadow-sm">
                Contact Us
            </a>
            <!-- Mobile Hamburger -->
            <button id="mobile-menu-btn" class="md:hidden text-primary focus:outline-none" aria-label="Open Menu">
                <span id="menu-icon-open" class="material-symbols-outlined">menu</span>
                <span id="menu-icon-close" class="material-symbols-outlined hidden">close</span>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white/95 backdrop-blur-md border-t border-glass-border">
        <div class="flex flex-col px-gutter py-sm gap-1">
            <a class="font-label-lg text-label-lg py-3 border-b border-glass-border {{ request()->routeIs('home') ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('home') }}">Home</a>
            <a class="font-label-lg text-label-lg py-3 border-b border-glass-border {{ request()->routeIs('katalog') ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('katalog') }}">Products</a>
            <a class="font-label-lg text-label-lg py-3 border-b border-glass-border {{ request()->routeIs('artikel*') ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('artikel') }}">Articles</a>
            <a class="font-label-lg text-label-lg py-3 border-b border-glass-border {{ request()->routeIs('faq') ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('faq') }}">FAQ</a>
            <a href="{{ route('konsultasi') }}" class="mt-3 mb-2 text-center bg-primary text-on-primary px-6 py-3 rounded-full font-label-lg text-label-lg hover:bg-on-primary-fixed-variant transition-all shadow-sm">
                Contact Us
            </a>
        </div>
    </div>
</nav>

{{ $slot }}

<!-- Footer -->
<footer class="bg-surface-container-low dark:bg-surface-container-lowest border-t border-glass-border">
    <div class="w-full px-gutter py-xl flex flex-col md:flex-row justify-between max-w-container-max mx-auto gap-lg">
        <!-- Info Column -->
        <div class="md:w-1/3">
            <a href="{{ route('home') }}" class="font-headline-md text-headline-md text-primary mb-sm flex items-center gap-2">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">eco</span>
                Smartani
            </a>
            <p class="font-body-sm text-body-sm text-on-surface-variant mb-md mt-3">
                Leading solution for precision agriculture and smart greenhouse management in Indonesia. Combining technological innovation with environmental sustainability.
            </p>
            <div class="flex gap-3 mt-4">
                <!-- Instagram -->
                <a class="w-10 h-10 rounded-full bg-white dark:bg-surface-container-high border border-glass-border flex items-center justify-center text-on-surface-variant hover:text-white hover:bg-gradient-to-tr hover:from-amber-500 hover:to-purple-600 transition-all duration-300 hover:scale-110 shadow-sm hover:shadow-lg" href="#" aria-label="Instagram" target="_blank">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                    </svg>
                </a>
                <!-- Facebook -->
                <a class="w-10 h-10 rounded-full bg-white dark:bg-surface-container-high border border-glass-border flex items-center justify-center text-on-surface-variant hover:text-white hover:bg-[#1877F2] transition-all duration-300 hover:scale-110 shadow-sm hover:shadow-lg" href="#" aria-label="Facebook" target="_blank">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/>
                    </svg>
                </a>
                <!-- LinkedIn -->
                <a class="w-10 h-10 rounded-full bg-white dark:bg-surface-container-high border border-glass-border flex items-center justify-center text-on-surface-variant hover:text-white hover:bg-[#0A66C2] transition-all duration-300 hover:scale-110 shadow-sm hover:shadow-lg" href="#" aria-label="LinkedIn" target="_blank">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                </a>
                <!-- YouTube -->
                <a class="w-10 h-10 rounded-full bg-white dark:bg-surface-container-high border border-glass-border flex items-center justify-center text-on-surface-variant hover:text-white hover:bg-[#FF0000] transition-all duration-300 hover:scale-110 shadow-sm hover:shadow-lg" href="#" aria-label="YouTube" target="_blank">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M23.498 6.163a3.003 3.003 0 00-2.11-2.11C19.517 3.545 12 3.545 12 3.545s-7.517 0-9.388.507a3.003 3.003 0 00-2.11 2.11C0 8.033 0 12 0 12s0 3.967.502 5.837a3.003 3.003 0 002.11 2.11c1.871.507 9.388.507 9.388.507s7.517 0 9.388-.507a3.003 3.003 0 002.11-2.11C24 15.967 24 12 24 12s0-3.967-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                    </svg>
                </a>
                <!-- TikTok -->
                <a class="w-10 h-10 rounded-full bg-white dark:bg-surface-container-high border border-glass-border flex items-center justify-center text-on-surface-variant hover:text-white hover:bg-black transition-all duration-300 hover:scale-110 shadow-sm hover:shadow-lg" href="#" aria-label="TikTok" target="_blank">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.17-2.86-.74-3.99-1.72-.28-.24-.53-.5-.77-.78-.07 1.93-.02 3.87-.04 5.81-.04 1.84-.33 3.73-1.22 5.37-.9 1.7-2.46 3.08-4.29 3.76-1.79.69-3.79.77-5.63.25-1.92-.51-3.69-1.7-4.83-3.32-1.24-1.72-1.73-3.93-1.42-6.05.28-2.02 1.44-3.9 3.19-5.01 1.61-1.06 3.59-1.47 5.47-1.19.02 1.4.01 2.81.02 4.21-.92-.25-1.93-.15-2.77.33-.87.49-1.47 1.39-1.62 2.39-.21 1.25.33 2.59 1.33 3.33.88.66 2.05.8 3.11.41.97-.33 1.75-1.12 2.07-2.09.28-.79.24-1.66.25-2.48.02-3.41-.01-6.82.02-10.23z"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Navigation Column -->
        <div class="md:w-1/3">
            <h4 class="font-label-lg text-label-lg text-on-surface mb-sm">Navigation</h4>
            <ul class="space-y-2 font-body-sm text-body-sm flex flex-col">
                <li><a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('home') }}#tentang-kami">About Us</a></li>
                <li><a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('home') }}#fitur">Features</a></li>
                <li><a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('katalog') }}">Products</a></li>
                <li><a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('home') }}#tim">Team</a></li>
                <li><a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('artikel') }}">Articles</a></li>
                <li><a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('home') }}#faq">FAQ</a></li>
            </ul>
        </div>

        <!-- Newsletter Column -->
        <div class="md:w-1/3">
            <h4 class="font-label-lg text-label-lg text-on-surface mb-sm">Subscribe to Newsletter</h4>
            <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">Get the latest updates on agricultural technology.</p>
            <form class="flex gap-2" onsubmit="return false;">
                <input
                    class="flex-grow rounded-lg border border-outline-variant bg-white focus:border-primary focus:ring-1 focus:ring-primary py-2 px-3 font-body-sm text-body-sm outline-none transition-colors"
                    placeholder="Your Email"
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
            <p class="font-body-sm text-body-sm text-on-surface-variant">© 2024 Smartani. Precision Agriculture for a Sustainable Future.</p>
            <div class="flex gap-4 font-body-sm text-body-sm">
                <a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy Policy</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

@stack('scripts')

<!-- Mobile Menu Script -->
<script type="module">
    import * as Turbo from 'https://cdn.jsdelivr.net/npm/@hotwired/turbo@8.0.4/+esm';
    window.Turbo = Turbo;

    document.addEventListener('turbo:load', () => {
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('menu-icon-open');
        const iconClose = document.getElementById('menu-icon-close');

        if (menuBtn && !menuBtn.dataset.listener) {
            menuBtn.addEventListener('click', () => {
                const isOpen = !mobileMenu.classList.contains('hidden');
                mobileMenu.classList.toggle('hidden', isOpen);
                iconOpen.classList.toggle('hidden', !isOpen);
                iconClose.classList.toggle('hidden', isOpen);
            });
            menuBtn.dataset.listener = 'true';
        }

        // Scroll: add shadow to nav
        const scrollHandler = () => {
            const nav = document.getElementById('main-nav');
            if (nav) {
                if (window.scrollY > 50) {
                    nav.classList.add('shadow-md');
                } else {
                    nav.classList.remove('shadow-md');
                }
            }
        };
        window.removeEventListener('scroll', scrollHandler);
        window.addEventListener('scroll', scrollHandler);

        // Global Scroll Reveal Animation
        const revealElements = document.querySelectorAll('.reveal-on-scroll');
        
        if (revealElements.length > 0) {
            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        el.classList.add('is-revealed');
                        
                        // Bersihkan inline style delay jika sudah selesai agar hover dll normal
                        setTimeout(() => {
                            el.style.transitionDelay = '';
                        }, 1000); 
                        
                        observer.unobserve(el);
                    }
                });
            }, { threshold: 0.05, rootMargin: '0px 0px -20px 0px' });

            revealElements.forEach((el) => {
                const delay = el.getAttribute('data-delay');
                if (delay) el.style.transitionDelay = delay + 'ms';
                revealObserver.observe(el);
            });
        }
    });
</script>

</body>
</html>
