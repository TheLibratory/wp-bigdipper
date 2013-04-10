////////////// Header image detection script ////////////////////////////////
function no_header_image() {
	var header = document.getElementById("branding");
	var image = header.getElementsByTagName("img");

//		If there is not an image set, add class to the Title & Description elements.
	if (image.length == 0) {
		document.getElementById("site-title").className += "no-header";
		document.getElementById("site-description").className += "no-header";
//		This class 'no-header' provides them with relative positioning and auto 'top' height
	}
} no_header_image();