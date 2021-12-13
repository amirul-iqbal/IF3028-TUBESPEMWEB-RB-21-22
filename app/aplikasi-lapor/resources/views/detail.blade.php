@extends('templates/main')

@section('konten')
<div class="konten-detail">
    <div id="detail-p1">
        <p><a href="/buat_laporan">Buat Laporan/Komentar</a><i class="fa fa-plus-square"></i></p>
    </div>
    <div class="laporan">
        <div class="konten-laporan">
            <div class="isi-detail-laporan">
                <p>{{ $laporan["isi"] }}</p>
            </div>
            <div class="info-detail-laporan">
                <div class="info-detail-lampiran">
                    <p>{{ $laporan["lampiran"] }}</p>
                </div>
                <div class="info-detail-lainnya">
                    <ul>
                        <li>Waktu : {{ $laporan["created_at"] }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection