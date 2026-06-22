// Turbo: pindah halaman tanpa reload penuh (terasa instan, ala SPA).
import '@hotwired/turbo';

// Filter kategori di browser (dipakai katalog & artikel). Tiap baris tombol
// ditandai data-filter-items (selektor kartu) + data-filter-empty (pesan kosong).
function initCategoryFilters() {
    document.querySelectorAll('[data-filter-items]').forEach((bar) => {
        const buttons = bar.querySelectorAll('.filter-btn');
        const items = document.querySelectorAll(bar.dataset.filterItems);
        const empty = bar.dataset.filterEmpty ? document.querySelector(bar.dataset.filterEmpty) : null;
        if (!buttons.length || !items.length) return;

        buttons.forEach((btn) => btn.addEventListener('click', () => {
            buttons.forEach((b) => {
                b.classList.remove('text-primary', 'border-b-2', 'border-primary', 'active');
                b.classList.add('text-on-surface-variant');
            });
            btn.classList.remove('text-on-surface-variant');
            btn.classList.add('text-primary', 'border-b-2', 'border-primary', 'active');

            const cat = btn.dataset.category;
            let shown = 0;
            items.forEach((item) => {
                const match = cat === 'Semua' || item.dataset.category === cat;
                item.style.display = match ? '' : 'none';
                if (match) { item.classList.add('is-revealed'); shown++; }
            });
            if (empty) empty.classList.toggle('hidden', shown > 0);
        }));
    });
}

document.addEventListener('turbo:load', initCategoryFilters);
document.addEventListener('DOMContentLoaded', () => { if (!window.Turbo) initCategoryFilters(); });
