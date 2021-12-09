@extends('templates/main')

@section('konten')
<div class="konten-home">
    <div class="list-laporan">
        <div class="cari">
            <form action="">
                <input type="text" placeholder="" name="search" id="placeholder-cari">
                <button type="submit" id="btn-cari"><i class="fa fa-search" id="icon-cari"></i>Cari</button>
            </form>
        </div>
        <div>
            <p><a href="/buat_laporan">Buat Laporan/Komentar</a><i class="fa fa-plus-square"></i></p>
        </div>

        <div class="laporan">

        </div>
    </div>
</div>
@endsection