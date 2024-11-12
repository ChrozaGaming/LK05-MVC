
# 🎉 Aplikasi CRUD Sederhana dengan PHP MVC 🎉

> Proyek ini adalah aplikasi CRUD sederhana menggunakan arsitektur MVC di PHP. Aplikasi ini memungkinkan pengguna untuk melakukan operasi Create, Read, Update, dan Delete pada data pengguna. Aplikasi ini juga menerapkan prinsip MVC untuk memisahkan antara Model, View, dan Controller guna meningkatkan keterbacaan serta perawatan kode.

---

## 📝 Biodata Pembuat

| Informasi          | Keterangan                     |
|--------------------|--------------------------------|
| **Nama**           | Hilmy Raihan Alkindy           |
| **NIM**            | 235150707111042                |
| **Program Studi**  | Teknologi Informasi            |
| **Mata Kuliah**    | Pemrograman Aplikasi Web - B   |

---

## 📂 Struktur Folder

Struktur folder untuk aplikasi ini diatur agar sesuai dengan arsitektur MVC:

```plaintext
- mvc_crud
  ├── controllers          # Folder untuk Controller
  │   └── UserController.php
  ├── models               # Folder untuk Model
  │   └── User.php
  ├── views                # Folder untuk View
  │   └── user
  │       ├── index.php
  │       ├── create.php
  │       └── edit.php
  ├── config               # Folder untuk Konfigurasi Database
  │   └── database.php
  ├── index.php            # Berfungsi sebagai titik awal aplikasi
  └── .htaccess            # Pengaturan mod_rewrite untuk URL
```

---

## 🚀 Fitur Utama

- **Create** ➡️ Menambahkan pengguna baru ke dalam database.
- **Read** ➡️ Melihat semua data pengguna yang tersimpan.
- **Update** ➡️ Mengedit data pengguna yang ada.
- **Delete** ➡️ Menghapus data pengguna dari database.

Setiap fitur diimplementasikan menggunakan metode-metode dalam `UserController`, yang bekerja sama dengan `User` sebagai model untuk melakukan operasi CRUD.

---

## 🔧 Cara Instalasi

1. **Clone Repository**: Clone repository ini ke local environment.
   ```bash
   git clone https://github.com/username/mvc_crud.git
   ```

2. **Konfigurasi Database**:
   - Pastikan Anda memiliki MySQL atau MariaDB di local machine.
   - Buat database baru dengan nama `mvc_crud`.
   - Import file `database.sql` atau jalankan SQL berikut:
     ```sql
     CREATE DATABASE mvc_crud;

     USE mvc_crud;

     CREATE TABLE users (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(100) NOT NULL,
         email VARCHAR(100) NOT NULL,
         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```

3. **Konfigurasi Database Connection**:
   - Edit file `config/database.php` sesuai dengan konfigurasi database Anda.
   - Sesuaikan nilai `host`, `username`, dan `password` dalam konfigurasi.

4. **Menjalankan Aplikasi**:
   - Pindahkan seluruh folder `mvc_crud` ke direktori web server (misal, `htdocs` jika menggunakan XAMPP atau `www` untuk LAMP).
   - Akses aplikasi melalui browser di `http://localhost/mvc_crud`.

---

## ⚙️ Struktur MVC

### Model (`models/User.php`)

Model ini menangani koneksi database serta fungsi CRUD terkait pengguna. Kelas `User` menyediakan metode untuk mendapatkan data, menambah, memperbarui, dan menghapus pengguna dari database.

### View (`views/user`)

Folder ini berisi tampilan HTML untuk setiap operasi CRUD. Semua tampilan pengguna diambil dan ditampilkan menggunakan kode HTML dalam file yang terpisah (index, create, edit).

### Controller (`controllers/UserController.php`)

Controller mengatur logika aplikasi, menangani request dari user, dan berkomunikasi antara model dan view.

---

## 📜 Contoh Kode Utama

Berikut adalah contoh kode dari `UserController.php` untuk menampilkan data pengguna (Read Operation):

```php
public function index() {
    $users = $this->userModel->getAll();
    require_once "views/user/index.php";
}
```

Kode di atas mengatur alur dari pengambilan data pengguna dari model dan meneruskannya ke `index.php` dalam folder view.

---

## 👩‍💻 Teknologi yang Digunakan

- **PHP** 🐘
- **MySQL** 💽
- **HTML** 🌐
- **CSS** 🎨
- **Apache/Nginx** 🌍 (Web Server)

---

## 📋 Daftar Tugas (Future Improvements)

- [ ] Tambahkan validasi pada sisi server dan klien.
- [ ] Integrasi dengan front-end framework (contoh: Bootstrap atau Tailwind).
- [ ] Penanganan error dan exception handling.
- [ ] Implementasi autentikasi pengguna.

---

## 📄 Lisensi

Proyek ini dibuat untuk menyelesaikan penugasan belajar pada mata kuliah Pengembangan Aplikasi Web.

---

## 📞 Kontak

Apabila Anda memiliki pertanyaan atau ingin memberikan feedback, jangan ragu untuk menghubungi melalui email:

**hilmyraihan@student.ub.ac.id**

---

Semoga proyek ini membantu Anda dalam memahami arsitektur MVC dalam pengembangan aplikasi CRUD menggunakan PHP! 😊
