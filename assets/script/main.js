var search = document.getElementById('search');
var content = document.getElementById('content');
var url = document.getElementById('url');

search.addEventListener('keyup', function () {

    var ajaxSearch = new XMLHttpRequest(); 
    
    ajaxSearch.onreadystatechange = function () {
		if(ajaxSearch.readyState == 4 && ajaxSearch.status == 200){
			content.innerHTML = ajaxSearch.responseText;
		}
        // else{
        //     content.innerHTML = url.value+search.value+" tidak ditemukan";
        // }
    }

	ajaxSearch.open('GET', url.value+search.value , true);
    ajaxSearch.send();
})