@extends('templates/main')

@section('konten')
<div class="konten-buat-laporan">
    <p>Buat Laporan/Komentar</p>
    <form action="/buat_laporan" method="post" id="form">
        @csrf
        <div class="inputan">
            <div class="input-nama">
                <label for="pelapor" required>Masukkan Nama</label>
                <input type="text" name="pelapor" id="pelapor">
            </div>
            <div class="input-judul">
                <label for="judul" required>Masukkan Judul</label>
                <input type="text" name="judul" id="judul">
            </div>
        </div>
        <div id="textarea">
            <textarea name="isi" id="isi" cols="110" rows="10" required minleght="20"></textarea>
            <label for="laporan" class="label-laporan" id="label-laporan">
                <span>Laporan/Komentar</span>
            </label>
        </div>
        <div class="select">
            <label for="aspek_id">Pilih Aspek Pelaporan/Komentar</label>
            <select name="aspek_id" id="aspek">
                @foreach ( $aspeks as $aspek)
                <option value="{{ $aspek->id }}"> {{ $aspek->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="btn-pilih-file">
            <input type="file" name="lampiran" accept=".doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf" required/>
        </div>
        <div class="btn-buat-laporan">
            <button type="submit" id="btn-buat-laporan">Buat LAPOR!</button>
        </div>
    </form>
</div>
@endsection