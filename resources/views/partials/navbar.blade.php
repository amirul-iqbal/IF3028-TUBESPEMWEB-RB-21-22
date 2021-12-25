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
    <a>Halo, {{ auth()->user()->name }}</a>
    <a href="/laporansaya">Laporan Saya</a>
    <a>
        <form action="/logout" method="POST">
            @csrf
            <button class="btnout" type="submit">Logout</button>
        </form>
    </a>
    @else
    <a href="/login">Login</a>
    <a href="/register">Register</a>
    @endauth

</div>