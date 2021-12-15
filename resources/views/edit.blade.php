<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="/css/style-form.css">
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
                <form action="/update/{{ $report->id }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="lapor">
                        <textarea name="laporan" placeholder="Masukkan Laporan/Komentar Anda"> {{ $report->body }}</textarea>
                    </div>
                    <div class="aspek">
                        <select name="aspek" required>
                            <option value="" disabled selected>Pilih Aspek Pelaporan/Komentar</option>
                            <option value="Layanan Siakad" {{ $report->aspek == 'Layanan Siakad' ? 'selected' : '' }} >Layanan Siakad</option>
                            <option value="Pengaduan Sarana/Prasarana ITERA" {{ $report->aspek == 'Pengaduan Sarana/Prasarana ITERA' ? 'selected' : '' }} >Pengaduan Sarana/Prasarana ITERA</option>
                            <option value="Pengaduan Kegiatan Mahasiswa" {{ $report->aspek == 'Pengaduan Kegiatan Mahasiswa' ? 'selected' : '' }} >Pengaduan Kegiatan Mahasiswa</option>
                            <option value="Pengaduan Aktivitas Perkuliahan" {{ $report->aspek == 'Pengaduan Aktivitas Perkuliahan' ? 'selected' : '' }} >Pengaduan Aktivitas Perkuliahan</option>
                            <option value="Request Pengembangan Sistem Informasi ITERA" {{ $report->aspek == 'Request Pengembangan Sistem Informasi ITERA' ? 'selected' : '' }} >Request Pengembangan Sistem Informasi ITERA</option>
                            <option value="Kritik dan Saran Terkait Sistem Informasi ITERA" {{ $report->aspek == 'Kritik dan Saran Terkait Sistem Informasi ITERA' ? 'selected' : '' }} >Kritik dan Saran Terkait Sistem Informasi ITERA</option>
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
            </main>
        </div>
        <footer>
            
        </footer>
    </body>
</html>
