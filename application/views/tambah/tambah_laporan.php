<body>
    <link rel="stylesheet" href="<?= base_url('assets/style/tambah.css'); ?>">

    <div class="container card">
        <b>
            <h1>TAMBAH LAPORAN</h1>
        </b>
        <p>Buat laporan/Komentar</p>
        <hr>
        <form id="form" method="POST">
        </form>
        <?php
        if (validation_errors()) :
            echo validation_errors();
        endif;

        echo form_open_multipart('index.php/Home/tambah');
        ?>
        <textarea class="isi_laporan" name="isi_laporan" placeholder="Laporan/Komentar"></textarea>
        <br>
        <select name="aspek_laporan" id="aspek">
            <option value="Pilih Aspek Pelaporan/Komentar">Pilih Aspek Pelaporan/Komentar</option>
            <option value="dosen">Dosen</option>
            <option value="staff">Staff</option>
            <option value="mahasiswa">Mahasiswa</option>
            <option value="infrastruktur">Infrastruktur</option>
            <option value="pengajaran">Pengajaran</option>
        </select>
        <br>
        <input class="file" name="File" type="file" id="file">
        <input type="submit" id="submit" value="Buat LAPOR!">
        <br>
        <div style="clear: both;"></div>
        <?php
        echo form_close();
        ?>

    </div>
</body>