@extends('templates/main')

@section('konten')
<div class="konten-buat-laporan">
    <p>Edit Laporan/Komentar</p>
    <form action="/edit_laporan" method="post" id="form" enctype="multipart/form-data">
        @csrf
        <div class="inputan">
            <div class="input-nama">
                <label for="pelapor" required>Masukkan Nama</label>
                <input type="text" name="pelapor" id="pelapor" value="{{ old('pelapor', $laporan->pelapor) }}">
            </div>
            <div class="input-judul">
                <label for="judul" required>Masukkan Judul</label>
                <input type="text" name="judul" id="judul" value="{{ $laporan->judul }}">
            </div>
        </div>
        <div id="textarea">
            <textarea name="isi" id="isi" cols="110" rows="10" required minleght="20">{{ $laporan->isi }}</textarea>
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
            <label for="lampiran">Masukkan File Lampiran</label><br>
            <input type="file" id="lampiran" name="lampiran" value= "{{ $laporan->lampiran }}" accept=".doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, image/*" required/>
        </div>
        <div class="btn-buat-laporan">
            <button type="submit" id="btn-buat-laporan">Edit LAPOR!</button>
        </div>
    </form>
</div>
@endsection