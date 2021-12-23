@extends('template')
 
@section('content')
    <div id="header">
        <h1>SIMPEL LAPOR!</h1>
    </div>
    <div>
        <form id="search" action="" method="get">
            <input type="text" name="query" class="textbox" placeholder="Masukan Keyword">
            <button type="submit" class="button">Cari</button>
        </form>
    </div>
    <div id="buat">
        <a id="Btn_buat" href="#">
            Buat Laporan/Komentar +
        </a>
    </div>
    <div id="list">
        <div class="judulKecil">Laporan/Komentar Terakhir</div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae vero facere iste esse rerum accusantium, quod nobis earum quasi quis dignissimos qui quaerat molestias adipisci laudantium temporibus autem tempore? Sint?</p>
        <br>
            <br>
            <div class="card-bottom">
                <div class="cb-left">
                Lampiran :
                <br>
                <img src="" class="gambar" alt="Gambar">
                </div>
                <p class="waktu">Waktu : 20-11-2019 20:00</p>
                <div class="detail">
                    <a class="Btn_detail" href="#">Lihat Selengkapnya</a>
                </div>
            </div>
    </div>
@endsection