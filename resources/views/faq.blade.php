<x-layout title="FAQ | Kopikita">
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
                    Hal-hal yang sering ditanyakan seputar menu, pemesanan, dan kedai Kopikita.
                </p>
            </div>
        </section>

        @php
            // FAQ statis (hardcoded) — tidak mengambil dari database.
            $faqs = [
                ['q' => 'Apakah biji kopi bisa digiling sesuai metode seduh?', 'a' => 'Bisa. Saat memesan, beri tahu metode seduhmu (V60, French Press, espresso, tubruk) dan kami giling sesuai ukuran yang pas. Bisa juga minta biji utuh.'],
                ['q' => 'Bagaimana cara memesan produk?', 'a' => 'Pilih produk di halaman Produk, lalu hubungi kami lewat halaman Kontak / WhatsApp untuk konfirmasi pesanan dan pembayaran.'],
                ['q' => 'Apakah mengirim ke seluruh Indonesia?', 'a' => 'Ya. Pesananmu dikemas aman dan dikirim ke seluruh Indonesia lewat jasa ekspedisi pilihanmu. Ongkir menyesuaikan tujuan.'],
                ['q' => 'Berapa lama biji kopi bertahan dan bagaimana menyimpannya?', 'a' => 'Biji paling enak dinikmati dalam 1 bulan setelah roasting. Simpan di wadah kedap udara, jauh dari panas, cahaya, dan lembap.'],
                ['q' => 'Apakah melayani pembelian grosir atau reseller?', 'a' => 'Tentu. Untuk pembelian jumlah banyak (kedai, kantor, atau reseller), hubungi kami lewat halaman Kontak untuk harga grosir spesial.'],
            ];
        @endphp

        <!-- FAQ Items -->
        <section class="max-w-3xl mx-auto px-gutter mb-xl">
            <div class="space-y-4">
                @foreach($faqs as $index => $faq)
                <div class="accordion-item bg-white/70 backdrop-blur-xl border border-outline-variant/30 shadow-sm rounded-2xl overflow-hidden transition-all duration-300 hover:shadow-md group reveal-on-scroll" data-delay="{{ ($index % 5 + 1) * 100 }}">
                    <button class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none cursor-pointer" onclick="this.parentElement.classList.toggle('active')">
                        <span class="font-headline-sm text-headline-sm text-on-surface group-hover:text-primary transition-colors pr-6">{{ $faq['q'] }}</span>
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary border border-outline-variant/20 group-hover:bg-primary group-hover:text-white transition-all duration-300">
                            <span class="material-symbols-outlined accordion-icon transition-transform duration-500">expand_more</span>
                        </div>
                    </button>
                    <div class="accordion-content px-6 text-on-surface-variant font-body-lg text-body-lg leading-relaxed">
                        <div class="accordion-content-inner">
                            <div class="pt-4 pb-6 border-t border-outline-variant/20">
                                {{ $faq['a'] }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Still Need Help CTA -->
        <section class="py-xl bg-surface-container-low border-t border-outline-variant/30 mt-24">
            <div class="max-w-container-max mx-auto px-gutter reveal-on-scroll" data-delay="100">
                <div class="bg-white rounded-3xl p-lg md:p-xl flex flex-col md:flex-row items-center justify-between gap-lg border border-outline-variant/20 shadow-md">
                    <div class="text-center md:text-left md:w-2/3">
                        <h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">Masih Ada Pertanyaan?</h2>
                        <p class="font-body-lg text-body-lg text-on-surface-variant">Kalau jawabannya belum ada di atas, jangan ragu hubungi kami langsung. Kami senang ngobrol soal kopi!</p>
                    </div>
                    <div class="w-full md:w-auto flex justify-center">
                        <a href="{{ route('konsultasi') }}" class="bg-primary text-on-primary px-8 py-4 rounded-full font-label-lg text-label-lg hover:bg-on-primary-fixed-variant transition-all shadow-md inline-flex items-center gap-2">
                            <span class="material-symbols-outlined">chat</span>
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>
