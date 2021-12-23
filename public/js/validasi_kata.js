function createReports() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
       if (this.readyState == 4 && this.status == 200) {
        document.getElementById("container").innerHTML =
        this.responseText;
        }
    };
    xhttp.open('POST','/',true);
    xhttp.send();
}

function validasi(){
    var laporan = document.forms["formlapor"]["laporan"].value;
    laporan = laporan.split(" ");

    var aspek = document.forms["formlapor"]["aspek"].value;
    var lampiran = document.forms["formlapor"]["lampiran"].value;
    var ekstensiOk = /(\.jpg|\.jpeg|\.png|\.pdf|\.doc|\.docx|\.xls|\.xlsx|\.ppt|\.pptx)$/i;

    if(!ekstensiOk.exec(lampiran)){
        alert('Silakan upload file yang memiliki ekstensi .jpeg/.jpg/.png/.pdf/.doc/.docx/.xls/.xlsx/.ppt/.pptx');
        lampiran.value = '';
        return false;
    }

    if (laporan.length < 20){
        alert("Isi laporan harus lebih dari 20 kata");
        return false;
    }
    if (aspek == "" || aspek == null){
        alert("Aspek harus Dipilih");
        return false;
    }
createReports();
}
