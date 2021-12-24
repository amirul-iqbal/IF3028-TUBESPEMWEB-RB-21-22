<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="/css/style-view.css">
        <script src="/js/hapus.js"></script>
        <title>Lapor</title>
    </head>
    <body>
        <div class="cover">
            <header>
                <img src="/images/logo.png">
            </header>
            <main>
                <h3>Detail Laporan/Komentar</h3>
                <hr>

                <div class="detail">
                    <p>{{ $report->body }}</p>
                </div>

                <div class="lampiran">
                    <p>Lampiran : </p>
                    @if ($report->extensi == 'png' or $report->extensi == 'jpg' or $report->extensi == 'jpeg' )
                        <img src="{{ url('/lampiran/'. $report->lampiran) }}" width="300px" height="300px">
                    @else
                        <a href="/lampiran/{{ $report->lampiran }}"> {{ $report->lampiran }}</a>
                    @endif
                    
                </div>

                <div class="info">
                    <div class="combine">
                        <label class="time">Waktu : {{ $report->submited_at }}</label>
                        <label class="aspek">Aspek : {{ $report->aspek }}</label>
                    </div>
                    <div class="action">
                        <div class="edit">
                            <a href="/edit/{{ $report->id }}">Edit</a>
                        </div>
                        <div class="hapus">
                            <a href="/delete/{{ $report->id }}" id="hapus">Hapus</a>
                        </div>
                    </div>
                </div>

                <hr>

                <footer>
                    <p class="copy-right">©Copyright Tugas Besar Pemrograman Web 2021 ~ RB</p>
                    <div class="profile">
                        <div class="name-groub">
                            <label>Made by:</label>
                            <table>
                                <tr>
                                    <td>Ahmad Syafarudin</td>
                                    <td>119140044</td>
                                </tr>
                                <tr>
                                    <td>Dodi Devrian Andrianto</td>
                                    <td>119140023</td>
                                </tr>
                                <tr>
                                    <td>Tri Aji Bagaskara</td>
                                    <td>119140214</td>
                                </tr>
                            </table>
                        </div>

                        <div class="logo-footer">
                            <img src="/images/logo-itera.jpg" width="150px" height="182px">
                        </div>
                    </div>
                </footer>

            </main>
        </div>
        <footer>
          
        </footer>
    </body>
</html>
