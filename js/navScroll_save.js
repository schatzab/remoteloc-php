/* Scroll Nav */
function navScroll() { /* on scroll, adjust nav bar */
	var navLogo = document.getElementById("headerLogo"); /* logo in nav bar*/
	var logo = document.getElementById("logo"); /* primary logo */
	// var header = document.getElementById("headerNav"); /* nav bar */
	var vert = this.scrollY; /* track vertical scroll number */

	if (vert >= 50) {
		navLogo.setAttribute("class", "headerLogoScroll"); /* switch class if scrolled past set number */
		// header.setAttribute("class", "headerNavScroll"); /* switch class if scrolled past set number */		
		logo.style.visibility = "hidden"; /* hide the primary logo */
	} else {
		navLogo.setAttribute("class", "headerLogo"); /* return to original class */
		// header.setAttribute("class", "headerNav"); 	
		logo.style.visibility = "visible";
	}
}