<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url'); ?>/assets/css/home.css"media="all"/>
<div class="Header">
	<div class="container">
		<div class="row">
			<div class="col-1">
				<h2>LAPORIN YUK</h2>
				<h3>Layanan Aspirasi dan Pengaduan Online Rakyat</h3>
				<?php if($this->session->userdata('username')== NULL):?>
					<p>Sampaikan Laporan Anda</p>
					<button type="button" class="btn" id="myBtn">Lapor !</button>	
					<?php else:?>
						<p>Sampaikan Laporan Anda <span style="color: black; font-weight: bold;"><?=$this->session->userdata('username');?></span> ! <a href="<?=base_url('home/logout');?>" style="text-decoration: none;">Logout?</a></p>
						<button type="button" class="btn" onclick="window.location='<?=base_url('buatlaporan');?>'">Lapor !</button>
					<?php endif;?>
					<!-- Search box -->
					<div class="box">
						<input type="text" id="search" name="search" />
						<button type="submit" class="btn" onclick="search()"><img src="<?=base_url('assets/img/search.png');?>" class="searchImg"></button>
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
			<button type="button" class="btn">Next !</button>
			<button type="button" class="btn">Back !</button>
		</div>
	</div>

	<div id="myModal" class="modal">

		<div class="modal-content">
			<div class="modal-header">
				<span class="close">&times;</span>
				<h2>Autentikasi</h2>
			</div>
			<div class="modal-body" id="modalBody"></div>
			<div class="modal-footer">
				<div class="modal-button">
					<button style="margin-left: auto;" class="btn" type="button" id="btnLogin">Login</button>
					<button style="margin-left: auto;" class="btn" type="button" id="btnRegis">Register</button>
				</div>
			</div>
		</div>

	</div>


	<script type="text/javascript">
		var modal = document.getElementById("myModal");
		var span = document.getElementsByClassName("close")[0];
		var btnLogin = document.getElementById('btnLogin');
		var btnRegis = document.getElementById('btnRegis');
		var modalBody = document.getElementById('modalBody');

		<?php if($this->session->userdata('username')==NULL):?>

			var btn = document.getElementById("myBtn");
			btn.onclick = function() {
				modal.style.display = "block";
				btnLogin.style.backgroundColor = '#ffd05b';
				var html = ' <p>Silahkan login untuk melakukan pelaporan.</p>';
				html += '<input type="text" name="unameLogin" id="uname1" placeholder="username" onkeyup="validation(this.name, this.value)">';
				html += '<div id="unameLogin" style="margin-bottom: 10px; text-align :center;"></div>';
				html += '<input type="password" name="passwordLogin" id="password1" placeholder="password" onkeyup="validation(this.name, this.value)">';
				html += '<div id="passwordLogin" style="margin-bottom: 10px; text-align :center;"></div>';
				html += '<input id="btnSubmit" onclick="validCheck()" type="submit" name="submit" value="Login">';
				modalBody.innerHTML = html;
			}

			btnLogin.onclick = function(){
				btnLogin.style.backgroundColor = '#ffd05b';
				btnRegis.style.backgroundColor = '#59c5ec';
				var html = ' <p>Silahkan login untuk melakukan pelaporan.</p>';
				html += '<input type="text" name="uname" id="uname1" placeholder="username" onkeyup="validation(this.name, this.value)">';
				html += '<div id="uname" style="margin-bottom: 10px; text-align :center;"></div>';
				html += '<input type="password" name="password" id="password1" placeholder="password" onkeyup="validation(this.name, this.value)">';
				html += '<div id="password" style="margin-bottom: 10px; text-align :center;"></div>';
				html += '<input id="btnSubmit" onclick="validCheck()" type="submit" name="submit" value="Login">';
				modalBody.innerHTML = html;
			}
			btnRegis.onclick = function(){
				btnRegis.style.backgroundColor = '#ffd05b';
				btnLogin.style.backgroundColor = '#59c5ec';
				var html = ' <p>Silahkan mendaftar untuk melakukan pelaporan.</p>';
				html += '<input type="text" name="uname" id="uname1" placeholder="username" onkeyup="validation(this.name, this.value)">';
				html += '<div id="uname" style="margin-bottom: 10px; text-align :center;"></div>';
				html += '<input type="password" name="password" id="password1" placeholder="password" onkeyup="validation(this.name, this.value)">';
				html += '<div id="password" style="margin-bottom: 10px; text-align :center;"></div>';
				html += '<input id="btnSubmit" onclick="validCheck()" type="submit" name="submit" value="Register">';
				modalBody.innerHTML = html;
			}

			span.onclick = function() {
				modal.style.display = "none";
				btnRegis.style.backgroundColor = '#59c5ec';
				btnLogin.style.backgroundColor = '#59c5ec';
			}

			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
					btnRegis.style.backgroundColor = '#59c5ec';
					btnLogin.style.backgroundColor = '#59c5ec';
				}
			}

			function validCheck(){
				var uname = document.getElementById('uname1').value;
				var password = document.getElementById('password1').value;
				var btnSubmit = document.getElementById('btnSubmit').value;
				var i = 0;

				if (uname == "" || password == "") {
					if (btnSubmit == "Register") {
						alert('Tolong lengkapi data registrasi!');
						return false;
					}else{
						alert('Tolong lengkapi data login!');
						return false;
					}
				}else{
					if (btnSubmit == "Register") {
						var uname1 = document.getElementById('uname');
						var password1 = document.getElementById('password');
						if (uname1.innerHTML != "" || password1.innerHTML != "") {
							alert('Tolong ubah data sesuai instruksi!');
							return false;
						}else{
							pushAuth(uname, password, btnSubmit);
							location.href = "<?=base_url('home');?>";
						}
					}else{
						var uname1 = document.getElementById('unameLogin');
						var password1 = document.getElementById('passwordLogin');
						pushAuth(uname, password, btnSubmit);
					}
				}
			}

			function validation(field,query){
				var xmlhttp;
				if(window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				} else {
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}

				xmlhttp.onreadystatechange = function(){
					if(xmlhttp.readyState != 4 && xmlhttp.status == 200){
						document.getElementById(field).innerHTML = "Cek Validasi..";
					} else if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
						console.log(xmlhttp.responseText);
						document.getElementById(field).innerHTML = xmlhttp.responseText;
					} else {
						document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
					}
				}
				xmlhttp.open("GET","<?=base_url('home/load_user')?>?field="+field+"&query="+ query, false);
				xmlhttp.send();
			}

			function pushAuth(name, password, type){
				var http = new XMLHttpRequest();
				var url = '<?=base_url('home/auth');?>';
				var params = 'username='+name+'&password='+password+'&type='+type;
				http.open('POST', url, true);

				http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

				http.onreadystatechange = function() {
				    if(http.readyState == 4 && http.status == 200) {
				        console.log(http.responseText);
				        if (type=="Login" && http.responseText == "password salah") {
				        	document.getElementById('passwordLogin').innerHTML = http.responseText;
				        }else{
				        	location.href = "<?=base_url('home');?>";
				        }
				    }
				}
				http.send(params);
			}
		<?php endif;?>

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