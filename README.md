## Simple `LAPOR` :heavy_exclamation_mark:
Anda mengetahui aplikasi `lapor` yang dibuat oleh pemerintah republik indonesia? jika tidak silahkan kunjungi 
http://lapor.go.id, maka anda akan mendapatkan laman seperti gambar di bawah

![](tampilan/lapor.png)

Kali ini kita akan membuat aplikasi web seperti `lapor` untuk mengumpulkan laporan/komentar terkait layanan
di program studi teknik informatika ITERA.
**Luangkan waktu untuk membaca spesifikasi ini sampai selesai.** :kissing_heart:

### Anggota Tim :cyclone:
Project dikerjakan secara **berkelompok** dengan maksimal jumlah anggota adalah 2-3 orang mahasiswa (maksimal 3 orang mahasiswa!).

### Petunjuk Pengerjaan :umbrella:
1. Fork pada repository ini dengan akun github anda.
2. Silakan commit pada repository anda (hasil fork). Lakukan berberapa commit dengan pesan yang bermakna,
contoh: fix css, membuat post done, jangan seperti final, benerin dikit, oke deh, update deh dll. 
Disarankan untuk tidak melakukan commit dengan perubahan yang besar karena akan mempengaruhi 
penilaian (contoh: hanya melakukan satu commit kemudian dikumpulkan).
3. Minimal commit sebanyak personil anggota tim dengan masing-masing personil tim melakukan commit sesuai dengan kesepakatan tim, penilaian individu akan dilihat.
4. Ubah **Penjelasan Teknis** pada bagian bawah readme.md ini dengan menjelaskan bagaimana cara anda:
   - Instalasi Framework, Koneksi basis data 
   - Melakukan validasi pada client-side
   - Melakukan AJAX (mulai dari pengguna melakukan klik pada tombol LAPOR! sampai laporan/komentar terkirim).
5. Pull request dari repository anda ke repository ini dengan 
format **NIM** - **Nama Lengkap**. **Waktu terkahir proses pull request adalah 4 hari setelah 
ujian akhir semester (UAS)**
6. Data yang dikumpulkan adalah:
   - Source code aplikasi
   - Basis data, dan
   - Cara instalasi aplikasi anda
7. Penilaian:
   - Kerjasama tim
   - Kesesuaian dengan spesifikasi
   - Pemahaman dalam penggunaan framework, penilaian efisiensi query
   - Antarmuka aplikasi
   - Bug free :beetle:
   
### Tools :hammer:
1. Untuk backend, wajib menggunakan PHP framework apapun (Contoh: Codeigniter, Laravel, Slim, Yii dll).
2. Gunakan MySQL atau basis data relasional lain untuk menyimpan data.
3. Untuk frontend, gunakan Javascript, HTML dan CSS. **Tidak boleh menggunakan library atau framework CSS atau JS seperti 
JQuery atau Bootstrap.** CSS sebisa mungkin ada di file yang berbeda (tidak inline styling/embeding styling).

### Spesifikasi Simple LAPOR!
#### Tampilan :soccer:
Anda diminta untuk membuat tampilan sedemikian hingga mirip dengan tampilan berikut. Website yang diminta tidak harus 
responsive. Desain tampilan tidak perlu dibuat indah. Icon dan jenis font tidak harus sama dengan contoh. Warna font, 
garis pemisah, dan perbedaan ukuran font harus terlihat sesuai contoh. Perhatikan juga tata letak elemen-elemen.

![](tampilan/utama.png)
- Search bar diletakkan di bagian paling atas dibawah judul.
- Tombol "cari" berada di sebelah kanan search bar.
- **Buat LAPOR!** digunakan untuk mengirimkan laporan/komentar baru.
- Tampilan search bar ini harus tetap ada walaupun anda tidak mengimplementasikan fitur search.
- Tampilan pertanyaan tidak harus urut berdasarkan "Laporan/Komentar terakhir", 
namun tulisan "Laporan/komentar Terakhir" ini harus ada.

