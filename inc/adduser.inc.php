<!-- Page to add user to DB -->
<?php
/* get db connection, set var $con */
include('/home/remoteloc/config/connection.php'); 
if (!$con)
{
   echo "<h2>Sorry, we cannot process your request at this time, please try again later</h2>\n";
   echo "<a href=\"sp/login_shell.php?content=register\">Try again</a><br>\n";
   echo "<a href=\"/\">Return to Home</a>\n";
   exit;
}
mysqli_select_db($con, 'remoteloc') or die('Could not connect to database');

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$baduser = 0;
// Checks that all fields are entered - below
if (trim($username) == '')
{
   echo "<h2>Sorry, you must enter a username.</h2><br>\n";
   echo "<a href=\"sp/login_shell.php?content=register\">Try again</a><br>\n";
   echo "<a href=\"/\">Return to Home</a>\n";
   $baduser = 1;
}
//Check if password was entered
if (trim($password) == '')
{
   echo "<h2>Sorry, you must enter a password.</h2><br>\n";
   echo "<a href=\"sp/login_shell.php?content=register\">Try again</a><br>\n";
   echo "<a href=\"/\">Return to Home</a>\n";
   $baduser = 1;
}
//Check if password and confirm password match
if ($password != $password2)
{
   echo "<h2>Sorry, the passwords you entered did not match.</h2><br>\n";
   echo "<a href=\"sp/login_shell.php?content=register\">Try again</a><br>\n";
   echo "<a href=\"/\">Return to Home</a>\n";
   $baduser = 1;

}


// Check for invalid email address
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{ 
	echo ' " ' . $email . ' " is an invalid email address.<br>'; 
	$baduser = 1;
   	echo "<a href=\"sp/login_shell.php?content=register\">Try again</a><br>\n";
   	echo "<a href=\"/\">Return to Home</a>\n";
} 




//Check if username is already in database
$query = "SELECT username from users where username = '$username'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
if ($row['username'] == $username)
{
   echo "<h2>Sorry, that username is already taken.</h2><br>\n";
   echo "<a href=\"sp/login_shell.php?content=register\">Try again</a><br>\n";
   echo "<a href=\"/\">Return to Home</a>\n";
   $baduser = 1;
}
if ($baduser != 1)
{
   //Everything passed, enter all form data into database. password function encrypts the password.
   $query = "INSERT into users VALUES (NULL, '$username', PASSWORD('$password'), '$firstname', '$lastname', '$email', 'true', CURDATE())";
   $result = mysqli_query($con, $query) or die('Sorry, no dice.');
   if ($result)
   {
      // gives the user name to the session to say you're logged in.
      $_SESSION['valid_rl_user'] = $username;
	// The $_SESSION[] array variable contains the data values stored in the session cookie temporary file on the server. This code creates a session cookie variable called valid_rl_user and sets its value to the actual user account name.

      echo "<h2>Your registration request has been approved and you are now logged in!</h2>\n";
      echo "<a href=\"/\">Return to Home</a>\n";
      exit;
   } else
   {
      // something didn't work...
      echo "<h2>Sorry, there was a problem processing your login request</h2><br>\n";
      echo "<a href=\"sp/login_shell.php?content=register\">Try again</a><br>\n";
      echo "<a href=\"/\">Return to Home</a>\n";
   }
}
?>