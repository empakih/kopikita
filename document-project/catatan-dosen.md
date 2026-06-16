# Rangkuman Perbincangan dengan Dosen

Halo! Tentu saja, mari kita bedah dan rangkum hasil diskusi kelompokmu dengan dosen terkait redesain web **smartani.cloud**. Proyek ini sangat menarik dan menjadi kesempatan emas buat mengeksplorasi *skill front-end* yang sedang difokuskan, terutama dalam membangun UI/UX yang interaktif, dinamis, dan terintegrasi dengan baik.

Berikut adalah rangkuman komprehensif, detail, dan terstruktur dari *requirement* yang diminta oleh dosen:

### 1. Konsep Utama: *Dynamic Company Profile & CMS*

Dosen menekankan bahwa *website* ini bukan sekadar *landing page* statis, melainkan sebuah wadah dinamis (*Content Management System*) untuk mempromosikan teknologi **Smartani** dengan pendekatan *"Down to Earth"* (canggih tapi tetap merakyat dan mudah dipahami oleh target pasar seperti petani atau pemilik *greenhouse*). **Aturan mutlaknya: Tidak boleh ada *hardcoding* di *front-end*!** Semua data, teks, dan gambar harus bisa diubah secara dinamis melalui panel *admin*.

### 2. Fitur *Front-End* & UI/UX yang Diharapkan

Sebagai seseorang yang tertarik mendalami HTML, CSS, dan JS, bagian ini akan sangat seru untuk dieksekusi:

* **Visualisasi Fitur Interaktif:** Jangan hanya menggunakan teks untuk menjelaskan fitur. Gunakan *pop-up*, *hover effects*, atau simulasi. Misalnya, saat user menekan sebuah tombol, muncul *pop-up* berisi video/GIF cara pengoperasian aplikasi Smartani.
* **Animasi Sensor Dinamis:** Harus ada visualisasi untuk berbagai sensor (Suhu, Kelembapan, Cahaya/Lux, pH, Angin, dll.). Dosen mencontohkan penggunaan animasi dinamis (misal: ikon kipas yang berputar, atau indikator suhu yang bergerak) yang datanya bisa diatur dari CMS.
* **Katalog Layanan & Produk:** Web harus bisa menampilkan berbagai produk (pupuk, pelet) dan jasa (jasa pembuatan *greenhouse*, layanan dokter hewan/tanaman) yang penambahannya bisa dilakukan secara mandiri oleh admin.

### 3. Fitur *Back-End* & CMS (*Dashboard Admin*)

* **Manajemen Artikel & SEO:** Web butuh fitur artikel/berita untuk keperluan SEO (seperti strategi *content marketing* Alodokter). CMS harus memiliki *text editor* (bisa *bold*, *italic*, *insert* gambar), pengaturan *thumbnail*, *meta description*, dan *title*.
* **Manajemen Sensor & Highlight Fitur:** Admin harus bisa menambah, mengedit, atau menghapus list sensor dan menyorot fitur-fitur unggulan (kiri-kanan) di halaman utama tanpa menyentuh *source code*.
* **Formulir "Contact Us":** Form kontak tidak boleh statis. Pesan yang dikirim pengunjung harus masuk ke *database* dan bisa dibaca oleh admin di *dashboard*, lengkap dengan API/sensor notifikasi jika memungkinkan.
* **Sistem *Login* & *Role*:** Saat ini, sistem autentikasi hanya difokuskan untuk satu peran saja, yaitu **Admin** pengelola *website*. Tidak perlu membuat *role* untuk penjual atau pembeli karena ini belum sepenuhnya *e-commerce* transaksional murni.

### 4. Teknis & *Database*

* **Database Terpisah:** *Database* untuk *website company profile* ini dibuat terpisah dari *database* inti aplikasi IoT Smartani. Penggunaan MySQL standar sudah cukup untuk menampung data artikel, pesan kontak, dan manajemen *website*.
* **Pilihan Tech Stack Bebas:** Dosen membebaskan penggunaan teknologi. Mau menggunakan *framework* JavaScript modern seperti Vue.js, React, atau menggunakan PHP/Laravel, semuanya diperbolehkan asalkan hasilnya dinamis.

### 5. Manajemen Proyek & Metode Kerja