![](tampilan/buat.png)
- Tampilan di atas digunakan untuk mengajukan atau mengubah laporan/komentar.
- Perhatikan label dari field pada form berada di dalam field (tidak di luar)
- Apek yang dilaporkan ditampilkan dalam bentuk `select`

![](tampilan/detail.png)
- Bagian ini menampilkan laporan/komentar. Bagian `datetime` harus ada. Tanda `kuote` tidak harus ada
- Perhatikan label dari field pada form berada di dalam field (tidak di luar)

### List laporan/komentar
Halaman utama berisi daftar judul pertanyaan, siapa yang bertanya, dan isi pertanyaan. Isi pertanyaan yang terlalu 
panjang harus dipotong. Silakan definisikan sendiri seberapa panjang agar tetap baik terlihat di layout yang Anda buat.

Pada masing-masing elemen list, terdapat menu untuk mengubah dan menghapus pertanyaan.

View Laporan ditampilkan secara terurut dimulai dari laporan terakhir yang diberikan highlight

### Kirim laporan/komentar `LAPOR!`
Pengguna dapat mengajukan laporan/komentar. Form yang digunakan memiliki komentar (textarea), 
data lapiran berupa gambar 
dan file berekstention `doc, docx, xls, xlsx, ppt, pptx, pdf``. Gunakan HTTP POST.

### Ubah Laporan/komentar
Pengguna dapat mengubah laporan/komentar yang sudah dibuat. Form yang digunakan memiliki tampilan yang sama dengan 
form untuk bertanya, namun field-field yang ada sudah terisi. Gunakan HTTP POST untuk menyimpan perubahan.

### Hapus Laporan/komentar
Pengguna dapat menghapus laporan/komentar yang sudah dibuat. Lakukan konfirmasi penghapusan dengan `javascript`.

### Lihat Laporan/komentar
Pengguna dapat melihat laporan/komentar. Pada halaman ini terdapat informasi aspek yang dilaporkan.
(Dosen, Staff, Mahasiswa, Infrastruktur dan Pengajaran ), isi laporan/komentar, waktu pengiriman komentar `datetime` 
dan file lapiran. 

### Validasi
Validasi **wajib** dilakukan pada *client-side*, dengan menggunakan **javascript** bukan HTML 5 input type, yaitu:
- Setiap field pada form tidak boleh kosong.
- minimal jumlah kata dalam laporan/komentar adalah 20 kata.

### Bonus
Pengguna dapat mencari laporan/komentar dengan melakukan search ke `isi laporan/komentar`.

### Penjelasan Teknis
`Silakan isi bagian ini dengan penjelasan anda, sesuai Petunjuk Pengerjaan di atas.`

- instalasi framework diawali dengan melakukan download terhadap framwork php yang dipakai, pada kasus ini, kami menggunakan framework Codeigniter 3. Setelah framework didownload, kami melakukan exctract file framework tersebut. Pada konfigurasi awal dilakukan perubahan nama folder, pembuatan file .htaccess pada main folder code yang ditujukan untuk meringkas penamaan file pada url. Lalu dilakukan konfigurasi dengan mengubah halaman awal dari default menjadi controller Home pada routes, autoload library database dan session, autoload helper url untuk menggunakan base_url, pengisian base_url pada config, menghapus index.php pada index_page di config, serta pengaturan database dengan mengisi nama database yang digunakan. Pembuatan folder dan file view, controllers dan assets untuk menampung asset asset.

- Pada awal halaman, user akan diberikan tampilan home yang berisikan header dengan tombol lapor dan search input bar, serta dibawah header terdapat menu laporan yang diurutkan dengan laporan paling terkini. Untuk melakukan pelaporan user diharuskan untuk login pada modal yang ditampilkan apabila user melakukan klik pada tombol Lapor !. Pada modal autentikasi tersebut terdapat 2 menu, yaitu register dan login, apabila user belum mempunyai akun user dapat melakukan register dengan menginputkan username dan password. Validasi ditrigger dengan atribut onkeyup, setiap kali user selesai menekan tombol, fungsi validation akan melakukan pengiriman value kolom input tersebut menuju fungsi load_user pada controller Home menggunakan metode get. Pada kolom username, tidak terdapat batasan minimum untuk jumlah kata pada username, validasi dilakukan dengan melakukan pengecekan apakah username tersebut sudah terdaftar atau belum. Jadi apabila pada ketikan terakhir ternyata data yang dikirimkan pada kolom input terdapat pada database atau $user != NULL, maka akan mengembalikan pesan "Username sudah terdaftar!". Pada kolom input password register, terdapat validasi berupa pengecekan minimal huruf yang diinputkan, metode yang digunakan sama dengan kolom username, namun hanya melakukan pengecekan string length (strlen) pada value yang dikirimkan. Apabila user tidak melakukan penginputan pada 1 atau kedua kolom input, akan ditampilkan alert bertuliskan "Tolong lengkapi data registrasi!" pada fungsi validCheck(), dan apabila user menekan button registrasi namun masih terdapat kesalahan pada input yang dilakukan, maka fungsi validCheck akan mengembalikan alert yang bertuliskan "Tolong ubah data sesuai instruksi!", validasi kali ini dilakukan dengan melakukan pengecekan apakah innerHTML dari div id uname dan div id password, yang dimana merupakan pesan error yang ditampilkan dibawah kolom input registrasi masih memiliki sebuah isi atau tidak. Apabila sudah tidak terdapat kesalahan lagi dalam penginputan data registrasi, dari fungsi validCheck akan diteruskan ke fungsi pushAuth dengan mengirimkan data username, password, dan authentikasi (login/registrasi, value dari input type submitnya), pada fungsi pushAuth akan mengirimkan data dengan menggunakan AJAX metode post ke fungsi auth pada controller home, pada controller auth akan dilakukan percabangan apakah register atau login, apabila register akan dikirimkan data username serta password tadi ke database, save session username dengan username yang telah diinputkan tadi, setelah itu akan kembali ke fungsi validCheck dan diredirect ke halaman home menggunakan location.href. Pada login alur yang digunakan sama, namun validasi nya sedikit berbeda, fungsi validation di login digunakan untuk melakukan pengecekan username, apakah terdaftar atau tidak. Apabila terdaftar dan user telah melakukan input password, fungsi pushAuth akan melakukan pengiriman data, kekontroller auth, dan apabila password tidak sama, maka akan dikembalikan pesan "password salah", dan apabila pushAuth mendapatkan respon tersebut, maka pesan password salah akan ditampilkan dibawah kolom password, untuk alert ubah sesuai instruksi sama dengan register. Apabila password tidak salah, maka akan diset session username, dan pushAuth akan meredirect ke halaman home. Logout dilakukan dengan menghapus session menggunakan controller delete dengan trigger link "logout?" pada home.

-Setelah melakukan login, user dapat melakukan penginputan laporan dengan mengklik tombol "Lapor !", lalu user akan diarahkan kehalaman buatlaporan. Pada halaman  buat laporan, terdapat input judul, textarea isi, select aspek, dan input file lampiran. Validasi dilakukan apabila user menekan tombol "Kirim", validasi melakukan pengecekan pada semua input apakah terdapat value atau tidak, isi dari laporan akan dilakukan pengecekan apabila terdapat value maka akan di split string nya ke dalam array hitungText dan dicek menggunakan array.length dan apabila length nya kurang dari 20, maka akan ditampilkan pesan "Minimal jumlah kata untuk melapor sebanyak 20 kata!". Setiap kesalahan input yang divalidasi akan menambah nilai variabel i pada fungsi validCheck, apabila nilai i lebih besar dari 0, maka akan di return false. Pengiriman data menggunakan form dengan method post menuju submitLaporan pada controller laporan. Data yang akan dikirimkan ke database adalah username pengguna, judul, isi, aspek, serta nama lampiran yang diubah terlebih dahulu keformat microtime. Pengiriman file ke folder assets/lampiran/  menggunakan fungsi move_uploaded_file, setelah data berhasil diinputkan ke database, akan diredirect ke home. Data lapor pada home ditampilkan 4 set data lapor perpage menggunakan pagination bawaan codeigniter dengan sedikit perubahan pada tombol, dan hanya menggunakan tombol next dan back nya saja. Disamping tombol "Lapor !", terdapat button "Laporan Anda" yang berfungsi sebagai button untuk menampilkan laporan anda saja. Apabila user menekan button tersebut, akan mentrigger fungsi getUserLapor, fungsi ini akan mengirimkan data username menggunakan AJAX ke controller load_lapor_user dengan menggunakan metode get. Pada load_lapor_user akan diterima username tersebut sebagai key, lalu di select * from lapor where username = '$key' di order by id lapornya secara descending lalu apabila getUserLapor telah mendapatkan response nya header bertuliskan laporan terakhir akan diubah menjadi laporan kamu dan data akan ditampilkan sesuai dengan data response tersebut. Fitur search alurnya sama dengan button "Laporan Anda", namun terdapat perbedaan pada keynya yang merupakan inputan dari user, dan WHERE kondisi pada query database menggunakan LIKE %key% pada kolom judul dan isi, yang mana artinya menarik data yang mana keyword terdapat kemiripan secara kata kedepan dan kebelakangnya pada data di kolom judul dan isi pada database. Lalu apabisa fungsi search mendapatkan responsenya, akan ditampilkan hampir sama dengan button sebelumnya. Pada kolom data di home, isi dibatasi dengan hanya terdapat 10 kata dengan menggabungkan array dari string yang di explode. Pada kolom data disebelah kiri terdapat nama lampiran dari penginput yang apabila ditekan akan dilakukan pendownload an pada data tersebut, sedangkan link disebelah kolom data untuk meredirect ke halaman detail.

-Pada halaman detail terdapat detail dari laporan, untuk lampiran berbentuk gambar akan ditampilkan dengan tag img, pdf dengan iframe, serta doc ppt xls akan ditampilkan dengan bentuk link. Terdapat button edit dan delete, button delete digunakan untuk mengirim id ke fungsi delete pada controller home dan didelete data pada database sesuai dengan id_lapor nya. Konsep edit sama, dikirim id ke controller edit dan ditampilkan halaman yang bentuknya sama pada input awal laporan namun ditampilkan value nya sesuai dengan data yang terdapat di database. Validasinya sama dengan buatlaporan diawal, dan metode pengirimannya menggunakan post, dan dilakukan penghapusan data lampiran pada folder lampiran dan mengirimkan yang baru apabila user menginputkan lampiran yang baru, dan untuk field yang lainnya hanya dilakukan penimpahan data biasa.

### Knowledge
Untuk meringankan beban tugas ini, ada berberapa keyword yang bisa anda cari untuk menyelesaikan tugas ini.
- CSS: margin, padding, header tag, font-size, text-align, float, clear, border, color, div, span, placeholder, 
anchor tag.
- Javascript : XMLHTTPRequest.
- PHP Framework : [Codeigniter](https://codeigniter.com/en/docs), [Laravel](https://laravel.com/docs/6.x) dll.
- SQL query: SELECT, INSERT, UPDATE, DELETE, WHERE, operator LIKE.

:telephone: Jika ada pertanyaan silakan tanyakan lewat `Asisten`.

### About :honeybee:
TIM / KELOMPOK : 	Rizaldo ABdulrachman 14117152	
						M. Yafi Fahmi 14117112
						Farhan Herliansyah 118140012
						

Dosen       : Andre Febrianto, S.Kom., M.Eng., Amirul Iqbal, S.Kom., M.Eng., Muhammad Habib Algifari, S.Kom., M.T.I.
