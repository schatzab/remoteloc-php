<!-- Listings General -->
<section class="jumbotron">
  <div class="container">
  	<!-- Breadcrumbs -->
    <ul class="breadcrumb">
    	<li><a href="#">Home</a></li>

    	<?php
			/* get db connection, set var $con */
			include('/home/remoteloc/config/connection.php'); 
			if (!$con)
			{
			   echo "<h2>Sorry, we cannot process your request at this time, please try again later</h2>\n";
			   echo "<a href=\"/\">Return to Home</a>\n";
			   exit;
			}
			mysqli_select_db($con, 'remoteloc') or die('Could not connect to database');
			/* Collect info from whichever state was selected */
			$state = $_POST['state'];
			$baduser = 0;

			//Check if state name is already in DB
			$query = "SELECT state from locations_each where state = '$state'";
			$result = mysqli_query($con, $query);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if ($row['state'] == $state)
			{
			   $baduser = 1;
			}
			if ($baduser != 1)
			{
			  	echo "<li><a href=\"index.php?content=optionsState\">$state</a></li>";
			  	exit;
			} else
			{
			    // something didn't work...
			    echo "<h2>Sorry, there was a problem processing your location.</h2><br>\n";
			    echo "<a onclick=\"addLoc('filter_div_underlay', 'filter_div', 'pod_overlay_container')\">Please try again.</a>\n";
			}
			?>
    	<li class="active" onclick="includeEach()">Bend</li>
	</ul>
<!-- listingsCity -->   
<?php               
if (!isset($_REQUEST['content']))                   
	include("inc/listingsEach.inc.php");               
else               
{                   
$content = $_REQUEST['content'];                   
$nextpage = "inc/" . $content . ".inc.php";                    
	include($nextpage);    
// uses _REQUEST to get the passed variable through GET or POST. If the variable "login" is passed, then $nextpage will then become login.inc.php.  This is then include()         
}              
?> 
</section>