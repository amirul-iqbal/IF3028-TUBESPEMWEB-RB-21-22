<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman home</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="/">| Home |</a></li>
                <li><a href="/buat_laporan">Buat Laporan |</a></li>
            </ul>
        </nav>
    </div>
    <div id="head">
        <h1>SIMPLE LAPOR!</h1>
    </div>
    <div class="konten">
        @yield('konten')
    </div>
</body>

</html>