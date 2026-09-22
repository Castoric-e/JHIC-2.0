# Panduan & Roadmap Pembelajaran Codebase: Website IDN JHIC

Dokumen ini berisi rangkuman seluruh konsep teknis, arsitektur, dan logika kode yang digunakan pada proyek **Website IDN JHIC**. Karena kode ini mencakup arsitektur modern (Laravel 11, Docker containerization, Microservice Proxy, SQLite, hingga Vite bundler), berikut adalah materi dan topik yang perlu Anda dalami agar Anda benar-benar memahami cara kerja aplikasi ini secara menyeluruh.

---

## 🏗️ Arsitektur Aplikasi Secara Umum

Proyek ini dibangun dengan arsitektur **Hybrid Monolith**:
1. **Frontend & Backend Utama**: Menggunakan **Laravel 11** dengan engine template **Blade** dan styling **Tailwind CSS**.
2. **Database**: Menggunakan **SQLite** (`database/database.sqlite`) agar lightweight dan mudah dipindahkan.
3. **Containerization & Deployment**: Menggunakan **Docker** dengan image `serversideup/php:8.3-fpm-nginx` yang dikombinasikan dengan script inisialisasi Linux (`entrypoint.sh`).
4. **AI Microservice**: Menggunakan **FastAPI** (Python) yang berjalan di server terpisah (Render), di mana Laravel bertindak sebagai **Reverse Proxy** penengah.

---

## 📘 Modul 1: Docker & Deployment Architecture (`Dockerfile` & `entrypoint.sh`)

Materi ini menjelaskan bagaimana aplikasi Anda diubah menjadi container yang siap di-deploy ke cloud (seperti GCP, AWS, VPS, atau Render/Koyeb).

### Konsep Penting yang Harus Dipelajari:
1. **Base Image `serversideup/php:8.3-fpm-nginx`**
   - **Apa ini?** Image Docker pra-konfigurasi yang menggabungkan PHP-FPM 8.3 dan web server Nginx sekaligus dalam 1 container menggunakan S6 Overlay.
   - **Mengapa digunakan?** Menghindarkan Anda dari keharusan membuat 2 container terpisah (1 container Nginx + 1 container PHP) atau menginstall Nginx manual dari nol.

2. **Entrypoint Script Inisialisasi (`/etc/entrypoint.d/99-laravel.sh`)**
   - **Cara Kerja:** S6 Overlay pada container akan secara otomatis menjalankan semua script shell yang berada di folder `/etc/entrypoint.d/` saat container pertama kali dinyalakan. Awalan `99-` memastikan script Laravel kita berjalan paling akhir setelah service internal container siap.
   - **Perintah `sed -i 's/\r$//'`:** Windows menggunakan akhiran baris `CRLF` (`\r\n`), sedangkan Linux menggunakan `LF` (`\n`). Jika script dibuat di Windows tanpa perintah `sed` ini, Linux container akan mengembalikan error `\r: command not found` saat eksekusi.

3. **Perizinan File (Permissions & Ownership)**
   - Perintah `chown -R www-data:www-data storage bootstrap/cache` memastikan web server (Nginx/PHP-FPM yang berjalan sebagai user `www-data`) memiliki akses tulis (*write access*) untuk membuat log, menyimpan cache halaman, dan menyimpan session pengguna.

4. **Fault Tolerance pada Automated Startup Script**
   - Perintah `php artisan migrate --force 2>&1 || echo ...` menggunakan operator `||` (OR) dan pengalihan output `2>&1`. Artinya: "Jalankan migrasi database, jika gagal (misalnya karena database belum siap), cetak peringatan lalu LENGKAPI SCRIPT tanpa menghentikan/membuat crash container".

---

## 🗺️ Modul 2: Laravel Routing & Control Flow (`routes/web.php`)

Materi ini menjelaskan bagaimana URL dari browser dipetakan ke tampilan atau controller yang sesuai.

