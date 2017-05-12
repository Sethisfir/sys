function getXHR(){
	var xhr = null; 
 
	if(window.XMLHttpRequest) // Firefox et autres
	   xhr = new XMLHttpRequest(); 
	else if(window.ActiveXObject){ // Internet Explorer 
	   try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
	}
	else { // XMLHttpRequest non supporté par le navigateur 
	   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
	   xhr = false; 
	} 
	return xhr;
}

function go(page){
	var xhr = getXHR();
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			var reponse = xhr.response;
			document.getElementById("container").innerHTML = reponse;
		}
	}
	xhr.open("GET","index.php?p=search.instantSearch",true);
	xhr.send(null);
}	
$("#search").on("input", function(e){
		go(e)
});

