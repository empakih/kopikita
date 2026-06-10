<x-layout title="Pusat Bantuan & FAQ | Smartani">
    @push('styles')
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
    </style>
    @endpush

    <main class="pt-32 pb-xl">
        <!-- Hero Title Section -->
        <section class="max-w-container-max mx-auto px-gutter mb-xl reveal-on-scroll" data-delay="100">
            <div class="flex flex-col items-center text-center max-w-3xl mx-auto">
                <span class="bg-primary/10 text-primary px-4 py-1 rounded-full font-label-sm text-label-sm mb-4 uppercase tracking-wider flex items-center gap-1">
                    <span class="material-symbols-outlined text-[16px]">live_help</span> Pusat Bantuan
                </span>
                <h1 class="font-headline-xl text-headline-xl md:text-headline-xl text-on-surface mb-6">
                    Pertanyaan yang Sering Diajukan
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    Temukan jawaban atas semua pertanyaan Anda seputar Smartani, mulai dari produk, layanan, hingga panduan umum.
                </p>
            </div>
        </section>

        <!-- Filter Navigation -->
        @if(count($categories) > 0)
        <section class="max-w-container-max mx-auto px-gutter mb-lg reveal-on-scroll" data-delay="200">
            <div class="flex flex-wrap gap-xs justify-center items-center border-b border-outline-variant/30 pb-base" id="faq-filters">
                <button class="filter-btn active px-md py-sm font-label-lg text-label-lg transition-colors text-primary border-b-2 border-primary" data-category="Semua">Semua</button>
                @foreach($categories as $cat)
                <button class="filter-btn px-md py-sm font-label-lg text-label-lg transition-colors text-on-surface-variant hover:text-primary" data-category="{{ $cat }}">{{ $cat }}</button>
                @endforeach
            </div>
        </section>
        @endif

        <!-- FAQ Items Container -->
        <section class="max-w-3xl mx-auto px-gutter mb-xl">
            <div class="space-y-4" id="faq-container">
                @forelse($faqs as $index => $faq)
                <div class="accordion-item faq-item bg-white/70 backdrop-blur-xl border border-outline-variant/30 shadow-sm rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-md group reveal-on-scroll" data-category="{{ $faq->category }}" data-delay="{{ ($index % 5 + 1) * 100 }}">
                    <button class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none cursor-pointer" onclick="this.parentElement.classList.toggle('active')">
                        <div class="flex flex-col pr-6">
                            <span class="text-xs font-bold uppercase tracking-wider text-primary mb-1">{{ $faq->category }}</span>
                            <span class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors">{{ $faq->question }}</span>
                        </div>
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
                @empty
                <div class="text-center py-12">
                    <span class="material-symbols-outlined text-6xl text-outline mb-4">search_off</span>
                    <h3 class="font-headline-md text-headline-md text-on-surface">Belum ada FAQ</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-2">Daftar FAQ akan segera diperbarui.</p>
                </div>
                @endforelse
            </div>
        </section>

        <!-- Still Need Help CTA -->
        <section class="py-xl bg-surface-container-low border-t border-outline-variant/30 mt-24">
            <div class="max-w-container-max mx-auto px-gutter reveal-on-scroll" data-delay="100">
                <div class="bg-white rounded-3xl p-lg md:p-xl flex flex-col md:flex-row items-center justify-between gap-lg border border-outline-variant/20 shadow-md">
                    <div class="text-center md:text-left md:w-2/3">
                        <h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">Masih Butuh Bantuan?</h2>
                        <p class="font-body-lg text-body-lg text-on-surface-variant">Jika Anda tidak menemukan jawaban dari pertanyaan Anda di atas, jangan ragu untuk menghubungi tim ahli kami secara langsung.</p>
                    </div>
                    <div class="w-full md:w-auto flex justify-center">
                        <a href="{{ route('konsultasi') }}" class="bg-primary text-on-primary px-8 py-4 rounded-full font-label-lg text-label-lg hover:bg-on-primary-fixed-variant transition-all shadow-md inline-flex items-center gap-2">
                            <span class="material-symbols-outlined">headset_mic</span>
                            Hubungi Konsultan
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @push('scripts')
    <script>
        document.addEventListener('turbo:load', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const faqItems = document.querySelectorAll('.faq-item');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Update active state on buttons (artikel style)
                    filterBtns.forEach(b => {
                        b.classList.remove('text-primary', 'border-b-2', 'border-primary', 'active');
                        b.classList.add('text-on-surface-variant');
                    });
                    btn.classList.remove('text-on-surface-variant');
                    btn.classList.add('text-primary', 'border-b-2', 'border-primary', 'active');

                    const category = btn.getAttribute('data-category');

                    // Filter items
                    faqItems.forEach(item => {
                        if (category === 'Semua' || item.getAttribute('data-category') === category) {
                            item.style.display = 'block';
                            // Optional: add a slight fade in animation
                            item.style.opacity = '0';
                            setTimeout(() => { item.style.opacity = '1'; }, 50);
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
    @endpush
</x-layout>
