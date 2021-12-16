<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
		/>
		<!-- Font -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:wght@300&display=swap"
			rel="stylesheet"
		/>
		<title>Detail Laporan</title>
	</head>
	<body>
		<!-- HEADER -->
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
		</div>
		<!-- Akhir HEADER -->
		<div class="container-detail">
			<div class="judul-container">
				
				<h1>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste,
					facilis explicabo earum aut consequuntur rerum neque! Voluptates
					facilis quas consectetur?
				</h1>
			</div>
			<div class="ket-laporan-container">
				<h3>Tipe : (Tipe Laporan)</h3>
				<h3>Waktu : 10 - 10 - 10</h3>
			</div>
			<div class="gambar-container">
				<img
					src="<?php echo $this->config->item('base_url'); ?>/assets/img/lampiran.jpg"
					alt="Gambar lampiran"
				/>
			</div>
			<div class="laporan-container">
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores
					hic esse molestiae rem repellendus facere, illum quia nihil doloremque
					accusamus architecto, eligendi debitis nostrum quaerat ex veritatis
					sed beatae sequi reprehenderit? Accusamus beatae molestias
					consequuntur magnam! Adipisci, necessitatibus quidem aliquam non
					dolorem accusantium corrupti reiciendis quas iure nulla quos eum atque
					molestiae? Aliquid deserunt laudantium deleniti harum sunt corporis
					blanditiis sit quae? Sed, quisquam dolores. Amet doloremque quos
					adipisci? Iure, optio laudantium qui reiciendis porro quo doloremque
					iusto ad debitis, totam aliquid? Necessitatibus facilis numquam
					incidunt, quibusdam quam explicabo sapiente neque omnis nemo in,
					perspiciatis dolore quia soluta ipsum magnam!
				</p>
			</div>
			<div class="button-container">
				<button type="submit">
					<p>Hapus</p>
					<i class="fa fa-trash"></i>
				</button>
			</div>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffd05b" fill-opacity="1" d="M0,32L17.1,58.7C34.3,85,69,139,103,165.3C137.1,192,171,192,206,192C240,192,274,192,309,181.3C342.9,171,377,149,411,138.7C445.7,128,480,128,514,154.7C548.6,181,583,235,617,224C651.4,213,686,139,720,133.3C754.3,128,789,192,823,202.7C857.1,213,891,171,926,160C960,149,994,171,1029,154.7C1062.9,139,1097,85,1131,80C1165.7,75,1200,117,1234,138.7C1268.6,160,1303,160,1337,144C1371.4,128,1406,96,1423,80L1440,64L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z"></path></svg>
		</div>
		
	</body>
	<style>
		* {
			font-family: Roboto;
		}
		body {
			padding: 20rem;
		}
		.container-detail {
			display: flex;
			flex-direction: column;
			background-color: white;
			border: 5px solid;
			border-color: #c4c4c4;
			filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
		}
		.judul-container {
			padding-top: 30px;
			text-align: center;
		}
		.judul-container h1 {
			font-weight: bold;
		}
		button {
			display: flex;
			flex-direction: row;
			float: right;
			padding: 16px;
			margin-top: 8px;
			margin-bottom: 8px;
			margin-right: 16px;
			background-color: #be1600;
			color: white;
			font-weight: bolder;
			font-size: 17px;
			border-color: white;
			cursor: pointer;
			align-items: baseline;
		}
		button > p {
			padding-right: 10px;
		}
		button:hover {
			background: #ffd05b;
		}
		.ket-laporan-container {
			text-align: center;
			color: #b7b7b7;
		}
		.gambar-container img {
			max-width: 50%;
			height: auto;
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		.laporan-container {
			padding: 2rem;
		}
		.laporan-container p {
			font-size: 20px;
			line-height: 1.6;
		}
		.row {
			display: flex;
			justify-content: space-around;
			align-items: center;
			margin: 25px 0;
		}
		.col-1 {
			flex-basis: 40%;
			position: relative;
			margin: 50px;
		}
		.col-1 h2 {
			font-size: 54px;
		}
		.col-1 h3 {
			font-size: 30px;
			color: #707070;
			font-weight: 100;
			margin: 20px 0 10px;
		}
		.col-1 p {
			font-size: 16px;
			color: #b7b7b7;
			font-weight: 100px;
		}
		.col-1::after {
			content: "";
			width: 10px;
			height: 57%;
			background: #ffd05b;
			position: absolute;
			left: -40px;
			top: 8px;
		}
	</style>
</html>
