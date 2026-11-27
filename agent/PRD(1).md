# PRODUCT REQUIREMENTS DOCUMENT (PRD)

# HIMASI Connect

  -----------------------------------------------------------------------
  Informasi                           Keterangan
  ----------------------------------- -----------------------------------
  Nama Produk                         HIMASI Connect

  Jenis Produk                        Aplikasi Berbasis Web

  Dokumen Acuan                       Software Requirements Specification
                                      (SRS) HIMASI Connect

  Kode Dokumen Acuan                  SRS-000-001

  Versi SRS                           1.0

  Penyusun SRS                        Jesika Irmawati dan Apip Tiandus

  Mata Kuliah                         Rekayasa Web

  Program Studi                       Sistem Informasi
  -----------------------------------------------------------------------

------------------------------------------------------------------------

## 1. Ringkasan Produk

HIMASI Connect merupakan sistem informasi berbasis web yang dirancang
untuk membantu komunikasi, koordinasi, penyampaian informasi, serta
pengambilan keputusan di lingkungan Himpunan Mahasiswa Sistem Informasi
(HIMASI).

Sistem ini dikembangkan sebagai sarana pendukung komunikasi organisasi
yang selama ini dilakukan melalui grup WhatsApp dan rapat. Melalui
HIMASI Connect, pengguna dapat mengakses forum diskusi, mengikuti voting
sesuai kewenangan, melihat informasi kegiatan dan pengumuman, mengetahui
pembagian tugas kegiatan, menerima notifikasi, serta mengakses
dokumentasi organisasi sesuai hak akses masing-masing.

HIMASI Connect bertujuan untuk membantu proses komunikasi dan koordinasi
organisasi agar lebih terstruktur, sehingga informasi, usulan,
pembahasan, dan hasil keputusan dapat tersimpan serta diakses kembali
oleh pengguna yang memiliki kewenangan.

## 2. Latar Belakang dan Permasalahan

Komunikasi dan koordinasi dalam organisasi HIMASI melibatkan Pembina,
Ketua, Pengurus, dan Anggota. Berdasarkan hasil pengumpulan kebutuhan
melalui wawancara, komunikasi dan penyampaian informasi selama ini
dilakukan melalui grup WhatsApp dan rapat.

Dalam pelaksanaannya, penyampaian informasi, pembahasan usulan,
pembagian tugas, dan pengambilan keputusan membutuhkan koordinasi antara
pihak-pihak terkait. Beberapa permasalahan koordinasi dapat terjadi
ketika informasi tidak tersampaikan secara merata atau pembagian tugas
belum tercatat dengan baik.

Selain itu, hasil pembahasan dan keputusan organisasi perlu
didokumentasikan agar dapat ditemukan kembali ketika dibutuhkan.

Oleh karena itu, diperlukan sebuah sistem berbasis web yang dapat
membantu proses komunikasi, koordinasi, pengelolaan kegiatan, voting,
pengumuman, serta penyimpanan dokumentasi organisasi dalam satu sistem
yang terintegrasi.

## 3. Tujuan Produk dan Kebutuhan Bisnis

### 3.1 Tujuan Produk

1.  Mendukung pemerataan penyampaian informasi antara Pengurus, Anggota,
    dan Pembina HIMASI.
2.  Meningkatkan keterlibatan pihak terkait dalam menyampaikan usulan
    dan berdiskusi sebelum keputusan ditetapkan.
3.  Mendukung pengambilan keputusan organisasi yang lebih terbuka dan
    terkoordinasi.
4.  Mempermudah penyimpanan dan penelusuran kembali hasil pembahasan
    serta keputusan organisasi.

### 3.2 Kebutuhan Bisnis

  -----------------------------------------------------------------------
  ID                      Kebutuhan Bisnis        Indikator Keberhasilan
  ----------------------- ----------------------- -----------------------
  KB-01                   Meningkatkan pemerataan Minimal 90% pengguna
                          penyampaian informasi   sasaran menerima
                          antara Pengurus,        informasi organisasi
                          Anggota, dan Pembina    yang disampaikan
                          HIMASI.                 melalui sistem.

  KB-02                   Meningkatkan            Seluruh usulan yang
                          keterlibatan pihak      memerlukan pembahasan
                          terkait dalam           memiliki catatan proses
                          penyampaian usulan dan  diskusi dan hasil
                          pembahasan sebelum      keputusan sesuai
                          keputusan organisasi    prosedur yang
                          ditetapkan.             disepakati.

  KB-03                   Meningkatkan            100% hasil keputusan
                          keteraturan dokumentasi yang ditetapkan melalui
                          hasil pembahasan dan    sistem tersimpan dan
                          keputusan organisasi    dapat ditelusuri
                          HIMASI.                 kembali oleh pengguna
                                                  yang memiliki hak
                                                  akses.
  -----------------------------------------------------------------------

