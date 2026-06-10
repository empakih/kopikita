<x-layout title="Konsultasi | Smartani">
    @push('styles')
        <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-header {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
    </style>
    @endpush

    <main class="pt-32 pb-xl px-gutter max-w-container-max mx-auto min-h-screen">
<!-- Hero Section -->
<div class="mb-xl text-center max-w-3xl mx-auto reveal-on-scroll" data-delay="100">
<h1 class="font-headline-xl text-headline-xl text-primary mb-sm">Konsultasikan Greenhouse Anda</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">Tim ahli agroteknologi kami siap membantu Anda merancang dan mengoptimalkan ekosistem pertanian digital yang presisi.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-lg items-start">
<!-- Left Side: Contact Details -->
<div class="lg:col-span-5 space-y-md reveal-on-scroll" data-delay="200">
<div class="relative rounded-xl overflow-hidden aspect-video shadow-sm border border-outline-variant/30 group">
<img alt="Greenhouse Concept" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A futuristic, high-tech greenhouse interior at sunset, featuring modular hydroponic systems and glowing LED growth lights. The atmosphere is professional and serene with lush green foliage and clean metallic structures. The lighting is warm and golden, reflecting off sleek glass surfaces in a premium agrotech laboratory setting. Emerald green accents punctuate the botanical environment." src="https://placehold.co/600x400/50C878/FFFFFF?text=A+futuristic%2C+high-tech+greenhouse+interior+at+sunset%2C+featuring+modular+hydroponic+systems+and+glowing+LED+growth+lights.+The+atmosphere+is+professional+and+serene+with+lush+green+foliage+and+clean+metallic+structures.+The+lighting+is+warm+and+golden%2C+reflecting+off+sleek+glass+surfaces+in+a+premium+agrotech+laboratory+setting.+Emerald+green+accents+punctuate+the+botanical+environment."/>
<div class="absolute inset-0 bg-gradient-to-t from-deep-forest/60 to-transparent"></div>
<div class="absolute bottom-md left-md text-on-primary">
<p class="font-label-lg text-label-lg opacity-80">Smartani Agrotech</p>
<p class="font-headline-md text-headline-md">Infrastruktur Masa Depan</p>
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
<p class="font-body-md text-body-md text-on-surface">info.smartani@gmail.com</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Respon dalam 24 jam kerja</p>
</div>
</div>
<!-- Telp -->
<div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant/20 flex items-start gap-md hover:bg-surface-tint transition-colors duration-300">
<div class="w-12 h-12 bg-primary-container/20 rounded-lg flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary">call</span>
</div>
<div>
<p class="font-label-lg text-label-lg text-primary uppercase tracking-wider mb-xs">Telepon</p>
<p class="font-body-md text-body-md text-on-surface">+62 851 1755 1850</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Senin - Jumat, 09:00 - 17:00</p>
</div>
</div>
<!-- Alamat -->
<div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant/20 flex items-start gap-md hover:bg-surface-tint transition-colors duration-300">
<div class="w-12 h-12 bg-primary-container/20 rounded-lg flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary">location_on</span>
</div>
<div>
<p class="font-label-lg text-label-lg text-primary uppercase tracking-wider mb-xs">Alamat</p>
<p class="font-body-md text-body-md text-on-surface">Purwokerto, Indonesia</p>
</div>
</div>
</div>
</div>
<!-- Right Side: Consultation Form -->
<div class="lg:col-span-7 reveal-on-scroll" data-delay="300">
<form action="{{ route('contact.submit') }}" method="POST" class="bg-surface-container-lowest p-lg md:p-xl rounded-xl border border-outline-variant/30 shadow-lg shadow-primary/5" id="consultationForm">
@csrf
<div class="grid grid-cols-1 md:grid-cols-2 gap-md mb-md">
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant block ml-1">Nama Depan <span class="text-red-500">*</span></label>
<input name="first_name" required class="w-full bg-surface-container-low border-outline-variant/50 rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="Masukkan nama depan" type="text"/>
</div>
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant block ml-1">Nama Belakang <span class="text-red-500">*</span></label>
<input name="last_name" required class="w-full bg-surface-container-low border-outline-variant/50 rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="Masukkan nama belakang" type="text"/>
</div>
</div>
<div class="space-y-md">
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant block ml-1">Email <span class="text-red-500">*</span></label>
<input name="email" required class="w-full bg-surface-container-low border-outline-variant/50 rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="example@example.com" type="email"/>
</div>
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant block ml-1">Nama Green House</label>
<input name="greenhouse_name" class="w-full bg-surface-container-low border-outline-variant/50 rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="Masukkan nama green house (opsional)" type="text"/>
</div>
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant block ml-1">Lokasi Green House</label>
<input name="greenhouse_location" class="w-full bg-surface-container-low border-outline-variant/50 rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="Masukkan lokasi green house (opsional)" type="text"/>
</div>
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant block ml-1">Subjek <span class="text-red-500">*</span></label>
<input name="subject" required class="w-full bg-surface-container-low border-outline-variant/50 rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="Masukkan subjek pesan" type="text"/>
</div>
<div class="space-y-xs">
<label class="font-label-lg text-label-lg text-on-surface-variant block ml-1">Konsultasi <span class="text-red-500">*</span></label>
<textarea name="message" required class="w-full bg-surface-container-low border-outline-variant/50 rounded-lg px-md py-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none resize-none" placeholder="Konsultasikan kendala Anda di sini..." rows="4"></textarea>
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
        document.addEventListener('turbo:load', () => {
            const form = document.getElementById('consultationForm');
            if (form) {
                form.addEventListener('submit', async (e) => {
                    e.preventDefault();
                    const btn = form.querySelector('button[type="submit"]');
                    const originalContent = btn.innerHTML;
                    
                    btn.disabled = true;
                    btn.innerHTML = `<span class="material-symbols-outlined animate-spin">progress_activity</span> Mengirim...`;
                    
                    try {
                        const formData = new FormData(form);
                        const response = await fetch(form.action, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        });

                        const result = await response.json();

                        if (response.ok) {
                            btn.classList.replace('bg-primary', 'bg-secondary');
                            btn.innerHTML = `<span class="material-symbols-outlined">check_circle</span> Terkirim!`;
                            form.reset();
                        } else {
                            btn.innerHTML = `<span class="material-symbols-outlined">error</span> Gagal Dikirim`;
                        }
                    } catch (error) {
                        btn.innerHTML = `<span class="material-symbols-outlined">error</span> Terjadi Kesalahan`;
                    } finally {
                        setTimeout(() => {
                            btn.disabled = false;
                            if(btn.classList.contains('bg-secondary')) {
                                btn.classList.replace('bg-secondary', 'bg-primary');
                            }
                            btn.innerHTML = originalContent;
                        }, 3000);
                    }
                });
            }

        // Add focus effects to inputs
        const inputs = document.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.querySelector('label').classList.replace('text-on-surface-variant', 'text-primary');
            });
            input.addEventListener('blur', () => {
                input.parentElement.querySelector('label').classList.replace('text-primary', 'text-on-surface-variant');
            });
        });
        });
    </script>
    @endpush
</x-layout>
