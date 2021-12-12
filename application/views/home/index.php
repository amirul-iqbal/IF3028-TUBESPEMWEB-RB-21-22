<!DOCTYPE html>
<html lang="en">
	<head>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
		/>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SIMPLE LAPOR</title>
	</head>
	<body>
		<!-- HEADER -->
		<div class="Header">
			<h1>SIMPLE LAPOR!</h1>
		</div>
		<!-- Akhir HEADER -->
		<!-- Search box -->
		<div class="box">
			<form action=""></form>
			<input type="text" />
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
		<!-- Akhir Search box -->
		<div class="buat-laporan-container">
			<h4>Buat Laporan / Komentar</h4>
			<button onclick="">
				<i class="fa fa-plus-square" aria-hidden="true"></i>
			</button>
		</div>
		<!-- Komentar Box -->
		<div class="komentar-body">
			<h3>Laporan/Komentar Terakhir</h3>
			<hr />
			<div class="laporan-box-container">
				<div class="laporan-text">
					<p>
						Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus
						eveniet nihil commodi odit dolorem non eaque, magni ab laudantium
						exercitationem accusamus, sint rerum. Illo adipisci consequatur
						similique deserunt necessitatibus accusantium? Lorem ipsum dolor
						sit, amet consectetur adipisicing elit. Ratione, architecto?
						Dignissimos, perferendis? Temporibus, perspiciatis. Adipisci iure
						omnis architecto placeat sit nobis, explicabo consectetur maxime
						minus magni eveniet rem doloremque quae?
					</p>
				</div>
				<div class="keterangan-container">
					<div class="lampiran">
						<p>Lampiran: Gambar.jpg</p>
					</div>
					<div class="waktu"><p>Waktu : 20 - 11 - 2019 20.00</p></div>
					<div class="selengkapnya-container">
						<a href=""
							>Lihat Selengkapnya
							<i
								class="fa fa-chevron-right"
								aria-hidden="true"
								style="padding-left: 10px"
							></i
						></a>
					</div>
				</div>
				<hr />
			</div>
			<div class="laporan-box-container">
				<div class="laporan-text">
					<p>
						Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus
						eveniet nihil commodi odit dolorem non eaque, magni ab laudantium
						exercitationem accusamus, sint rerum. Illo adipisci consequatur
						similique deserunt necessitatibus accusantium? Lorem ipsum dolor
						sit, amet consectetur adipisicing elit. Ratione, architecto?
						Dignissimos, perferendis? Temporibus, perspiciatis. Adipisci iure
						omnis architecto placeat sit nobis, explicabo consectetur maxime
						minus magni eveniet rem doloremque quae?
					</p>
				</div>
				<div class="keterangan-container">
					<div class="lampiran">
						<p>Lampiran: Gambar.jpg</p>
					</div>
					<div class="waktu"><p>Waktu : 20 - 11 - 2019 20.00</p></div>
					<div class="selengkapnya-container">
						<a href=""
							>Lihat Selengkapnya
							<i
								class="fa fa-chevron-right"
								aria-hidden="true"
								style="padding-left: 10px"
							></i
						></a>
					</div>
				</div>
				<hr />
			</div>
		</div>
	</body>
</html>
<style>
	Header {
		padding: 2rem 1rem;
	}
	.Header h1 {
		text-align: center;
	}
	div.box {
		display: flex;
		justify-content: center;
	}
	.box input[type="text"] {
		width: 50%;
		padding: 20px 20px;
		margin: 8px 0;
		box-sizing: border-box;
	}
	.box button {
		float: right;
		padding: 20px 20px;
		margin-top: 8px;
		margin-bottom: 8px;
		margin-right: 16px;
		background-color: white;
		font-size: 17px;
		border-color: black;
		cursor: pointer;
	}
	.box button:hover {
		background: #ccc;
	}
	div.buat-laporan-container {
		display: flex;
		justify-content: center;
	}
	.buat-laporan-container button {
		border: none;
		background-color: white;
		padding: 6px 8px;
		cursor: pointer;
	}
	div.komentar-body {
		padding-left: 350px;
		padding-right: 350px;
	}
	div.keterangan-container {
		display: flex;
	}
	div.waktu {
		padding-right: 30px;
	}
	div.lampiran {
		padding-right: 300px;
	}
	div.selengkapnya-container {
		display: flex;
		padding-top: 15px;
	}
</style>
