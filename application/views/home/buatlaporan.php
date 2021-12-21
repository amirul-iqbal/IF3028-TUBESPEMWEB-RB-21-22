<!DOCTYPE html>
<html lang="en">
<head>
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
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url'); ?>/assets/css/buatlaporan.css"media="all"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="k2.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    
     <div class="container">
            <div class="row">
                <div class="col-1">
                    <h2>LAPORIN YUK</h2>
                    <h4>Buat laporan anda dengan mengetikan di kolom ini </h4>
    <form>
    <textarea cols="201" rows="20" placeholder="laporan/komentar"></textarea>
    </br>
    <select>
        <option>pilihan1</option>
        <option>pilihan2</option>
    </select>
    </br>
    <input type="file">
    </br>
    <button type="submit" >Kirim </button>
    </form>
    </div>
    </div>
    </div>
<div class="svg-wrapper">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFD05B" fill-opacity="1" d="M0,192L26.7,181.3C53.3,171,107,149,160,154.7C213.3,160,267,192,320,197.3C373.3,203,427,181,480,149.3C533.3,117,587,75,640,69.3C693.3,64,747,96,800,122.7C853.3,149,907,171,960,176C1013.3,181,1067,171,1120,144C1173.3,117,1227,75,1280,74.7C1333.3,75,1387,117,1413,138.7L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
	</div>
</body>
<!-- <style>
    .svg-wrapper {
		position: absolute;
		left:0;
		width: 100%;
	}
    * {
		font-family: Roboto;
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
    button {
		float: right;
		padding: 15px 15px;
		margin-top: 8px;
		margin-bottom: 8px;
		margin-right: 16px;
		background-color: #59c5ec;
        color: white;
		font-size: 17px;
		border-color: white;
		cursor: pointer;
	}
	button:hover {
		background: #ffd05b;
	}
</style> -->