## 4. Pengguna dan Hak Akses

HIMASI Connect memiliki beberapa jenis pengguna dengan hak akses yang
disesuaikan berdasarkan peran dan kewenangannya.

  -----------------------------------------------------------------------
  Pengguna                            Deskripsi dan Hak Akses
  ----------------------------------- -----------------------------------
  Pembina HIMASI                      Melihat informasi organisasi,
                                      memantau kegiatan, bergabung dalam
                                      forum diskusi, melihat hasil
                                      voting, serta memberikan saran dan
                                      arahan. Pembina tidak memberikan
                                      suara dalam voting.

  Ketua HIMASI                        Mengoordinasikan Pengurus dan
                                      kegiatan, mengelola pengumuman dan
                                      jadwal kegiatan, mengoordinasikan
                                      forum diskusi, mengikuti voting,
                                      serta menjalankan kewenangan
                                      pengambilan keputusan organisasi.

  Pengurus HIMASI                     Melihat informasi dan profil
                                      bidang, menyampaikan usulan dan
                                      pendapat, mengikuti voting sesuai
                                      ketentuan, mengelola pembagian
                                      tugas atau dokumentasi sesuai
                                      kewenangan, serta mengakses hasil
                                      keputusan sesuai hak akses.

  Anggota HIMASI                      Melihat pengumuman dan informasi
                                      kegiatan, menyampaikan pendapat,
                                      serta mengikuti voting apabila
                                      memiliki hak memberikan suara
                                      sesuai ketentuan.

  Super User                          Mengelola akun pengguna,
                                      memperbarui data pengguna,
                                      menetapkan peran, mengatur hak
                                      akses, dan menonaktifkan akun.
  -----------------------------------------------------------------------

**Catatan:** Super User merupakan peran administratif sistem yang juga
dicantumkan dalam kebutuhan manajemen pengguna dan hak akses pada SRS.
Ketua HIMASI merupakan jabatan/peran organisasi yang kewenangannya
dijalankan dalam kelompok Pengurus, bukan jenis akun kelima yang
terpisah dari empat kelompok pengguna utama yang telah disepakati.

## 5. Ruang Lingkup Produk

### 5.1 Termasuk dalam Ruang Lingkup

Fitur yang termasuk dalam pengembangan HIMASI Connect meliputi:

1.  Login pengguna.
2.  Forum komunikasi dan diskusi.
3.  Voting untuk mendukung pengambilan keputusan organisasi.
4.  Manajemen kegiatan dan pembagian tugas.
5.  Pengumuman dan informasi kegiatan HIMASI.
6.  Notifikasi kepada pengguna terkait.
7.  Manajemen dokumentasi hasil pembahasan dan keputusan organisasi.
8.  Manajemen pengguna dan hak akses.

### 5.2 Di Luar Ruang Lingkup

Pengembangan HIMASI Connect pada tahap awal tidak mencakup:

1.  Pengelolaan keuangan organisasi.
2.  Pembayaran iuran anggota.
3.  Pengelolaan nilai akademik mahasiswa.
4.  Integrasi dengan sistem akademik universitas.
5.  Pengembangan aplikasi Android native.

Pengembangan tahap awal difokuskan pada aplikasi berbasis web yang dapat
diakses melalui browser.

## 6. Kebutuhan Fungsional Produk

