@extends('layout.main')

@section('container')
	<p>Pelapor : <a href="/?user={{ $laporan->user->username }}">{{ $laporan->user->name }}</a></p>	
	<p>{{ $laporan->isi_laporan }}</p>
	<p>aspek laporan : <a href="/?aspek={{ $laporan->aspek->slug }}">{{ $laporan->aspek->aspek_laporan }}</a> </p>
	@if($laporan->lampiran)
	<iframe src="{{ asset('storage/' . $laporan->lampiran)  }}"></iframe>
	@else
	<p>Lampiran: Tidak ada lampiran </p>
	@endif
	<p>Dibuat Pada : {{ $laporan->created_at->isoFormat('dddd, D MMMM Y') }}</p>
	<p>Diupdate Pada : {{ $laporan->updated_at->diffForHumans() }}</p>
	<a href="javascript:history.back()">kembali</a>	

@endsection		