* **Metode *Agile/Adaptive*:** Dosen menyarankan agar tidak kaku menggunakan metode *Waterfall* murni. Lakukan iterasi cepat: buat *sketch/mockup* (misalnya oleh Hafizh di UI/UX), minta persetujuan klien (dosen), lalu langsung *coding* (oleh *front-end* dan *back-end*).
* **Pembagian Tugas:** Pastikan setiap anggota tim (Hafizh, Raja, Fakih, Fikri, dkk.) memiliki *role* yang jelas, baik itu UI/UX, Front-End, Back-End, maupun *Quality Assurance* (QA) untuk *testing* web sebelum rilis.

---


Tentu, mari kita bedah lebih dalam dan fokus hanya pada **fitur-fitur** yang diminta oleh dosenmu di rekaman tersebut, beserta *insight* bagaimana mengeksekusinya dari kacamata *programming*, khususnya *front-end* dan manajemen datanya.

Dosenmu sangat menekankan bahwa web ini sifatnya **dinamis (CMS)**, bukan sekadar halaman statis yang di-*hardcode*. Berikut adalah rincian fitur yang harus dibuat dan cara kerjanya:

### 1. Fitur Visualisasi Sensor (Dinamis & Animatif)

Ini adalah salah satu fitur utama untuk menonjolkan teknologi *Smartani*.

* **Yang Harus Dibuat:** Tampilan indikator untuk berbagai sensor seperti suhu (temperature), kelembapan (humidity/lux), pH air, hingga kecepatan angin.
* **Cara Pembuatannya:** * Tampilan di *front-end* harus interaktif menggunakan animasi (misalnya ikon kipas yang berputar, atau grafik bar yang bergerak). Kamu bisa memaksimalkan CSS Animations, `@keyframes`, atau *library* interaktif.
* **Aturan Emas:** *List* sensor ini **tidak boleh di-hardcode** di HTML. Jika besok admin ingin menambahkan "Sensor Kecepatan Angin", admin cukup menambahkannya via panel CMS, lalu *front-end* akan me-*render* sensor baru tersebut secara otomatis menggunakan teknik perulangan (*looping* DOM) yang mengambil data dari *database*.



### 2. Fitur Artikel & Berita (SEO-Focused)

Fitur ini krusial untuk menarik *traffic* organik melalui pencarian Google (seperti strategi SEO Alodokter).

* **Yang Harus Dibuat:** Halaman blog/artikel yang dinamis beserta sistem manajemennya.
* **Cara Pembuatannya:**
* Di *dashboard admin*, kamu harus mengintegrasikan *Rich Text Editor* (WYSIWYG) agar admin bisa mengatur *bold*, *italic*, atau memasukkan gambar ke dalam teks artikel.
* Database harus menyimpan tidak hanya isi teks, tapi juga parameter SEO seperti `title`, `meta_description`, kategori, dan `thumbnail_image`.
* *Front-end* tinggal melakukan *fetch* data ini dan meletakkannya di dalam *tag* `<head>` untuk SEO, serta merender isinya di halaman artikel.



### 3. Fitur Simulasi & *Highlight* Layanan (Pop-up/Interaktif)

Web *company profile* ini bertujuan untuk "menjual" alat dan layanan, sehingga penyampaiannya harus canggih tapi mudah dimengerti (*down to earth*).

* **Yang Harus Dibuat:** Presentasi interaktif dari fitur aplikasi Smartani, produk (seperti pupuk, pelet/bekatul), dan jasa (seperti pembuatan *greenhouse*, layanan dokter tanaman/hewan).
* **Cara Pembuatannya:** * Hindari penjelasan teks panjang yang membosankan. Gunakan fitur *pop-up* (modal), video yang auto-play, atau GIF saat *user* menekan tombol tertentu (misal: "Cara Kerja Alat").
* Di sisi *styling*, maksimalkan *hover effect* dengan CSS (misal menggunakan properti `transform: scale()` atau `transition`) agar elemen *card* produk/jasa terlihat elegan dan hidup saat disentuh kursor. Semua gambar dan deskripsi ini tetap harus di-API-kan dari *database*.



### 4. Fitur Formulir *Contact Us*

Formulir ini berfungsi sebagai penghubung antara calon klien dengan tim Smartani.

* **Yang Harus Dibuat:** Form *Contact Us* yang terhubung ke *back-end*.
* **Cara Pembuatannya:** * Formulir tidak boleh statis atau hanya bermodalkan `mailto:`.
* Setiap kali pengunjung melakukan *submit* form, menggunakan *JavaScript* (`fetch` atau `axios`), data tersebut harus di-*post* ke *database*.
* Pesan yang masuk ini nantinya akan ditampilkan dalam format *tabel list* di halaman *dashboard admin*.



