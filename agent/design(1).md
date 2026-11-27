# DESIGN DOCUMENT -- HIMASI CONNECT

  -----------------------------------------------------------------------
  Informasi                           Keterangan
  ----------------------------------- -----------------------------------
  Nama Produk                         HIMASI Connect

  Jenis Sistem                        Aplikasi berbasis web

  Dokumen Acuan                       Software Requirements Specification
                                      (SRS) HIMASI Connect

  Dokumen Terkait                     Product Requirements Document (PRD)
                                      HIMASI Connect

  Framework CSS                       Bootstrap 5

  Penyusun                            Jesika Irmawati dan Apip Tiandus

  Mata Kuliah                         Rekayasa Web

  Program Studi                       Sistem Informasi
  -----------------------------------------------------------------------

------------------------------------------------------------------------

## 1. Pendahuluan

### 1.1 Tujuan

Dokumen ini menjelaskan rancangan antarmuka pengguna (User
Interface/UI), tata letak halaman, komponen visual, dan pedoman
implementasi tampilan sistem HIMASI Connect. Dokumen ini menjadi acuan
bagi tim pengembang dalam membangun tampilan yang konsisten, mudah
digunakan, responsif, serta sesuai dengan kebutuhan organisasi HIMASI.

### 1.2 Ruang Lingkup

Rancangan antarmuka HIMASI Connect mencakup halaman berikut:

1.  Halaman Login
2.  Halaman Beranda
3.  Halaman Forum Diskusi
4.  Halaman Voting
5.  Halaman Manajemen Kegiatan
6.  Halaman Pengumuman Kegiatan
7.  Halaman Manajemen Dokumentasi
8.  Halaman Manajemen Pengguna dan Hak Akses
9.  Halaman Notifikasi
10. Halaman Profil

Rancangan mengacu pada kebutuhan antarmuka eksternal, dokumen SRS, PRD,
serta gambar desain yang telah disediakan. Detail tampilan dapat
disesuaikan selama tidak bertentangan dengan kebutuhan fungsional,
aturan bisnis, dan hak akses yang ditetapkan dalam SRS.

### 1.3 Hubungan dengan Dokumen Lain

-   **SRS** menjadi sumber kebutuhan sistem, aturan bisnis, dan
    kebutuhan antarmuka.
-   **PRD** menjelaskan tujuan produk, ruang lingkup, pengguna, fitur,
    prioritas, dan kriteria penerimaan.
-   **Design Document** menjabarkan bagaimana kebutuhan tersebut
    diterjemahkan menjadi rancangan tampilan dan pedoman implementasi
    antarmuka.

------------------------------------------------------------------------

## 2. Konsep Desain

HIMASI Connect menggunakan konsep antarmuka web yang sederhana, modern,
informatif, dan konsisten. Tampilan dirancang agar pengguna dapat
mengakses informasi, berkomunikasi, berdiskusi, mengikuti voting, serta
melakukan aktivitas organisasi melalui satu sistem.

### 2.1 Tema Visual

Tema visual menggunakan kombinasi warna biru, putih, dan warna pendukung
yang lembut.

  -----------------------------------------------------------------------
  Warna                               Penggunaan
  ----------------------------------- -----------------------------------
  Biru                                Warna utama untuk header, navigasi,
                                      tautan, dan elemen penting

  Putih                               Latar kartu dan area konten utama

  Biru muda                           Latar area navigasi, panel
                                      informasi, atau bagian tertentu

  Pink                                Warna aksen untuk tombol atau
                                      penanda tertentu

  Abu-abu                             Teks sekunder, garis pembatas, dan
                                      latar elemen pendukung
  -----------------------------------------------------------------------

Kode warna final belum ditetapkan. Nilai warna perlu diseragamkan pada
tahap implementasi agar seluruh halaman menggunakan palet yang
konsisten.

### 2.2 Tipografi

