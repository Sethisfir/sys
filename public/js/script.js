
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

function go(title, proc){
	var xhr = getXHR();
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			var reponseok = xhr.response;
			$("#searchContainer").html(reponseok);
		}
	}
	xhr.open("GET","index.php?p=search.instantSearch&title="+title+"&proc="+proc,true);
	xhr.send(null);
}	
$("#search").on("input", function(e){
		var processus = $("input.process:checked").val();
		go(e.target.value, processus);
});

