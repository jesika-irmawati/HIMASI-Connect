# Tasklist HIMASI Connect

**Proyek:** HIMASI Connect
**Stack:** Laravel 10.50.5, PHP 8.1.10, Node 26.13.0, npm 11.20.0, Blade, Bootstrap 5, Vite 4, MySQL 8.0.30 (development), SQLite `:memory:` (testing)
**Sumber acuan:** `agent/PRD(1).md`, `agent/design(1).md`, `agent/task-instruction.md`, `AGENTS.md`
**Lokasi tasklist:** `agent/tasklist.md` — menggantikan `.agents/tasklist.md` yang tidak ada di repo
**Terakhir diperbarui:** 28 November 2026
**Progress:** **7%** (7/100 task)
**Status:** Task 1.1-1.7 selesai. Konfigurasi testing SQLite `:memory:` dan `withoutVite()` terverifikasi; `pdo_sqlite` dan `sqlite3` sudah aktif. Belum ada task implementasi fitur yang dikerjakan.

> **Penting:** Jangan menandai task selesai sebelum benar-benar diimplementasikan dan diverifikasi. Setiap satu task atau satu grup task selesai, file ini wajib diperbarui.

---

## Keputusan Final yang Disepakati

- **Cakupan:** PRD-first + ekstra ringan. Semua fitur PRD/design dikerjakan, ditambah toast, polling badge notifikasi, share pengumuman, sound notification opsional, dan cleanup command. **Tanpa Room/chat realtime/websocket** karena tidak ada di PRD; padanan terdekat adalah Forum Diskusi.
- **Peran & hak akses:** dinamis. Tabel `roles`, `permissions`, dan pivot `permission_role`. Permission merupakan daftar tetap yang terikat ke pengecekan kode; yang dinamis adalah pembuatan role dan pemetaan permission oleh Super User.
- **Role sistem:** `Super User`, `Pengurus`, `Anggota`, `Pembina`. Super User memperoleh semua permission kecuali `voting.vote` dan role-nya dikunci agar akses admin tidak hilang. Role sistem tidak dapat dihapus.
- **Jabatan:** Ketua dan Sekretaris adalah `users.position` di dalam kelompok Pengurus, bukan role terpisah.
- **Voting:** Pengurus (termasuk Ketua) dan Anggota boleh memberikan suara. Pembina dan Super User tidak boleh vote. Hasil live dapat dilihat Pengurus/Ketua/Pembina; semua peran dapat melihat hasil setelah voting ditutup.
- **Autentikasi:** login dengan email atau NIM, remember me, logout, reset password via email (mail log untuk lokal). **Tanpa Google OAuth.**
- **UI/UX:** Blade + Bootstrap 5, bahasa Indonesia, layout header + sidebar + offcanvas mobile, palet biru/putih/biru muda/pink/abu, responsif, aksesibel.
- **Testing:** PHPUnit 10 dengan SQLite `:memory:` dan `RefreshDatabase`; gunakan `withoutVite()` pada test.
- **Akun demo:** `superuser@himasi.test`, `ketua@himasi.test`, `pengurus@himasi.test`, `anggota@himasi.test`, `pembina@himasi.test` — password awal `password`.
- **Di luar scope:** Room/chat realtime/websocket, Google OAuth, pengelolaan keuangan, pembayaran iuran, nilai akademik, integrasi sistem akademik, aplikasi Android native.

---

## Legenda & Aturan Update

- `[ ]` = task belum dikerjakan.
- `[x] ✅` = task selesai dan sudah diverifikasi.
- `[Mudah]`, `[Sedang]`, `[Sulit]` = perkiraan tingkat kesulitan.
- Catatan file yang dibuat/diubah ditulis sebagai sub-bullet di bawah task yang selesai.
- **Progress** dihitung dari jumlah task selesai dibagi 100, dikalikan 100%, lalu dibulatkan.
- Setiap selesai satu task/grup: ubah checkbox, tambahkan `✅`, tulis catatan file, perbarui progress dan tanggal.

---

## 1. Project Setup & Configuration

- [x] ✅ Task 1.1 - Menyusun tasklist dan baseline proyek `[Mudah]` (Selesai)
  - **File:** `agent/tasklist.md`
  - **Catatan:** Tasklist 10 kategori dengan 100 task, keputusan final, legenda, aturan update, dan riwayat progress.