Jenis huruf harus mudah dibaca pada layar komputer maupun perangkat
seluler. Ukuran dan ketebalan huruf dibedakan berdasarkan hierarki
informasi, seperti judul halaman, subjudul, isi, label formulir, dan
keterangan tambahan. Jenis huruf dan ukuran final ditentukan pada tahap
implementasi.

### 2.3 Tata Letak

Halaman utama setelah pengguna masuk menggunakan susunan layout berikut:

1.  **Header** --- berada di bagian atas halaman dan menampilkan
    identitas HIMASI Connect, ikon notifikasi, serta informasi akun
    pengguna.
2.  **Sidebar** --- berada di sisi kiri halaman dan berisi menu navigasi
    menuju fitur utama.
3.  **Area Konten** --- berada di bagian tengah dan menampilkan
    informasi atau fitur sesuai halaman yang sedang dibuka.
4.  **Kartu Informasi** --- digunakan untuk mengelompokkan informasi
    agar mudah dibaca dan dipahami.

Pada layar berukuran kecil, sidebar perlu disesuaikan menjadi navigasi
yang dapat dibuka dan ditutup, misalnya menggunakan komponen Offcanvas
Bootstrap 5.

### 2.4 Navigasi

Navigasi utama menggunakan sidebar dengan menu:

-   Beranda
-   Forum Diskusi
-   Voting
-   Manajemen Kegiatan
-   Pengumuman Kegiatan
-   Manajemen Dokumentasi
-   Manajemen Pengguna dan Hak Akses

Menu Notifikasi dan Profil dapat diakses melalui bagian header atau menu
akun. Menu yang sedang aktif diberi penanda visual agar pengguna
mengetahui halaman yang sedang dibuka.

Menu dan tindakan yang ditampilkan harus mengikuti hak akses pengguna.
Menu yang tidak boleh diakses oleh suatu peran tidak ditampilkan atau
tidak dapat digunakan oleh peran tersebut.

------------------------------------------------------------------------

## 3. Rancangan Halaman

### 3.1 Halaman Login

Halaman login merupakan halaman awal yang digunakan pengguna untuk masuk
ke HIMASI Connect.

**Elemen antarmuka:**

-   Logo HIMASI.
-   Judul atau identitas HIMASI Connect.
-   Kolom email atau NIM.
-   Kolom password.
-   Pilihan "Ingat saya".
-   Tautan "Lupa kata sandi".
-   Tombol "Masuk".
-   Pilihan login menggunakan Google, apabila metode tersebut ditetapkan
    dan dikonfigurasi pada implementasi.

**Tata letak:**

Halaman login menggunakan dua bagian utama. Bagian kiri menampilkan
gambar dan informasi selamat datang di HIMASI Connect. Bagian kanan
menampilkan formulir login.

**Pedoman implementasi Bootstrap 5:**

-   Gunakan sistem grid (`container`, `row`, dan `col`) untuk membagi
    dua bagian halaman.
-   Gunakan `form-control` untuk kolom input.
-   Gunakan `form-label` untuk label input.
-   Gunakan `form-check` untuk pilihan "Ingat saya".
-   Gunakan `btn` dan variasi warna tombol untuk tindakan masuk.
-   Pada layar kecil, kedua bagian ditampilkan secara vertikal agar
    formulir tetap mudah digunakan.

### 3.2 Halaman Beranda

Halaman beranda merupakan halaman utama setelah pengguna berhasil masuk
ke sistem.

**Elemen antarmuka:**

-   Header dengan logo dan nama HIMASI Connect.
-   Sidebar navigasi.
-   Ucapan selamat datang.
-   Ringkasan jadwal kegiatan.
-   Informasi terbaru.
-   Aktivitas HIMASI.
-   Kalender kegiatan.
-   Ikon notifikasi dan profil pengguna.

**Tata letak:**

Area konten menampilkan ringkasan informasi organisasi dalam beberapa
kartu. Bagian utama digunakan untuk jadwal kegiatan dan informasi
terbaru, sedangkan bagian samping menampilkan aktivitas HIMASI dan
kalender.

