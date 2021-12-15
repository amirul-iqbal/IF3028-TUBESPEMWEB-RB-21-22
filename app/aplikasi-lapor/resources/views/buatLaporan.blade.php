@extends('templates/main')

@section('konten')
<div class="konten-buat-laporan">
    <p>Buat Laporan/Komentar</p>
    <form action="" method="post" id="form">
        <div class="inputan">
            <div class="input-nama">
                <label for="input_nama">Masukkan Nama</label>
                <input type="text" name="input_nama">
            </div>
            <div class="input-judul">
                <label for="input_judul">Masukkan Judul</label>
                <input type="text" name="input_judul">
            </div>
        </div>
        <div id="textarea">
            <textarea name="laporan" id="input-laporan" cols="110" rows="10"></textarea>
            <label for="laporan" class="label-laporan" id="label-laporan">
                <span>Laporan/Komentar</span>
            </label>
        </div>
        <div class="select">
            <select name="option" id="aspek">
                <option value="" disabled selected>Pilih Aspek Pelaporan/Komentar</option>
                <option value="dosen">Dosen</option>
                <option value="staff">Staff</option>
                <option value="mahasiswa">Mahasiswa</option>
                <option value="infrastruktur">Infrastruktur</option>
                <option value="pengajaran">Pengajaran</option>
            </select>
        </div>
        <div class="btn-pilih-file">
            <input type="file" accept="image/*" />
        </div>
        <div class="btn-buat-laporan">
            <button type="submit" id="btn-buat-laporan">Buat LAPOR!</button>
        </div>
    </form>
</div>
@endsection