- [x] ✅ Task 1.2 - Verifikasi environment Laravel/PHP/Node/MySQL dan siapkan database `HIMASI-Connect` `[Mudah]` (Selesai)
  - **File:** `agent/tasklist.md` (diperbarui); tidak ada perubahan dependency.
  - **Catatan:** Laravel 10.50.5, PHP 8.1.10, Node v26.13.0, npm 11.20.0 (via `npm.cmd`), MySQL 8.0.30. Database `HIMASI-Connect` tersedia (schema `himasi-connect`, utf8mb4_unicode_ci) dan koneksi Laravel berhasil. Catatan lanjutan: `pdo_sqlite` saat itu belum aktif; ekstensi tersebut sudah diaktifkan kemudian pada Task 1.7.
- [x] ✅ Task 1.3 - Install Bootstrap 5, Bootstrap Icons, Popper, dan dependency Vite `[Mudah]` (Selesai)
  - **File:** `package.json`, `package-lock.json`; `node_modules/` dan `public/build/` (gitignored).
  - **Catatan:** Bootstrap 5.3.0, Bootstrap Icons 1.11.0, dan @popperjs/core 2.11.8 terpasang sebagai devDependencies. `vite.config.js` tidak diubah. `npm.cmd run build` berhasil dengan Vite 4.5.14 (61 modules transformed). `npm audit` melaporkan 3 kerentanan pada dependency dev; tidak diperbaiki karena akan mengubah dependency. Import Bootstrap ke entrypoint belum dilakukan dan akan dikerjakan pada task UI/JS terkait.
- [x] ✅ Task 1.4 - Konfigurasi `APP_NAME`, timezone `Asia/Jakarta`, locale `id`, dan faker `id_ID` `[Mudah]` (Selesai)
  - **File:** `.env`, `.env.example`, `config/app.php`.
  - **Catatan:** `APP_NAME="HIMASI Connect"`; `timezone` => `Asia/Jakarta`; `locale` => `id`; `faker_locale` => `id_ID`. Config cache dibersihkan dan nilai runtime diverifikasi via tinker: `HIMASI Connect`, `Asia/Jakarta`, `id`, `id_ID`. `fallback_locale` tetap `en` karena tidak diminta.
- [x] ✅ Task 1.5 - Konfigurasi pagination Bootstrap 5 dan service provider `[Mudah]` (Selesai)
  - **File:** `app/Providers/AppServiceProvider.php`.
  - **Catatan:** `Illuminate\Pagination\Paginator` diimpor dan `Paginator::useBootstrapFive()` dipanggil di `boot()`. Verifikasi render paginator menghasilkan markup Bootstrap 5 dengan class `pagination`, `page-item`, dan `page-link`.
- [x] ✅ Task 1.6 - Konfigurasi filesystem public/private, storage link, dan direktori upload `[Sedang]` (Selesai)
  - **File:** `config/filesystems.php`; direktori `storage/app/public` dan `storage/app/private`; link `public/storage`.
  - **Catatan:** Disk `public` tetap mengarah ke `storage/app/public` dengan URL `/storage`; disk `private` baru mengarah ke `storage/app/private` dengan visibility `private` dan tanpa URL publik. `php artisan storage:link` berhasil membuat junction `public/storage` ke `storage/app/public`. Verifikasi tulis/baca pada kedua disk berhasil; file uji di disk private tidak dapat diakses melalui `public/storage`, lalu file uji dibersihkan.
- [x] ✅ Task 1.7 - Konfigurasi PHPUnit SQLite `:memory:` dan `withoutVite()` pada TestCase `[Sedang]` (Selesai)
  - **File:** `phpunit.xml`, `tests/TestCase.php`, `tests/Feature/TestingConfigurationTest.php`, `.gitignore` (ignore cache PHPUnit), `php.ini` (ekstensi `pdo_sqlite` dan `sqlite3`).
  - **Catatan:** `DB_CONNECTION=sqlite` dan `DB_DATABASE=:memory:` diaktifkan khusus untuk PHPUnit; koneksi utama tetap MySQL (`HIMASI-Connect`). `withoutVite()` ditambahkan di `setUp()`. Test suite berhasil: 4 passed (6 assertions), termasuk test konfigurasi testing dan test `withoutVite()`. Ekstensi `pdo_sqlite` dan `sqlite3` sudah aktif; koneksi SQLite `:memory:` berhasil diuji dan blocker sebelumnya sudah terselesaikan. PHPUnit juga memberi warning schema XML deprecated; belum diubah karena di luar scope task ini.