**Pedoman implementasi Bootstrap 5:**

-   Gunakan `row` dan `col-lg-*` untuk membagi area utama dan area
    samping.
-   Gunakan `card` untuk ringkasan kegiatan dan informasi.
-   Gunakan `badge` untuk penanda status kegiatan.
-   Gunakan `list-group` untuk daftar aktivitas atau informasi terbaru.
-   Pastikan susunan kolom berubah menjadi satu kolom pada layar kecil.

### 3.3 Halaman Forum Diskusi

Halaman forum diskusi digunakan untuk menampilkan topik pembahasan dan
menyediakan akses bagi pengguna untuk berpartisipasi dalam diskusi.

**Elemen antarmuka:**

-   Judul Forum Diskusi.
-   Kolom pencarian diskusi.
-   Tombol buat topik baru.
-   Kategori atau filter topik.
-   Daftar topik diskusi.
-   Informasi jumlah komentar atau tanggapan.
-   Panel topik populer.
-   Panel panduan forum.

**Tata letak:**

Daftar topik diskusi ditampilkan pada bagian utama halaman. Panel
samping digunakan untuk menampilkan topik populer dan panduan penggunaan
forum.

**Pedoman implementasi Bootstrap 5:**

-   Gunakan `input-group` atau `form-control` untuk pencarian.
-   Gunakan `btn` untuk tombol pembuatan topik.
-   Gunakan `nav-pills` atau tombol filter untuk kategori.
-   Gunakan `card` atau `list-group` untuk daftar topik.
-   Gunakan `badge` untuk kategori dan jumlah tanggapan.
-   Formulir pembuatan topik dan tanggapan harus mengikuti hak akses
    pengguna.

### 3.4 Halaman Voting

Halaman voting digunakan untuk menampilkan kegiatan pemungutan suara
dalam organisasi.

**Elemen antarmuka:**

-   Judul Voting.
-   Kategori voting aktif.
-   Riwayat voting.
-   Hasil voting.
-   Daftar voting aktif.
-   Informasi waktu pelaksanaan.
-   Informasi status voting.
-   Panel informasi dan panduan voting.
-   Status partisipasi pengguna.

**Tata letak:**

Bagian utama menampilkan daftar voting yang sedang berlangsung dan
voting yang telah selesai. Bagian samping menampilkan informasi,
panduan, dan status partisipasi.

**Pedoman implementasi Bootstrap 5:**

-   Gunakan `nav-tabs` atau `nav-pills` untuk membedakan voting aktif
    dan riwayat voting.
-   Gunakan `card` untuk setiap informasi voting.
-   Gunakan `badge` untuk status, misalnya "Aktif" dan "Selesai".
-   Gunakan `form-check` untuk pilihan suara jika bentuk voting
    menggunakan pilihan tunggal.
-   Gunakan `progress` untuk visualisasi hasil apabila sesuai dengan
    rancangan dan aturan voting.
-   Hasil voting hanya ditampilkan sesuai ketentuan dan waktu publikasi
    yang berlaku.

**Catatan hak akses:** Pembina dapat melihat informasi dan hasil voting
serta memberikan saran, tetapi tidak memiliki hak untuk memberikan
suara. Hak memilih pengguna lain mengikuti aturan organisasi yang
ditetapkan dalam SRS.

### 3.5 Halaman Manajemen Kegiatan

Halaman manajemen kegiatan digunakan untuk menampilkan dan mengelola
informasi kegiatan organisasi.

**Elemen antarmuka:**

-   Judul Manajemen Kegiatan.
-   Kolom pencarian kegiatan.
-   Tombol tambah kegiatan.
-   Filter status kegiatan.
-   Daftar kegiatan.
-   Informasi tanggal dan lokasi kegiatan.
-   Informasi pembagian tugas.
-   Panel kegiatan mendatang.
-   Panel informasi terkait kegiatan.

**Tata letak:**

