<body>
    <header>
        <p>
            <link rel="stylesheet" href="<?= base_url('assets/style/detail.css'); ?>">
        </p>
    </header>

    <div class="container" id="container">
		<fieldset>	
			<div class="content" id="content">
				<div class="header" id="header">
					<h1>SIMPLE LAPOR!</h1><br>	
				</div> 
				<p>Detail Laporan/Komentar	</p>
				<hr>
				<p class="isi-lapor" id="isi-lapor">
					<?php 
					echo "";
					?>
				</p>
				<p>Lampiran: </p>
				<?php
				
				echo "";
				?>
				
				<p>
					Waktu: <?php echo $value["tanggal"]; ?> &emsp;
					Aspek: <?php echo ""; ?>
					
				
					 <a href="<?php echo base_url('')?>" class="hapus" id="hapus">Hapus Laporan/Komentar</a>
					
				</p>

				
			    <hr>
			</div>
		</fieldset>
	</div>
    <script src="<?= base_url('assets/script/main.js'); ?>"></script>
</body>