Kebutuhan fungsional produk mengacu pada kebutuhan fungsional yang telah
ditetapkan dalam dokumen SRS.

  -----------------------------------------------------------------------
  ID                Nama Fitur        Deskripsi         Prioritas
                                      Kebutuhan         
  ----------------- ----------------- ----------------- -----------------
  KF-01             Login             Sistem            Must Have
                                      menyediakan       
                                      fasilitas login   
                                      bagi pengguna     
                                      yang memiliki     
                                      akun terdaftar    
                                      untuk             
                                      memverifikasi     
                                      identitas dan     
                                      memberikan akses  
                                      sesuai hak        
                                      aksesnya.         

  KF-02             Forum Diskusi     Sistem            Must Have
                                      menyediakan       
                                      fasilitas         
                                      penyampaian       
                                      informasi dan     
                                      komunikasi        
                                      antaranggota      
                                      HIMASI sesuai hak 
                                      akses pengguna.   

  KF-03             Voting            Sistem            Must Have
                                      menyediakan       
                                      fasilitas voting  
                                      untuk membantu    
                                      pengambilan       
                                      keputusan         
                                      organisasi dan    
                                      menampilkan hasil 
                                      kepada pengguna   
                                      yang berwenang.   

  KF-04             Manajemen         Sistem            Must Have
                    Kegiatan          menyediakan       
                                      fasilitas         
                                      pencatatan dan    
                                      penayangan        
                                      pembagian tugas   
                                      Pengurus dalam    
                                      kegiatan.         

  KF-05             Pengumuman        Sistem            Must Have
                    Kegiatan          menyediakan       
                                      fasilitas         
                                      penyampaian       
                                      pengumuman rapat  
                                      dan informasi     
                                      kegiatan HIMASI.  

  KF-06             Notifikasi        Sistem memberikan Should Have
                                      notifikasi        
                                      mengenai          
                                      pengumuman rapat  
                                      dan kegiatan      
                                      kepada pengguna   
                                      terkait.          

  KF-07             Manajemen         Sistem            Should Have
                    Dokumentasi       menyediakan       
                                      fasilitas         
                                      penyimpanan dan   
                                      penampilan        
                                      kembali laporan   
                                      LPJ, arsip        
                                      keputusan, serta  
                                      laporan           
                                      kepengurusan      
                                      HIMASI.           

  KF-08             Manajemen         Sistem            Must Have
                    Pengguna dan Hak  menyediakan       
                    Akses             fasilitas bagi    
                                      Super User untuk  
                                      mengelola akun,   
                                      menetapkan peran, 
                                      dan mengatur hak  
                                      akses pengguna.   
  -----------------------------------------------------------------------

### 6.1 Detail Kebutuhan Fungsional

#### 6.1.1 Login (KF-01)

-   Pengguna membuka halaman login.
-   Sistem menyediakan kolom nama pengguna atau email dan kata sandi.
-   Sistem memverifikasi data login dengan akun yang telah terdaftar.
-   Jika data benar, pengguna dapat masuk ke sistem.
-   Sistem memberikan akses sesuai peran pengguna.
-   Jika data login salah atau tidak lengkap, sistem menampilkan
    pemberitahuan.
-   Pendaftaran akun secara mandiri tidak tersedia.

#### 6.1.2 Forum Diskusi (KF-02)

-   Pengguna yang telah login dan memiliki izin dapat membuka forum
    diskusi.
-   Pengguna dapat membuat atau mengirim pesan dan pembahasan.
-   Pengguna dapat memberikan tanggapan terhadap pembahasan yang
    tersedia.
-   Pesan dan tanggapan yang berhasil dikirim akan disimpan dalam
    sistem.
-   Sistem membatasi akses forum berdasarkan hak akses pengguna.

#### 6.1.3 Voting (KF-03)

-   Pengguna yang memiliki hak akses dapat melihat daftar voting.
-   Sistem menampilkan pertanyaan dan pilihan jawaban.
-   Pengguna yang memiliki hak suara dapat memilih dan mengirimkan
    suara.
-   Sistem menyimpan suara yang diberikan pengguna.
-   Sistem menampilkan hasil voting kepada pengguna yang berwenang.
-   Sistem membatasi satu suara per pengguna untuk setiap voting.
-   Pembina dapat melihat hasil voting dan memberikan arahan, tetapi
    tidak memberikan suara.
-   Sistem tidak menentukan keputusan organisasi secara otomatis.

#### 6.1.4 Manajemen Kegiatan (KF-04)

-   Pengurus yang memiliki kewenangan dapat membuka menu manajemen
    kegiatan.
-   Pengurus dapat memasukkan anggota panitia beserta tugas dan tanggung
    jawabnya.
-   Sistem memvalidasi data pembagian tugas.
-   Sistem menyimpan data pembagian tugas yang valid.
-   Pengguna yang memiliki hak akses dapat melihat informasi kegiatan
    dan pembagian tugas.
-   Perubahan pembagian tugas dilakukan oleh Ketua atau Pengurus yang
    berwenang.

#### 6.1.5 Pengumuman Kegiatan (KF-05)

-   Pengguna dapat melihat daftar pengumuman yang tersedia.
-   Pengguna dapat membuka rincian pengumuman dan informasi kegiatan.
-   Pengguna yang berwenang dapat menambahkan dan menerbitkan
    pengumuman.
-   Sistem memvalidasi data sebelum pengumuman diterbitkan.
-   Jika belum terdapat pengumuman, sistem menampilkan informasi bahwa
    pengumuman belum tersedia.

#### 6.1.6 Notifikasi (KF-06)

-   Sistem menentukan pengguna yang relevan dengan informasi kegiatan.
-   Sistem memberikan notifikasi ketika terdapat informasi kegiatan atau
    pengumuman baru.