Daftar kegiatan ditampilkan dalam bentuk kartu yang memuat gambar, nama
kegiatan, informasi waktu, lokasi, dan status kegiatan. Bagian samping
digunakan untuk menampilkan kegiatan mendatang dan informasi tambahan.

**Pedoman implementasi Bootstrap 5:**

-   Gunakan `card` untuk menampilkan setiap kegiatan.
-   Gunakan `row` dan `col` untuk mengatur susunan kartu.
-   Gunakan `form-control` untuk pencarian.
-   Gunakan `form-select` untuk filter status.
-   Gunakan `btn` untuk tindakan tambah, ubah, atau tindakan lain sesuai
    kewenangan.
-   Gunakan `badge` untuk menunjukkan status kegiatan.

### 3.6 Halaman Pengumuman Kegiatan

Halaman pengumuman kegiatan digunakan untuk menampilkan informasi resmi
dan kabar terbaru dari organisasi HIMASI.

**Elemen antarmuka:**

-   Judul Pengumuman Kegiatan.
-   Kolom pencarian pengumuman.
-   Tombol buat pengumuman.
-   Filter kategori pengumuman.
-   Daftar pengumuman.
-   Informasi tanggal publikasi.
-   Panel pengumuman penting.
-   Arsip pengumuman.

**Tata letak:**

Pengumuman ditampilkan dalam bentuk kartu yang memuat gambar, judul,
kategori, tanggal, dan ringkasan informasi. Bagian samping menampilkan
pengumuman penting dan arsip pengumuman.

**Pedoman implementasi Bootstrap 5:**

-   Gunakan `card` untuk setiap pengumuman.
-   Gunakan `badge` untuk kategori atau penanda penting.
-   Gunakan `form-control` dan `form-select` untuk pencarian serta
    filter.
-   Gunakan `pagination` jika daftar pengumuman memiliki beberapa
    halaman.
-   Formulir pembuatan dan perubahan pengumuman hanya tersedia bagi
    peran yang memiliki kewenangan.

### 3.7 Halaman Manajemen Dokumentasi

Halaman manajemen dokumentasi digunakan untuk mengelola dan menyimpan
dokumentasi kegiatan organisasi.

**Elemen antarmuka:**

-   Judul Manajemen Dokumentasi.
-   Kolom pencarian dokumentasi.
-   Tombol unggah dokumen.
-   Filter kategori dokumentasi.
-   Daftar dokumentasi kegiatan.
-   Informasi jenis dan tanggal dokumentasi.
-   Informasi pengunggah.
-   Panel kategori dokumentasi.
-   Filter berdasarkan tanggal.

**Tata letak:**

Dokumentasi ditampilkan dalam bentuk kartu yang memuat gambar atau
pratinjau dokumen, nama dokumentasi, kategori, tanggal, dan informasi
pengunggah. Bagian samping menampilkan kategori dan filter dokumentasi.

**Pedoman implementasi Bootstrap 5:**

-   Gunakan `card` untuk item dokumentasi.
-   Gunakan `form-control` dengan tipe file untuk unggah berkas.
-   Gunakan `form-select` untuk kategori dan filter.
-   Gunakan `badge` untuk jenis dokumentasi.
-   Gunakan `modal` jika diperlukan untuk konfirmasi penghapusan atau
    pratinjau.
-   Tampilkan pesan validasi dan status unggah dengan komponen `alert`.

### 3.8 Halaman Manajemen Pengguna dan Hak Akses

Halaman manajemen pengguna dan hak akses digunakan untuk mengelola data
pengguna, peran, serta hak akses dalam HIMASI Connect.

**Elemen antarmuka:**

-   Judul Manajemen Pengguna dan Hak Akses.
-   Ringkasan jumlah pengguna.
-   Informasi status pengguna.
-   Informasi jumlah peran.
-   Daftar pengguna.
-   Kolom pencarian pengguna.
-   Filter peran dan status pengguna.
-   Tombol tambah pengguna.
-   Informasi peran dan hak akses.
-   Pengaturan hak akses.

