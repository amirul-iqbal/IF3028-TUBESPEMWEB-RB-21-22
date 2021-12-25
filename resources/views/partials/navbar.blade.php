<div class="navbar">
    <a href="/" class="{{ Request::is('/') ? 'aktif' : '' }}">Home</a>
    <div class="dropdown ">
        <button class="dropbtn">Aspek</button>
        <div class="dropdown-content">
            @foreach ($daftarAspek as $aspek)
            <a href="/?aspek={{ $aspek->slug }}">{{ $aspek->aspek_laporan }}</a>
            @endforeach
        </div>
    </div>
    @auth
    <a class="right">
        <form action="/logout" method="POST">
            @csrf
            <button class="btnout" type="submit">Logout</button>
        </form>
    </a>
    <a href="/laporansaya" class="right">Laporan Saya</a>
    <a class="right">Halo, {{ auth()->user()->name }}</a>
    @else
    <a href="/login" class="right">Login</a>
    <a href="/register" class="right">Register</a>
    @endauth

</div>