### Konsep Penting yang Harus Dipelajari:
1. **Optional Route Parameters (`/program/{slug?}`)**
   - Tanda tanya (`?`) pada `{slug?}` berarti parameter URL tersebut tidak wajib diisi.
   - Variabel default `$slug = null` digunakan agar fungsi tidak error jika pengguna hanya membuka URL `/program`.

2. **Penyelarasan Alias URL (Human-Friendly Slugs)**
   - Pada file `routes/web.php`, terdapat pengecekan variasi kata:
     `if ($slug === 'pkl' || $slug === 'magang')`
     `if ($slug === 'ekstrakurikuler' || $slug === 'ekstrakulikuler')`
   - **Fungsi:** Mengantisipasi kesalahan ketik umum (*typo*) atau variasi penamaan dari pengunjung website agar tetap mengarah ke halaman yang benar.

3. **Dynamic View Rendering & Fallback Data**
   - Jika slug yang dimasukkan pengunjung tidak cocok dengan cabang `if` manapun (misal: `/program/kegiatan`), sistem tidak memunculkan error, melainkan kembali ke view `welcome` sambil membawa data judul halaman dinamis `['pageTitle' => 'Program: KEGIATAN']`.

---

## 🔍 Modul 3: Controller Logic & Query Optimization (`ArticleController.php`)

Materi ini menjelaskan logika bisnis pencarian artikel, filter kategori, penanganan artikel utama (*featured article*), dan pagination.

### Konsep Penting yang Harus Dipelajari:
1. **Metode Filtering & Searching**
   - **Filter Kategori:** Mengelompokkan kata kunci seperti `'News'`, `'Event'`, `'Berita'` ke dalam satu query `whereIn` agar artikel dalam grup kategori yang mirip tetap dapat ditampilkan.
   - **Pencarian Teks:** Menggunakan kondisi `where(function($q) { ... })` dengan operator `LIKE %search%` untuk mencocokkan kata kunci pada judul ataupun isi konten artikel.

2. **Query Cloning & Mencegah Duplikasi Tampilan (`where('id', '!=', ...)`)**
   - Di halaman artikel utama, terdapat 1 artikel unggulan (*Featured Article*) di bagian atas (Hero Banner) dan sisa artikel lainnya berada di grid bawah.
   - Dengan menggunakan `clone $query` dan `where('id', '!=', $featuredArticle->id)`, sistem memastikan bahwa artikel yang sudah tampil di banner atas **TIDAK AKAN MUNCUL KEMBALI** di grid bawahnya.

3. **Method `firstOrFail()` vs `first()`**
   - `Article::where('slug', $slug)->firstOrFail()`
   - **Mengapa dipakai?** Jika artikel dengan slug tersebut tidak ada di database, Laravel akan langsung melemparkan exception `ModelNotFoundException` yang otomatis menampilkan Halaman 404 khas Laravel, tanpa membuat aplikasi crash.

4. **Query Acak untuk Rekomendasi Artikel (`inRandomOrder()`)**
   - Pada halaman detail artikel, dipanggil `Article::where('slug', '!=', $slug)->inRandomOrder()->take(3)->get()` untuk mengambil 3 artikel acak sebagai rekomendasi di sidebar, selain artikel yang sedang dibaca.

---

## 🤖 Modul 4: Integrasi Microservice & API Proxy (`ChatbotController.php`)

Materi ini menjelaskan bagaimana website Laravel Anda berkomunikasi secara aman dengan server AI Chatbot external yang dibuat menggunakan Python (FastAPI).

### Konsep Penting yang Harus Dipelajari:
1. **Arsitektur Backend-to-Backend (Reverse Proxy / API Gateway)**
   - **Masalah:** Jika JavaScript di browser langsung mengirim pesan ke API FastAPI di Render:
     1. Kunci API rahasia (`FASTAPI_API_KEY`) akan bocor dan bisa dilihat oleh siapa saja lewat Inspect Element/Network Tab browser.
     2. Terjadi masalah **CORS** (Cross-Origin Resource Sharing) karena beda domain.
   - **Solusi:** Frontend JS mengirim request ke Laravel (`/api/chatbot/chat`) -> Laravel secara rahasia menambahkan `X-API-Key` di server -> Laravel menghubungi FastAPI -> Laravel mengembalikan jawaban AI ke Frontend JS.