**Tata letak:**

Bagian utama menampilkan daftar pengguna dalam bentuk tabel. Bagian
samping atau bagian terpisah menampilkan informasi peran serta
pengaturan hak akses. Halaman ini ditujukan untuk pengelolaan pengguna
sesuai kewenangan Super User.

**Pedoman implementasi Bootstrap 5:**

-   Gunakan `table` dan `table-responsive` untuk daftar pengguna.
-   Gunakan `form-control` untuk pencarian.
-   Gunakan `form-select` untuk filter peran dan status.
-   Gunakan `badge` untuk status pengguna.
-   Gunakan `modal` untuk formulir tambah atau ubah pengguna jika
    sesuai.
-   Gunakan `alert` untuk pesan berhasil atau gagal.

**Kelompok pengguna sistem:**

  -----------------------------------------------------------------------
  Kelompok pengguna                   Gambaran akses
  ----------------------------------- -----------------------------------
  Super User                          Mengelola pengguna dan pengaturan
                                      hak akses sesuai kewenangannya

  Pengurus                            Mengakses dan menjalankan fungsi
                                      organisasi sesuai jabatan serta
                                      kewenangannya

  Anggota                             Mengakses informasi dan fitur
                                      partisipasi yang diperbolehkan

  Pembina                             Melihat informasi, mengikuti
                                      diskusi, serta memberikan arahan
                                      atau saran; tidak memberikan suara
                                      dalam voting
  -----------------------------------------------------------------------

Ketua HIMASI merupakan jabatan dalam kelompok Pengurus, bukan kelompok
pengguna yang terpisah. Kaprodi tidak termasuk dalam ruang lingkup
pengguna sistem saat ini. Rincian izin untuk setiap tindakan tetap harus
mengikuti matriks hak akses pada SRS.

### 3.9 Halaman Notifikasi

Halaman notifikasi digunakan untuk menampilkan pemberitahuan terkait
aktivitas dan informasi organisasi.

**Elemen antarmuka:**

-   Judul Notifikasi.
-   Filter semua notifikasi.
-   Filter belum dibaca.
-   Filter sudah dibaca.
-   Daftar pemberitahuan.
-   Informasi jenis notifikasi.
-   Waktu pemberitahuan.
-   Penanda status baca.

**Tata letak:**

Notifikasi ditampilkan dalam bentuk daftar kartu. Setiap kartu memuat
ikon, jenis pemberitahuan, ringkasan informasi, dan waktu pemberitahuan.

**Pedoman implementasi Bootstrap 5:**

-   Gunakan `list-group` untuk daftar notifikasi.
-   Gunakan `badge` untuk penanda status.
-   Gunakan `nav-pills` atau tombol filter untuk kategori baca.
-   Gunakan `alert` untuk pesan sistem yang perlu mendapat perhatian.

### 3.10 Halaman Profil

Halaman profil digunakan untuk menampilkan dan mengelola informasi akun
pengguna.

**Elemen antarmuka:**

-   Foto profil.
-   Nama lengkap.
-   NIM.
-   Program studi.
-   Email.
-   Informasi peran dalam HIMASI.
-   Formulir edit profil.
-   Tombol simpan perubahan.
-   Bagian ubah kata sandi.

**Tata letak:**

Halaman profil dibagi menjadi dua bagian. Bagian kiri menampilkan
informasi profil pengguna, sedangkan bagian kanan menampilkan formulir
untuk mengubah informasi profil. Bagian bawah menyediakan akses untuk
mengubah kata sandi.

**Pedoman implementasi Bootstrap 5:**

-   Gunakan `card` untuk informasi profil.
-   Gunakan `row` dan `col-md-*` untuk membagi bagian profil dan
    formulir.
-   Gunakan `form-control` untuk kolom data.
-   Gunakan `btn` untuk menyimpan perubahan.
-   Gunakan `alert` untuk memberikan umpan balik setelah proses
    penyimpanan.

