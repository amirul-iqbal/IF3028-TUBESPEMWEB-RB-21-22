<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="/css/style-home.css">
        <title>Lapor</title>
    </head>
    <body>
        <div class="cover">
            <header>
                <img src="images/logo.png">
            </header>
            <main>
                <div class="cari">
                    <form action="/find" method="GET">
                        {{ csrf_field() }}
                        <input type="text" name="cari" placeholder="Cari Laporan/Komentar">
                        <input type="submit" value="Cari">
                    </form>
                </div>
                <div class="add">
                    <a href="/buat-laporan">Tambah Laporan/Komentar &ensp;<img src="images/add.png" width="13px" height="13px"></a>
                </div>

                <h4>Laporan/Komentar Terakhir</h4>

                <div class="recent"><!-- Ini ntar pake perulangan yaa, ini cuma dummynya -->
                    <hr>

                    @if ($reports->isEmpty()) 
                        <p style="text-align: center; color:red">Hasil Tidak Ditemukan!</p>
                        <hr>
                        
                    @else 
                        @foreach ( $reports as $r)

                        <p>{{ $r->excerpt }}</p>

                        <div class="lampiran"><!-- Gambar ini cuma dummy yaak, ntar di import dari data base phpnya -->
                            {{-- <img src="{{ url('/lampiran/'. $r->lampiran) }}" width="200px" height="200px"> --}}
                            <a class="img-lampiran" href="/lampiran/{{ $r->lampiran }}"> {{ $r->lampiran }}</a>
                            <div class="info">
                                <p class="time">Waktu : {{ $r->submited_at }}</p>
                                <a href="/view-laporan/{{ $r->id }}">Lihat Selengkapnya</a>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                    @endif
                </div>

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
                                    <td>    Tri Aji Bagaskara</td>
                                    <td>119140214</td>
                                </tr>
                            </table>
                        </div>

                        <div class="logo-footer">
                            <img src="images/logo-itera.jpg" width="150px" height="182px">
                        </div>
                    </div>
                </footer>
            </main>
        </div>
        
    </body>
</html>