- [ ] Task 1.8 - Konfigurasi struktur route web, middleware alias, dan error pages dasar `[Sedang]`
  - Target: `routes/web.php`, `app/Http/Kernel.php`, `resources/views/errors/*`.

---

## 2. Database & Migration

- [ ] Task 2.1 - Membuat migration `roles`, `permissions`, dan `permission_role` `[Sedang]`
  - Target: `database/migrations/*_create_roles_and_permissions_tables.php`.
- [ ] Task 2.2 - Membuat migration alter `users`: NIM, HP, prodi, foto, role_id, position, is_active, last_login_at `[Sedang]`
  - Target: `database/migrations/*_add_profile_and_role_fields_to_users_table.php`.
- [ ] Task 2.3 - Membuat migration `discussions` `[Mudah]`
  - Target: `database/migrations/*_create_discussions_table.php`.
- [ ] Task 2.4 - Membuat migration `messages` `[Mudah]`
  - Target: `database/migrations/*_create_messages_table.php`.
- [ ] Task 2.5 - Membuat migration `votings` dan `voting_options` `[Sedang]`
  - Target: `database/migrations/*_create_votings_and_voting_options_tables.php`.
- [ ] Task 2.6 - Membuat migration `votes` dengan unique constraint user+voting `[Sedang]`
  - Target: `database/migrations/*_create_votes_table.php`.
- [ ] Task 2.7 - Membuat migration `activities` `[Mudah]`
  - Target: `database/migrations/*_create_activities_table.php`.
- [ ] Task 2.8 - Membuat migration `tasks` (pembagian tugas) `[Mudah]`
  - Target: `database/migrations/*_create_tasks_table.php`.
- [ ] Task 2.9 - Membuat migration `announcements` `[Mudah]`
  - Target: `database/migrations/*_create_announcements_table.php`.
- [ ] Task 2.10 - Membuat migration `notifications` `[Sedang]`
  - Target: `database/migrations/*_create_notifications_table.php`.
- [ ] Task 2.11 - Membuat migration `documents` `[Sedang]`
  - Target: `database/migrations/*_create_documents_table.php`.
- [ ] Task 2.12 - Membuat seeder roles, permissions, role-permission default, dan akun demo `[Sulit]`
  - Target: `database/seeders/RolePermissionSeeder.php`, `database/seeders/UserSeeder.php`.
- [ ] Task 2.13 - Membuat seeder data contoh forum, voting, kegiatan, pengumuman, dokumentasi, dan notifikasi `[Sedang]`
  - Target: `database/seeders/DemoDataSeeder.php`, `database/seeders/DatabaseSeeder.php`.

---

## 3. Models & Relationships

- [ ] Task 3.1 - Membuat model `Role` dengan relasi users, permissions, dan helper `isSystem` `[Sedang]`
  - Target: `app/Models/Role.php`.
- [ ] Task 3.2 - Membuat model `Permission` dengan relasi roles dan grouping `[Mudah]`
  - Target: `app/Models/Permission.php`.
- [ ] Task 3.3 - Memperbarui model `User`: relasi role, discussions, votes, tasks, notifications, documents; helper `hasPermission`, `isSuperUser`, `isActive` `[Sulit]`
  - Target: `app/Models/User.php`.
- [ ] Task 3.4 - Membuat model `Discussion` dengan relasi user, messages, voting, dan scope status/search `[Sedang]`
  - Target: `app/Models/Discussion.php`.
- [ ] Task 3.5 - Membuat model `Message` dengan relasi discussion dan user `[Mudah]`
  - Target: `app/Models/Message.php`.
- [ ] Task 3.6 - Membuat model `Voting`, `VotingOption`, dan `Vote` dengan relasi, scope state, dan aturan satu suara `[Sulit]`
  - Target: `app/Models/Voting.php`, `app/Models/VotingOption.php`, `app/Models/Vote.php`.
