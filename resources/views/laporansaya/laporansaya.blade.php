@extends('layout.main')

@section('container')
  <div class="tambahLaporan"><a href="/laporansaya/create" class="tombolTambahLaporan">Tambah Laporan Baru</a></div>
  @if(session()->has('success'))
  <p>{{ session('success') }}</p>
  @endif
	<div class="scroll" >
  <table>
    <tr>
      <th>No.</th>
      <th>Isi Laporan</th>
      <th>Aspek</th>
      <th>Aksi</th>
      
    </tr>
    @foreach($daftarLaporan as $laporan)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td> {{ $laporan->isi_laporan }} </td>
      <td>{{ $laporan->aspek->aspek_laporan }}</td>
      <td>
        <div class="tombolCrud">
        	<a href="/laporansaya/{{ $laporan->slug }}" class="detailLaporan">Detail</a>
          <a href="/laporansaya/{{ $laporan->slug }}/edit" class="editLaporan">Edit</a>
          <form action="/laporansaya/{{ $laporan->slug }}" method="POST">
            @method('delete')
            @csrf
            <button class="deleteLaporan">Delete</button>  
          </form>
        </div>
      </td>
    </tr>
    @endforeach
    
  </table>
</div>
	

@endsection		