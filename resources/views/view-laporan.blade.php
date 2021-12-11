<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="/css/style-view.css">
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
                        <img src="{{ url('/lampiran/'. $report->lampiran) }}" width="200px" height="200px">
                    @else
                        <a href="/lampiran/{{ $report->lampiran }}"> {{ $report->lampiran }}</a>
                    @endif
                    
                </div>

                <div class="info">
                    <div class="combine">
                        <label class="time">Waktu : {{ $report->submited_at }}</label>
                        <label class="aspek">Aspek : {{ $report->aspek }}</label>
                    </div>
                    <div class="delete">
                        <a href="/edit/{{ $report->id }}">Edit Laporan/Komentar</a>
                        <br>
                        <a href="/delete/{{ $report->id }}">Hapus Laporan/Komentar <img src="/images/button.png" width="13px" height="13px"></a>
                    </div>
                </div>

                <hr>

            </main>
        </div>
        <footer>
          
        </footer>
    </body>
</html>
