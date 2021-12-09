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

    <div class="list-laporan">
        <p id="home-p2">Laporan/Komentar Terakhir</p>
        <div class="konten-list-laporan">
            <div class="isi-laporan">
                <p>isi laporan</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae sequi asperiores inventore nam, incidunt voluptatem repudiandae impedit, obcaecati soluta quaerat voluptate. Fugiat alias maiores quaerat laborum error tempora eius atque.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis libero perspiciatis totam similique animi! Porro necessitatibus corporis minima obcaecati id doloremque molestias pariatur eligendi, non sed! Inventore pariatur sint adipisci earum cupiditate consequuntur illum facilis repellendus, facere fugit, ratione delectus illo, quis perspiciatis deleniti debitis mollitia. Facilis similique placeat odio?</p>
            </div>
            <div class="info-laporan">
                <div class="info-lampiran">
                    <p>Info lampiran</p>
                </div>
                <div class="info-lainnya">
                    <ul>
                        <li>Waktu</li>
                        <li><a href="#">Lihat Selengkapnya <b>></b></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection