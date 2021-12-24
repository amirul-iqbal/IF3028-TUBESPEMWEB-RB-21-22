<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url'); ?>/assets/css/buatlaporan.css"media="all"/>
<div class="container">
    <div class="row">
        <div class="col-1">
            <h2>LAPORIN YUK</h2>
            <h4>Ubah laporan anda dengan mengetikan di kolom ini!</h4>
            <form name="formLapor" method="post" action="<?=base_url('laporan/editlaporan/').$lapor['id_lapor'];?>" enctype="multipart/form-data" onsubmit="return validCheck()">
                <input type="text" name="judul" id="judul" placeholder="Judul laporan" value="<?=$lapor['judul'];?>">
                <div id="judulReturn" style="margin-bottom: 10px;"></div>
                <textarea cols="100" rows="20" placeholder="laporan/komentar" id="laporan" name="laporan"><?=$lapor['isi'];?></textarea>
                </br>
                <div id="laporanReturn" style="margin-bottom: 10px;"></div>
                <select id="aspek" name="aspek">
                </select>
                <div id="aspekReturn" style="margin-bottom: 10px;"></div>
                </br>
                <div style="margin-bottom: 1%;">
                    <label for="file">Lampiran</label><span style="font-size: 10px; color: red; margin-left: 5px;"> *Abaikan apabila tidak ingin merubah</span><br>
                    <input type="file" id="file" name="file" style="margin-top: 10px;" accept=".doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, image/*">
                    <p id="lampiranLabel">Lampiran kamu sebelumnya</p>
                    <?php if($ekstensi == 'pdf'):?>
                        <iframe id="lampiran" src="<?=base_url('assets/lampiran/').$lapor['lampiran'];?>" width="80%" height="400px"></iframe>
                    <?php elseif ($ekstensi == 'doc' || $ekstensi == 'docx' || $ekstensi == 'xls' || $ekstensi == 'xlsx' || $ekstensi == 'ppt' || $ekstensi == 'pptx'):?>
                        <a href="<?=base_url('assets/lampiran/').$lapor['lampiran'];?>" style="text-align: center;" download><?=$lapor['lampiran'];?></a>
                    <?php else:?>
                        <div class="gambar-container">
                            <img src="<?=base_url('assets/lampiran/').$lapor['lampiran'];?>" alt="Gambar lampiran" width="400px;"/>
                        </div>
                    <?php endif;?>
                </div>
                </br>
                <a id="link-back" href="<?=base_url('home')?>" style="text-decoration: none;"> << Back to home</a>
                <button type="submit">Kirim</button>
            </form>
        </div>
    </div>
</div>
<div class="svg-wrapper">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFD05B" fill-opacity="1" d="M0,192L26.7,181.3C53.3,171,107,149,160,154.7C213.3,160,267,192,320,197.3C373.3,203,427,181,480,149.3C533.3,117,587,75,640,69.3C693.3,64,747,96,800,122.7C853.3,149,907,171,960,176C1013.3,181,1067,171,1120,144C1173.3,117,1227,75,1280,74.7C1333.3,75,1387,117,1413,138.7L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
</div>
<script type="text/javascript">

    var aspekOpsi = ['Dosen', 'Staff', 'Mahasiswa', 'Infrastruktur', 'Pengajaran'];
    var aspekValue = '<?=$lapor['aspek'];?>';
    var htmlAspek = '<option value="'+aspekValue+'">'+aspekValue+'</option>';
    var aspek = document.getElementById('aspek').innerHTML;

    for (var aspekOpsiCount = 0; aspekOpsiCount < 5; aspekOpsiCount++) {
        if (aspekOpsi[aspekOpsiCount] != aspekValue) {
            htmlAspek += '<option value="'+aspekOpsi[aspekOpsiCount]+'">'+aspekOpsi[aspekOpsiCount]+'</option>';
        }
    }
    document.getElementById('aspek').innerHTML = htmlAspek;

    function validCheck(){
        var judul = document.forms['formLapor']['judul'].value;
        var laporan = document.forms['formLapor']['laporan'].value;
        var aspek = document.forms['formLapor']['aspek'].value;
        var file = document.forms['formLapor']['file'].value;
        var i = 0;

        if (judul == "") {
            var judulReturn = '<label style="font-size: 12px; color:red;">Tolong isi judul laporan!</label>';
            document.getElementById('judulReturn').innerHTML = judulReturn;
            i++;
        }else{
            document.getElementById('aspekReturn').innerHTML = "";
        }

        if (laporan == "") {
            var laporanReturn = '<label style="font-size: 12px; color:red;">Tolong isi kolom laporan!</label>';
            document.getElementById('laporanReturn').innerHTML = laporanReturn;
            i++;
        }else{
            const hitungText = laporan.split(" ");
            console.log(hitungText.length);
            if (hitungText.length < 20) {
                var laporanReturn = '<label style="font-size: 12px; color:red;">Minimal jumlah kata untuk melapor sebanyak 20 kata!</label>';
                document.getElementById('laporanReturn').innerHTML = laporanReturn;
                i++;
            }else{
                document.getElementById('laporanReturn').innerHTML = "";
            }
        }

        if (aspek == "") {
            var aspekReturn = '<label style="font-size: 12px; color:red;">Tolong isi aspek laporan!</label>';
            document.getElementById('aspekReturn').innerHTML = aspekReturn;
            i++;
        }else{
            document.getElementById('aspekReturn').innerHTML = "";
        }

        if (i > 0) {
            return false;
        }
    }
</script>