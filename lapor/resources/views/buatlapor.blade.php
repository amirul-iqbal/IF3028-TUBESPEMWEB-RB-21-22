<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="buatlapor.css">
    <title>Buat Laporan</title>
</head>
<body>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
        <h1>SIMPLE LAPOR!</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <p>Buat Laporan/Komentar</p>
            <hr>
        </div>
       
    </div>
    <form  action="buatlapor.blade.php" method="post">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <textarea name="isi_laporan"  cols="25" rows="10" placeholder="Laporan/Komentar" value="<?php echo $isi_laporan;?>"></textarea> <br>
                <select name="tipe_laporan"  class="classic" value="<?php echo $tipe_laporan;?>"> 
                    <option value="">Pilih Aspek Pelaporan/Komentar</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                    <option value="Pengajar">Pengajar</option>
                </select> <br>

                <div class="button-wrap">
                    <input name="lampiran" id="upload" type="file" >
                    <label class="new-button" for="upload" value="<?php echo $lampiran;?>"> Choose File
                </div>

            </div>
            <div class="col-1"></div>
        </div>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 right">
                <button type="submit" class="btn-submit" name="proses">Buat LAPOR!</button>
            </div>
            <div class="col-1"></div>
        </div>
        
    </form>

    <div class="row garis-bawah">
        <div class="col-1"></div>
        <div class="col-10">
            <hr>
        </div>
        <div class="col-1"></div>
    </div>
</body>
</html>

    <?php
include "koneksi.blade.php";

if (isset ($_POST['proses'])){
  mysqli_query($koneksi," insert into buatlapor set
   tipe_laporan='$_POST[tipe_laporan]',
   isi_laporan='$_POST[isi_laporan]',
   lampiran='$_POST[lampiran]'");

  }
?>