-   Pengguna dapat membuka notifikasi untuk melihat informasi terkait.
-   Kegagalan pengiriman notifikasi tidak menghapus data kegiatan atau
    pengumuman yang telah tersimpan.

#### 6.1.7 Manajemen Dokumentasi (KF-07)

-   Sekretaris atau Pengurus yang berwenang dapat membuka menu manajemen
    dokumentasi.
-   Pengguna dapat menambahkan dokumentasi baru.
-   Data dokumentasi mencakup judul, jenis dokumentasi, tanggal, dan isi
    hasil pembahasan atau keputusan organisasi.
-   Sistem memvalidasi kelengkapan data sebelum menyimpan dokumentasi.
-   Pengguna yang memiliki hak akses dapat melihat dokumentasi yang
    telah tersimpan.
-   Pengurus yang berwenang dapat memperbarui informasi dokumentasi.
-   Sistem hanya berfungsi untuk mencatat dan menyimpan keputusan
    organisasi, bukan menentukan keputusan tersebut.

#### 6.1.8 Manajemen Pengguna dan Hak Akses (KF-08)

-   Super User dapat melihat daftar akun pengguna.
-   Super User dapat menambahkan akun pengguna baru.
-   Super User dapat memperbarui data pengguna.
-   Super User dapat menetapkan atau mengubah peran pengguna.
-   Super User dapat mengatur hak akses pengguna.
-   Super User dapat menonaktifkan akun.
-   Sistem menolak akses pengguna yang tidak memiliki izin.
-   Akun yang dinonaktifkan tidak dapat digunakan untuk login.

## 7. Aturan Bisnis

Aturan bisnis yang diterapkan dalam HIMASI Connect meliputi:

1.  Hanya pengguna yang memiliki akun terdaftar yang dapat login ke
    sistem.
2.  Pendaftaran akun secara mandiri tidak tersedia.
3.  Setiap pengguna memperoleh hak akses sesuai peran dan kewenangannya.
4.  Super User bertanggung jawab terhadap pengelolaan akun, peran, dan
    hak akses.
5.  Pembina dapat melihat hasil voting dan memberikan arahan, tetapi
    tidak memberikan suara.
6.  Hak memberikan suara dalam voting mengikuti ketentuan organisasi
    HIMASI.
7.  Sistem tidak mengambil keputusan organisasi secara otomatis.
8.  Pengumuman hanya dapat dikelola oleh pengguna yang memiliki
    kewenangan.
9.  Pembagian tugas kegiatan dikelola oleh Ketua atau Pengurus yang
    berwenang.
10. Dokumentasi harus mencerminkan hasil pembahasan atau keputusan yang
    benar-benar telah dibuat.
11. Pengelolaan dokumentasi hanya dapat dilakukan oleh Sekretaris atau
    Pengurus yang diberi kewenangan.
12. Data yang gagal disimpan tidak boleh ditampilkan sebagai data yang
    berhasil tersimpan.

## 8. Kebutuhan Non-Fungsional

Kebutuhan non-fungsional digunakan untuk menentukan kualitas dan batasan
operasional HIMASI Connect.

  ------------------------------------------------------------------------------
  ID             Kategori          Kebutuhan       Metrik         Prioritas
                                                   Pengujian      
  -------------- ----------------- --------------- -------------- --------------
  KNF-01         Kinerja           Sistem harus    Pengujian      Must Have
                                   menampilkan     waktu respons  
                                   halaman utama   minimal 3 kali 
                                   maksimal 3      pada perangkat 
                                   detik pada      dan koneksi    
                                   kondisi koneksi yang sama.     
                                   yang                           
                                   ditetapkan.                    

  KNF-02         Keamanan          Sistem harus    Pengujian      Must Have
                                   menerapkan      login dan hak  
                                   autentikasi dan akses setiap   
                                   hak akses       peran.         
                                   berdasarkan                    
                                   peran.                         

  KNF-03         Aksesibilitas     Sistem          Pengujian      Must Have
                                   menyediakan     melalui        
                                   tampilan dan    minimal 1      
                                   navigasi yang   handphone dan  
                                   mudah digunakan 1 laptop.      
                                   melalui                        
                                   perangkat yang                 
                                   didukung.                      

  KNF-04         Kompatibilitas    Sistem dapat    Pengujian      Must Have
                                   diakses melalui fitur utama    
                                   handphone dan   pada minimal 1 
                                   laptop.         handphone dan  
                                                   1 laptop.      

  KNF-05         Ketersediaan      Sistem          Pengujian      Should Have
                                   sebaiknya dapat akses pada     
                                   diakses ketika  waktu berbeda  
                                   pengguna        dan pencatatan 
                                   membutuhkan     gangguan.      
                                   informasi                      
                                   kegiatan.                      

  KNF-06         Skalabilitas      Sistem harus    Pengujian      Should Have
                                   mampu menangani beban          
                                   minimal 30      menggunakan 20 
                                   pengguna yang   pengguna       
                                   mengakses forum virtual        
                                   atau voting     sebagaimana    
                                   secara          metrik yang    
                                   bersamaan tanpa tercantum      
                                   kegagalan       dalam SRS.     
                                   pemrosesan                     
                                   suara.                         

  KNF-07         Keterpeliharaan   Kode sumber     Pemeriksaan    Could Have
                                   sistem harus    repositori dan 
                                   dikelola        riwayat        
                                   menggunakan     perubahan      
                                   version         kode.          
                                   control.                       

  KNF-08         Privasi dan       Sistem harus    Pengujian hak  Must Have
                 Kepatuhan         membatasi akses akses dan      
                                   data pengguna   pemeriksaan    
                                   sesuai peran    penerapan      
                                   dan             ketentuan      
                                   kewenangannya   privasi.       
                                   serta mengelola                
                                   data pribadi                   
                                   sesuai                         
                                   ketentuan yang                 
                                   berlaku.                       
  ------------------------------------------------------------------------------