------------------------------------------------------------------------

## 4. Komponen Antarmuka

Komponen antarmuka yang digunakan dalam rancangan HIMASI Connect
meliputi:

  -----------------------------------------------------------------------
  Komponen                Fungsi                  Implementasi Bootstrap
                                                  5
  ----------------------- ----------------------- -----------------------
  Header                  Menampilkan identitas   Navbar, dropdown
                          sistem dan informasi    
                          akun pengguna           

  Sidebar                 Menyediakan navigasi ke Nav, list-group,
                          halaman utama sistem    offcanvas

  Card                    Mengelompokkan          Card
                          informasi dalam bentuk  
                          kartu                   

  Button                  Menyediakan tindakan    Button
                          pada halaman            

  Input Field             Digunakan untuk         Form control
                          memasukkan data         

  Search Field            Digunakan untuk mencari Form control, input
                          informasi               group

  Filter                  Menyaring data          Form select, nav pills
                          berdasarkan kategori    
                          atau status             

  Table                   Menampilkan data        Table, table responsive
                          pengguna dalam bentuk   
                          tabel                   

  Notification            Menampilkan             Alert, badge, list
                          pemberitahuan kepada    group
                          pengguna                

  Profile Section         Menampilkan informasi   Card, avatar/image,
                          akun pengguna           form

  Modal                   Menampilkan formulir    Modal
                          atau konfirmasi dalam   
                          dialog                  

  Pagination              Membagi daftar data ke  Pagination
                          beberapa halaman        

  Progress                Menampilkan kemajuan    Progress
                          atau proporsi hasil     
  -----------------------------------------------------------------------

Komponen digunakan secara konsisten. Penggunaan komponen tertentu
disesuaikan dengan kebutuhan halaman dan tidak berarti semua halaman
harus menampilkan seluruh komponen.

------------------------------------------------------------------------

## 5. Pedoman Implementasi Bootstrap 5

### 5.1 Framework CSS

Bootstrap 5 digunakan sebagai framework CSS utama untuk membangun
antarmuka HIMASI Connect. Bootstrap menyediakan sistem grid, komponen
siap pakai, utilitas tata letak, dan dukungan responsif sehingga
pengembangan tampilan lebih konsisten.

Bootstrap 5 merupakan framework untuk sisi antarmuka (frontend).
Penggunaannya tidak menggantikan kebutuhan backend, autentikasi,
validasi server, maupun pengaturan hak akses.

### 5.2 Sistem Grid dan Responsivitas

Gunakan sistem grid Bootstrap 5 (`container`, `row`, dan `col-*`) untuk
menyusun halaman. Tata letak harus menyesuaikan ukuran layar:

-   **Layar besar:** sidebar dan area konten dapat ditampilkan
    berdampingan.
-   **Layar menengah:** ukuran kolom dan jarak antarkomponen disesuaikan
    agar konten tetap terbaca.
-   **Layar kecil/ponsel:** sidebar dapat berubah menjadi menu
    Offcanvas, kartu disusun satu kolom, dan tabel menggunakan
    pembungkus `table-responsive`.

### 5.3 Komponen dan Utilitas

Gunakan komponen Bootstrap 5 sesuai kebutuhan, antara lain:

-   Layout: `container`, `container-fluid`, `row`, `col`.
-   Navigasi: `navbar`, `nav`, `nav-pills`, `dropdown`, `offcanvas`.
-   Konten: `card`, `list-group`, `accordion`.
-   Formulir: `form-label`, `form-control`, `form-select`, `form-check`.
-   Tindakan: `btn`, `btn-group`.
-   Umpan balik: `alert`, `badge`, `spinner`.
-   Data: `table`, `table-responsive`, `pagination`, `progress`.
-   Dialog: `modal`.

### 5.4 Konsistensi Tampilan

Warna, tipografi, jarak, bentuk tombol, radius kartu, dan gaya ikon
harus digunakan secara konsisten. Nilai desain final sebaiknya dikelola
dalam satu tempat, misalnya melalui variabel CSS, agar perubahan
tampilan dapat diterapkan secara teratur.

