<x-filament-panels::page>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
        <!-- Contact Info -->
        <div class="fi-section p-8 space-y-6">
            <h2 class="text-2xl font-bold text-white mb-2">Hubungi Kami</h2>
            <p class="text-gray-400 text-sm">Punya pertanyaan tentang implementasi Smartani di lahan Anda? Tim ahli kami siap membantu.</p>
            
            <div class="flex items-center gap-4 text-gray-300">
                <div class="p-3 bg-[#50C878]/20 rounded-lg text-[#50C878]">
                    <x-heroicon-o-map-pin class="w-6 h-6" />
                </div>
                <div>
                    <h4 class="font-semibold text-white">Kantor Pusat</h4>
                    <p class="text-sm">Jl. Pertanian Presisi No. 12, Jakarta</p>
                </div>
            </div>

            <div class="flex items-center gap-4 text-gray-300">
                <div class="p-3 bg-[#BF40BF]/20 rounded-lg text-[#BF40BF]">
                    <x-heroicon-o-envelope class="w-6 h-6" />
                </div>
                <div>
                    <h4 class="font-semibold text-white">Email</h4>
                    <p class="text-sm">halo@smartani.id</p>
                </div>
            </div>

            <div class="flex items-center gap-4 text-gray-300">
                <div class="p-3 bg-[#50C878]/20 rounded-lg text-[#50C878]">
                    <x-heroicon-o-phone class="w-6 h-6" />
                </div>
                <div>
                    <h4 class="font-semibold text-white">Telepon</h4>
                    <p class="text-sm">+62 811 1234 5678</p>
                </div>
            </div>
        </div>

        <!-- Contact Form (Visual Mockup) -->
        <div class="fi-section p-8">
            <h3 class="text-xl font-bold text-white mb-6">Kirim Pesan</h3>
            <form class="space-y-4" onsubmit="event.preventDefault()">
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-1">Nama Lengkap</label>
                    <input type="text" class="w-full bg-[#0A0A0A] border border-white/10 rounded-lg p-3 text-white focus:ring-2 focus:ring-[#50C878] focus:border-transparent transition-all outline-none" placeholder="Masukkan nama Anda">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-1">Email</label>
                    <input type="email" class="w-full bg-[#0A0A0A] border border-white/10 rounded-lg p-3 text-white focus:ring-2 focus:ring-[#50C878] focus:border-transparent transition-all outline-none" placeholder="alamat@email.com">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-1">Pesan</label>
                    <textarea rows="4" class="w-full bg-[#0A0A0A] border border-white/10 rounded-lg p-3 text-white focus:ring-2 focus:ring-[#50C878] focus:border-transparent transition-all outline-none" placeholder="Bagaimana kami bisa membantu?"></textarea>
                </div>
                <button class="w-full bg-[#50C878] hover:bg-[#40b065] text-[#0A0A0A] font-bold py-3 rounded-lg fi-btn-color-primary mt-2">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>
</x-filament-panels::page>
