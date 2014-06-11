function loadAll(){
	loadPano(1);
	loadInfo("info");
}

function loadPano($num){
	loadDataToDiv("room"+$num+".html", "panoDiv");
}	
function loadImage($num){
	loadDataToDiv("fetchpanel.php?image="+$num, "infoDiv");
}
function loadInfo($page){
	loadDataToDiv("fetchpanel.php?html="+$page, "infoDiv");
}

//Simple function to load a URL into an element
function loadDataToDiv(SourceFile, DestinationElement){
	var request = getHTTPObject();
	var el = document.getElementById(DestinationElement);
	if (request) {
		request.onreadystatechange = function() {
		parseResponse(request, DestinationElement);
	};
	request.open("GET", SourceFile, true);
	request.send(null);
  }
}

//Ajax Stuff
function getHTTPObject() {
  var xhr = false;
  if (window.XMLHttpRequest) {
	xhr = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
	try {
	  xhr = new ActiveXObject("Msxml2.XMLHTTP");
	} catch(e) {
	  try {
		xhr = new ActiveXObject("Microsoft.XMLHTTP");
	  } catch(e) {
		xhr = false;
	  }
	}
  }
  return xhr;
}

function parseResponse(request, DestinationElement) {
  if (request.readyState == 4) {
	if (request.status == 200 || request.status == 304) {
	  var container = document.getElementById(DestinationElement);
	  container.innerHTML = request.responseText;
	}
  }
}