### 5.5 Integrasi dengan Template Backend

Jika Bootstrap 5 digunakan bersama framework backend, struktur halaman
sebaiknya dibuat dalam template atau layout utama yang dapat digunakan
ulang. Header, sidebar, dan area konten dibuat sebagai bagian yang
konsisten agar tidak perlu ditulis ulang pada setiap halaman.

------------------------------------------------------------------------

## 6. Prinsip Desain Antarmuka

Rancangan antarmuka HIMASI Connect memperhatikan prinsip berikut:

1.  **Konsistensi:** penggunaan header, sidebar, warna, tipografi, dan
    komponen yang seragam pada halaman utama sistem.
2.  **Kemudahan penggunaan:** menu dan informasi disusun agar pengguna
    dapat menemukan fitur yang dibutuhkan dengan mudah.
3.  **Keterbacaan:** informasi disajikan dengan susunan yang jelas dan
    penggunaan ruang yang teratur.
4.  **Pengelompokan informasi:** data dan fitur dikelompokkan
    berdasarkan fungsi masing-masing halaman.
5.  **Kesesuaian akses:** tampilan dan tindakan disesuaikan dengan peran
    serta hak akses pengguna.
6.  **Responsivitas:** halaman dapat digunakan pada komputer, laptop,
    tablet, dan ponsel.
7.  **Umpan balik:** sistem menampilkan pesan yang jelas ketika tindakan
    berhasil, gagal, atau membutuhkan konfirmasi.

------------------------------------------------------------------------

## 7. Status dan Umpan Balik Antarmuka

Setiap halaman yang memiliki proses pengolahan data perlu menyediakan
umpan balik yang mudah dipahami.

  -----------------------------------------------------------------------
  Kondisi                             Perilaku antarmuka yang diharapkan
  ----------------------------------- -----------------------------------
  Data berhasil disimpan              Menampilkan pesan berhasil

  Data gagal disimpan                 Menampilkan pesan kesalahan yang
                                      dapat dipahami

  Formulir tidak valid                Menandai kolom yang perlu
                                      diperbaiki dan menampilkan pesan
                                      validasi

  Data belum tersedia                 Menampilkan informasi bahwa data
                                      belum tersedia

  Data sedang dimuat                  Menampilkan indikator proses
                                      pemuatan jika diperlukan

  Tindakan penting                    Meminta konfirmasi sebelum tindakan
                                      dilanjutkan jika sesuai

  Akses ditolak                       Menampilkan pemberitahuan bahwa
                                      pengguna tidak memiliki izin
  -----------------------------------------------------------------------

Validasi penting harus tetap dilakukan pada sisi server. Validasi pada
tampilan hanya membantu pengguna mengisi formulir dengan benar dan tidak
boleh menjadi satu-satunya pengamanan.

------------------------------------------------------------------------

## 8. Prinsip Hak Akses pada Antarmuka

Tampilan sistem harus menyesuaikan peran pengguna yang sedang masuk.
Tombol, menu, dan tindakan yang tidak menjadi kewenangan pengguna tidak
boleh ditampilkan sebagai tindakan yang dapat digunakan.

Prinsip penerapannya:

1.  Super User memperoleh tampilan pengelolaan pengguna dan hak akses
    sesuai kewenangannya.
2.  Pengurus memperoleh fitur organisasi sesuai jabatan dan kewenangan
    yang ditentukan.
3.  Anggota memperoleh akses terhadap informasi dan aktivitas
    partisipasi yang diperbolehkan.
4.  Pembina dapat melihat informasi, mengikuti diskusi, dan memberikan
    saran, tetapi tidak dapat memberikan suara dalam voting.
5.  Ketua HIMASI tetap berada dalam kelompok Pengurus dan memperoleh
    tindakan sesuai jabatan serta aturan organisasi.