**Catatan:** Pada KNF-06 terdapat perbedaan antara target minimal 30
pengguna dan metrik pengujian 20 pengguna virtual dalam SRS. Angka
tersebut perlu dikonfirmasi sebelum pengujian akhir.

## 9. Alur Utama Produk

### 9.1 Alur Login

1.  Pengguna membuka halaman HIMASI Connect.
2.  Pengguna memasukkan nama pengguna atau email dan kata sandi.
3.  Sistem memeriksa data login.
4.  Jika data benar, pengguna berhasil masuk.
5.  Sistem menampilkan fitur sesuai hak akses pengguna.

### 9.2 Alur Forum Diskusi dan Voting

1.  Pengguna membuka menu forum diskusi.
2.  Pengguna menyampaikan topik, pesan, atau tanggapan.
3.  Jika diperlukan, voting dapat digunakan untuk mendukung pembahasan.
4.  Pengguna yang memiliki hak suara memberikan pilihan.
5.  Sistem menyimpan suara dan menampilkan hasil kepada pengguna yang
    berwenang.
6.  Keputusan tetap ditetapkan oleh pihak organisasi sesuai
    kewenangannya.

### 9.3 Alur Manajemen Kegiatan

1.  Pengurus membuka menu manajemen kegiatan.
2.  Pengurus memasukkan informasi kegiatan.
3.  Pengurus menentukan anggota panitia dan pembagian tugas.
4.  Sistem memvalidasi dan menyimpan data.
5.  Pengguna dapat melihat informasi kegiatan sesuai hak akses.

### 9.4 Alur Pengumuman dan Notifikasi

1.  Pengguna yang berwenang membuat pengumuman.
2.  Sistem memvalidasi data pengumuman.
3.  Sistem menyimpan dan menampilkan pengumuman.
4.  Sistem memberikan notifikasi kepada pengguna yang relevan apabila
    fitur notifikasi tersedia.

### 9.5 Alur Manajemen Dokumentasi

1.  Sekretaris atau Pengurus yang berwenang membuka menu dokumentasi.
2.  Pengguna mengisi informasi dokumentasi.
3.  Sistem memvalidasi data.
4.  Sistem menyimpan dokumentasi.
5.  Dokumentasi dapat dilihat kembali oleh pengguna yang memiliki hak
    akses.

### 9.6 Alur Manajemen Pengguna

1.  Super User membuka menu manajemen pengguna.
2.  Sistem menampilkan daftar akun.
3.  Super User memilih akun yang akan dikelola.
4.  Super User menambahkan, memperbarui, menetapkan peran, atau
    menonaktifkan akun.
5.  Sistem memvalidasi perubahan.
6.  Sistem menyimpan dan menerapkan hak akses yang telah ditetapkan.

## 10. Model Data Konseptual

