<ul>
    <hr>

    <?php foreach ($laporan as $value) { ?>

        <li>
            <p><?php echo substr($value['isi'], 0, 150) ?> ....</p>

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

</ul>