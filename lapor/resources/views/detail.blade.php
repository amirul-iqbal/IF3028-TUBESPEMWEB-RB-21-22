<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detail.css">
    <title>Buat Laporan</title>
</head>

<body>
    <div id="header">
        <h1>SIMPLE LAPOR!</h1>
    </div>
    <div id="wrapper">
    <div class="judulKecil">Detail Laporan/Komentar</div>
    <hr>
        <br>
        {{$detail->isi}}
        <br>
        Lampiran:
        <br>
        <img src="{{ $detail->lampiran }}" class="gambar" alt="Gambar">
        <div class="flex-container">
        <div class="sebaris">
            Waktu: {{$detail->tgl_kejadian}}
            </div>
            <div class="sebaris">
            Aspek: {{$detail->tipe_laporan}}
            </div>
        <div class="sebaris">
            <form method="post" action="/laporan/{{$laporan->id_laporan}}">
            @csrf
            @method('DELETE')
            <button type="submit">
                Hapus Laporan/Komentar
            </button>
            </form>
        </div>
        <br>
        <hr>
        </div>
    </div>
</body>
