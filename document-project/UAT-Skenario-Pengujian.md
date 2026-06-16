# Dokumen Skenario Pengujian (UAT)
## Aplikasi Web Company Profile — Smartani (Precision Farming)

| Item | Keterangan |
|------|------------|
| Nama Aplikasi | Smartani — Company Profile Precision Farming |
| URL Pengujian | https://kelas-b-5.informatika-unjedir.web.id/ |
| Jenis Pengujian | User Acceptance Testing (UAT) — Black Box |
| Metode | Pengujian fungsional berbasis skenario |
| Acuan | SRS / SDD Smartani |
| Penguji | _________________ |
| Tanggal | _________________ |

---

## A. Tujuan
Memastikan seluruh fitur pada halaman publik website Smartani berjalan sesuai
kebutuhan yang didefinisikan pada dokumen SRS/SDD, dan layak untuk diterima
(accepted) oleh pengguna/klien sebelum sistem digunakan secara penuh.

## B. Ruang Lingkup
Pengujian mencakup **halaman publik (frontend)**:
Beranda, Katalog Produk, Detail Produk, Artikel, Detail Artikel, Konsultasi,
FAQ, dan Form Kontak. Halaman admin (Filament) **tidak** termasuk dalam dokumen ini.

## C. Keterangan Status
- **✅ Berhasil (Pass)** — hasil aktual sesuai hasil yang diharapkan
- **❌ Gagal (Fail)** — hasil aktual tidak sesuai
- **➖ N/A** — tidak diuji / tidak berlaku

---

## D. Skenario Pengujian

### 1. Halaman Beranda (`/`)

| ID | Skenario | Langkah Pengujian | Data Uji | Hasil yang Diharapkan | Hasil Aktual | Status |
|----|----------|-------------------|----------|------------------------|--------------|--------|
| TC-01 | Membuka halaman beranda | Akses URL utama | — | Halaman beranda tampil lengkap tanpa error | | |
| TC-02 | Hero slider tampil | Amati bagian atas beranda | — | Gambar/slide hero tampil dan dapat berganti | | |
| TC-03 | Daftar sensor tampil | Scroll ke bagian sensor | — | Data sensor aktif tampil | | |
| TC-04 | Daftar fitur tampil | Scroll ke bagian fitur | — | Fitur aktif tampil sesuai urutan | | |
| TC-05 | Produk unggulan tampil | Scroll ke bagian produk | — | Maksimal 3 produk terbaru tampil | | |
| TC-06 | Artikel terbaru tampil | Scroll ke bagian artikel | — | Maksimal 3 artikel terbaru tampil | | |
| TC-07 | FAQ umum tampil | Scroll ke bagian FAQ | — | FAQ kategori "Umum" (maks 5) tampil | | |
| TC-08 | Navigasi menu utama | Klik tiap menu navbar | — | Berpindah ke halaman yang sesuai | | |

### 2. Form Konsultasi / Kontak (Halaman `/konsultasi`)

| ID | Skenario | Langkah Pengujian | Data Uji | Hasil yang Diharapkan | Hasil Aktual | Status |
|----|----------|-------------------|----------|------------------------|--------------|--------|
| TC-09 | Kirim pesan dengan data valid | Buka `/konsultasi`, isi semua field wajib, klik "Kirim Pesan" | Nama Depan, Nama Belakang, Email valid, Subjek, Konsultasi | Tombol berubah jadi "Terkirim!", form ter-reset, data tersimpan | | |
| TC-10 | Validasi field wajib kosong | Kosongkan Nama/Email/Subjek/Konsultasi lalu kirim | Field wajib kosong | Sistem menolak (tombol "Gagal Dikirim" / validasi browser) | | |
| TC-11 | Validasi format email salah | Isi email tidak valid lalu kirim | email: `abc@` | Sistem menolak, email harus format benar | | |
| TC-12 | Field opsional dikosongkan | Kosongkan Nama & Lokasi Green House | greenhouse kosong | Pesan tetap terkirim (field opsional) | | |

### 3. Halaman Katalog Produk (`/katalog`)

