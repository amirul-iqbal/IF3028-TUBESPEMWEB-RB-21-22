@extends('layout.main')

@section('container')
	<a href="/laporansaya">Kembali</a>
	<a href="/laporansaya/{{ $laporan->slug }}/edit">Edit</a>
	<form action="/laporansaya/{{ $laporan->slug }}" method="POST">
        @method('delete')
        @csrf
        <button>Delete</button>  
    </form>
	<p>{{ $laporan->isi_laporan }}</p>
	<p>aspek laporan : <a href="/?aspek={{ $laporan->aspek->slug }}">{{ $laporan->aspek->aspek_laporan }}</a> </p>
	@if($laporan->lampiran)
	<iframe src="{{ asset('storage/' . $laporan->lampiran)  }}"></iframe>
	@else
	<p>Lampiran: Tidak ada lampiran </p>
	@endif
	<p>Dibuat Pada : {{ $laporan->created_at->isoFormat('dddd, D MMMM Y') }}</p>
	<p>Diupdate Pada : {{ $laporan->updated_at->diffForHumans() }}</p>	

@endsection		