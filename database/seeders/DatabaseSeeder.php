<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $detail = '<h3>Detail Produk</h3><p>Produk pilihan Kopikita dengan kualitas terjaga dan dikemas rapi. Cocok untuk pemula maupun yang sudah terbiasa menyeduh kopi sendiri di rumah.</p><ul><li>Kualitas terjamin &amp; bergaransi toko</li><li>Dikemas aman untuk pengiriman</li><li>Bisa konsultasi pemakaian dengan tim kami</li><li>Tersedia untuk pembelian satuan maupun grosir</li></ul>';

        // Produk (biji kopi & alat seduh). created_at di-stagger agar urutan "terbaru" konsisten.
        $products = [
            ['name' => 'Biji Kopi Arabika Gayo 200g', 'price' => 65000, 'price_label' => 'Rp 65.000', 'description' => 'Arabika Gayo dengan profil rasa fruity dan body sedang. Tersedia biji utuh atau bubuk.', 'content' => $detail, 'category' => 'Biji Kopi', 'image' => null, 'is_bestseller' => true],
            ['name' => 'Biji Kopi Robusta Temanggung 200g', 'price' => 50000, 'price_label' => 'Rp 50.000', 'description' => 'Robusta pekat dan tinggi kafein, cocok untuk kopi tubruk dan espresso.', 'content' => $detail, 'category' => 'Biji Kopi', 'image' => null, 'is_bestseller' => false],
            ['name' => 'House Blend 1kg', 'price' => 180000, 'price_label' => 'Rp 180.000', 'description' => 'Racikan andalan Kopikita, seimbang dan konsisten. Hemat untuk stok harian.', 'content' => $detail, 'category' => 'Biji Kopi', 'image' => null, 'is_bestseller' => true],
            ['name' => 'Single Origin Kerinci 200g', 'price' => 75000, 'price_label' => 'Rp 75.000', 'description' => 'Single origin dari dataran tinggi Kerinci dengan aroma bunga dan rasa manis bersih.', 'content' => $detail, 'category' => 'Biji Kopi', 'image' => null, 'is_bestseller' => false],
            ['name' => 'V60 Dripper Keramik', 'price' => 95000, 'price_label' => 'Rp 95.000', 'description' => 'Dripper keramik untuk seduh V60. Menghasilkan kopi yang bersih dan jernih.', 'content' => $detail, 'category' => 'Alat Seduh', 'image' => null, 'is_bestseller' => true],
            ['name' => 'French Press 600ml', 'price' => 120000, 'price_label' => 'Rp 120.000', 'description' => 'Seduh praktis dengan body penuh. Kapasitas pas untuk 2-3 cangkir.', 'content' => $detail, 'category' => 'Alat Seduh', 'image' => null, 'is_bestseller' => false],
            ['name' => 'Aeropress', 'price' => 250000, 'price_label' => 'Rp 250.000', 'description' => 'Alat seduh serbaguna dan portabel. Cepat, bersih, dan mudah dibawa.', 'content' => $detail, 'category' => 'Alat Seduh', 'image' => null, 'is_bestseller' => false],
            ['name' => 'Manual Coffee Grinder', 'price' => 220000, 'price_label' => 'Rp 220.000', 'description' => 'Grinder manual dengan burr keramik, hasil gilingan konsisten tanpa listrik.', 'content' => $detail, 'category' => 'Grinder', 'image' => null, 'is_bestseller' => false],
            ['name' => 'Electric Burr Grinder', 'price' => 650000, 'price_label' => 'Rp 650.000', 'description' => 'Grinder listrik dengan pengaturan tingkat kehalusan untuk berbagai metode seduh.', 'content' => $detail, 'category' => 'Grinder', 'image' => null, 'is_bestseller' => true],
            ['name' => 'Moka Pot 3 Cup', 'price' => 175000, 'price_label' => 'Rp 175.000', 'description' => 'Pembuat kopi ala Italia di atas kompor. Menghasilkan kopi pekat mirip espresso.', 'content' => $detail, 'category' => 'Mesin', 'image' => null, 'is_bestseller' => false],
        ];

        foreach (array_values($products) as $i => $row) {
            $product = Product::make($row);
            $product->created_at = $product->updated_at = now()->subMinutes($i);
            $product->save();
        }

        // Artikel / blog (urut berdasarkan published_at).
        Article::create(['title' => 'Beda Arabika dan Robusta: Mana yang Cocok Buat Kamu?', 'slug' => 'beda-arabika-robusta', 'content' => '<p>Arabika cenderung lebih asam dengan aroma buah dan bunga, sementara robusta lebih pahit, pekat, dan tinggi kafein. Pilihan tergantung selera...</p>', 'category' => 'Edukasi', 'author' => 'Tim Kopikita', 'published_at' => now()]);
        Article::create(['title' => '5 Tips Menyeduh Kopi Enak di Rumah', 'slug' => 'tips-seduh-kopi-di-rumah', 'content' => '<p>Gunakan biji segar, giling tepat sebelum menyeduh, perhatikan rasio kopi dan air, serta jaga suhu air sekitar 90-96°C...</p>', 'category' => 'Tips', 'author' => 'Tim Kopikita', 'published_at' => now()->subDays(1)]);
        Article::create(['title' => 'Mengenal Metode Manual Brew: V60, Aeropress, hingga Tubruk', 'slug' => 'mengenal-manual-brew', 'content' => '<p>Setiap metode seduh menghasilkan karakter rasa yang berbeda. V60 menonjolkan kejernihan rasa, sedangkan tubruk lebih body dan pekat...</p>', 'category' => 'Edukasi', 'author' => 'Tim Kopikita', 'published_at' => now()->subDays(3)]);
        Article::create(['title' => 'Resep Es Kopi Susu Gula Aren ala Kopikita', 'slug' => 'resep-es-kopi-susu-gula-aren', 'content' => '<p>Campurkan dua shot espresso, 30ml gula aren cair, dan susu segar. Tambahkan es batu secukupnya, aduk, dan nikmati...</p>', 'category' => 'Resep', 'author' => 'Tim Kopikita', 'published_at' => now()->subDays(4)]);
        Article::create(['title' => 'Kenapa Biji Kopi Harus Disimpan dengan Benar?', 'slug' => 'cara-simpan-biji-kopi', 'content' => '<p>Biji kopi mudah kehilangan aroma jika terkena udara, cahaya, dan kelembapan. Simpan di wadah kedap udara dan tempat sejuk...</p>', 'category' => 'Tips', 'author' => 'Tim Kopikita', 'published_at' => now()->subDays(6)]);
        Article::create(['title' => 'Sejarah Singkat Kopi di Indonesia', 'slug' => 'sejarah-kopi-indonesia', 'content' => '<p>Kopi masuk ke Nusantara sejak abad ke-17 dan kini Indonesia menjadi salah satu produsen kopi terbesar di dunia...</p>', 'category' => 'Edukasi', 'author' => 'Tim Kopikita', 'published_at' => now()->subDays(8)]);

        // Akun admin untuk login panel /admin.
        User::firstOrCreate(
            ['email' => 'admin@kopikita.id'],
            ['name' => 'Admin Kopikita', 'password' => Hash::make('password123')],
        );
    }
}
