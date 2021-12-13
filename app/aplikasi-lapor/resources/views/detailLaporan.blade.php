@extends('templates/main')

@section('konten')
<div class="konten-detail">
    <div id="home-p1">
        <p><a href="/buat_laporan">Buat Laporan/Komentar</a><i class="fa fa-plus-square"></i></p>
    </div>
    <div class="laporan">
        <div class="konten-laporan">
            <div class="isi-laporan-detail">
                <p>{{ $laporan->isi }}</p>
            </div>
            <div class="info-laporan-detail">
                <div class="info-lampiran-detail">
                    <p>{{ $laporan->lampiran }}</p>
                </div>
                <div class="info-lainnya-detail">
                    <ul>
                        <li>Waktu : {{ $laporan->created_at }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection