/* Scroll Nav */

function navScroll(i) { 
    var navLogo = document.getElementById("headerLogo"); /* logo in nav bar*/
    var logo = document.getElementById("logo"); /* primary logo */
    var vert = this.scrollY; /* track vertical scroll number */

    if (vert >= 40) {    
        setTimeout(function () {   
            navLogo.setAttribute("class", "headerLogoScroll");
            navLogo.style.opacity = "0." + i;
            logo.style.opacity = "0";          
            if (++i < 10) navScroll(i);      //  increment i and call myLoop again if i > 10
        }, 100) /* delays loop to give fade effect */
    } else if (vert < 40) {    
        logo.style.opacity = "1";
        navLogo.style.opacity = "0";    
    } /* close 2nd if statement */    
} /* close function */
