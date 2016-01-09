<!-- Register New Sign Up -->
<a href="/" class="logo">Remote Loc</a>
<h3>May the remote workforce be with you!</h3>

<form action="../index.php" method="post">
	<input type="text" name="username" class="text_field_generic" value="Username" onclick="if(this.value=='Username'){this.value=''}" onblur="if (this.value==''){this.value='Username'}"><br><br>

	<input class="text_field_generic" size="20" type="password" name="password" placeholder="Password" /><br><br>

	<input class="text_field_generic" size="20" type="password" name="password2" placeholder="Confirm Password" /><br><br>

	<input type="text" size="40" name="firstname" class="text_field_generic" value="First Name" onclick="if(this.value=='First Name'){this.value=''}" onblur="if (this.value==''){this.value='First Name'}"><br><br>

	<input type="text" size="40" name="lastname" class="text_field_generic" value="Last Name" onclick="if(this.value=='Last Name'){this.value=''}" onblur="if (this.value==''){this.value='Last Name'}"><br><br>

	<input type="text" size="50" name="email" class="text_field_generic" value="Email Address" onclick="if(this.value=='Email Address'){this.value=''}" onblur="if	(this.value==''){this.value='Email Address'}">

	<p>Privacy Policy: we do not share e-mail addresses with others</p>
	<input type="submit" value="Submit">
	<input type="hidden" name="content" value="adduser">
	<!-- the hidden variable sends to adduser -->
</form>
