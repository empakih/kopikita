<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        // Bersihkan data lama agar tidak dobel saat reseeding
        Faq::truncate();

        Faq::insert([
            // FAQ UMUM (Beranda)
            [
                'category' => 'Umum',
                'question' => 'Apa manfaat menggunakan Smartani?',
                'answer' => 'Smartani membantu meningkatkan efisiensi operasional greenhouse, menekan biaya penggunaan air dan energi, serta meningkatkan kualitas dan kuantitas panen melalui pemantauan dan otomasi berbasis data (IoT & AI).',
                'is_active' => true,
            ],
            [
                'category' => 'Umum',
                'question' => 'Apa saja yang bisa dipantau oleh Smartani?',
                'answer' => 'Sistem kami dapat memantau berbagai parameter penting seperti suhu udara, kelembapan udara, kelembapan tanah, intensitas cahaya, tingkat pH, dan nutrisi dalam tanah secara real-time.',
                'is_active' => true,
            ],
            [
                'category' => 'Umum',
                'question' => 'Apakah ada batasan luas greenhouse untuk Smartani?',
                'answer' => 'Tidak ada batasan. Sistem Smartani dirancang secara modular dan terukur (scalable), sehingga cocok untuk digunakan baik pada greenhouse skala kecil (hobi) maupun skala komersial besar.',
                'is_active' => true,
            ],
            [
                'category' => 'Umum',
                'question' => 'Bagaimana proses pemesanan Smartani?',
                'answer' => 'Anda dapat melakukan pemesanan dengan menghubungi tim sales kami melalui halaman Kontak, atau berkonsultasi terlebih dahulu mengenai kebutuhan spesifik greenhouse Anda agar kami dapat memberikan solusi yang paling tepat.',
                'is_active' => true,
            ],
            [
                'category' => 'Umum',
                'question' => 'Bagaimana cara pemasangan Smartani?',
                'answer' => 'Proses instalasi akan dilakukan oleh teknisi profesional kami. Tim Smartani akan memastikan semua sensor dan perangkat keras terhubung dengan baik ke sistem cloud sebelum serah terima.',
                'is_active' => true,
            ],
            
            // FAQ PRODUK (Katalog)
            [
                'category' => 'Produk',
                'question' => 'Apa itu Smartani Greenhouse Kit?',
                'answer' => 'Smartani Greenhouse Kit adalah paket solusi IoT lengkap untuk memantau dan mengontrol kondisi greenhouse secara otomatis melalui smartphone.',
                'is_active' => true,
            ],
            [
                'category' => 'Produk',
                'question' => 'Bagaimana cara kerja sistem irigasi otomatisnya?',
                'answer' => 'Sistem menggunakan sensor kelembapan tanah untuk mendeteksi tingkat kekeringan. Saat tanah kering di bawah batas optimal, pompa air akan menyala otomatis hingga tanah kembali lembap.',
                'is_active' => true,
            ],
            [
                'category' => 'Produk',
                'question' => 'Apakah sensor-sensor ini tahan air dan cuaca ekstrem?',
                'answer' => 'Ya, sebagian besar sensor hardware eksternal kami sudah memiliki sertifikasi IP67 yang tahan terhadap air hujan dan debu tebal.',
                'is_active' => true,
            ],
            [
                'category' => 'Produk',
                'question' => 'Berapa lama garansi produk Smartani?',
                'answer' => 'Semua produk hardware memiliki garansi resmi 1 tahun untuk kerusakan pabrik (bukan kesalahan pengguna). Kami juga menyediakan layanan perbaikan setelah garansi habis.',
                'is_active' => true,
            ],
            [
                'category' => 'Produk',
                'question' => 'Apakah saya butuh koneksi WiFi di kebun?',
                'answer' => 'Kami menyediakan varian dengan konektivitas LoRaWAN yang dapat menjangkau hingga radius 10KM tanpa WiFi, cocok untuk area lahan yang sulit sinyal seluler.',
                'is_active' => true,
            ],
            
            // FAQ ARTIKEL
            [
                'category' => 'Artikel',
                'question' => 'Seberapa sering artikel edukasi pertanian diperbarui?',
                'answer' => 'Tim kami mengusahakan publikasi artikel terbaru yang berisi tips, trik, dan update teknologi pertanian setiap minggu.',
                'is_active' => true,
            ],
            [
                'category' => 'Artikel',
                'question' => 'Apakah saya bisa membagikan artikel Smartani ke media sosial?',
                'answer' => 'Tentu saja! Kami sangat menyarankan Anda membagikan artikel edukatif kami ke Facebook, WhatsApp, atau media sosial lainnya melalui tombol bagikan yang tersedia.',
                'is_active' => true,
            ],
            [
                'category' => 'Artikel',
                'question' => 'Siapa penulis di balik artikel Smartani?',
                'answer' => 'Artikel kami ditulis oleh tim ahli agronomi yang bekerja sama dengan teknisi IoT, memastikan informasi yang disampaikan selalu berbasis sains dan praktik lapangan terbaik.',
                'is_active' => true,
            ],
        ]);
    }
}
