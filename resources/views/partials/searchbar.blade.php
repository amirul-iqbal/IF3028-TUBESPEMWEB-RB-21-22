<form class="example" action="/">
	@if (request('aspek'))
	<input type="hidden" name="aspek" value="{{ request('aspek') }}">
	@endif
	@if (request('user'))
	<input type="hidden" name="user" value="{{ request('user') }}">
	@endif
	<input type="text" placeholder="Cari...." name="cari" value="{{ request('cari') }}">
	<button type="submit">Cari</button>
</form>