2. **Session & Context Management (`conversation_id` & `previous_response_id`)**
   - Agar AI ingat percakapan sebelumnya (tidak pikun saat diajak bicara berulang kali), Laravel menerima `conversation_id` dan `previous_response_id` dari browser dan meneruskannya ke FastAPI sebagai payload JSON.

---

## 💾 Modul 5: Database Seeding & Strategy (`DatabaseSeeder.php`)

Materi ini menjelaskan bagaimana data awal (seperti artikel berita dan akun user testing) diisikan secara otomatis ke dalam database SQLite.

### Konsep Penting yang Harus Dipelajari:
1. **Metode `firstOrCreate` untuk Idempotency**
   - `User::firstOrCreate(['email' => 'test@example.com'], [...]);`
   - **Fungsi:** Memastikan bahwa meskipun script `entrypoint.sh` atau `db:seed` dijalankan berkali-kali setiap container dinyalakan ulang, aplikasi tidak akan crash akibat error *Duplicate Entry Email*.

2. **ArticleSeeder**
   - File `database/seeders/ArticleSeeder.php` berisi dump data artikel lengkap beserta konten HTML, tanggal rilis, dan kategori untuk mengisi tampilan berita saat website pertama kali diinstall.

---

## ⚡ Modul 6: Frontend Build Tooling (`vite.config.js`)

Materi ini menjelaskan bagaimana Tailwind CSS dan asset JavaScript diolah saat tahap pengembangan maupun produksi.

### Konsep Penting yang Harus Dipelajari:
1. **Tailwind CSS v4 Integration (`@tailwindcss/vite`)**
   - Vite bertindak sebagai bundler modern yang sangat cepat untuk mengkompilasi CSS dan JS aplikasi.

2. **Watcher Fix (`ignored: ['**/storage/framework/views/**']`)**
   - **Masalah:** Setiap kali pengguna membuka halaman website, Laravel mengkompilasi template Blade menjadi file PHP biasa di dalam folder `storage/framework/views/`.
   - **Mengapa di-ignore?** Jika Vite memantau folder tersebut, Vite akan mengira ada file kode yang berubah setiap kali halaman di-refresh, sehingga terjadi *Infinite Page Reload Loop*. Konfigurasi ini mematikan pemantauan pada folder cache tersebut.

---

## 🎯 Rencana Langkah Belajar (Step-by-Step Action Plan)

Untuk menguasai seluruh aspek aplikasi ini, berikut adalah urutan belajar yang disarankan:

1. **Langkah 1: Pelajari Dasar Laravel Routing & Blade Template**
   - Pahami cara kerja file `routes/web.php` dan bagaimana data dilempar ke Blade Views (`resources/views/`).
2. **Langkah 2: Pelajari Eloquent ORM & Controller Logic**
   - Buka `ArticleController.php`, pelajari cara kerja query database (`where`, `whereIn`, `paginate`, `firstOrFail`).
3. **Langkah 3: Pelajari Integrasi HTTP Client & API Proxy**
   - Buka `ChatbotController.php`, pelajari penggunaan `Illuminate\Support\Facades\Http` dan konsep pengamanan API Key.
4. **Langkah 4: Pelajari Arsitektur Docker & Bash Scripting**
   - Buka `Dockerfile` dan `entrypoint.sh`. Pelajari fungsi instruksi `FROM`, `RUN`, `COPY`, perizinan user `www-data`, serta urutan eksekusi startup di Linux.
5. **Langkah 5: Pelajari Asset Pipeline dengan Vite**
   - Buka `vite.config.js` dan pelajari bagaimana Vite bekerja bersama Laravel untuk mengolah file CSS/JS.