6.  Pemeriksaan hak akses wajib dilakukan pada backend, bukan hanya
    dengan menyembunyikan tombol atau menu pada frontend.

Rincian hak akses setiap fitur dan tindakan harus mengikuti SRS serta
aturan bisnis HIMASI Connect.

------------------------------------------------------------------------

## 9. Aksesibilitas dan Kemudahan Penggunaan

Antarmuka perlu memperhatikan hal-hal berikut:

-   Kontras warna teks dan latar belakang harus cukup agar mudah dibaca.
-   Setiap kolom formulir memiliki label yang jelas.
-   Tombol dan tautan menggunakan teks yang menjelaskan fungsinya.
-   Ikon penting tidak menjadi satu-satunya penjelas tindakan.
-   Ukuran area klik pada tombol dan menu harus nyaman digunakan,
    termasuk pada layar sentuh.
-   Informasi kesalahan ditampilkan dekat dengan bagian yang perlu
    diperbaiki.
-   Navigasi dapat digunakan dengan urutan yang logis.
-   Gambar yang memiliki fungsi informasi diberi teks alternatif.

------------------------------------------------------------------------

## 10. Catatan Pengembangan

Dokumen ini menjadi acuan rancangan tampilan antarmuka HIMASI Connect
berdasarkan kebutuhan SRS, PRD, dan gambar desain yang tersedia.

Hal-hal berikut masih perlu ditentukan atau disesuaikan pada tahap
implementasi:

-   Kode warna dan jenis huruf secara spesifik.
-   Ukuran dan jarak komponen secara detail.
-   Detail tampilan pada perangkat laptop, komputer, tablet, dan
    handphone.
-   Perilaku tombol, formulir, pencarian, filter, dan navigasi.
-   Detail tampilan untuk setiap peran pengguna.
-   Aturan validasi formulir dan pesan kesalahan.
-   Detail perilaku login Google, jika metode tersebut digunakan.
-   Komponen atau library tambahan yang diperlukan, jika ada.

Setiap keputusan implementasi harus tetap mengacu pada kebutuhan
fungsional, kebutuhan nonfungsional, serta aturan bisnis dalam SRS
HIMASI Connect. Jika terdapat perbedaan antara rancangan visual dan
ketentuan SRS, kebutuhan dan aturan yang telah disepakati dalam SRS
harus menjadi acuan untuk dikonfirmasi sebelum implementasi.

------------------------------------------------------------------------

## 11. Kriteria Penerimaan Desain

Rancangan antarmuka dianggap telah diterapkan dengan baik apabila:

-   Seluruh halaman yang termasuk ruang lingkup memiliki tampilan sesuai
    rancangan.
-   Header, navigasi, dan komponen umum digunakan secara konsisten.
-   Komponen Bootstrap 5 digunakan sesuai fungsi dan kebutuhan halaman.
-   Tampilan dapat menyesuaikan layar komputer, laptop, tablet, dan
    ponsel.
-   Pengguna dapat memahami label, navigasi, dan tindakan utama.
-   Pesan berhasil, gagal, validasi, dan kondisi data kosong ditampilkan
    dengan jelas.
-   Menu dan tindakan yang tersedia sesuai dengan hak akses pengguna.
-   Pemeriksaan hak akses tetap diterapkan pada sisi backend.

------------------------------------------------------------------------

## 12. Penutup

Rancangan antarmuka HIMASI Connect dibuat untuk mendukung komunikasi,
koordinasi, penyampaian informasi, diskusi, voting, pengelolaan
kegiatan, dan dokumentasi organisasi. Penggunaan Bootstrap 5 diharapkan
membantu proses implementasi tampilan yang konsisten dan responsif.

Dokumen ini menjadi pedoman bagi tim pengembang dalam membangun
antarmuka HIMASI Connect. Penyesuaian selama pengembangan dapat
dilakukan berdasarkan hasil pengujian dan kebutuhan yang telah
disepakati, dengan tetap mengacu pada SRS dan PRD.
