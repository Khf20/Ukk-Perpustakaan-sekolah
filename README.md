# 🌟 Sistem Manajemen Perpustakaan Digital

Sistem ini dirancang untuk mengelola berbagai aspek perpustakaan digital, termasuk buku, pengarang, penerbit, transaksi peminjaman, serta portal anggota dengan fitur multi-user.

## 📂 Fitur Utama

### ✅ **Pengelolaan Rak Buku (tbl_rak)**
- Tambah, perbarui, dan hapus rak buku.
- Field utama: Kode rak, deskripsi.

### ✅ **Klasifikasi Desimal Dewey (tbl_ddc)**
- Tambah, perbarui, dan hapus entri DDC.
- Field utama: Kode DDC, deskripsi.

### ✅ **Format Buku (tbl_format)**
- Kelola format buku dengan mudah.
- Field utama: Kode format, deskripsi.

### ✅ **Manajemen Penerbit (tbl_penerbit)**
- Tambah, perbarui, dan hapus informasi penerbit.
- Field utama: Kode penerbit, nama, alamat, email, telepon, faks, situs web, kontak person.

### ✅ **Pengelolaan Pengarang (tbl_pengarang)**
- Kelola informasi pengarang secara terstruktur.
- Field utama: Kode pengarang, nama, alamat, email, telepon, biografi, deskripsi.

### ✅ **Manajemen Buku (tbl_pustaka)**
- Kelola informasi buku lengkap dengan kategori dan status peminjaman.
- Field utama: ID buku, ID DDC, ID format, ID penerbit, ID pengarang, judul, tahun terbit, kata kunci, abstrak, gambar sampul, kondisi buku, status peminjaman, denda.

### ✅ **Manajemen Transaksi (tgl_transaksi)**
- Catat transaksi peminjaman dan pengembalian buku.
- Field utama: ID transaksi, ID buku, ID anggota, tanggal pinjam, tanggal kembali, denda.

### ✅ **Manajemen Anggota (tbl_anggota)**
- Kelola informasi anggota perpustakaan.
- Field utama: ID anggota, ID jenis, kode anggota, nama, alamat, email, telepon, tanggal lahir, tanggal habis masa berlaku, foto, username, password.

### ✅ **Jenis Anggota (tbl_jenis_anggota)**
- Definisikan berbagai kategori anggota perpustakaan.
- Field utama: ID jenis, kode, deskripsi.

### ✅ **Informasi Perpustakaan (tbl_perpustakaan)**
- Kelola informasi penting tentang perpustakaan.
- Field utama: ID perpustakaan, nama, alamat, email, telepon, situs web, deskripsi.

## 🔍 Fitur Tambahan

### ⭐ **Pencarian Buku Lanjutan**
- Cari buku berdasarkan kata kunci, pengarang, penerbit, dan DDC.

### 📚 **Manajemen Reservasi Buku**
- Anggota dapat melakukan reservasi buku yang sedang dipinjam.

### 📊 **Laporan Statistik**
- Laporan mengenai peminjaman buku, keanggotaan, dan transaksi untuk administrasi perpustakaan.

### 🏠 **Portal Anggota**
- Anggota dapat melihat riwayat peminjaman, status peminjaman, dan memperbarui informasi pribadi.

## 🌟 Fitur Multi-User

### 💪 **Admin**
- Akses penuh ke semua fitur dan data.
- Dapat mengelola pengguna lain, buku, anggota, dan transaksi.

### 👨‍📚 **User (Anggota)**
- Akses terbatas hanya ke fitur-fitur yang relevan untuk anggota perpustakaan.
- Bisa mencari buku, melihat status pinjaman, melakukan reservasi, dan memperbarui informasi pribadi.

## ⚡ Teknologi yang Digunakan
- **PHP (Laravel)** - Framework backend utama.
- **MySQL** - Database untuk menyimpan informasi perpustakaan.
- **Bootstrap & JavaScript** - Untuk tampilan UI yang menarik dan responsif.

## 🛠 Cara Instalasi
1. Clone repository ini:
   ```sh
   git clone https://github.com/username/nama-repo.git
   ```
2. Masuk ke direktori proyek:
   ```sh
   cd nama-repo
   ```
3. Install dependensi Laravel:
   ```sh
   composer install
   ```
4. Buat file `.env` berdasarkan `.env.example`:
   ```sh
   cp .env.example .env
   ```
5. Generate application key:
   ```sh
   php artisan key:generate
   ```
6. Konfigurasi database di `.env`, lalu jalankan migrasi:
   ```sh
   php artisan migrate --seed
   ```
7. Jalankan aplikasi:
   ```sh
   php artisan serve
   ```
8. Akses melalui browser:
   ```
   http://127.0.0.1:8000
   ```


## ✨ Lisensi
Proyek ini menggunakan lisensi **MIT**. Silakan cek file `LICENSE` untuk detail lebih lanjut.

---

🚀 **Jangan lupa beri bintang repo ini jika Anda merasa terbantu!** 🌟

