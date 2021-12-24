window.addEventListener('load', function() 
{
    document.formlapor.addEventListener('submit', function(e) 
    {
        e.preventDefault();
        var laporan = document.forms["formlapor"]["laporan"].value;
        laporan = laporan.split(" ");
    
        var aspek = document.forms["formlapor"]["aspek"].value;
        var lampiran = document.forms["formlapor"]["lampiran"].value;
        var ekstensiOk = /(\.jpg|\.jpeg|\.png|\.pdf|\.doc|\.docx|\.xls|\.xlsx|\.ppt|\.pptx)$/i;
    
        if (laporan.length < 20)
        {
            alert("Isi laporan harus lebih dari 20 kata");
            return false;
        }
        if (aspek == "" || aspek == null)
        {
            alert("Aspek harus Dipilih");
            return false;
        }
    
        if(!ekstensiOk.exec(lampiran))
        {
            alert('Silakan upload file yang memiliki ekstensi .jpeg/.jpg/.png/.pdf/.doc/.docx/.xls/.xlsx/.ppt/.pptx');
            lampiran.value = '';
            return false;
        }
        
        var actionURL = this.action;
        // document.getElementById("err").innerHTML = actionURL;
        uploadfile(actionURL);
    });
    
    function _(el) 
    {
        return document.getElementById(el);
    }
    
    function uploadfile(url) 
    {

      var laporan = document.forms["formlapor"]["laporan"].value;
      var aspek = document.forms["formlapor"]["aspek"].value;
      var lampiran = document.forms["formlapor"]["lampiran"].files[0];
      var formdata = new FormData();
      formdata.append("laporan", laporan);
      formdata.append("aspek", aspek);
      formdata.append("lampiran", lampiran);

      var ajax = new XMLHttpRequest();
      var metas = document.getElementsByTagName('meta'); 
      ajax.open("POST", url, true);

      for (i=0; i<metas.length; i++) { 
          if (metas[i].getAttribute("name") == "csrf-token") 
          {  
                ajax.setRequestHeader("X-CSRF-Token", metas[i].getAttribute("content"));
          } 
      }

      ajax.send(formdata);

      var id = url.substring(25);

      ajax.onreadystatechange=function() 
      {
          if (ajax.readyState==4) 
          {
                location.replace("/view-laporan/"+id);
            }
        }
    }
});
