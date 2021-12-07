<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>Lapor</title>
    </head>
    <body>
        <div class="cover">
            <header>
                <img src="images/logo.png">
            </header>
            <main>
                <div class="cari">
                    <input type="text" name="cari">
                    <input type="submit" value="Cari">
                </div>
                <div class="add">
                    <label>Tambah Laporan/Komentar</label>
                    <a href="lapor.blade.php"><img src="images/add.png" width="13px" height="13px"></a>
                </div>

                <h4>Laporan/Komentar Terakhir</h4>

                <div class="recent"><!-- Ini ntar pake perulangan yaa, ini cuma dummynya -->
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                    <div class="lampiran"><!-- Gambar ini cuma dummy yaak, ntar di import dari data base phpnya -->
                        <img src="images/alt-images.jpg" width="100px" height="100px">
                        <div class="info">
                            <p class="time">Waktu : (Value)</p>
                            <a href="view-laporan.blade.php">Lihat Selengkapnya &emsp; <strong>></strong></a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <footer>
            
        </footer>
    </body>
</html>
