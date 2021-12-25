@extends('layout.main')

@section('container')
	<p>Pelapor : <a href="/pelapor/{{ $laporan->user->username }}">{{ $laporan->user->name }}</a></p>	
	<p>{{ $laporan->isi_laporan }}</p>
	<p>aspek laporan : <a href="/aspek/{{ $laporan->aspek->slug }}">{{ $laporan->aspek->aspek_laporan }}</a> </p>
	<p>{{ $laporan->lampiran }}</p>
	<p>Dibuat Pada : {{ $laporan->created_at->isoFormat('dddd, D MMMM Y') }}</p>
	<p>Diupdate Pada : {{ $laporan->updated_at->diffForHumans() }}</p>	

@endsection		