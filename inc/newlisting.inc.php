<!DOCTYPE html>
<html lang="en">
<body>

<?php
include('/home/remoteloc/config/connection.php'); /* get db connection */
$query = "SELECT id,name,locDesc,wifi from location order by id desc limit 0,10";
$result = mysqli_query($con, $query) or die('Sorry, could not get listings at this time ');

if (mysqli_num_rows($result) == 0) /* If fails... */
{
   echo "Sorry, please try back later.";
} else {
   while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) /* If suceeds... */
   {
       $id = $row['id'];
       $name = $row['name'];
       $desc = $row['locDesc'];
       $wifi = $row['wifi'];
	   $long_text = $desc;
	   $max_length = 400; // show only 100 characters
	   
	   echo "<div class=\"panel-heading listingH1\">$name</div>";
	   
	   // function truncates text if longer than 400, or shows if shorter
		if (strlen($desc) > $max_length)
			{
			 $short_text = (substr($long_text,0,$max_length-1)); // $short_text will show characters 0 to 100
			 $short_text .= "... "; // add an ellipses ... at the end
			 echo $short_text;
			}
		else
			{
			echo $long_text; // display the string as is
			}
   }
}
?>

</body>
</html>