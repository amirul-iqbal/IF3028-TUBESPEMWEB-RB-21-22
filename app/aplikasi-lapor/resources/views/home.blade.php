@extends('templates/main')

@section('konten')
<div class="konten-home">
    <div class="cari">
        <form action="">
            <input type="text" placeholder="" name="search" id="placeholder-cari">
            <button type="submit" id="btn-cari"><i class="fa fa-search" id="icon-cari"></i>Cari</button>
        </form>
    </div>
    <div id="home-p1">
        <p><a href="/buat_laporan">Buat Laporan/Komentar</a><i class="fa fa-plus-square"></i></p>
    </div>
    <div>
        <p id="home-p2">Laporan/Komentar Terakhir</p>
    </div>
    <div class="list-laporan">
        @foreach ($laporans as $laporan)
        <div class="konten-list-laporan">
            <div class="isi-laporan">
                <p>{{ $laporan->isi }}</p>
            </div>
            <div class="info-laporan">
                <div class="info-lampiran">
                    <p>{{ $laporan->lampiran }}</p>
                </div>
                <div class="info-lainnya">
                    <ul>
                        <li>Waktu : {{ $laporan->created_at }}</li>
                        <li><button id="btn-edit"><a href="">Edit</a></button></li>
                        <li><button id="btn-hapus"><a href="">Hapus</a></button></li>
                        <li><a href="/detailLaporan/{{ $laporan->id }}"><button id="btn-detail">Lihat Selengkapnya</button></a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection