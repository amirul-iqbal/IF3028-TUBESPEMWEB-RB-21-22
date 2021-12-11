<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style-home.css">
        <title>Lapor</title>
    </head>
    <body>
        <div class="cover">
            <header>
                <img src="images/logo.png">
            </header>
            <main>
                <div class="cari">
                    <input type="text" name="cari">
                    <input type="submit" value="Cari">
                </div>
                <div class="add">
                    <label>Tambah Laporan/Komentar</label>
                    <a href="/buat-laporan"><img src="images/add.png" width="13px" height="13px"></a>
                </div>

                <h4>Laporan/Komentar Terakhir</h4>

                <div class="recent"><!-- Ini ntar pake perulangan yaa, ini cuma dummynya -->
                    <hr>
                    @foreach ( $reports as $r)

                    <p>{{ $r->excerpt }}</p>

                    <div class="lampiran"><!-- Gambar ini cuma dummy yaak, ntar di import dari data base phpnya -->
                        <img src="{{ url('/lampiran/'. $r->lampiran) }}" width="100px" height="100px">
                        <div class="info">
                            <p class="time">Waktu : {{ $r->submited_at }}</p>
                            <a href="/view-laporan">Lihat Selengkapnya &emsp; <strong>></strong></a>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </main>
        </div>
        <footer>
            
        </footer>
    </body>
</html>
