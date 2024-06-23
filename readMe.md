# Data Mahasiswa

Program Data Mahasiswa ini adalah aplikasi sederhana untuk mengelola data mahasiswa. Program ini memungkinkan pengguna untuk menambahkan, melihat, dan menghapus data mahasiswa dari database MySQL.

## Langkah-Langkah Instalasi dan Penggunaan

### 1. Buat Database dan Tabel
1. Buka aplikasi MySQL (misalnya phpMyAdmin atau MySQL command line).

2. Jalankan perintah SQL dari file createDatabase.sql untuk membuat database db_akademik dan tabel mahasiswa
### 2. Tempatkan File PHP
1. Pastikan server web Anda (misalnya Apache) berjalan dan terpasang dengan benar.
2. Pindahkan keempat file PHP (database.php, tampil.php, simpan.php, hapus.php) ke dalam folder htdocs (untuk XAMPP).
### 3. Konfigurasi Koneksi Database
1. Buka file database.php.
2. Pastikan pengaturan host, username, password, dan nama database sesuai dengan konfigurasi MySQL.
### 4. Jalankan Aplikasi
1. Buka browser, lalu cari localhost/tampil.php
2. klik "input data" untuk memasukkan data mahasiswa.
3. Gunakan opsi "Hapus" di tampil.php untuk menghapus data mahasiswa.

## Struktur Direktori
Pastikan semua file (database.php, tampil.php, simpan.php, hapus.php) berada dalam satu direktori yang sama di folder root server web Anda.

## Penggunaan
1. Input Data Mahasiswa: Buka localhost/simpan.php di browser untuk memasukkan data mahasiswa atau klik "input data" pada saat berada di localhost/tampil.php.
2. Lihat Data Mahasiswa: Buka localhost/tampil.php di browser untuk melihat daftar mahasiswa.
3. Hapus Data Mahasiswa: Gunakan opsi "Hapus" di tampil.php untuk menghapus data 

## Catatan
1. Pastikan server MySQL berjalan dan dapat diakses.
2. Pastikan PHP terpasang dan terkonfigurasi dengan benar di server web Anda.