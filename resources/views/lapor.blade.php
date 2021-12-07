<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style-form.css">
        <title>Lapor</title>
    </head>
    <body>
        <div class="cover">
            <header>
                <img src="images/logo.png">
            </header>
            <main>
                <h3>Buat Laporan/Komentar Baru</h3>
                <hr>
                <form>
                    <div class="lapor">
                        <textarea name="laporan" placeholder="Masukkan Laporan/Komentar Anda"></textarea>
                    </div>
                    <div class="aspek">
                        <select required>
                            <option value="" disabled selected>Pilih Aspek Pelaporan/Komentar</option>
                            <option value="aspek1">Aspek 1</option>
                            <option value="aspek2">Aspek 2</option>
                            <option value="aspek3">Aspek 3</option>
                            <option value="aspek4">Aspek 4</option>
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
