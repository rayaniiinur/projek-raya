
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

**Persyaratan**
- PHP >= 8.1
- Composer
- MySQL / MariaDB atau database lain yang didukung Laravel
- Node.js & npm (opsional, untuk build asset)

**Instalasi (Windows PowerShell)**
Clone repo dan masuk ke direktori proyek:

```powershell
git clone <repo-url> projek-raya
Set-Location projek-raya
```

Install dependensi PHP:

```powershell
composer install
```

Salin file environment dan generate app key:

```powershell
Copy-Item -Path .env.example -Destination .env
php artisan key:generate
```

Atur koneksi database di file `.env` (ubah `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`). Setelah konfigurasi DB selesai, jalankan migrasi dan seeder:

```powershell
php artisan migrate --seed
```

Jika Anda menggunakan asset (CSS/JS) yang dibangun lewat Vite:

```powershell
npm install
npm run dev
```

Menjalankan server development:

```powershell
php artisan serve --host=127.0.0.1 --port=8000
```

Lalu buka `http://127.0.0.1:8000` di browser.

**Routes penting (ringkasan dari `routes/web.php`)**
- `GET /tanah` — index `TanahController@index`
- `GET /tanah/create` — form create
- `POST /tanah` — store
- `GET /tanah/{id}/edit` — edit
- `PUT /tanah/{id}` — update
- `DELETE /tanah/{id}` — destroy

- `GET /bangunan`, `/ruangan`, `/kategori`, `/barang` — route CRUD serupa

- `users` routes berada dalam middleware `IsAdmin` (lihat `routes/web.php` untuk daftar lengkap)

**Catatan pengembangan**
- Model-model dasar ada di `app/Models/` (mis. `Tanah.php`, `Bangunan.php`, `Ruangan.php`, dll).
- Controller ada di `app/Http/Controllers/`.
- Seeder dan factory tersedia di `database/seeders` dan `database/factories`.

**Testing**
Jalankan test suite (jika tersedia):

```powershell
./vendor/bin/phpunit
```

**Troubleshooting umum**
- Error route tidak ditemukan (mis. `Route [user.index] not defined`) biasanya berarti ada pemanggilan route dengan nama yang salah. Periksa file blade/redirect yang memanggil `route('user.index')` dan pastikan nama route di `routes/web.php` cocok (dalam repo ini route users dinamai `users.index`).

**Kontribusi**
- Buat branch feature dari `main`.
- Buka PR dengan deskripsi perubahan.

**Lisensi**
- Proyek ini mengikuti lisensi MIT (sesuai dependensi Laravel). Sesuaikan jika perlu.

---

Jika Anda ingin, saya bisa:
- Menjalankan pengecekan cepat untuk memastikan route nama konsisten.
- Menambahkan badges CI atau instruksi deploy.

Beritahu saya langkah berikutnya yang Anda inginkan.
