@extends('layout.main')

@section('container')
  <a href="/laporansaya/create">Tambah Laporan Baru</a>
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
      	<a href="/laporansaya/{{ $laporan->slug }}">Detail</a>
        <a href="/laporansaya/{{ $laporan->slug }}/edit">Edit</a>
        <form action="/laporansaya/{{ $laporan->slug }}" method="POST">
          @method('delete')
          @csrf
          <button>Delete</button>  
        </form>
        
      </td>
    </tr>
    @endforeach
    
  </table>
</div>
	

@endsection		