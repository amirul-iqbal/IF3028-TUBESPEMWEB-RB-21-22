<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="/css/style-form.css">
        <title>Lapor</title>
    </head>
    <body>
        <div class="cover">
            <header>
                <img src="/images/logo.png">
            </header>
            <main>
                <h3>Buat Laporan/Komentar Baru</h3>
                <hr>
                <form action="/update/{{ $report->id }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="lapor">
                        <textarea name="laporan" placeholder="Masukkan Laporan/Komentar Anda"> {{ $report->body }}</textarea>
                    </div>
                    <div class="aspek">
                        <select name="aspek" required>
                            <option value="" disabled selected>Pilih Aspek Pelaporan/Komentar</option>
                            <option value="aspek1" {{ $report->aspek == 'aspek1' ? 'selected' : '' }} >Aspek 1</option>
                            <option value="aspek2" {{ $report->aspek == 'aspek2' ? 'selected' : '' }} >Aspek 2</option>
                            <option value="aspek3" {{ $report->aspek == 'aspek3' ? 'selected' : '' }} >Aspek 3</option>
                            <option value="aspek4" {{ $report->aspek == 'aspek4' ? 'selected' : '' }} >Aspek 4</option>
                        </select>
                    </div>

                    <div class="upload">
                        <input type="file" name="lampiran">
                    </div>
                    <div class="submit">
                        <input type="submit" value="Buat LAPOR">
                    </div>
                </form>
                <hr>
            </main>
        </div>
        <footer>
            
        </footer>
    </body>
</html>
