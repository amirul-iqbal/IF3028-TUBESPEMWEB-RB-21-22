<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/style-form.css">
        <title>Lapor</title>
    </head>
    <body>
        <div class="cover">
            <header>
                <img src="/images/logo.png">
            </header>
            <main>
                <h3>Buat Laporan/Komentar Baru</h3>
                <hr>
                <form action="/store" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="lapor">
                        <textarea name="laporan" placeholder="Masukkan Laporan/Komentar Anda"></textarea>
                    </div>
                    <div class="aspek">
                        <select name="aspek" required>
                            <option id="pholder" value="" disabled selected>Pilih Aspek Pelaporan/Komentar</option>
                            <option value="Layanan Siakad">Layanan Siakad</option>
                            <option value="Pengaduan Sarana/Prasarana ITERA">Pengaduan Sarana/Prasarana ITERA</option>
                            <option value="Pengaduan Kegiatan Mahasiswa">Pengaduan Kegiatan Mahasiswa</option>
                            <option value="Pengaduan Aktivitas Perkuliahan">Pengaduan Aktivitas Perkuliahan</option>
                            <option value="Request Pengembangan Sistem Informasi ITERA">Request Pengembangan Sistem Informasi ITERA</option>
                            <option value="Kritik dan Saran Terkait Sistem Informasi ITERA">Kritik dan Saran Terkait Sistem Informasi ITERA</option>
                        </select>
                    </div>

                    <div class="upload">
                        <input type="file" name="lampiran">
                    </div>
                    <div class="submit">
                        <input type="submit" value="Buat LAPOR">
                    </div>
                </form>
                <hr>
                <footer>
                    <p class="copy-right">©Copyright Tugas Besar Pemrograman Web 2021 ~ RB</p>
                    <div class="profile">
                        <div class="name-groub">
                            <label>Made by:</label>
                            <table>
                                <tr>
                                    <td>Ahmad Syafarudin</td>
                                    <td>119140044</td>
                                </tr>
                                <tr>
                                    <td>Dodi Devrian Andrianto</td>
                                    <td>119140023</td>
                                </tr>
                                <tr>
                                    <td>Tri Aji Bagaskara</td>
                                    <td>119140214</td>
                                </tr>
                            </table>
                        </div>

                        <div class="logo-footer">
                            <img src="/images/logo-itera.jpg" width="150px" height="182px">
                        </div>
                    </div>
                </footer>
            </main>
        </div>
    </body>
</html>
