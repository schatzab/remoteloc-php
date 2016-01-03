<!DOCTYPE html>
<html lang="en" ng-app>
<head>
<meta charset="UTF-8">
<meta name="description" content="Remote Locations" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="/images/favicon.ico">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/main.js"></script>
<title>Remote Loc</title>
</head>
<body>


<script>
function loadMe() {
	var locName = document.getElementById("locName");

	if (document.getElementById("add_locName").value === "") { /* If nothing entered ... */
		locName.innerHTML = "You need to type something first";
	} else {
		locName.innerHTML += document.getElementById("add_locName").value + "<br>";
	}
}
</script>


<!-- TEST -->
<form method="">
        <fieldset>
            <legend>Add in new location</legend>
            <textarea id="add_locName"></textarea><br><br>

            <p>Add in City</p>
			<textarea id="add_locCity"></textarea><br><br>

            <input type="checkbox" id="add_locWifi">Is free Wi-Fi available? <br><br>

            <button type="button" onclick="loadMe();">Add Listing</button>
        </fieldset>
</form>


<div id="locName"></div>
<div id="locCity"></div>
<div id="locWifi"></div>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</body>
</html>