Model data konseptual HIMASI Connect mengacu pada entitas dan atribut
utama yang tercantum dalam SRS.

  -----------------------------------------------------------------------
  Entitas                 Atribut Utama           Fungsi
  ----------------------- ----------------------- -----------------------
  Peran                   Id_Peran (PK),          Menentukan peran dan
                          Nama_Peran, Deskripsi   hak akses pengguna.

  Pengguna                Id_Pengguna (PK), Nama, Menyimpan data
                          No_HP, Email, Password, pengguna.
                          Status_Akun, Id_Peran   
                          (FK)                    

  Forum Diskusi           Id_Diskusi (PK), Judul, Menyimpan topik
                          Deskripsi,              diskusi.
                          Tanggal_Dibuat,         
                          Status_Diskusi,         
                          Id_Pengguna (FK)        

  Pesan                   Id_Pesan (PK),          Menyimpan pesan dan
                          Isi_Pesan,              tanggapan.
                          Tanggal_Kirim,          
                          Waktu_Kirim,            
                          Id_Pengguna (FK),       
                          Id_Diskusi (FK)         

  Voting                  Id_Voting (PK),         Menyimpan informasi
                          Judul_Voting,           voting.
                          Pertanyaan_Voting,      
                          Tanggal_Mulai,          
                          Tanggal_Selesai,        
                          Status_Voting,          
                          Id_Diskusi (FK)         

  Pilihan Voting          Id_Pilihan (PK),        Menyimpan pilihan
                          Nama_Pilihan,           jawaban voting.
                          Deskripsi_Pilihan,      
                          Id_Voting (FK)          

  Suara Voting            Id_Suara (PK),          Mencatat suara
                          Tanggal_Memilih,        pengguna.
                          Waktu_Memilih,          
                          Id_Pengguna (FK),       
                          Id_Pilihan (FK)         

  Kegiatan                Id_Kegiatan (PK),       Menyimpan informasi
                          Nama_Kegiatan,          kegiatan.
                          Jenis_Kegiatan,         
                          Tanggal_Kegiatan,       
                          Waktu_Kegiatan,         
                          Lokasi_Kegiatan,        
                          Deskripsi,              
                          Status_Kegiatan,        
                          Id_Voting (FK)          

  Pembagian Tugas         Id_Tugas (PK),          Menyimpan tugas dan
                          Nama_Tugas,             penanggung jawab
                          Deskripsi_Tugas,        kegiatan.
                          Tanggal_Mulai,          
                          Tanggal_Selesai,        
                          Id_Kegiatan (FK),       
                          Id_Pengguna (FK)        

  Pengumuman              Id_Pengumuman (PK),     Menyimpan pengumuman
                          Judul, Isi_Pengumuman,  kegiatan.
                          Tanggal_Publikasi,      
                          Status_Pengumuman,      
                          Id_Pengguna (FK)        

  Notifikasi              Id_Notifikasi (PK),     Menyimpan pemberitahuan
                          Judul, Isi_Notifikasi,  kepada pengguna.
                          Tanggal_Kirim,          
                          Status_Baca,            
                          Id_Pengumuman (FK),     
                          Id_Pengguna (FK)        

  Manajemen Dokumentasi   Id_Dokumen (PK), Judul, Menyimpan dokumentasi
                          Jenis_Dokumen,          hasil pembahasan dan
                          Deskripsi_Dokumen,      keputusan organisasi.
                          Tanggal_Unggah,         
                          File_Dokumen,           
                          Id_Pengguna (FK),       
                          Id_Kegiatan (FK)        
  -----------------------------------------------------------------------

### 10.1 Relasi Antarentitas

1.  Peran dengan Pengguna memiliki relasi 1:1 sebagaimana dituliskan
    dalam SRS; kardinalitas ini perlu diverifikasi karena satu peran
    umumnya dapat dimiliki banyak pengguna.
2.  Pengguna dengan Forum Diskusi memiliki relasi 1:M.
3.  Forum Diskusi dengan Pesan memiliki relasi 1:N.
4.  Forum Diskusi dengan Voting memiliki relasi 1:1.
5.  Voting dengan Pilihan Voting memiliki relasi 1:N.
6.  Pilihan Voting dengan Suara Voting memiliki relasi 1:M.
7.  Pengguna dengan Suara Voting memiliki relasi 1:N.
8.  Voting dengan Kegiatan memiliki relasi 1:1.
9.  Kegiatan dengan Pembagian Tugas memiliki relasi 1:M.
10. Kegiatan dengan Pengumuman memiliki relasi 1:N.
11. Pengumuman dengan Notifikasi memiliki relasi 1:N.
12. Pengguna dengan Pengumuman memiliki relasi 1:N.
13. Pengguna dengan Notifikasi memiliki relasi 1:M.
14. Pengguna dengan Manajemen Dokumentasi memiliki relasi 1:M.

## 11. Lingkungan Operasi dan Batasan Teknis

### 11.1 Lingkungan Operasi

-   Platform: Aplikasi berbasis web.
-   Browser: Google Chrome.
-   Perangkat: Laptop, komputer, dan handphone.
-   Sistem operasi perangkat: Windows, Android, iOS, atau sistem operasi
    lain yang mendukung browser web.
-   Sistem operasi server: Disesuaikan dengan kebutuhan pengembangan dan
    penerapan.
