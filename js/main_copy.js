/*primary JS file - chelsea town */

/* Constructor Function for Each Listing */
function EachListing(loc, desks, drinks, food, hours){
	this.loc = loc;
	this.desks = desks;
	this.drinks = drinks;
	this.food = food;
	this.hours = hours;	
}

/* Populate Listings */
var listings = ["html5", "css3", "js", "jquery", "git", "bootstrap", "php"]; // ** Add more boxes to the array here
function loadListings() {
  for (var i = 0; i < listings.length; i++) {
      document.getElementById("listings_loop").innerHTML += "<div class='rTest'>" + listings[i] + "</div>";
  }
}
window.onload = loadListings;

