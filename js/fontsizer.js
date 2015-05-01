<!--
var prefsLoaded = false;

// here are the lines you can edit
var minFontSize = 55;
var maxFontSize = 100;
var sizeStep = 5;
var defaultFontSize = 69;
// end lines for editing

var currentFontSize = defaultFontSize;


function revertStyles(){
	currentFontSize = defaultFontSize;
	changeFontSize(0);

}


function changeFontSize(sizeDifference){
	currentFontSize = parseInt(currentFontSize) + parseInt(sizeDifference * sizeStep);

	if(currentFontSize > maxFontSize){
		currentFontSize = maxFontSize;
	}else if(currentFontSize < minFontSize){
		currentFontSize = minFontSize;
	}

	setFontSize(currentFontSize);

	//alert ('Current Fontsize: ' + currentFontSize + '% ( Max.: ' + maxFontSize + '% - Min.: ' + minFontSize + '% )');
};

function setFontSize(fontSize){
	var stObj = (document.getElementById) ? document.getElementById('content') : document.all('content');
	document.body.style.fontSize = fontSize + '%';

	//alert ('Fontsize: ' + document.body.style.fontSize);
};

function createCookie(name,value,days) {
	if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
	else expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
};

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
    	var c = ca[i];
    	while (c.charAt(0)==' ') c = c.substring(1,c.length);
    	if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  	}
  	return null;
};

window.onload = setUserOptions;

function setUserOptions(){
	if(!prefsLoaded){

		cookie = readCookie("fontSize");
		currentFontSize = cookie ? cookie : defaultFontSize;
		setFontSize(currentFontSize);


	}
}

window.onunload = saveSettings;

function saveSettings(){
  createCookie("fontSize", currentFontSize, 365);
}
//-->