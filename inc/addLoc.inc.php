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
if (trim($name) == '')
{
   echo "<h2>Sorry, you must enter a business name.</h2><br>\n";
   echo "<a href=\"/\">Please try again.</a>\n";
   $baduser = 1;
}
//Check if city was entered
if (trim($city) == '')
{
   echo "<h2>Sorry, you must enter a city.</h2><br>\n";
   echo "<a href=\"/\">Please try again.</a>\n";
   $baduser = 1;
}
//Check if state was entered
if (trim($state) == '')
{
   echo "<h2>Sorry, you must enter a state.</h2><br>\n";
   echo "<a href=\"/\">Please try again.</a>\n";
   $baduser = 1;

}

//Check if business name is already in DB
$query = "SELECT name from locations_each where name = '$name'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
if ($row['name'] == $name)
{
   echo "<h2>Sorry, that business name is already listed on RemoteLoc.</h2><br>\n";
   echo "<a href=\"/\">Return to Home</a>\n";
   $baduser = 1;
}
if ($baduser != 1)
{
	$headers = "From: me@chelseatown.com \r\n";
	$headers .= "Reply-To: me@chelseatown.com \r\n";
	$headers .= "Cc: me@chelseatown.com \r\n";
	$email_to = "me@chelseatown.com"; 
	$email_subject = "A new Remote Loc submission";
	$email_message .= "Business Name: ".$name."\n";
	$email_message .= "City: ".$city."\n";
	$email_message .= "State: ".$state."\n";
	$email_message .= "Comments: ".$locDesc."\n";
	mail($email_to,$email_subject,$email_message,$headers);  

  	echo "<h2>Thank you for your remote location submission.</h2>\n";
  	echo "<a href=\"/\">Return Home</a>\n";
  	exit;
} else
{
    // something didn't work...
    echo "<h2>Sorry, there was a problem processing your submission.</h2><br>\n";
    echo "<a href=\"/\">Please try again.</a>\n";
}
?>