<!-- Login Page -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Remote work Locations" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="shortcut icon" href="/images/favicon.ico">  -->
<link href='https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Catamaran:400,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<title>Remote Loc</title>
</head>
<body>
<!-- JS -->
<!-- <script src="../js/options_hide-show.js" type="text/javascript"></script> -->

<section class="standalone_login">
	<?php               
	if (!isset($_REQUEST['content']))                   
			echo "sorry didn't work";
	else               
	{                   
		$content = $_REQUEST['content'];                   
		$nextpage = "../inc/" . $content . ".inc.php";                    
		include($nextpage);    
		// uses _REQUEST to get the passed variable through URL. If the variable "login" is passed, then $nextpage will then be in include()         
	}              
	?> 
</section>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</body>
</html>