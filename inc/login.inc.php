<!-- Login Content Include -->
<a href="/" class="logo">Remote Loc</a><br>
<form action="../index.php" method="post" target="_self">
	<!-- User Name -->
	<input class="text_field_generic" size="20" type="text" name="username" placeholder="Username">
	<br><br>
	<!-- Password -->
    <input class="text_field_generic" size="20" type="password" name="password" id="password" placeholder="Password" />
	<br><br>
	<input type="submit" value="LOGIN" class="gen_button_prominent">
	<input type="hidden" value="validate" name="content">
	<!-- next page to go to is validate.inc.php -->
</form>
<br><br>
Need <a href="login_shell.php?content=register">Sign Up?</a> Forgot <a href="#">Password?</a>