- [ ] Task 3.7 - Membuat model `Activity` dengan relasi tasks, documents, announcements, voting, dan scope status `[Sedang]`
  - Target: `app/Models/Activity.php`.
- [ ] Task 3.8 - Membuat model `Task` dengan relasi activity dan user serta scope status `[Mudah]`
  - Target: `app/Models/Task.php`.
- [ ] Task 3.9 - Membuat model `Announcement` dengan relasi user, activity, notifications, dan scope published `[Sedang]`
  - Target: `app/Models/Announcement.php`.
- [ ] Task 3.10 - Membuat model `Notification` dengan relasi user dan announcement serta scope unread `[Mudah]`
  - Target: `app/Models/Notification.php`.
- [ ] Task 3.11 - Membuat model `Document` dengan relasi user dan activity serta scope type/search `[Sedang]`
  - Target: `app/Models/Document.php`.
- [ ] Task 3.12 - Membuat factory untuk seluruh model domain `[Sedang]`
  - Target: `database/factories/*Factory.php`.

---

## 4. Backend Logic & API

- [ ] Task 4.1 - Membuat auth controller: login email/NIM, remember me, logout, dan update `last_login_at` `[Sulit]`
  - Target: `app/Http/Controllers/Auth/AuthenticatedSessionController.php`, `app/Http/Requests/Auth/LoginRequest.php`.
- [ ] Task 4.2 - Membuat alur reset password dan halaman terkait `[Sedang]`
  - Target: `app/Http/Controllers/Auth/PasswordResetLinkController.php`, `app/Http/Controllers/Auth/NewPasswordController.php`, view auth.
- [ ] Task 4.3 - Membuat dashboard controller: statistik, kegiatan mendatang, pengumuman terbaru, dan kalender bulanan `[Sulit]`
  - Target: `app/Http/Controllers/DashboardController.php`.
- [ ] Task 4.4 - Membuat forum controller: daftar, pencarian, filter kategori, dan panel topik populer `[Sedang]`
  - Target: `app/Http/Controllers/Forum/DiscussionController.php`.
- [ ] Task 4.5 - Membuat alur buat topik dan detail diskusi `[Sedang]`
  - Target: `DiscussionController`, `StoreDiscussionRequest`, view forum.
- [ ] Task 4.6 - Membuat alur balasan dan penutupan topik dengan policy `[Sedang]`
  - Target: `app/Http/Controllers/Forum/MessageController.php`, `app/Policies/DiscussionPolicy.php`.
- [ ] Task 4.7 - Membuat voting controller: daftar aktif/riwayat dan filter `[Sedang]`
  - Target: `app/Http/Controllers/Voting/VotingController.php`.
- [ ] Task 4.8 - Membuat alur buat voting beserta pilihan dan validasinya `[Sulit]`
  - Target: `VotingController`, `StoreVotingRequest`, view voting.
- [ ] Task 4.9 - Membuat alur vote, pencegahan suara ganda, eligibility, dan visibilitas hasil `[Sulit]`
  - Target: `app/Http/Controllers/Voting/VoteController.php`, `VotingService`.
- [ ] Task 4.10 - Membuat aksi tutup voting dan integrasi dengan scheduler `[Sedang]`
  - Target: `VotingController`, `VotingService`, command sinkronisasi.
- [ ] Task 4.11 - Membuat activity controller CRUD, pencarian, filter status, dan upload gambar `[Sulit]`
  - Target: `app/Http/Controllers/ActivityController.php`, `StoreActivityRequest`, `UpdateActivityRequest`.
- [ ] Task 4.12 - Membuat CRUD pembagian tugas kegiatan dan notifikasi ke assignee `[Sedang]`
  - Target: `app/Http/Controllers/ActivityTaskController.php`, `StoreTaskRequest`.
- [ ] Task 4.13 - Membuat announcement controller CRUD/publish, pencarian, filter, arsip, dan gambar `[Sulit]`
  - Target: `app/Http/Controllers/AnnouncementController.php`, `StoreAnnouncementRequest`, `UpdateAnnouncementRequest`.
- [ ] Task 4.14 - Membuat document controller CRUD, upload, download terproteksi, dan filter `[Sulit]`
  - Target: `app/Http/Controllers/DocumentController.php`, `StoreDocumentRequest`, `DocumentDownloadController`.
