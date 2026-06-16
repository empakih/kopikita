# 🌱 Smartani - Precision Agriculture CMS

Selamat datang di repositori proyek **Smartani**! 
Proyek ini adalah sebuah *Dynamic Company Profile* berbasis *Content Management System (CMS)* yang dirancang untuk mempromosikan teknologi *greenhouse* cerdas (IoT) dengan pendekatan yang elegan, interaktif, dan *"Down to Earth"*.

---

## 📑 Daftar Isi
1. [Deskripsi Proyek](#-deskripsi-proyek)
2. [Tech Stack](#-tech-stack)
3. [Fitur-Fitur Utama](#-fitur-fitur-utama)
4. [Catatan Penting dari Dosen (Requirements)](#-catatan-penting-dari-dosen-requirements)
5. [Struktur Direktori Penting](#-struktur-direktori-penting)
6. [Panduan Instalasi & Menjalankan Lokal](#-panduan-instalasi--menjalankan-lokal)
7. [Workflow & Kolaborasi Tim](#-workflow--kolaborasi-tim)

---

## 🎯 Deskripsi Proyek
Website ini dirancang bukan sekadar sebagai *landing page* statis, melainkan platform dinamis di mana **semua konten visual dan teks dikelola langsung dari *Dashboard Admin***. 
Hal ini bertujuan untuk mempermudah pembaruan konten dan mengantisipasi ekspansi bisnis Smartani di masa depan (misal: merambah ke sektor peternakan) tanpa perlu membongkar ulang *source code*.

---

## 🚀 Tech Stack
Proyek ini dibangun menggunakan teknologi modern yang berfokus pada kecepatan, keamanan, dan pengalaman *developer* yang menyenangkan:
- **Backend Framework:** Laravel 13 (PHP 8.3)
- **CMS / Admin Panel:** Filament (v3/v5.x)
- **Frontend Styling:** Tailwind CSS v4 + Vite
- **Database:** SQLite (Bisa dengan mudah di-*switch* ke MySQL untuk tahap *production*)
- **Icons & Fonts:** Material Symbols Outlined & Google Fonts (Inter)

---

## ✨ Fitur-Fitur Utama

### 1. Visualisasi Sensor Interaktif (Dinamis)
Menampilkan data indikator sensor (seperti Suhu, Kelembapan, pH Air, dll.) di halaman utama. Semua nama sensor, satuan, dan ikon **tidak di-*hardcode***, melainkan dikontrol dari CMS.

### 2. Katalog Produk & Layanan (Highlight Interaktif)
Menyoroti layanan unggulan Smartani (seperti jasa pembuatan *greenhouse* atau produk pelet) dengan *layout zig-zag* yang responsif. Terdapat fitur *pop-up/modal* interaktif untuk pengalaman pengguna (UX) yang lebih menarik tanpa teks yang membosankan.

### 3. Manajemen Artikel (SEO-Optimized)
Modul blog/berita untuk strategi *content marketing* (seperti Alodokter). Menggunakan **Rich Text Editor (CKEditor)** di *dashboard admin* agar teks dapat diatur tebal/miring dan disisipkan gambar. Dilengkapi dengan pengaturan *thumbnail* dan kategori.

### 4. Formulir Contact Us Terintegrasi
Pengunjung dapat langsung mengirimkan pesan atau permintaan konsultasi. Data tidak dikirim statis via email, melainkan masuk ke *database* dan dapat di-*review* oleh Admin melalui tabel khusus di panel Filament.

### 5. CMS Admin Dashboard
Panel kendali terpusat yang bersih (*clean UI*) yang ditujukan untuk **satu *role*** (Admin/Pemilik). Tidak ada sistem *role* berlapis karena web ini berfokus pada *company profile*, bukan *e-commerce* transaksional multi-user.

---

## 📋 Catatan Penting dari Dosen (Requirements)

Dokumen ini memuat rangkuman kesepakatan dan target yang **wajib dipatuhi** oleh seluruh anggota tim berdasarkan *review* dosen pembimbing:

1. **NO HARDCODING!** Semua data, gambar, dan teks di *front-end* wajib bersifat dinamis (mengambil dari *database*).
2. **Efisiensi Database (Clean Code):** Dilarang menggunakan tipe data yang boros. Contoh: *Field* nama tidak boleh menggunakan `TEXT`, gunakan `VARCHAR` dengan *length* secukupnya. Desain ERD harus melalui proses normalisasi yang benar.
3. **Layout & Animasi:**
   - Gunakan *Grid System* yang *fluid* dan responsif.
   - Terapkan layout *Zig-zag* untuk bagian keunggulan/fitur.
   - Perbanyak elemen interaktif seperti *hover effects* dan *pop-up video/simulasi* ketimbang sekadar teks statis.
4. **Visi Ekspansi Bisnis:** Arsitektur CMS harus siap menampung data baru jika Smartani nantinya berekspansi (misal ke sektor peternakan).
5. **Aturan Penamaan untuk Tugas Akhir (TA):** Jika proyek ini berlanjut menjadi bahan TA, **jangan** menggunakan merk dagang "Smartani" secara gamblang. Gunakan istilah akademis: **"Sistem Profil Perusahaan Precision Farming Berbasis Web"** atau sejenisnya.
6. **Agile Methodology:** Pengerjaan tidak boleh kaku. Prosesnya: *Mockup* UI/UX -> ACC Dosen -> *Coding Front-End & Back-End* -> Testing QA.

---

## 📂 Struktur Direktori Penting

Untuk memudahkan navigasi bagi *developer*, berikut adalah folder utama yang perlu Anda ketahui:

```text
smartani-final/
├── app/
│   ├── Filament/Resources/  # -> Logika Dashboard CMS Admin (CRUD Sensor, Artikel, dll)
│   ├── Http/Controllers/    # -> Logika Back-end Front-office (Mengirim data ke Blade)
│   └── Models/              # -> Definisi Database (Eloquent ORM)
├── database/
│   ├── migrations/          # -> Skema/Struktur Tabel Database (Jangan diedit manual di DB!)
│   └── database.sqlite      # -> File Database lokal Anda
├── resources/
│   ├── css/ & js/           # -> Asset Tailwind CSS V4 dan Scripts pendukung
│   └── views/               # -> File tampilan antarmuka (Blade HTML)
│       ├── components/      # -> Reusable UI (Navbar, Footer, Layout utama)
│       └── *.blade.php      # -> Halaman spesifik (home, katalog, artikel, dll)
└── routes/
    └── web.php              # -> Definisi semua rute URL website
```

---

## 🛠️ Panduan Instalasi & Menjalankan Lokal

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek ini di laptop masing-masing anggota tim:

### Prasyarat
- **PHP** >= 8.3
- **Composer** (Package Manager PHP)
- **Node.js & NPM** (Package Manager JS/CSS)
- *Git*

### Langkah-langkah

1. **Clone Repositori**
   ```bash
   git clone <link-repo-github-private-kalian>
   cd smartani-final
   ```

2. **Install Dependensi PHP & Node.js**
   ```bash
   composer install
   npm install
   ```

3. **Pengaturan *Environment***
   *Copy* file `.env.example` menjadi `.env`.
   ```bash
   cp .env.example .env
   ```
   Lalu *generate application key* Laravel:
   ```bash
   php artisan key:generate
   ```

4. **Siapkan Database**
   Default-nya SQLite. Buat dulu file database kosongnya, lalu jalankan migrasi **beserta seeder** (mengisi data demo + membuat akun admin):
   ```bash
   # Buat file SQLite kosong:
   #   Linux/Mac : touch database/database.sqlite
   #   Windows   : New-Item database/database.sqlite -ItemType File

   php artisan migrate --seed
   ```
   > ⚠️ Jika muncul error `could not find driver` (PHP tanpa driver SQLite), pakai MySQL:
   > set `DB_CONNECTION=mysql` + kredensial DB Anda di `.env`, lalu `php artisan migrate --seed`.

5. **Symlink Storage (Untuk Gambar/Media)**
   Agar gambar yang diupload via CMS bisa diakses oleh *front-end*:
   ```bash
   php artisan storage:link
   ```

6. **Jalankan Aplikasi**
   Anda membutuhkan **dua terminal/CMD** yang berjalan bersamaan:
   
   **Terminal 1 (Menjalankan server Laravel):**
   ```bash
   php artisan serve
   ```
   
   **Terminal 2 (Menjalankan Vite Asset bundler untuk Tailwind):**
   ```bash
   npm run dev
   ```

7. **Selesai! 🎉**
   - Website Utama bisa diakses di: `http://localhost:8000`
   - Dashboard CMS bisa diakses di: `http://localhost:8000/admin`
   - **Login Admin (otomatis dibuat oleh seeder):**
     - Email: `admin@smartani.id`
     - Password: `password123`

---

## 🤝 Workflow & Kolaborasi Tim

1. **Gunakan Branching:** Jangan langsung `push` ke `main`. Buat branch baru untuk setiap fitur (contoh: `git checkout -b fitur-artikel`).
2. **Commit yang Jelas:** Gunakan pesan commit yang deskriptif. (contoh: `git commit -m "feat: menambah halaman detail artikel"`).
3. **Pull Sebelum Push:** Selalu jalankan `git pull origin main` sebelum melakukan push untuk menghindari bentrok (*conflict*).
4. **Build Asset Sebelum Rilis:** Jika ada anggota yang bertugas di bagian rilis/production, pastikan selalu menjalankan `npm run build` sebelum *deployment* agar CSS dan JS ter-*compile* ukurannya.

---

## 🚀 Deployment (Produksi)

> ⚠️ **PENTING:** Setiap `push` ke branch **`main`** akan **otomatis men-deploy ke server produksi** (GitHub Actions → HestiaCP). Jadi jangan push langsung ke `main` kecuali memang siap rilis — pakai branch + Pull Request.

- **URL Produksi:** https://kelas-b-5.informatika-unjedir.web.id
- **Server:** HestiaCP (PHP 8.3, MySQL), deploy via `.github/workflows/deploy.yml`
- Kredensial server & database disimpan di **GitHub Secrets** (tidak ada di repo).
- Build `vendor/` dilakukan di CI (PHP 8.3) lalu di-upload — server tidak menjalankan `composer install`.

---
*Dibuat dengan ❤️ untuk kemajuan Pertanian Presisi di Indonesia.*
