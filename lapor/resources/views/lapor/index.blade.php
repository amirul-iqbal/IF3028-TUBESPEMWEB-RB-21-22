@extends('template')
 
@section('content')
    <div id="header">
        <h1>SIMPLE LAPOR!</h1>
    </div>
    <div>
        <form id="search" action="" method="get">
            <input type="text" name="query" class="textbox" placeholder="Masukan Keyword">
            <button type="submit" class="button">Cari</button>
        </form>
    </div>
    <div id="buat">
        <a id="Btn_buat" href="{{ route('laporan.create') }}">
            Buat Laporan/Komentar +
        </a>
    </div>
    <div id="list">
        <div class="judulKecil">Laporan/Komentar Terakhir</div>
        <br>
        @foreach($laporan as $data)
            {{$data->isi_laporan}}
            <br>
            <div class="card-bottom">
                <div class="cb-left">
                Lampiran :
                <br>
                <img src="{{ $data->lampiran }}" class="gambar" alt="Gambar">
                </div>
                <p class="waktu">Waktu : {{$data->tgl_kejadian}}</p>
                <div class="detail">
                    <a class="Btn_detail" href="{{ route('laporan.show',$data) }}">Lihat Selengkapnya></a>
                </div>
            </div>
        @endforeach
    </div>
@endsection