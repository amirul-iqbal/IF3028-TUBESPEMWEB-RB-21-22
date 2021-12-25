@extends('layout.main')

@section('container')
	<div class="container">
	  <form action="/laporansaya/{{ $laporan->slug }}" method="POST" enctype="multipart/form-data">
	  	@method('put')
	  	@csrf
	    <div class="row">
	      <div class="col-25">
	        <label for="aspek_id">Aspek</label>
	      </div>
	      <div class="col-75">
	        <select id="aspek_id" name="aspek_id">
	          <option value="" selected>.....</option>
	          @foreach ($daftarAspek as $aspek)
	          @if( old('aspek_id', $laporan->aspek_id) == $aspek->id )
	          <option value="{{ $aspek->id }}" selected>{{ $aspek->aspek_laporan }}</option>
	          @else
	          <option value="{{ $aspek->id }}">{{ $aspek->aspek_laporan }}</option>
	          @endif
	          @endforeach
	        </select>
	        @error('aspek_id')
		    <div>
		      {{ $message }}
		      <br>
		    </div>
		    @enderror
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-25">
	        <label for="isi_laporan">Isi Laporan</label>
	      </div>
	      <div class="col-75">
	        <textarea id="isi_laporan" name="isi_laporan" placeholder="Write something.." style="height:200px" > {{old('isi_laporan', $laporan->isi_laporan) }}</textarea>
	      </div>
	      @error('isi_laporan')
		    <div>
		      {{ $message }}
		      <br>
		    </div>
		  @enderror
	    </div>

	    <div class="row">
	      <div class="col-25">
	        <label for="lampiran">Lampiran</label>
	      </div>
	      <div class="col-75" id="containerLampiran">
	      	<input type="hidden" name="lampiranLama" value="{{ $laporan->lampiran }}">
	      	@if($laporan->lampiran)
	      	<iframe src="{{ asset('storage/' . $laporan->lampiran)  }}"></iframe>
	      	@endif
	        <input type="file" id="lampiran" name="lampiran" onchange="preview()">
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-25">
	        <label for="slug">Slug</label>
	      </div>
	      <div class="col-75">
	        <input type="text" id="slug" name="slug" value="{{old('slug', $laporan->slug) }}">
	      </div>
	      @error('slug')
		    <div>
		      {{ $message }}
		      <br>
		    </div>
		  @enderror
	    </div>

	    <div class="row">
	      <input type="submit" value="Submit">
	    </div>
	  </form>

	</div>

	<script>
		const isi = document.querySelector('#isi_laporan'); 
		const slug = document.querySelector('#slug'); 

		isi.addEventListener('change', function(){
			fetch('/laporansaya/checkSlug?isi_laporan=' + isi.value)
			.then(response => response.json())
			.then(data => slug.value = data.slug)
		})

		function preview() {

			const lampiran = document.getElementById('containerLampiran');
			const dataLampiran = lampiran.querySelector('#lampiran'); 
			const condition = lampiran.querySelector('iframe'); 
			
			if (condition) {
				condition.remove(); 
			}		
			const preview = document.createElement('iframe');
			
			preview.style.display = 'block'; 
			lampiran.prepend(preview);

			const oFReader = new FileReader();
			oFReader.readAsDataURL(dataLampiran.files[0]);

			oFReader.onload = function(oFREvent) {
				preview.src = oFREvent.target.result;
			}
		}
	</script>

@endsection		