-   Basis data: Digunakan untuk menyimpan informasi pengguna, kegiatan,
    diskusi, voting, pengumuman, notifikasi, dan dokumentasi.
-   Hosting: Direncanakan menggunakan layanan hosting atau server yang
    dapat diakses melalui internet.

### 11.2 Batasan Proyek

1.  Anggaran pengembangan belum ditetapkan.
2.  Waktu pengembangan disesuaikan dengan jadwal proyek selama satu
    semester.
3.  Pengembangan tahap awal dibatasi pada aplikasi berbasis web.
4.  Aplikasi Android native tidak termasuk dalam ruang lingkup awal.
5.  Sistem perlu memperhatikan aturan kampus serta keamanan dan
    kerahasiaan data pengguna.

## 12. Risiko Produk dan Mitigasi

  -----------------------------------------------------------------------
  Risiko                  Dampak                  Mitigasi
  ----------------------- ----------------------- -----------------------
  Informasi kegiatan atau Pengguna tidak          Menyediakan fitur
  pengumuman tidak        memperoleh informasi    pengumuman dan
  tersampaikan kepada     yang dibutuhkan.        notifikasi serta
  anggota.                                        menampilkan informasi
                                                  kegiatan dengan jelas.

  Hak akses pengguna      Pengguna dapat          Menetapkan hak akses
  tidak sesuai dengan     mengakses informasi     berdasarkan peran dan
  perannya.               atau fitur yang tidak   menguji setiap hak
                          seharusnya.             akses.

  Hasil diskusi atau      Informasi keputusan     Menyediakan fitur
  keputusan tidak         organisasi sulit        dokumentasi keputusan
  terdokumentasi lengkap. ditemukan kembali.      dan memastikan hasil
                                                  pembahasan dicatat oleh
                                                  pihak berwenang.

  Pengguna kurang         Penggunaan fitur        Membuat tampilan
  memahami penggunaan     menjadi kurang optimal. sederhana, menyediakan
  sistem.                                         petunjuk penggunaan,
                                                  dan melakukan uji coba
                                                  bersama calon pengguna.

  Voting tidak berjalan   Hasil voting tidak      Membatasi pembuatan dan
  sesuai aturan           sesuai dengan ketentuan penutupan voting serta
  organisasi.             yang ditetapkan.        menetapkan kewenangan
                                                  sesuai aturan
                                                  organisasi.

  Sistem sulit diakses    Pengguna mengalami      Menguji akses sistem
  ketika informasi        kesulitan memperoleh    pada waktu berbeda dan
  dibutuhkan.             informasi.              menyiapkan prosedur
                                                  penyampaian informasi
                                                  alternatif.

  Pembagian tugas tidak   Tanggung jawab anggota  Menyediakan fitur
  tercatat atau tidak     panitia menjadi tidak   pembagian tugas dan
  diperbarui.             jelas.                  memastikan perubahan
                                                  diperbarui oleh pihak
                                                  berwenang.
  -----------------------------------------------------------------------

## 13. Prioritas Pengembangan

Prioritas pengembangan menggunakan metode MoSCoW sebagaimana tercantum
dalam SRS.

  -----------------------------------------------------------------------
  Prioritas                           Daftar Kebutuhan
  ----------------------------------- -----------------------------------
  Must Have                           KF-01, KF-02, KF-03, KF-04, KF-05,
                                      KF-08, KNF-01, KNF-02, KNF-03,
                                      KNF-04, KNF-08

  Should Have                         KF-06, KF-07, KNF-05, KNF-06

  Could Have                          KNF-07

  Won't Have (Saat Ini)               Tidak ada
  -----------------------------------------------------------------------

Prioritas tersebut digunakan sebagai acuan dalam menentukan fitur yang
perlu dikembangkan terlebih dahulu berdasarkan kebutuhan sistem.

## 14. Kriteria Penerimaan Produk

HIMASI Connect dapat dinyatakan memenuhi kebutuhan utama apabila:

1.  Pengguna yang memiliki akun terdaftar dapat login ke sistem.
2.  Sistem memberikan akses sesuai peran dan kewenangan pengguna.
3.  Pengguna yang memiliki izin dapat menggunakan forum diskusi.
4.  Voting dapat menampilkan pertanyaan dan pilihan serta menyimpan
    suara dari pengguna yang berhak.
5.  Sistem membatasi satu suara per pengguna untuk setiap voting.
6.  Pengurus yang berwenang dapat mengelola pembagian tugas kegiatan.
7.  Pengguna dapat melihat pengumuman dan informasi kegiatan.
8.  Sistem dapat memberikan notifikasi kepada pengguna yang relevan
    sesuai fitur yang tersedia.
