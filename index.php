<?php
session_start();
// log sessions, must be at top
?>
<!DOCTYPE html>
<html lang="en" ng-app>
<head>
<meta charset="UTF-8">
<meta name="description" content="Remote Locations" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="shortcut icon" href="/images/favicon.ico">  -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Catamaran:400,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/navScroll.js"></script>
<script type="text/javascript" src="js/addLoc.js"></script>
<title>Remote Loc</title>
</head>
<body onscroll="navScroll(1)">
<!-- header -->		
<?php include("inc/header.inc.php"); ?></div> 
<!-- listings -->		
<?php include("inc/listings.inc.php"); ?></div> 
<!-- footer -->	
<?php include("inc/footer.inc.php"); ?></div> 
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</body>
</html>