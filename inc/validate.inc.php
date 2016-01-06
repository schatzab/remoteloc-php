<!-- Validate Login -->
<?php
/* get db connection, set var $con */
include('/home/remoteloc/config/connection.php'); 

$username = $_POST['username'];
$password = $_POST['password'];
/* retrieve the HTML variables from the login form and save them to variables */

$query = "SELECT username from users where username = '$username' and password = PASSWORD('$password')";
$result = mysqli_query($con, $query) or die('Sorry, could not login at this time');
// PASSWORD() function again to compare the encrypted version of the password to the one stored in the database

if (mysqli_num_rows($result) == 0)
{
    echo "<h2>Sorry, your user account was not validated.</h2><br>\n";
    echo "<a href=\"/sp/login_shell.php?content=login\">Try again</a><br>\n";
    echo "<a href=\"/\">Return to Home</a>\n";
} else
{   
   $_SESSION['valid_rl_user'] = $username;
   // the session cookie variable valid_rl_user is set, stores the user name in the session cookie data.
   echo "<h2>Your are logged in.</h2><br>\n";
?>

<!-- after login, send user to homepage -->
<script>
window.location = "http://www.remoteloc.com";
</script>

<?php
}
?>