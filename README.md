# 📚 Aplikasi Perpustakaan Digital Kampus

Sistem informasi perpustakaan berbasis web yang dibangun menggunakan **Laravel 12** (PHP Framework). Aplikasi ini dirancang untuk membantu petugas/admin kampus dalam mengelola koleksi buku, data anggota, dan transaksi peminjaman buku secara digital dan efisien.

---

## 🧠 Apa itu Model, View, dan Controller?

> Pemahaman pribadi tentang pola arsitektur MVC:

**Model** adalah bagian yang bertanggung jawab atas data — ia yang "tahu" bagaimana struktur tabel di database (misalnya tabel `books` atau `members`), dan bagaimana data tersebut diambil, disimpan, atau diubah. Model adalah "otak" yang mengurus semua urusan data dan aturan bisnis.

**View** adalah tampilan yang dilihat oleh pengguna di browser — berupa halaman HTML. View tidak peduli dari mana data berasal, tugasnya hanya menampilkan data yang sudah disiapkan oleh Controller dengan cara yang menarik dan mudah dipahami.

**Controller** adalah "penghubung" antara Model dan View. Ketika pengguna membuka halaman atau mengklik tombol, Controller yang menerima permintaan tersebut, meminta data dari Model, lalu mengirimkan data itu ke View untuk ditampilkan. Controller adalah "koordinator" yang mengatur lalu lintas alur kerja aplikasi.

---

## 🎯 Tujuan Aplikasi

- Mengelola koleksi buku perpustakaan kampus (tambah, edit, hapus, cari)
- Mengelola data anggota/peminjam buku
- Mencatat transaksi peminjaman dan pengembalian buku
- Memberikan laporan status buku (tersedia / dipinjam)

---

## 🛠️ Teknologi yang Digunakan

| Teknologi | Versi | Keterangan |
|-----------|-------|------------|
| PHP | ≥ 8.2 | Bahasa pemrograman utama |
| Laravel | 12.x | PHP Framework (MVC) |
| MySQL | 8.x | Database relasional |
| Composer | 2.x | Dependency manager PHP |
| Blade | - | Template engine bawaan Laravel |

---

## 📁 Struktur Direktori Utama

```
app-perpustakaan/
├── app/
│   ├── Http/Controllers/   # Controller (logika request-response)
│   └── Models/             # Model (representasi tabel database)
├── resources/
│   └── views/              # View (tampilan Blade/HTML)
├── routes/
│   └── web.php             # Definisi route aplikasi
├── database/
│   └── migrations/         # Definisi struktur tabel
├── .env                    # Konfigurasi environment (database, dll)
└── artisan                 # CLI tool Laravel
```

---

## 🚀 Cara Menjalankan Project Secara Lokal

### Prasyarat
Pastikan sudah terinstal di komputer Anda:
- **PHP** ≥ 8.2
- **Composer** (dependency manager PHP)
- **MySQL** (bisa menggunakan Laragon, XAMPP, atau WAMP)
- **Git**

### Langkah Instalasi

**1. Clone repository**
```bash
git clone https://github.com/rhezazulfan157/app-perpustakaan.git
cd app-perpustakaan
```

**2. Install dependencies PHP**
```bash
composer install
```

**3. Salin file konfigurasi environment**
```bash
cp .env.example .env
```

**4. Generate application key**
```bash
php artisan key:generate
```

**5. Konfigurasi database di `.env`**

Buka file `.env` dan sesuaikan pengaturan database:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_perpustakaan
DB_USERNAME=root
DB_PASSWORD=
```

**6. Buat database `db_perpustakaan` di MySQL/phpMyAdmin**

```sql
CREATE DATABASE db_perpustakaan CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

**7. Jalankan migration (mulai Pertemuan 5)**
```bash
php artisan migrate
```

**8. Jalankan development server**
```bash
php artisan serve
```

**9. Buka di browser**

Akses aplikasi di: **http://127.0.0.1:8000**

---

## 🌿 Git Branch Strategy

| Branch | Keterangan |
|--------|------------|
| `main` | Kode stabil — diperbarui di setiap checkpoint pertemuan |
| `dev`  | Branch pengembangan aktif — semua pekerjaan harian di sini |

---

## 👨‍💻 Developer

- **Nama:** Rheza Zulfan
- **GitHub:** [@rhezazulfan157](https://github.com/rhezazulfan157)
- **Mata Kuliah:** Pemrograman Web Framework
- **Semester:** Aktif

---

## 📄 Lisensi

Project ini dibuat untuk keperluan akademik.
