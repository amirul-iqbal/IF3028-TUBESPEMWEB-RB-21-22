<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url'); ?>/assets/css/detail.css"media="all"/>
<div class="Header">
	<div class="container">
		<div class="row">
			<div class="col-1">
				<h2>LAPORIN YUK</h2>
				<h3>Layanan Aspirasi dan Pengaduan Online Rakyat</h3>
				<p>Sampaikan Laporan Anda</p>
			</div>
			<div class="col-2">
				<img
				src="<?php echo $this->config->item('base_url'); ?>/assets/img/logo.png"
				alt="Logo Report"
				/>
			</div>
		</div>
	</div>
	<a id="link-back" href="<?=base_url('home')?>"> << Back to home</a>
</div>
<!-- Akhir HEADER -->
<div class="container-detail">
	<div class="judul-container">
		<h1><?=$detail['judul'];?></h1>
	</div>
	<div class="ket-laporan-container">
		<h3>Oleh : <?=$detail['username'];?></h3>
		<h3>Tipe : <?=$detail['aspek'];?></h3>
		<h3>Waktu : <?=$detail['waktu'];?></h3>
	</div>
	<div class="laporan-container">
		<?php foreach($isi as $is):?>
			<p><?=$is;?></p>
		<?php endforeach;?>
	</div>
	<p style="text-align: center; font-size: 30px"><strong>LAMPIRAN</strong></p>
	<?php if($ekstensi == 'pdf'):?>
		<iframe id="lampiran" src="<?=base_url('assets/lampiran/').$detail['lampiran'];?>" width="80%" height="400px"></iframe>
	<?php elseif ($ekstensi == 'doc' || $ekstensi == 'docx' || $ekstensi == 'xls' || $ekstensi == 'xlsx' || $ekstensi == 'ppt' || $ekstensi == 'pptx'):?>
		<a href="<?=base_url('assets/lampiran/').$detail['lampiran'];?>" style="text-align: center;" download><?=$detail['lampiran'];?></a>
	<?php else:?>
		<div class="gambar-container">
			<img src="<?=base_url('assets/lampiran/').$detail['lampiran'];?>" alt="Gambar lampiran"/>
		</div>
	<?php endif;?>
	<?php if($detail['username']==$this->session->userdata('username')):?>
		<div class="button-container">
			<button type="submit" id="hapus" onclick="confirmDelete()">
				<p>Hapus</p>
			</button>
			<button type="submit" id="edit" onclick="window.location='<?=base_url('laporan/edit/').$detail['id_lapor'];?>'">
				<p>Edit</p>
			</button>
		</div>
	<?php endif;?>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffd05b" fill-opacity="1" d="M0,32L17.1,58.7C34.3,85,69,139,103,165.3C137.1,192,171,192,206,192C240,192,274,192,309,181.3C342.9,171,377,149,411,138.7C445.7,128,480,128,514,154.7C548.6,181,583,235,617,224C651.4,213,686,139,720,133.3C754.3,128,789,192,823,202.7C857.1,213,891,171,926,160C960,149,994,171,1029,154.7C1062.9,139,1097,85,1131,80C1165.7,75,1200,117,1234,138.7C1268.6,160,1303,160,1337,144C1371.4,128,1406,96,1423,80L1440,64L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z"></path></svg>
</div>

<script type="text/javascript">
	function confirmDelete(){
		let text = "Anda yakin ingin menghapus laporan ini?";
		  if (confirm(text) == true) {
		    location.href="<?=base_url('home/delete/').$detail['id_lapor'];?>";
		  } else {
		    return false;
		  }
	}
</script>
