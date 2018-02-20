function getXMLHttpRequest() {
	var xhr = null;
	
	if (window.XMLHttpRequest || window.ActiveXObject) {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e) {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
		} else {
			xhr = new XMLHttpRequest(); 
		}
	} else {
		alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
		return null;
	}
	
	return xhr;
}

////////////////////////////////////////////////////////////////////////////////////////////
var xhr = getXMLHttpRequest(); // Voyez la fonction getXMLHttpRequest() définie dans la partie précédente

xhr.open("GET", "xxhe.php", true);
xhr.send(null);
/////////////////////////////////////////////////////////////////////////////////////////////
xhr.open("POST", "xhe.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send("variable1=truc&variable2=bidule");
///////////////////////////////////////////////////
//////proteger les caractere//////////////////////////////////
var sVar1 = encodeURIComponent("contenu avec des espaces");
var sVar2 = encodeURIComponent("je vois que vous êtes un bon élève... oopa !");

xhr.open("GET", "handlingData.php?variable1=" + sVar1 + "&variable2= " + sVar2, true);
xhr.send(null);
/////////////////////////////////////////////////////
var xhr = getXMLHttpRequest();

xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		alert("OK"); // C'est bon \o/
	}
};
//////////////////////////////////////////////////
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            alert(xhr.responseText); // Données textuelles récupérées
    }
};

//////callback//////////////////
function request(callback) {
	var xhr = getXMLHttpRequest();
	
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
			callback(xhr.responseText);
		}
	};
	
	xhr.open("GET", "xhe.php?v1=x&v2=2", true);
	xhr.send(null);
}

function readData(sData) {
	// On peut maintenant traiter les données sans encombrer l'objet XHR.
	if (sData == "OK") {
		alert("C'est bon");
	} else {
		alert("Y'a eu un problème");
	}
}

request(readData);
///////////////***** */