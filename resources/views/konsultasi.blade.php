<x-layout title="Kontak | Kopikita">
    @push('styles')
        <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        </style>
    @endpush

    <main class="pt-32 pb-xl px-gutter max-w-container-max mx-auto min-h-screen">
<!-- Hero Section -->
<div class="mb-xl text-center max-w-3xl mx-auto reveal-on-scroll" data-delay="100">
<h1 class="font-headline-xl text-headline-xl text-primary mb-sm">Hubungi Kopikita</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">Mau pesan biji atau alat, tanya ketersediaan stok, atau minta rekomendasi? Kirim pesan ke kami, kami siap bantu.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-lg items-start">
<!-- Left Side: Contact Details -->
<div class="lg:col-span-5 space-y-md reveal-on-scroll" data-delay="200">
<div class="relative rounded-xl overflow-hidden aspect-video shadow-sm border border-outline-variant/30 group">
<img alt="Biji kopi & alat seduh Kopikita" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="{{ asset('images/kontak.jpg') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-deep-forest/60 to-transparent"></div>
<div class="absolute bottom-md left-md text-white">
<p class="font-label-lg text-label-lg opacity-80">Kopikita</p>
<p class="font-headline-md text-headline-md">Ngopi Santai, Setiap Hari</p>
</div>
</div>
<div class="grid gap-sm">
<!-- Email -->
<div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant/20 flex items-start gap-md hover:bg-surface-tint transition-colors duration-300">
<div class="w-12 h-12 bg-primary-container/20 rounded-lg flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary">mail</span>
</div>
<div>
<p class="font-label-lg text-label-lg text-primary uppercase tracking-wider mb-xs">Email</p>
<p class="font-body-md text-body-md text-on-surface">halo.kopikita@gmail.com</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Dibalas dalam 24 jam</p>
</div>
</div>
<!-- Telp / WhatsApp -->
<div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant/20 flex items-start gap-md hover:bg-surface-tint transition-colors duration-300">
<div class="w-12 h-12 bg-primary-container/20 rounded-lg flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary">call</span>
</div>
<div>
<p class="font-label-lg text-label-lg text-primary uppercase tracking-wider mb-xs">Telepon / WhatsApp</p>
<p class="font-body-md text-body-md text-on-surface">+62 851 1755 1850</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Setiap hari, 09:00 - 22:00</p>
</div>
</div>
<!-- Alamat -->
<div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant/20 flex items-start gap-md hover:bg-surface-tint transition-colors duration-300">
<div class="w-12 h-12 bg-primary-container/20 rounded-lg flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary">location_on</span>
</div>
<div>
<p class="font-label-lg text-label-lg text-primary uppercase tracking-wider mb-xs">Alamat</p>
<p class="font-body-md text-body-md text-on-surface">Jl. Kopi No. 17, Purwokerto, Indonesia</p>
</div>
</div>
</div>
</div>
<!-- Right Side: Message Form (frontend-only, tanpa backend) -->
<div class="lg:col-span-7 reveal-on-scroll" data-delay="300">
<form class="bg-surface-container-lowest p-lg md:p-xl rounded-xl border border-outline-variant/30 shadow-lg shadow-primary/5" id="contactForm" data-turbo="false" onsubmit="return false;">
<div class="grid grid-cols-1 md:grid-cols-2 gap-md mb-md">
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant block ml-1">Nama Depan <span class="text-red-500">*</span></label>
<input name="first_name" required class="w-full bg-surface-container-low border-outline-variant/50 rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="Masukkan nama depan" type="text"/>
</div>
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant block ml-1">Nama Belakang</label>
<input name="last_name" class="w-full bg-surface-container-low border-outline-variant/50 rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="Masukkan nama belakang" type="text"/>
</div>
</div>
<div class="space-y-md">
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant block ml-1">Email <span class="text-red-500">*</span></label>
<input name="email" required class="w-full bg-surface-container-low border-outline-variant/50 rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="example@example.com" type="email"/>
</div>
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant block ml-1">Subjek <span class="text-red-500">*</span></label>
<input name="subject" required class="w-full bg-surface-container-low border-outline-variant/50 rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="Reservasi / Pesanan / Pertanyaan" type="text"/>
</div>
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant block ml-1">Pesan <span class="text-red-500">*</span></label>
<textarea name="message" required class="w-full bg-surface-container-low border-outline-variant/50 rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none resize-none" placeholder="Tulis pesanmu di sini..." rows="4"></textarea>
</div>
</div>
<button class="w-full mt-lg bg-primary hover:bg-deep-forest text-on-primary py-md rounded-lg font-headline-md text-headline-md flex items-center justify-center gap-sm transition-all shadow-md active:scale-[0.98]" type="submit">
<span>Kirim Pesan</span>
<span class="material-symbols-outlined">send</span>
</button>
</form>
</div>
</div>
</main>

    @push('scripts')
        <script>
        // Form kontak hanya simulasi frontend (tanpa database). Pola turbo:load + daftar sekali.
        if (!window.__kontakInit) {
            window.__kontakInit = true;
            const bindContactForm = () => {
                const form = document.getElementById('contactForm');
                if (!form) return;
                form.addEventListener('submit', (e) => {
                    e.preventDefault();
                    if (!form.checkValidity()) { form.reportValidity(); return; }
                    const btn = form.querySelector('button[type="submit"]');
                    btn.innerHTML = `<span class="material-symbols-outlined">check_circle</span> Terima kasih, pesanmu tercatat!`;
                    btn.disabled = true;
                    form.reset();
                    setTimeout(() => {
                        btn.disabled = false;
                        btn.innerHTML = `<span>Kirim Pesan</span> <span class="material-symbols-outlined">send</span>`;
                    }, 3000);
                });
            };
            document.addEventListener('turbo:load', bindContactForm);
            document.addEventListener('DOMContentLoaded', () => { if (!window.Turbo) bindContactForm(); });
        }
        </script>
    @endpush
</x-layout>
