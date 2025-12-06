https://github.com/user-attachments/assets/a0708a9e-23d0-4970-8549-066da8adafc6
# Projek Raya

**Projek sederhana untuk manajemen aset** — aplikasi CRUD berbasis Laravel untuk mengelola `tanah`, `bangunan`, `ruangan`, `kategori`, `barang`, dan `users` (dengan middleware admin).

**Status:** In development

**Stack:** PHP (Laravel), MySQL (atau compatible), Composer, Node.js (optional untuk asset build)

**Ringkasan:**
- Aplikasi ini menyediakan antarmuka CRUD untuk beberapa model aset: `Tanah`, `Bangunan`, `Ruangan`, `Kategori`, dan `Barang`.
- Terdapat middleware `IsAdmin` yang membatasi route `users` hanya untuk admin.




- Route utama didefinisikan di `routes/web.php` (lihat file untuk detail route resource-style).

**Fitur utama**
- CRUD untuk `tanah`, `bangunan`, `ruangan`, `kategori`, `barang`.
- Management user terbatas untuk admin (middleware `IsAdmin`).
- Seeder dan migrations untuk skema dasar (lihat folder `database/`).
# Projek Raya

**Projek sederhana manajemen aset (Laravel)** — aplikasi CRUD untuk mengelola `tanah`, `bangunan`, `ruangan`, `kategori`, `barang`, dan manajemen `users` (dengan middleware admin).

**Status:** In development

**Stack:** PHP (Laravel 10), Composer, MySQL/MariaDB (atau koneksi database yang kompatibel), Node.js (opsional untuk build asset)

**Ringkasan singkat**
- Aplikasi menyediakan CRUD untuk aset: `Tanah`, `Bangunan`, `Ruangan`, `Kategori`, `Barang`.
- Autentikasi sederhana tersedia (login/register) — controller ada di `app/Http/Controllers/AuthController.php`.
- Route `users` dilindungi oleh middleware `IsAdmin` (alias `admin`).

**Struktur penting**
- Controllers: `app/Http/Controllers/` (contoh: `AuthController.php`, `TanahController.php`, dll.)
- Models: `app/Models/` (contoh: `User.php`, `Tanah.php`, `Bangunan.php`)
- Routes web: `routes/web.php`
- Views: `resources/views/` (termasuk `resources/views/auth/login.blade.php` dan `register.blade.php`)
- Seeders: `database/seeders/` (termasuk `AdminUserSeeder.php`)

**Persyaratan**
- PHP >= 8.1
- Composer
- Database (MySQL/MariaDB atau lainnya yang didukung Laravel)
- Node.js & npm (opsional untuk asset)

**Instalasi & Setup (PowerShell)**

1. Clone repository dan masuk ke folder proyek:

```
git clone <repo-url> projek-raya
cd projek-raya
```

2. Install dependensi PHP:

```
composer install
```

3. Copy file environment dan generate key aplikasi:

```
Copy-Item -Path .env.example -Destination .env
php artisan key:generate
```

4. Sesuaikan konfigurasi database di file `.env` (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

5. Jalankan migrasi dan seeder (seeder membuat akun admin jika belum ada):

```
php artisan migrate --seed
```

Catatan: project memiliki `AdminUserSeeder` yang membuat user admin dengan kredensial default:

- **Email:** `admin@example.com`
- **Password:** `password`

Model `User` menggunakan cast `password => 'hashed'`, sehingga seeder menyimpan password plain pada saat create dan model akan meng-hash saat menyimpan.

6. (Opsional) Install dan jalankan dev server asset (Vite):

```
npm install
npm run dev
```

7. Jalankan server pengembangan Laravel:

```
php artisan serve
```

Lalu buka `http://127.0.0.1:8000`.

**Routes penting**
- Auth:
	- `GET /login` — form login (`AuthController@loginForm`)
	- `POST /login` — proses login (`AuthController@login`)
	- `GET /register` — form register (`AuthController@registerForm`)
	- `POST /register` — proses register (`AuthController@register`)
	- `GET /logout` — logout (`AuthController@logout`)
- Resource routes (dilindungi `auth`): `tanah`, `bangunan`, `ruangan`, `kategori`, `barang` — lihat `routes/web.php` untuk daftar lengkap
- Admin-only (middleware `admin`): `users` management (lihat `app/Http/Middleware/IsAdmin.php`)

**Autentikasi & Role**
- `app/Http/Controllers/AuthController.php` berisi logic login/register/logout.
- `app/Models/User.php` memiliki field `role` (`user` atau `admin`) dan menggunakan casting `password` => `hashed`.
- Middleware `IsAdmin` memeriksa `$user->role === 'admin'` dan mengarahkan ulang jika bukan admin.

**Testing & Debugging**
- Menjalankan test (jika ada):

```
./vendor/bin/phpunit
```

- Membuat ulang seed (termasuk admin):

```
php artisan db:seed --class=AdminUserSeeder
```

**Tips development**
- Pastikan `.env` sudah benar setelah clone. Jika ada perubahan dependency, jalankan `composer install` lagi.
- Jika terdapat masalah route/name mismatch, periksa nama route di `routes/web.php` dan pemanggilan `route('...')` di views/controllers.

**File penting untuk ditinjau**
- `routes/web.php` — daftar route utama
- `app/Http/Controllers/AuthController.php` — login/register handlers
- `resources/views/auth/login.blade.php` dan `register.blade.php` — tampilan auth
- `app/Http/Middleware/IsAdmin.php` — middleware admin

Jika Anda mau, saya bisa:
- Menjalankan pengecekan konsistensi route dan nama route di views (cek pemanggilan `route('...')`) 
- Menambahkan instruksi deploy atau containerization (Docker)

Terangkan langkah selanjutnya yang Anda inginkan, dan saya akan lanjutkan.