| ID | Skenario | Langkah Pengujian | Data Uji | Hasil yang Diharapkan | Hasil Aktual | Status |
|----|----------|-------------------|----------|------------------------|--------------|--------|
| TC-13 | Membuka katalog | Akses menu Katalog | — | Daftar produk tampil (maks 9 per halaman) | | |
| TC-14 | Filter berdasarkan kategori | Pilih salah satu kategori | Kategori tertentu | Hanya produk kategori tersebut tampil | | |
| TC-15 | Filter "Semua" | Pilih kategori "Semua" | Semua | Seluruh produk tampil | | |
| TC-16 | Pagination | Klik halaman berikutnya | — | Produk berpindah halaman, filter tetap | | |
| TC-17 | Lihat detail produk | Klik salah satu produk | — | Berpindah ke halaman detail produk | | |
| TC-18 | Detail produk tidak ada | Akses ID produk tidak valid | `/katalog/99999` | Tampil halaman 404 / Not Found | | |

### 4. Halaman Artikel (`/artikel`)

| ID | Skenario | Langkah Pengujian | Data Uji | Hasil yang Diharapkan | Hasil Aktual | Status |
|----|----------|-------------------|----------|------------------------|--------------|--------|
| TC-19 | Membuka daftar artikel | Akses menu Artikel | — | Daftar artikel tampil (maks 9 per halaman) | | |
| TC-20 | Filter artikel per kategori | Pilih kategori artikel | Kategori tertentu | Hanya artikel kategori tersebut tampil | | |
| TC-21 | Pagination artikel | Klik halaman berikutnya | — | Artikel berpindah halaman | | |
| TC-22 | Lihat detail artikel | Klik salah satu artikel | — | Halaman detail artikel tampil | | |
| TC-23 | Artikel terkait tampil | Buka detail artikel | — | Muncul maks 2 artikel terkait | | |
| TC-24 | Detail artikel tidak ada | Akses slug tidak valid | `/artikel/tidak-ada` | Tampil halaman 404 / Not Found | | |

### 5. Halaman FAQ (`/faq`)

| ID | Skenario | Langkah Pengujian | Data Uji | Hasil yang Diharapkan | Hasil Aktual | Status |
|----|----------|-------------------|----------|------------------------|--------------|--------|
| TC-25 | Membuka halaman FAQ | Akses menu FAQ | — | Daftar FAQ aktif tampil | | |
| TC-26 | Filter FAQ per kategori | Pilih kategori FAQ | Kategori tertentu | FAQ sesuai kategori tampil | | |
| TC-27 | Buka/tutup jawaban FAQ | Klik salah satu pertanyaan | — | Jawaban tampil/tersembunyi (accordion) | | |

### 6. Halaman Konsultasi — Info Kontak (`/konsultasi`)

| ID | Skenario | Langkah Pengujian | Data Uji | Hasil yang Diharapkan | Hasil Aktual | Status |
|----|----------|-------------------|----------|------------------------|--------------|--------|
| TC-28 | Info kontak tampil | Buka `/konsultasi` (tombol "Contact Us"/"Mulai Konsultasi"), amati panel kiri | — | Email, telepon, & alamat perusahaan tampil + form konsultasi | | |

### 7. Umum / Non-Fungsional Ringan

| ID | Skenario | Langkah Pengujian | Data Uji | Hasil yang Diharapkan | Hasil Aktual | Status |
|----|----------|-------------------|----------|------------------------|--------------|--------|
| TC-29 | Tampilan responsif (mobile) | Buka web di layar HP / resize | — | Layout menyesuaikan, tetap rapi | | |
| TC-30 | Halaman tidak ditemukan | Akses URL acak | `/halaman-ngawur` | Tampil halaman 404 | | |

---

## E. Rekapitulasi Hasil

| Keterangan | Jumlah |
|------------|--------|
| Total Skenario | 30 |
| Berhasil (Pass) | ___ |
| Gagal (Fail) | ___ |
| Persentase Keberhasilan | ___ % |

**Rumus:** Persentase = (Jumlah Pass ÷ Total Skenario) × 100%

---

## F. Kesimpulan
Berdasarkan hasil pengujian UAT, aplikasi web Smartani dinyatakan:

☐ **Diterima (Accepted)** — seluruh/sebagian besar skenario berhasil
☐ **Diterima dengan catatan** — ada perbaikan minor
☐ **Ditolak (Rejected)** — banyak skenario gagal, perlu perbaikan

**Catatan tambahan:**
_________________________________________________________________
_________________________________________________________________

---

| Penguji | Mengetahui (Dosen/Klien) |
|---------|--------------------------|
| | |
| (_______________) | (_______________) |
