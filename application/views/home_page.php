<?php $laporin = array("0", "1");
// $laporan = array("100", "200");
?>

<body>
    <header>
        <p>
            <link rel="stylesheet" href="<?= base_url('assets/style/main.css'); ?>">
        </p>
    </header>

    <div class="container">
        <div class="judul">
            <h1>
                Simple Lapor !
            </h1>
        </div>
        <form action="" method="post">
            <input type="text" id="search" name="search" placeholder="Cari disini" autocomplete="off">
        </form>
        <div class="text-center" style="margin-bottom: 50px;">
            <a class="buat" href="<?= base_url('home/buat') ?>">Buat Laporan/Komentar &plus; </a>
        </div>

        <!-- List View untuk daftar laporan -->
        <div class="content" id="content">
            <ul>
                <!-- akan ditambah perulangan untuk menampilkan list -->
                <?php foreach ($laporan as $value) { ?>
                    <!-- code... -->
                    <li>
                        <p><?php echo $value['isi'] ?></p>
                        <!-- 

                        <p class="lampiran">
                            Lampiran :
                            
                        </p>
                        <a href="#">
                            <div class="lengkap">
                                Selengkapnya
                            </div>
                        </a>
                        <p class="waktu">waktu : </p>
 -->
                        <p class="lampiran">Lampiran :
                            <span style="font-weight: bold;">
                                <?php echo $value['file'] ?>
                            </span>
                        </p>
                        <a href="<?php echo base_url() ?>index.php/Home/detail/<?php echo $value["id"] ?>">
                            <h4 class="lengkap">Selengkapnya >>></h4>
                        </a>
                        <h4 class="waktu" style="">Waktu : <?php echo $value["tanggal"]; ?></h4>
                        <div style="clear: both"></div>
                        <hr>
                    </li>
                <?php } ?>
                <!-- akan ditambah perulangan untuk menampilkan list -->
            </ul>
        </div>
    </div>
    <!-- List View untuk daftar laporan -->

    <input id="url" value="<?= base_url() ?>index.php/Home/detail" hidden>
    <script src="<?= base_url('assets/script/main.js'); ?>"></script>
</body>