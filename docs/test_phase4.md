# Skenario Pengujian Phase 4: Testing, Optimization, & Launch

Dokumen ini berisi langkah-langkah sistematis untuk memvalidasi fitur dan fungsionalitas yang dikembangkan pada **Phase 4** dari Selasar Digital Website (Fokus pada SEO, Performa, dan persiapan Deployment).

---

## 1. Pengujian SEO & Metadata

**Tujuan:** Memastikan setiap halaman memiliki Title, Meta Description, dan struktur OpenGraph (OG) yang unik dan valid untuk mesin pencari maupun integrasi media sosial.

### Skenario 1.1: Verifikasi Meta Tags Halaman Statis
*   Buka browser dan akses halaman **Home** (`/`).
*   Klik kanan pada halaman dan pilih **View Page Source** (atau Inspect Element).
*   **Ekspektasi:**
    *   Terdapat tag `<title>` yang berisi kata kunci "Selasar Digital".
    *   Terdapat tag `<meta name="description">` yang ringkas dan deskriptif.
    *   Terdapat tag `<meta property="og:title">` dan `<meta property="og:description">`.
    *   Terdapat tag `<link rel="canonical" href="...">` yang mengarah ke URL saat ini.
*   Ulangi pengecekan ini pada halaman **About Us** (`/about`), **Services** (`/services`), **Portfolio** (`/portfolio`), dan **Contact Us** (`/contact`).
*   **Ekspektasi:** Title dan Description *harus berbeda-beda* di setiap halamannya.

### Skenario 1.2: Verifikasi Dynamic Meta Tags (Project Detail)
*   Melalui halaman Portfolio, navigasikan ke salah satu **Project Detail** (misal: `/portfolio/contoh-project`).
*   Buka **View Page Source**.
*   **Ekspektasi:**
    *   Tag `<title>` secara dinamis menampilkan judul dari project tersebut.
    *   Tag `<meta name="description">` terisi dengan snippet (potongan teks) dari deskripsi atau challenge project tersebut.
    *   Tag `<meta property="og:image">` mengarah pada gambar cover aktual dari project yang sedang dilihat.

---

## 2. Quality Assurance (QA) & Cross-Browser

**Tujuan:** Memastikan antarmuka frontend tidak memiliki error mencolok dan sepenuhnya responsif.

### Skenario 2.1: Audit Responsivitas Mobile
*   Buka halaman **Home**, **Services**, dan **Portfolio**.
*   Perkecil lebar browser hingga seukuran layar *smartphone* (atau gunakan Device Toolbar via F12 di Chrome).
*   **Ekspektasi:**
    *   Hamburger menu (navbar) muncul dan dapat di-klik untuk membuka *drawer* menu dengan lancar.
    *   Grid layanan dan portfolio tersusun vertikal secara rapi.
    *   Text tidak terpotong (overflow) dan padding/margin layar cukup lega.

### Skenario 2.2: Verifikasi Alur Fungsional (End-to-End)
*   Buka halaman **Contact Us**.
*   Isilah form inquiry secara komplit lalu submit.
*   **Ekspektasi:** Muncul pesan sukses "Message Sent!".
*   Login ke halaman Admin (`/dashboard`) menggunakan kredensial yang valid.
*   Pilih menu **Inquiries**.
*   **Ekspektasi:** Pesan yang baru saja dikirim muncul di tabel dengan label "New".

---

## 3. Optimasi Performa & Build Vite

**Tujuan:** Memastikan sistem frontend asset telah disiapkan untuk produksi dengan minify file CSS/JS.

### Skenario 3.1: Validasi Production Build
*   Buka terminal/CMD, pastikan berada pada direktori project (`E:\Coding\Web\landing-page\selasar-digital`).
*   Jalankan perintah: `npm run build`
*   **Ekspektasi:**
    *   Terminal menunjukkan proses `vite build`.
    *   Mencetak informasi file *manifest.json*, *app.css*, dan *app.js*.
    *   **Tidak ada error (merah) atau warning (kuning) yang menghentikan proses build**.

### Skenario 3.2: Pengecekan Network Payload
*   Jalankan localhost via `php artisan serve`.
*   Buka browser DevTools (F12) dan arahkan ke tab **Network**.
*   Reload halaman website (CTRL + R).
*   Pilih filter **CSS** atau **JS**.
*   **Ekspektasi:**
    *   Jika sudah menggunakan production asset, akan ada file app-XXXX.js / app-XXXX.css.
    *   Bila masih dalam masa pengembangan lokal menggunakan `npm run dev`, pastikan ukuran file aset UI (images/fonts) tidak memakan waktu download lebih dari yang wajar.

---

## Status Pengujian
- [ ] Pengujian SEO & Metadata Halaman Statis
- [ ] Pengujian SEO Project Dinamis
- [ ] Responsivitas Mobile & Cross-Browser
- [ ] Form Submission & End-to-End Test
- [ ] Eksekusi `npm run build` berhasil
