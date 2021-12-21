<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url'); ?>/assets/css/home.css"media="all"/>
<div class="Header">
	<div class="container">
		<div class="row">
			<div class="col-1">
				<h2>LAPORIN YUK</h2>
				<h3>Layanan Aspirasi dan Pengaduan Online Rakyat</h3>
				<p>Sampaikan Laporan Anda</p>
				<button type="button" onclick="window.location='<?=base_url('buatlaporan');?>'">Lapor !</button>
				<!-- Search box -->
				<div class="box">
					<input type="text" id="search" name="search" />
					<button type="submit" onclick="search()"><img src="<?=base_url('assets/img/search.png');?>" class="searchImg"></button>
				</div>
				<!-- Akhir Search box -->
			</div>
			<div class="col-2">
				<img  src="<?php echo $this->config->item('base_url'); ?>/assets/img/logo.png" alt="Logo Report" />
			</div>
		</div>
	</div>
</div>
<!-- Akhir HEADER -->

<!-- Komentar Box -->
<div class="komentar-body">
	<h3 id="header">Laporan Terakhir</h3>
</div>
<div id="session">
	<?php foreach($lapor as $lp):?>
		<div class="komentar-body">
			<div class="laporan-box-container">
				<div class="laporan-text">
					<h4><?=$lp['judul'];?></h4>
					<p class=ket-waktu>Waktu : <?=$lp['waktu'];?></p>
					<p class=ket-waktu>Aspek : <?=$lp['aspek'];?></p>
					<p><?=$lp['isi'];?></p>
				</div>
				<div class="selengkapnya-container">
					<div class="row-1">
						<a href="<?=base_url('assets/lampiran/').$lp['lampiran'];?>" download>Lampiran: <?=$lp['lampiran'];?></a>
					</div>
					<div class="row-2">
						<a href="<?=base_url('home/detail/').$lp['id_lapor'];?>">Lihat Selengkapnya</a>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach;?>
<div class="next-back-page-container">
	<button type="button">Next !</button>
	<button type="button">Back !</button>
</div>
</div>


<script type="text/javascript">
	function search(){
		var dataSearch = document.getElementById('search').value
		const xhttp = new XMLHttpRequest();
	  	xhttp.onload = function() {
	  		document.getElementById('header').innerHTML = 'Menampilkan hasil dari "' + dataSearch + '".';
	    	document.getElementById("session").innerHTML = this.responseText;
	  	}
	  	xhttp.open("GET", "<?=base_url('home/load_data');?>?key="+dataSearch,true);
	  	xhttp.send();
	}
</script>