- [ ] Task 4.15 - Membuat user management controller: CRUD, pencarian, filter, status, dan reset password `[Sulit]`
  - Target: `app/Http/Controllers/Admin/UserController.php`, request user.
- [ ] Task 4.16 - Membuat role management controller: CRUD role, pemetaan permission, dan proteksi role sistem `[Sulit]`
  - Target: `app/Http/Controllers/Admin/RoleController.php`, request role.
- [ ] Task 4.17 - Membuat notification controller: daftar, filter, tandai baca, tandai semua, dan endpoint polling unread count `[Sedang]`
  - Target: `app/Http/Controllers/NotificationController.php`.
- [ ] Task 4.18 - Membuat profile controller: edit data, foto, dan ganti password `[Sedang]`
  - Target: `app/Http/Controllers/ProfileController.php`, request profile.
- [ ] Task 4.19 - Mendefinisikan seluruh route web, resource route, dan middleware permission `[Sedang]`
  - Target: `routes/web.php`.
- [ ] Task 4.20 - Membuat service `NotificationService`, `VotingService`, dan `ActivityService` `[Sulit]`
  - Target: `app/Services/NotificationService.php`, `app/Services/VotingService.php`, `app/Services/ActivityService.php`.

---

## 5. Security (Input Sanitization, Rate Limiting, XSS Protection, CSRF)

- [ ] Task 5.1 - Membuat middleware `EnsureUserIsActive` dan logout otomatis untuk akun nonaktif `[Sedang]`
  - Target: `app/Http/Middleware/EnsureUserIsActive.php`, `app/Http/Kernel.php`.
- [ ] Task 5.2 - Membuat middleware `EnsurePermission`, Gate `permission`, dan helper pengecekan di Blade `[Sedang]`
  - Target: `app/Http/Middleware/EnsurePermission.php`, `app/Providers/AuthServiceProvider.php`, `app/Models/User.php`.
- [ ] Task 5.3 - Membuat Form Request untuk auth, forum, voting, kegiatan, pengumuman, dokumen, user, role, dan profil `[Sulit]`
  - Target: `app/Http/Requests/**`.
- [ ] Task 5.4 - Menerapkan rate limiting login 5 percobaan/menit dan throttle aksi tulis `[Sedang]`
  - Target: `app/Http/Requests/Auth/LoginRequest.php`, `routes/web.php`.
- [ ] Task 5.5 - Menerapkan sanitasi input teks, escape output, CSRF, dan validasi file upload `[Sedang]`
  - Target: Form Request, Blade, `config/filesystems.php`.
- [ ] Task 5.6 - Melindungi akun: tidak bisa menonaktifkan diri sendiri dan minimal satu Super User aktif `[Sedang]`
  - Target: `UserController`, `UserPolicy`/service.
- [ ] Task 5.7 - Melindungi role sistem: Super User tidak bisa dihapus dan permission-nya tidak bisa diubah `[Sedang]`
  - Target: `RoleController`, `RolePolicy`/service.
- [ ] Task 5.8 - Menulis test otorisasi permission per peran dan respons 403 `[Sulit]`
  - Target: `tests/Feature/AuthorizationTest.php`.

---

## 6. Frontend & Blade Views (Ikuti design.md)

- [ ] Task 6.1 - Membuat layout auth split-screen: branding kiri, form login/reset kanan `[Sedang]`
  - Target: `resources/views/layouts/auth.blade.php`, `resources/views/auth/*`.
- [ ] Task 6.2 - Membuat layout app: header, sidebar permission-aware, offcanvas mobile, dropdown akun `[Sulit]`
  - Target: `resources/views/layouts/app.blade.php`, `resources/views/partials/sidebar.blade.php`, `header.blade.php`.
- [ ] Task 6.3 - Membuat komponen Blade reusable: page header, stat card, empty state, badge status, alert, modal konfirmasi `[Sedang]`
  - Target: `resources/views/components/*`.
- [ ] Task 6.4 - Membuat halaman dashboard: stat cards, jadwal, pengumuman, kalender, aktivitas `[Sulit]`
  - Target: `resources/views/dashboard.blade.php`, partial kalender.
