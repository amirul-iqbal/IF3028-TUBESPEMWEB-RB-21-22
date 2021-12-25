@extends('template')

@section('content')
    <div id="header">
        <h1>SIMPLE LAPOR!</h1>
    </div>
    <div id="wrapper">
    <div class="judulKecil">Detail Laporan/Komentar</div>
        <br>
        {{$detail->isi}}
        <br>
        Lampiran:
        <br>
        <img src="{{ $detail->file }}" class="gambar" alt="Gambar">
        <div class="flex-container">
        <div class="sebaris">
            Waktu: {{$detail->tanggal}}
            </div>
            <div class="sebaris">
            Aspek: {{$detail->nama_aspek}}
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

@endsection
