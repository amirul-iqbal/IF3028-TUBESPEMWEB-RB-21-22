var form = document.getElementById("form");
var aspek = document.getElementById("aspek");
var lampiran = document.getElementById("lampiran");
var isi = document.getElementById("isi");


    form.addEventListener('submit', (e) => {
        if 
        (
            lampiran.value == "" &&
            isi.value == "" &&
            aspek.value == "false"
        ) 
        {
            alert("Pastikan ;anda mengisi semuanya");
            e.preventDefault();
        } 
        else if (isi.length() < 20) 
        {
            alert("Minimal untuk panjang komentar adalah 20");
            e.preventDefault();
        }
    });