- [ ] Task 6.5 - Membuat halaman forum: index, create, show, panel populer, dan panduan `[Sulit]`
  - Target: `resources/views/forum/*`.
- [ ] Task 6.6 - Membuat halaman voting: index, create, show, hasil/progress, dan status partisipasi `[Sulit]`
  - Target: `resources/views/voting/*`.
- [ ] Task 6.7 - Membuat halaman kegiatan: index, create/edit, show, dan manajemen tugas `[Sulit]`
  - Target: `resources/views/activities/*`.
- [ ] Task 6.8 - Membuat halaman pengumuman: index, create/edit, show, arsip, dan panel penting `[Sulit]`
  - Target: `resources/views/announcements/*`.
- [ ] Task 6.9 - Membuat halaman dokumentasi: index, create/edit, show/download, filter kategori/tanggal `[Sulit]`
  - Target: `resources/views/documents/*`.
- [ ] Task 6.10 - Membuat halaman manajemen pengguna: index, create/edit, reset password, filter `[Sulit]`
  - Target: `resources/views/admin/users/*`.
- [ ] Task 6.11 - Membuat halaman manajemen role: index, create/edit permission matrix, proteksi role sistem `[Sulit]`
  - Target: `resources/views/admin/roles/*`.
- [ ] Task 6.12 - Membuat halaman notifikasi: daftar, filter, tandai baca, empty state `[Sedang]`
  - Target: `resources/views/notifications/*`.
- [ ] Task 6.13 - Membuat halaman profil: kartu info, form edit, foto, dan ganti password `[Sedang]`
  - Target: `resources/views/profile/*`.
- [ ] Task 6.14 - Membuat error pages 403/404/419/500 dan pengecekan responsif `[Sedang]`
  - Target: `resources/views/errors/*`.

---

## 7. JavaScript & Realtime Features

- [ ] Task 7.1 - Menginisialisasi Bootstrap bundle JS, tooltip, dropdown, modal, dan offcanvas `[Mudah]`
  - Target: `resources/js/app.js`, `resources/js/bootstrap.js`.
- [ ] Task 7.2 - Membuat toast flash, auto-dismiss, dan submit spinner `[Sedang]`
  - Target: `resources/js/app.js`, `resources/views/partials/toast.blade.php`.
- [ ] Task 7.3 - Membuat polling unread notification badge setiap 60 detik `[Sedang]`
  - Target: `resources/js/app.js`, route polling, `NotificationController`.
- [ ] Task 7.4 - Membuat sound notification beep opsional dengan toggle `localStorage` `[Sedang]`
  - Target: `resources/js/app.js`, partial header.
- [ ] Task 7.5 - Membuat share pengumuman via Web Share API dengan fallback copy link `[Sedang]`
  - Target: `resources/js/app.js`, view announcement detail.

---

## 8. Additional Features (Sound Notification, Share, Toast, System Message, dll)

- [ ] Task 8.1 - Membuat notifikasi otomatis saat pengumuman dipublikasikan ke user aktif `[Sedang]`
  - Target: `app/Services/NotificationService.php`, `AnnouncementController`.
- [ ] Task 8.2 - Membuat notifikasi otomatis saat tugas kegiatan diberikan ke user `[Sedang]`
  - Target: `app/Services/NotificationService.php`, `ActivityTaskController`.
- [ ] Task 8.3 - Membuat notifikasi sistem saat voting dibuat dan ditutup `[Sedang]`
  - Target: `app/Services/NotificationService.php`, `VotingService`.
- [ ] Task 8.4 - Menerapkan tandai baca saat notifikasi diklik, tandai semua baca, dan unread count `[Sedang]`
  - Target: `NotificationController`, `resources/views/notifications/*`.
- [ ] Task 8.5 - Menambahkan label tipe notifikasi (pengumuman, kegiatan, voting, sistem) beserta ikon `[Mudah]`
  - Target: model/notification view, partial header.
- [ ] Task 8.6 - Menerapkan feedback sukses/gagal dengan toast/alert, transaksi database, dan jaminan data gagal tidak tampil berhasil `[Sedang]`
  - Target: controller, service, `resources/views/partials/*`.

---

## 9. Cleanup Command & Scheduler