9.  Pengurus atau Sekretaris yang berwenang dapat menyimpan dan
    mengakses dokumentasi.
10. Super User dapat mengelola akun, peran, dan hak akses.
11. Akun yang dinonaktifkan tidak dapat digunakan untuk login.
12. Sistem menolak akses dari pengguna yang tidak memiliki izin.
13. Halaman utama memenuhi target waktu respons maksimal 3 detik pada
    kondisi pengujian yang ditetapkan.
14. Fitur utama dapat digunakan melalui handphone dan laptop.

## 15. Asumsi dan Hal yang Perlu Dikonfirmasi

Beberapa hal dalam SRS perlu diperhatikan pada tahap perancangan dan
pengembangan:

1.  **Daftar peran pengguna:** SRS mencantumkan Pembina, Ketua,
    Pengurus, dan Anggota pada kelas pengguna, serta Super User pada
    kebutuhan manajemen pengguna dan diagram konteks. Untuk ruang
    lingkup saat ini, kelompok pengguna yang digunakan adalah Pembina,
    Pengurus, Super User, dan Anggota. Ketua merupakan jabatan dalam
    kelompok Pengurus. Kaprodi belum termasuk ruang lingkup.
2.  **Akses login:** KF-01 menyebut Anggota, Pengurus, dan Pembina,
    sedangkan UC-01 juga mencantumkan Super User. Akses login Super User
    perlu dipastikan konsisten pada spesifikasi.
3.  **Target pengujian beban:** KNF-06 menyebut minimal 30 pengguna,
    sedangkan metrik pengujiannya mencantumkan 20 pengguna virtual.
4.  **Prioritas notifikasi dan dokumentasi:** KF-06 dan KF-07 berstatus
    Ditunda pada tabel kebutuhan fungsional, sedangkan ringkasan MoSCoW
    menempatkannya pada Should Have. Status implementasi perlu
    ditetapkan secara konsisten sebelum penyusunan rencana kerja.
5.  **Kewenangan pengumuman dan dokumentasi:** Detail pengguna yang
    dapat membuat, mengubah, dan menerbitkan data perlu disesuaikan
    dengan hak akses yang ditetapkan.
6.  **Teknologi implementasi:** SRS belum menetapkan bahasa pemrograman,
    framework, DBMS, dan layanan hosting tertentu. Pemilihan teknologi
    dilakukan pada tahap perancangan teknis dan harus disepakati tim.

## 16. Pengelolaan Perubahan dan Keterlacakan

Setiap perubahan kebutuhan produk mengikuti prosedur yang telah
ditetapkan dalam SRS, yaitu:

1.  Pengaju mengisi Formulir Permintaan Perubahan (Change Request).
2.  Tim menganalisis dampak perubahan terhadap jadwal, biaya, dan modul
    terkait.
3.  Pemilik bisnis dan ketua tim menentukan apakah perubahan diterima,
    ditolak, atau ditunda.
4.  Dokumen diperbarui, versi dinaikkan, dan riwayat perubahan dicatat.
5.  Seluruh anggota tim diberi informasi mengenai perubahan tersebut.

Setiap kebutuhan produk harus dapat ditelusuri kembali ke ID kebutuhan
dalam SRS, modul produk, rancangan pada dokumen desain, dan kasus
pengujian.

## 17. Referensi

1.  Dokumen Software Requirements Specification (SRS) Aplikasi Web
    HIMASI Connect, Kode Dokumen SRS-000-001, disusun oleh Jesika
    Irmawati dan Apip Tiandus, Oktober 2026.
2.  ISO/IEC/IEEE. (2018). *ISO/IEC/IEEE 29148:2018: Systems and software
    engineering---Life cycle processes---Requirements engineering*.
    International Organization for Standardization.
    https://www.iso.org/standard/72089.html

------------------------------------------------------------------------

**Akhir Dokumen PRD HIMASI Connect**

Dokumen PRD ini menjadi acuan kebutuhan produk dalam pengembangan HIMASI
Connect. Dokumen `design.md` akan disusun secara terpisah berdasarkan
rancangan antarmuka yang telah disiapkan dan tetap mengacu pada
kebutuhan dalam SRS serta PRD.

------------------------------------------------------------------------

## Catatan Teknologi Tampilan

PRD ini merupakan dokumen kebutuhan produk dalam format Markdown, bukan
berkas antarmuka web. Bootstrap 5 adalah framework CSS yang akan
digunakan pada tahap perancangan dan implementasi antarmuka, sehingga
ketentuan penggunaan Bootstrap 5 dicantumkan dan dijabarkan lebih lanjut
dalam `design.md`, bukan diterapkan sebagai CSS di dalam file PRD.
