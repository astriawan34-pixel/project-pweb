# ⚽ FUTSALZONE

Sistem Informasi Penyewaan Lapangan Futsal Berbasis Web menggunakan **CodeIgniter 3**, **PHP**, **MySQL**, dan **Bootstrap 5**.

---

# 📖 Deskripsi Project

FutsalZone merupakan sistem informasi yang dirancang untuk membantu pengelolaan penyewaan lapangan futsal. Sistem ini memiliki dua jenis pengguna, yaitu **Pengunjung** dan **Admin**.

Pengunjung hanya dapat melihat informasi lapangan yang tersedia beserta harga sewanya tanpa perlu melakukan login. Seluruh proses booking dan pembayaran dilakukan oleh Admin melalui Dashboard Admin.

---

# 🎯 Tujuan Project

Project ini dibuat untuk memenuhi tugas mata kuliah **Pemrograman Web** dengan tujuan:

- Menerapkan konsep CRUD menggunakan CodeIgniter 3.
- Mengimplementasikan relasi database menggunakan MySQL.
- Membangun sistem informasi berbasis web.
- Menggunakan Bootstrap untuk membuat tampilan yang responsif.

---

# ✨ Fitur

## 👤 Pengunjung

- Melihat daftar lapangan.
- Melihat jenis lapangan.
- Melihat harga sewa.
- Melihat informasi kontak admin.

---

## 👨‍💼 Admin

- Login Admin.
- Dashboard Admin.
- CRUD Data Lapangan.
- CRUD Data Pelanggan.
- CRUD Booking.
- CRUD Pembayaran.
- Mengubah status pembayaran.
- Melihat statistik dashboard.

---

# 🛠️ Teknologi

- PHP
- CodeIgniter 3
- MySQL
- Bootstrap 
- HTML5
- CSS3
- SweetAlert2
- XAMPP

---

# 📂 Struktur Project

```
application/
assets/
database/
system/
README.md
index.php
```

---

# 🚀 Instalasi Project

## 1. Clone Repository

```bash
git clone https://github.com/username/futsalzone.git
```

atau download dalam bentuk ZIP.

---

## 2. Pindahkan Project

Pindahkan folder project ke

```
C:\xampp\htdocs\
```

---

## 3. Jalankan XAMPP

Aktifkan

- Apache
- MySQL

---

# 🗄️ Membuat Database

Masuk ke phpMyAdmin

```
http://localhost/phpmyadmin
```

Kemudian jalankan

```sql
CREATE DATABASE futsalzone;
```

### Fungsi

Perintah di atas digunakan untuk membuat database baru bernama **futsalzone**.

Kemudian aktifkan database

```sql
USE futsalzone;
```

### Fungsi

Digunakan agar seluruh tabel dibuat di dalam database **futsalzone**.

---

# 📋 Membuat Tabel

## 1. Tabel Admin

```sql
CREATE TABLE admin (
...
);
```

### Fungsi

Menyimpan akun administrator yang memiliki hak akses ke sistem.

---

## 2. Tabel Lapangan

```sql
CREATE TABLE lapangan (
...
);
```

### Fungsi

Menyimpan seluruh informasi lapangan futsal.

---

## 3. Tabel Pelanggan

```sql
CREATE TABLE pelanggan (
...
);
```

### Fungsi

Menyimpan data pelanggan yang melakukan penyewaan.

---

## 4. Tabel Booking

```sql
CREATE TABLE booking (
...
);
```

### Fungsi

Menyimpan data booking lapangan.

---

## 5. Tabel Pembayaran

```sql
CREATE TABLE pembayaran (
...
);
```

### Fungsi

Menyimpan data pembayaran setiap booking.

---

# 🔗 Relasi Database

```
Pelanggan
     │
     ▼
 Booking
 ▲      │
 │      ▼
Lapangan Pembayaran
```

---

# ⚙️ Konfigurasi Database

Buka file

```
application/config/database.php
```

Sesuaikan konfigurasi berikut.

```php
'hostname' => 'localhost',   => #catatan : sesuaikan dengan port MySQL masing masing
'username' => 'root',
'password' => '',
'database' => 'futsalzone',
```

---

# ▶️ Menjalankan Project

Halaman Pengunjung

```
http://localhost/project-pweb
```

Halaman Login Admin

```
http://localhost/project-pweb/auth
```

---

# 🔑 Login Admin

```
Username : Admin
Password : 12345
```

---

# 📌 Alur Sistem

```
Pengunjung

↓

Melihat Daftar Lapangan

↓

Menghubungi Admin

↓

Admin Login

↓

Dashboard Admin

↓

Input Data Booking

↓

Input Data Pembayaran

↓

Data Tersimpan


# 👥 Anggota Kelompok

| No | Nama                   | NIM         |
| 1  |Astriawan               |24010110075  |
| 2  |Rizkia Dhuha Ramdani    |24010110093  |
| 3  |Ahmad Pahrezi           |24010110099  |
| 4  |Andika Badal Alfain     |24010110100  |

---

# 📌 Catatan

- Database wajib diimport sebelum menjalankan aplikasi.
- Login hanya tersedia untuk Admin.
- Pengunjung tidak perlu login.
- Booking dilakukan melalui Admin.
- Pastikan Apache dan MySQL aktif.
- File database tersedia pada folder `database/futsalzone.sql`.

---

# 📄 Lisensi

Project ini dibuat untuk memenuhi tugas mata kuliah **Pemrograman Web** dan digunakan hanya untuk keperluan akademik.
