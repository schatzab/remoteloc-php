<!-- Handles Add Location submission -->
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
/* Collect info from add location submission */
$name = $_POST['name'];
$city = $_POST['city'];
$state = $_POST['state'];
$locDesc = $_POST['locDesc'];
$baduser = 0;

// Checks if business name was entered
if (trim($name) == '' || trim($name) == "Business Name *")
{
   echo "<h2>Sorry, you must enter a business name.</h2><br>\n";
   echo "<a onclick=\"addLoc('filter_div_underlay', 'filter_div', 'pod_overlay_container')\">Please try again.</a>\n";
   $baduser = 1;
}
//Check if city was entered
if (trim($city) == '' || trim($city) == "City *")
{
   echo "<h2>Sorry, you must enter a city.</h2><br>\n";
   echo "<a onclick=\"addLoc('filter_div_underlay', 'filter_div', 'pod_overlay_container')\">Please try again.</a>\n";
   $baduser = 1;
}
//Check if state was entered
if (trim($state) == '' || trim($state) == "State *")
{
   echo "<h2>Sorry, you must enter a state.</h2><br>\n";
   echo "<a onclick=\"addLoc('filter_div_underlay', 'filter_div', 'pod_overlay_container')\">Please try again.</a>\n";
   $baduser = 1;

}

//Check if business name is already in DB
$query = "SELECT name from locations_each where name = '$name'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
if ($row['name'] == $name)
{
   $baduser = 1;
}
if ($baduser != 1)
{
	$headers = "From: admin@remoteloc.com \r\n";
	$headers .= "Reply-To: admin@remoteloc.com \r\n";
	$email_to = "me@chelseatown.com"; 
	$email_subject = "A New Remote Location!";
	$email_message .= "Business Name: ".$name."\n";
	$email_message .= "City: ".$city."\n";
	$email_message .= "State: ".$state."\n";
	$email_message .= "Comments: ".$locDesc."\n";
	mail($email_to,$email_subject,$email_message,$headers);  

  	echo "<h2>Thank you for adding a remote location!</h2>\n";
  	echo "You should see your location shortly. <a href=\"/\">Return Home</a>\n";
  	exit;
} else
{
    // something didn't work...
    echo "<h2>Sorry, there was a problem processing your location.</h2><br>\n";
    echo "<a onclick=\"addLoc('filter_div_underlay', 'filter_div', 'pod_overlay_container')\">Please try again.</a>\n";
}
?>