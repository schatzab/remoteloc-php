<!-- Register New Sign Up -->
<a href="/" class="logo">Remote Loc</a>
<h3>May the remote work force be with you!</h3>

<form action="../index.php" method="post">
	<b>User Name:</b><br><input type="text" name="username" class="text_field_generic"><br><br>
	<b>Password:</b><br><input type="password" name="password" class="text_field_generic"><br><br>
	<b>Confirm Password:</b><br><input type="password" name="password2" class="text_field_generic"><br><br>
	<b>First name:</b><br><input type="text" size="40" name="firstname" class="text_field_generic"><br><br>
	<b>Last name:</b><br><input type="text" size="40" name="lastname" class="text_field_generic"><br><br>
	<b>E-mail address:</b><br><input type="text" size="50" name="email" class="text_field_generic">
	<p>Privacy Policy: we do not share e-mail addresses with others</p>
	<input type="submit" value="Submit">
	<input type="hidden" name="content" value="adduser">
	<!-- the hidden variable sends to adduser -->
</form>
