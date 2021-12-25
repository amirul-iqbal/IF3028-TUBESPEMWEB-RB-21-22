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
				<p>Detail Laporan/Komentar </p>
				<hr>

				<p class="isi-lapor" id="isi-lapor">
					<?php echo $laporan["isi"]; ?>
				</p>
				<p>Lampiran:
					<span>
						<?php
						$nama = $laporan['file'];
						echo "<br>";

						$last4 = count(str_split($nama)) - 4;
						$tipe = substr($nama, $last4);

						if ($tipe == ".pdf") {
						?>

							<b>
								<?php
								echo $laporan['file'];
								?>
							</b>

						<?php
						} else { ?>
							<img width="331" height="331" src="<?= base_url('assets/files/') . $laporan["file"]; ?>
																" alt="<?php $laporan['file']; ?>">
						<?php } ?>
					</span>
				</p>

				<p>
					Waktu: <?php echo $laporan["tanggal"]; ?> &emsp;
					Aspek: <?php echo $laporan["aspek"];; ?>

					<a href="<?php echo base_url() ?>index.php/Home/hapus/<?php echo $laporan['id'] ?>" class="hapus" id="hapus" onclick="return confirm('Anda yakin ingin menghapus Laporan ini ?');"> Hapus Laporan/Komentar</a>
					<a href="<?php echo base_url() ?>index.php/Home/edit/<?php echo $laporan['id'] ?>" class="edit" id="edit">Edit |</a>

				</p>


				<hr>
			</div>
		</fieldset>
	</div>
	<script src="<?= base_url('assets/script/main.js'); ?>"></script>
</body>