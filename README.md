# ☕ Kopikita

Website **toko biji kopi & alat seduh** — pelanggan bisa lihat katalog produk dan baca artikel seputar kopi, sementara admin mengelola isinya lewat dashboard.

Dibangun dengan **Laravel + Filament**. Proyek kuliah **Pemweb II (CPMK4)**, sengaja dibuat **sederhana supaya mudah dijelaskan** (routing → controller → model → migration → Blade + CRUD admin).

---

## 📑 Daftar Isi

1. [Tech Stack](#-tech-stack)
2. [Fitur](#-fitur)
3. [Prasyarat (WAJIB dibaca dulu)](#-prasyarat-wajib-dibaca-dulu)
4. [Cara Install (langkah demi langkah)](#-cara-install-langkah-demi-langkah)
5. [Menjalankan Aplikasi](#-menjalankan-aplikasi)
6. [Akun Admin](#-akun-admin)
7. [Perintah yang Sering Dipakai](#-perintah-yang-sering-dipakai)
8. [Struktur Folder Penting](#-struktur-folder-penting)
9. [Troubleshooting (kalau error)](#-troubleshooting-kalau-error)
10. [Alur Kerja Tim (Git)](#-alur-kerja-tim-git)
11. [Deployment (Produksi)](#-deployment-produksi)

---

## 🚀 Tech Stack

| Bagian | Teknologi |
|--------|-----------|
| Framework | Laravel 13 (PHP 8.3+) |
| Admin Panel / CMS | Filament v5 |
| Styling | Tailwind CSS v4 (di-build pakai Vite) |
| Navigasi cepat | Hotwired **Turbo** (pindah halaman tanpa reload, ala SPA) |
| Database | **SQLite** (default, paling gampang) — bisa diganti MySQL |
| Font & Ikon | Google Fonts (Inter) + Material Symbols |

Hanya ada **2 entitas** di database: **Product** (biji kopi & alat) dan **Article** (blog). Halaman **FAQ** dan **Kontak** bersifat statis (tanpa database).

---

## ✨ Fitur

**Sisi pengunjung (publik):**
- Beranda: hero, produk terlaris, tentang kami, artikel terbaru.
- Produk: katalog dengan **filter kategori instan** (diproses di browser, tanpa reload) + halaman detail produk.
- Artikel: daftar artikel dengan filter kategori + halaman detail artikel.
- FAQ & Kontak: halaman statis (form kontak hanya simulasi front-end).

**Sisi admin (`/admin`):**
- Login satu role (admin).
- CRUD **Produk** dan **Artikel** (lengkap dengan upload gambar & rich text editor).
- Dashboard ringkasan: total produk, produk terlaris, total artikel.

---

## ⚠️ Prasyarat (WAJIB dibaca dulu)

Pastikan sudah terpasang:

| Tool | Versi | Catatan |
|------|-------|---------|
| **PHP** | **>= 8.3** | **Ini paling penting — baca catatan di bawah.** |
| **Composer** | 2.x | Package manager PHP |
| **Node.js + npm** | Node 18 atau 20 | Untuk build Tailwind/JS |
| **Git** | terbaru | — |

### 🔴 Penting soal versi PHP

Proyek ini **butuh PHP 8.3 ke atas**. Cek versi kamu:

```bash
php -v
```

- **PHP 8.2 ke bawah TIDAK BISA.** Halaman publik mungkin jalan, tapi **panel admin (`/admin`) akan error HTTP 500**.
- **Pengguna Windows + XAMPP:** XAMPP biasanya membawa PHP 8.2 → ini yang bikin admin error. **Solusi paling gampang: pakai [Laravel Herd](https://herd.laravel.com/windows)** (gratis, sudah termasuk PHP 8.4, Nginx, dan cepat). Setelah install Herd, taruh folder proyek di dalam folder yang dipantau Herd, lalu buka lewat domain `.test` (mis. `http://kopikita.test`).
- **Pengguna macOS/Linux:** pastikan `php -v` menunjukkan 8.3+.

> Singkatnya: kalau di Windows, **install Herd** dan jalankan dari situ — paling mulus.

Pastikan juga **ekstensi PHP** ini aktif (biasanya sudah default di Herd): `pdo_sqlite`, `mbstring`, `intl`, `gd`, `zip`.

---

## 🛠️ Cara Install (langkah demi langkah)

> Jalankan perintah di dalam folder proyek. Contoh diberikan untuk **Windows (PowerShell)** dan **macOS/Linux**.

### 1. Clone repo

```bash
git clone <URL-REPO-PRIVATE-TIM>
cd CPMK4-PEMWEB-KOPIKITA
```

### 2. Install dependency PHP & JavaScript

```bash
composer install
npm install
```

### 3. Siapkan file `.env`

Salin template `.env.example` jadi `.env`:

```bash
# Windows (PowerShell)
Copy-Item .env.example .env

# macOS / Linux
cp .env.example .env
```

Lalu buat APP_KEY:

```bash
php artisan key:generate
```

### 4. Siapkan database (SQLite — default)

Buat file database kosong:

```bash
# Windows (PowerShell)
New-Item database/database.sqlite -ItemType File

# macOS / Linux
touch database/database.sqlite
```

Lalu buat tabel **dan** isi data contoh (produk, artikel, akun admin):

```bash
php artisan migrate --seed
```

> Mau pakai MySQL? Lihat [Troubleshooting](#-troubleshooting-kalau-error) di bawah.

### 5. Buat symlink storage (supaya gambar upload tampil)

```bash
php artisan storage:link
```

### 6. Build asset front-end (Tailwind & JS)

Folder hasil build (`public/build`) **tidak ikut di-commit**, jadi **wajib di-build sendiri** setelah clone:

```bash
npm run build
```

✅ **Selesai!** Lanjut ke cara menjalankan di bawah.

> **Shortcut:** sebagian besar langkah 2–6 bisa dijalankan sekaligus dengan `composer setup` (tetap perlu `migrate --seed` & `storage:link` manual kalau mau data contoh + gambar).

---

## ▶️ Menjalankan Aplikasi

### Cara A — Laravel Herd (disarankan, terutama Windows)

Kalau proyek sudah dibuka lewat Herd, langsung akses domain `.test`-nya (mis. `http://kopikita.test`). Tidak perlu `php artisan serve`. Saat **mengembangkan tampilan**, jalankan Vite biar perubahan langsung kelihatan:

```bash
npm run dev
```

### Cara B — `php artisan serve`

Butuh **dua terminal**:

```bash
# Terminal 1 — server Laravel
php artisan serve

# Terminal 2 — Vite (live reload saat ngoding tampilan)
npm run dev
```

Lalu buka:
- **Website:** http://localhost:8000
- **Admin:** http://localhost:8000/admin

> **`npm run dev` vs `npm run build`:**
> - `npm run dev` → mode ngoding, perubahan CSS/JS langsung muncul (jangan ditutup selama ngoding tampilan).
> - `npm run build` → hasil final untuk dipakai tanpa Vite (mis. mau demo cepat). Jalankan ulang tiap habis ubah CSS/JS kalau tidak pakai `npm run dev`.

---

## 🔑 Akun Admin

Dibuat otomatis oleh seeder (langkah `migrate --seed`):

- **Email:** `admin@kopikita.id`
- **Password:** `password123`

Login di `/admin`.

---

## 🧰 Perintah yang Sering Dipakai

```bash
php artisan migrate:fresh --seed   # reset DB + isi ulang data contoh (HATI-HATI: hapus semua data)
php artisan db:seed                # isi data contoh saja
php artisan storage:link           # buat ulang symlink storage
php artisan optimize:clear         # bersihkan semua cache (config/route/view)
npm run dev                        # Vite mode ngoding
npm run build                      # build asset final
```

---

## 📂 Struktur Folder Penting

```text
CPMK4-PEMWEB-KOPIKITA/
├── app/
│   ├── Filament/Resources/   # CRUD admin (Products, Articles)
│   ├── Filament/Widgets/     # Widget dashboard (ringkasan angka)
│   ├── Http/Controllers/     # HomeController (data untuk beranda)
│   └── Models/               # Product, Article (Eloquent)
├── database/
│   ├── migrations/           # struktur tabel
│   ├── seeders/              # data contoh + akun admin (DatabaseSeeder)
│   └── database.sqlite       # file DB lokal (kamu buat sendiri, tidak di-commit)
├── public/
│   ├── images/               # gambar statis (hero, dll)
│   └── build/                # hasil Vite (tidak di-commit → jalankan npm run build)
├── resources/
│   ├── css/                  # Tailwind + tema admin
│   ├── js/app.js             # Turbo
│   └── views/                # Blade
│       ├── components/layout.blade.php   # navbar + footer + layout utama
│       ├── home.blade.php / katalog.blade.php / artikel.blade.php ...
│       └── faq.blade.php / konsultasi.blade.php  # halaman statis
└── routes/
    └── web.php               # semua rute URL
```

---

## 🩹 Troubleshooting (kalau error)

**Admin `/admin` error HTTP 500, tapi halaman publik normal**
→ Versi PHP terlalu lama (di bawah 8.3). Cek `php -v`. Pakai PHP 8.3+/Herd. (Lihat [Prasyarat](#-prasyarat-wajib-dibaca-dulu).)

**Tampilan berantakan / CSS & JS tidak muncul**
→ Asset belum di-build. Jalankan `npm run build` (atau `npm run dev` saat ngoding). Folder `public/build` memang sengaja tidak di-commit.

**`could not find driver` saat `migrate`**
→ Ekstensi SQLite belum aktif. Aktifkan `pdo_sqlite` di `php.ini`, **atau** pindah ke MySQL: buat database kosong, lalu di `.env` set:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kopikita
DB_USERNAME=root
DB_PASSWORD=
```
lalu jalankan lagi `php artisan migrate --seed`.

**Gambar yang di-upload via admin tidak tampil**
→ Symlink belum dibuat. Jalankan `php artisan storage:link`.

**Sudah ubah `.env` tapi tidak berubah**
→ Bersihkan cache: `php artisan optimize:clear`.

**Tab filter / animasi terasa aneh setelah edit**
→ Build ulang asset: `npm run build`, lalu hard refresh browser (`Ctrl+Shift+R`).

---

## 🤝 Alur Kerja Tim (Git)

1. **Jangan ngoding langsung di `main`.** `main` otomatis ter-deploy ke server (lihat bawah).
2. Buat branch per fitur: `git checkout -b fitur-katalog`.
3. `git pull origin main` dulu sebelum mulai & sebelum push, biar tidak bentrok.
4. Commit dengan pesan jelas: `git commit -m "feat: tambah filter kategori produk"`.
5. Push branch & buka **Pull Request** ke `main` untuk di-review.

---

## 🌐 Deployment (Produksi)

> ⚠️ **Setiap `push`/merge ke branch `main` otomatis men-deploy ke server produksi.** Jangan push ke `main` kecuali memang siap rilis — selalu lewat branch + Pull Request.

- **URL Produksi:** https://kelas-b-5.informatika-unjedir.web.id
- **Cara kerja:** GitHub Actions ([`.github/workflows/deploy.yml`](.github/workflows/deploy.yml)) meng-install dependency, menjalankan `npm run build`, lalu mengunggah ke server **HestiaCP** lewat SSH/SCP dan menjalankan `migrate --force` + seeding (sekali, kalau DB kosong) + `storage:link`.
- **Database produksi:** MySQL (server tidak punya driver SQLite).
- **Kredensial server & database** disimpan di **GitHub Secrets**, tidak ada di dalam repo.

---

*Kopikita — ngopi santai, setiap hari.* ☕
