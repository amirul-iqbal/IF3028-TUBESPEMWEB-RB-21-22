window.addEventListener('load', function() 
{
    document.getElementById("hapus").addEventListener('click', function(e) 
    {
        e.preventDefault();
        
        if (confirm('Yakin Ingin Hapus Laporan?') == true) 
        {
            var actionURL = this.href;
            uploadfile(actionURL);
        }
        else {
            return false;
        }
        
    });
    
    function _(el) 
    {
        return document.getElementById(el);
    }
    
    function uploadfile(url) 
    {
      
      var id = url.substring(25);
      var ajax = new XMLHttpRequest();
      var metas = document.getElementsByTagName('meta'); 
      ajax.open("POST", url, true);

      for (i=0; i<metas.length; i++) 
      { 
          if (metas[i].getAttribute("name") == "csrf-token") 
          {  
                ajax.setRequestHeader("X-CSRF-Token", metas[i].getAttribute("content"));
          } 
      }

      ajax.send();

      ajax.onreadystatechange=function() 
      {
          if (ajax.readyState==4) {
                location.replace("/delete/"+id);
            }
        }
    }
});