- [ ] Task 9.1 - Membuat artisan command `himasi:cleanup` untuk menghapus notifikasi terbaca lebih dari 30 hari `[Sedang]`
  - Target: `app/Console/Commands/CleanupCommand.php`.
- [ ] Task 9.2 - Membuat artisan command `himasi:sync-votings` untuk membuka/menutup voting sesuai waktu `[Sedang]`
  - Target: `app/Console/Commands/SyncVotingsCommand.php`.
- [ ] Task 9.3 - Mendaftarkan scheduler harian cleanup dan sinkronisasi voting setiap 5 menit `[Mudah]`
  - Target: `app/Console/Kernel.php`.
- [ ] Task 9.4 - Menambahkan log hasil command dan test command `[Sedang]`
  - Target: `app/Console/Commands/*`, `tests/Feature/CommandTest.php`.

---

## 10. Final Polish & Bug Fixes

- [ ] Task 10.1 - Menulis feature test auth: login email/NIM, akun nonaktif, dan rate limit `[Sulit]`
  - Target: `tests/Feature/AuthTest.php`.
- [ ] Task 10.2 - Menulis feature test forum dan otorisasi topik/balasan `[Sedang]`
  - Target: `tests/Feature/ForumTest.php`.
- [ ] Task 10.3 - Menulis feature test voting: satu suara, Pembina/Super User tidak vote, dan visibilitas hasil `[Sulit]`
  - Target: `tests/Feature/VotingTest.php`.
- [ ] Task 10.4 - Menulis feature test kegiatan, pengumuman, dokumentasi, dan upload `[Sulit]`
  - Target: `tests/Feature/ActivityTest.php`, `AnnouncementTest.php`, `DocumentTest.php`.
- [ ] Task 10.5 - Menulis feature test pengguna, role, dan perubahan permission `[Sulit]`
  - Target: `tests/Feature/UserManagementTest.php`, `RoleManagementTest.php`.
- [ ] Task 10.6 - Menulis feature test notifikasi, profil, dan cleanup command `[Sedang]`
  - Target: `tests/Feature/NotificationTest.php`, `ProfileTest.php`, `CommandTest.php`.
- [ ] Task 10.7 - Menjalankan `vendor/bin/pint` dan memperbaiki style PHP `[Mudah]`
  - Target: seluruh file PHP.
- [ ] Task 10.8 - Menjalankan `npm run build` dan memverifikasi asset Bootstrap/Icons `[Mudah]`
  - Target: `public/build/*`.
- [ ] Task 10.9 - Smoke test manual semua role, responsif, empty state, error state, dan perbaikan bug `[Sulit]`
  - Target: seluruh halaman utama.
- [ ] Task 10.10 - Memperbarui tasklist final, dokumentasi akun demo, dan progress 100% `[Mudah]`
  - Target: `agent/tasklist.md`, `README.md`.

---

## Riwayat Progress

| Tanggal | Progress | Catatan |
|---|---|---|
| 28 November 2026 | 1% (1/100) | Tasklist dibuat; Task 1.1 selesai. Belum ada task implementasi yang dikerjakan. |
| 28 November 2026 | 2% (2/100) | Task 1.2 selesai: environment dan koneksi database `HIMASI-Connect` terverifikasi. |
| 28 November 2026 | 3% (3/100) | Task 1.3 selesai: Bootstrap 5.3.0, Bootstrap Icons 1.11.0, dan Popper 2.11.8 terpasang; build Vite berhasil. |
| 28 November 2026 | 4% (4/100) | Task 1.4 selesai: APP_NAME, timezone, locale, dan faker locale dikonfigurasi. |
| 28 November 2026 | 5% (5/100) | Task 1.5 selesai: pagination Bootstrap 5 dikonfigurasi secara global. |
| 28 November 2026 | 6% (6/100) | Task 1.6 selesai: disk public/private, direktori upload, dan storage link disiapkan. |
| 28 November 2026 | 7% (7/100) | Task 1.7 selesai: konfigurasi PHPUnit SQLite `:memory:` dan `withoutVite()` diterapkan; blocker `pdo_sqlite` dilaporkan. |
| 28 November 2026 | 7% (7/100) | Blocker Task 1.7 terselesaikan: `pdo_sqlite`/`sqlite3` aktif, SQLite `:memory:` dan `withoutVite()` terverifikasi, 4 test lulus. |
