<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Dummy Sensors
        \App\Models\Sensor::insert([
            ['name' => 'Suhu Udara', 'icon' => 'thermostat', 'value_dummy' => '28.5', 'unit' => '°C', 'description' => 'Suhu optimal terkendali', 'is_active' => true],
            ['name' => 'Kelembapan Udara', 'icon' => 'humidity_percentage', 'value_dummy' => '65', 'unit' => '%', 'description' => 'Mencegah jamur', 'is_active' => true],
            ['name' => 'Kelembapan Tanah', 'icon' => 'water_drop', 'value_dummy' => '42', 'unit' => '%', 'description' => 'Nutrisi optimal', 'is_active' => true],
            ['name' => 'Intensitas Cahaya', 'icon' => 'light_mode', 'value_dummy' => '850', 'unit' => 'Lux', 'description' => 'Fotosintesis stabil', 'is_active' => true],
        ]);

        // Dummy Features
        \App\Models\Feature::insert([
            [
                'title' => 'Smart Notification & Reminder Panen',
                'description' => 'Notifikasi otomatis untuk status nutrisi, jadwal penyiraman, dan waktu panen agar tidak terlewat.',
                'image_path' => null,
                'order_index' => 1,
                'is_active' => true
            ],
            [
                'title' => 'Dashboard & Otomasi Berbasis AI',
                'description' => 'Pompa menyala otomatis menyesuaikan kondisi ideal tanaman, dan bisa Anda kontrol langsung dari genggaman. Baik di rumah, bepergian, maupun berlibur, greenhouse tetap dapat dipantau lewat smartphone.',
                'image_path' => null,
                'order_index' => 2,
                'is_active' => true
            ],
            [
                'title' => 'Sensor Lingkungan Terintegrasi',
                'description' => 'Sensor yang memahami tanaman Anda. Satu sistem terintegrasi untuk membaca suhu, kelembapan udara, kelembapan tanah, intensitas cahaya, pH, hingga CO2 secara real-time.',
                'image_path' => null,
                'order_index' => 3,
                'is_active' => true
            ],
            [
                'title' => 'Ekosistem Hemat Energi',
                'description' => 'Dengan teknologi presisi, penggunaan air dan pupuk dapat berkurang drastis dan otomatis mendukung greenhouse eco friendly berstandar SDG. Bumi tenang, Anda pun senang.',
                'image_path' => null,
                'order_index' => 4,
                'is_active' => true
            ],
        ]);

        // Dummy Products
        $dummyContent = '<h3>Spesifikasi Teknis</h3><ul><li>Sensor presisi tinggi &amp; pemantauan real-time 24/7</li><li>Konektivitas stabil hingga radius 10KM (LoRaWAN/WiFi)</li><li>Desain tangguh dengan sertifikasi IP67 (Tahan air dan debu)</li><li>Konsumsi daya sangat rendah dengan baterai tahan lama</li></ul><p>Produk ini telah melalui uji ketahanan di lingkungan ekstrem untuk memastikan performa yang andal di berbagai kondisi cuaca lahan pertanian Anda.</p>';
        \App\Models\Product::insert([
            ['name' => 'Smart Greenhouse Kit', 'price' => 45000000, 'price_label' => 'Mulai dari Rp 45 Jt', 'description' => 'Paket lengkap otomasi greenhouse dari sensor hingga aktuator.', 'content' => $dummyContent, 'category' => 'Paket', 'image' => null],
            ['name' => 'IoT Sensor Node Pro', 'price' => 1500000, 'price_label' => 'Rp 1.500.000/node', 'description' => 'Sensor nirkabel presisi tinggi untuk memantau suhu, kelembapan, dan pH.', 'content' => $dummyContent, 'category' => 'Hardware', 'image' => null],
            ['name' => 'Smart Drip Irrigation', 'price' => 8000000, 'price_label' => 'Rp 8.000.000/set', 'description' => 'Sistem irigasi tetes pintar yang menyiram tanaman sesuai kebutuhan secara otomatis.', 'content' => $dummyContent, 'category' => 'Hardware', 'image' => null],
            ['name' => 'Smartani Dashboard', 'price' => 500000, 'price_label' => 'Rp 500.000/bln', 'description' => 'Akses dashboard analitik premium dan sistem prediksi panen berbasis AI.', 'content' => $dummyContent, 'category' => 'Software', 'image' => null],
            ['name' => 'LED Grow Light Auto', 'price' => 2500000, 'price_label' => 'Rp 2.500.000/lampu', 'description' => 'Lampu LED spektrum penuh yang menyala otomatis sesuai kebutuhan fotosintesis.', 'content' => $dummyContent, 'category' => 'Hardware', 'image' => null],
            ['name' => 'Smartani Weather Station', 'price' => 12000000, 'price_label' => 'Rp 12.000.000', 'description' => 'Stasiun cuaca mini untuk memantau curah hujan, arah angin, dan iklim mikro.', 'content' => $dummyContent, 'category' => 'Hardware', 'image' => null],
            ['name' => 'Soil NPK Sensor', 'price' => 3200000, 'price_label' => 'Rp 3.200.000', 'description' => 'Sensor tanah khusus untuk mengukur kadar Nitrogen, Fosfor, dan Kalium secara langsung.', 'content' => $dummyContent, 'category' => 'Hardware', 'image' => null],
            ['name' => 'Smart Pest Control System', 'price' => 6500000, 'price_label' => 'Rp 6.500.000', 'description' => 'Alat pembasmi hama ultrasonik pintar dengan deteksi inframerah.', 'content' => $dummyContent, 'category' => 'Hardware', 'image' => null],
            ['name' => 'Smartani Mobile App Premium', 'price' => 250000, 'price_label' => 'Rp 250.000/bln', 'description' => 'Aplikasi kontrol mobile untuk asisten pertanian mandiri dengan fitur konsultasi ahli terintegrasi.', 'content' => $dummyContent, 'category' => 'Software', 'image' => null],
            ['name' => 'Automatic pH Adjuster', 'price' => 9500000, 'price_label' => 'Rp 9.500.000', 'description' => 'Sistem otomatis untuk menyeimbangkan pH air irigasi tanaman hidroponik.', 'content' => $dummyContent, 'category' => 'Hardware', 'image' => null],
            ['name' => 'CO2 Generator Controller', 'price' => 4800000, 'price_label' => 'Rp 4.800.000', 'description' => 'Pengatur pelepasan gas CO2 otomatis dalam greenhouse guna memaksimalkan fotosintesis.', 'content' => $dummyContent, 'category' => 'Hardware', 'image' => null],
            ['name' => 'Smart Feed Water Pump', 'price' => 3500000, 'price_label' => 'Rp 3.500.000', 'description' => 'Pompa air nutrisi pintar bertekanan stabil yang terhubung dengan sistem sensor.', 'content' => $dummyContent, 'category' => 'Hardware', 'image' => null],
        ]);

        // Dummy Articles
        \App\Models\Article::insert([
            ['title' => 'Cara Meningkatkan Yield Panen hingga 30% dengan Sensor IoT', 'slug' => 'meningkatkan-yield-panen', 'content' => '<p>Penggunaan sensor presisi dapat membantu tanaman mendapatkan nutrisi tepat waktu, sehingga panen meningkat drastis...</p>', 'category' => 'Tips & Trik', 'published_at' => now()],
            ['title' => 'Mengenal Sistem Irigasi Cerdas Hemat Air', 'slug' => 'sistem-irigasi-cerdas', 'content' => '<p>Krisis air menuntut inovasi. Smart Drip Irrigation menyiram tanaman berdasarkan kelembapan tanah, menghemat air hingga 40%...</p>', 'category' => 'Edukasi', 'published_at' => now()->subDays(1)],
            ['title' => 'Teknologi AI di Masa Depan Pertanian Indonesia', 'slug' => 'ai-masa-depan-pertanian', 'content' => '<p>Kecerdasan buatan kini merambah sektor agrikultur, menganalisis jutaan titik data untuk memprediksi serangan hama...</p>', 'category' => 'Teknologi', 'published_at' => now()->subDays(3)],
            ['title' => 'Panduan Lengkap Membangun Smart Greenhouse Mandiri', 'slug' => 'membangun-smart-greenhouse', 'content' => '<p>Membangun greenhouse tidak sesulit yang dibayangkan. Berikut langkah-langkah instalasi sensor dan aktuator dasar...</p>', 'category' => 'Edukasi', 'published_at' => now()->subDays(4)],
            ['title' => 'Mengapa pH Tanah Sangat Memengaruhi Kualitas Tanaman?', 'slug' => 'ph-tanah-kualitas-tanaman', 'content' => '<p>Tanah yang terlalu asam atau basa menghambat penyerapan pupuk. Pelajari cara menjaga pH tetap netral di sini...</p>', 'category' => 'Tips & Trik', 'published_at' => now()->subDays(5)],
            ['title' => 'Mengenal Pupuk Organik Cair Berbasis Mikrobiologi', 'slug' => 'pupuk-organik-cair-mikro', 'content' => '<p>Mikroorganisme baik mampu mempercepat pemulihan unsur hara tanah yang rusak akibat penggunaan kimia berlebih...</p>', 'category' => 'Edukasi', 'published_at' => now()->subDays(6)],
            ['title' => 'Cara Mengatasi Hama Ulat Grayak dengan Pestisida Nabati', 'slug' => 'pestisida-nabati-ulat-grayak', 'content' => '<p>Ulat grayak sering menyerang tanaman secara mendadak. Gunakan larutan daun mimba sebagai solusi alami yang aman...</p>', 'category' => 'Tips & Trik', 'published_at' => now()->subDays(7)],
            ['title' => 'Pentingnya Sistem Drainase yang Baik pada Lahan Terbuka', 'slug' => 'sistem-drainase-lahan-terbuka', 'content' => '<p>Genangan air berlebih di akar tanaman memicu kebusukan dan serangan jamur patogen. Pelajari perancangan parit yang benar...</p>', 'category' => 'Tips & Trik', 'published_at' => now()->subDays(8)],
            ['title' => 'Tren Urban Farming: Bertani di Tengah Keterbatasan Lahan', 'slug' => 'tren-urban-farming', 'content' => '<p>Pertanian perkotaan terus berkembang pesat dengan teknik vertikultur dan instalasi rak hidroponik hemat tempat...</p>', 'category' => 'Edukasi', 'published_at' => now()->subDays(9)],
            ['title' => 'Kisah Sukses Petani Melon Milenial dengan IoT Smartani', 'slug' => 'kisah-sukses-melon-iot', 'content' => '<p>Dengan mengotomatiskan pemberian nutrisi dan memantau suhu greenhouse, panen melon premium melimpah tanpa kendala cuaca...</p>', 'category' => 'Edukasi', 'published_at' => now()->subDays(10)],
            ['title' => 'Masa Depan Ketahanan Pangan Nasional Berbasis Agro-Teknologi', 'slug' => 'ketahanan-pangan-agro-tech', 'content' => '<p>Penerapan teknologi pertanian modern menjadi kunci dalam menghadapi tantangan perubahan iklim ekstrem di masa depan...</p>', 'category' => 'Teknologi', 'published_at' => now()->subDays(11)],
        ]);
        // Seed FAQs
        $this->call(FaqSeeder::class);

        // Create Admin User
        \App\Models\User::firstOrCreate(
            ['email' => 'admin@smartani.id'],
            [
                'name' => 'Admin Smartani',
                'password' => \Illuminate\Support\Facades\Hash::make('password123'),
            ]
        );
    }
}