### 5. Fitur *Dashboard Admin* (CMS Murni)

Karena fokus web ini adalah *company profile* yang dinamis (bukan *e-commerce* murni dengan *role* penjual/pembeli), sistem autentikasi cukup dibuat simpel.

* **Yang Harus Dibuat:** Halaman *login* dan *dashboard* khusus untuk **satu *role***, yaitu Admin.
* **Cara Pembuatannya:**
* Buat arsitektur UI/UX admin yang *clean*.
* Semua fitur di atas (manajemen sensor, tambah/hapus produk, *edit* artikel, melihat pesan *contact us*) dikendalikan sepenuhnya dari *dashboard* ini.



Pendekatannya jelas: pisahkan urusan desain antarmuka (*front-end*) dengan logika datanya (*database*). Jika kamu mengerjakan bagian antarmukanya, pastikan struktur HTML/JS-mu siap menerima *data array* atau *object* JSON dari *back-end* untuk di-*render* secara otomatis.

1. Visi Ekspansi: Dari Pertanian ke Peternakan
Dosen membocorkan sedikit roadmap bisnis Smartani. Saat ini, fokus web memang murni untuk pertanian (seperti greenhouse dan hidroponik). Namun, dosen menegaskan bahwa tahun depan ada kemungkinan Smartani akan berekspansi ke sektor peternakan (misalnya jualan pakan hewan/bekatul). Inilah alasan utama kenapa website ini wajib menggunakan CMS yang dinamis; agar saat terjadi transisi atau penambahan sektor bisnis, tim tidak perlu merombak source code dari awal.

2. Optimasi Database & Pemilihan Tipe Data (Clean Code)
Sebagai pengembang, dosen memberikan wanti-wanti khusus terkait perancangan database. Walaupun bebas menggunakan MySQL, pembuatannya tidak boleh asal-asalan:

Normalisasi & Relasi: Database harus dirancang menggunakan kaidah relational database (ERD) yang benar dan bersih (clean database).

Efisiensi Tipe Data: Dosen mengkritik kebiasaan boros memori. Misalnya, untuk field "Nama Pengirim" di form Contact Us, jangan gunakan tipe data TEXT. Gunakan VARCHAR dan batasi panjang karakternya (misal VARCHAR(36) atau secukupnya). Ini sangat penting agar query website tetap ringan dan cepat.

3. Referensi Tata Letak (Layouting) & Tools Spesifik
Ada beberapa sebutan tools dan referensi desain spesifik yang diminta dosen untuk diterapkan oleh tim front-end dan UI/UX:

Penggunaan CKEditor: Untuk fitur artikel di dashboard admin, dosen secara spesifik menyarankan penggunaan library seperti CKEditor agar text box bisa mengenali format bold, italic, heading, dan penyisipan gambar di tengah paragraf.

Grid System & Layout Zig-zag: Untuk menampilkan fitur keunggulan produk, dosen menyarankan tata letak bersilang (gambar di kiri teks di kanan, lalu sebaliknya di baris berikutnya). Selain itu, sistem grid (misal 3 kolom) harus otomatis responsif. Jika data bertambah jadi 4, layout harus tetap rapi dan menyesuaikan tanpa merusak UI.

Referensi Web D-Jio: Dosen sempat menyinggung website D-Jio sebagai salah satu referensi bentuk halaman yang memiliki fitur carousel partner dan berita yang dinamis.

4. Peluang Kerja Praktik (KP) & Workspace
Ini lebih ke arah manajerial dan benefit tim. Proyek redesain Smartani ini diarahkan agar bisa dihitung sebagai proyek Kerja Praktik (KP) atau bahan Tugas Akhir (TA).

Aturan Nama TA: Jika proyek ini diangkat untuk TA, dosen mengingatkan agar tidak menggunakan nama merek "Smartani" secara eksplisit, melainkan menggunakan istilah akademis seperti "Precision Farming".

Fasilitas Tempat: Untuk mendukung metode Agile (kerja iteratif dan cepat), dosen menawarkan fasilitas tempat kerja (workspace) offline jika kelompok ingin berkumpul, yang berlokasi di daerah GOR Satria atau D'Luka.
