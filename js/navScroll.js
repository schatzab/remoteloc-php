/* Scroll Nav */

function navScroll(i) { 
    var navLogo = document.getElementById("headerLogo"); /* logo in nav bar*/
    var logo = document.getElementById("logo"); /* primary logo */
    var vert = this.scrollY; /* track vertical scroll number */
    var counter = 0;

    if (vert >= 90 && counter = 0) {  
        setTimeout(function () {   
            navLogo.setAttribute("class", "headerLogoScroll");
            navLogo.style.opacity = "0." + i;
            logo.style.opacity = "0";          
            if (++i < 10) navScroll(i);      //  increment i and call myLoop again if i > 10
        }, 100) /* delays loop to give fade effect */
        counter = 1;
    } 
    if (vert < 90 && counter = 1) {    
        logo.style.opacity = "1";
        navLogo.style.opacity = "0";
        counter = 0;
    } /* close if statement */    
}
