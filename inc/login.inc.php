<!-- Login Content Include -->
<script type="text/javascript">
       function pwdFocus() {
            $('#fakepassword').hide();
            $('#password').show();
            $('#password').focus();
        }
        function pwdBlur() {
            if ($('#password').attr('value') == '') {
                $('#password').hide();
                $('#fakepassword').show();
            } 
        }
</script>

<a href="/" class="logo">Remote Loc</a>
<form action="../index.php" method="post" target="_self">
	<br>
	<input class="text_field_generic" size="20" type="text" name="username" value="User Name" onclick="if(this.value=='User Name'){this.value=''}" onblur="if
	(this.value==''){this.value='User Name'}">
	<br><br />
	</b><br>
	<input class="text_field_generic" size="20" type="text" name="fakepassword" id="fakepassword" value="Password" onfocus="pwdFocus()" />
	<input class="text_field_generic" size="20" style="display:none;" type="password" name="password" id="password" value="" onblur="pwdBlur()" />
	<br><br />
	<input type="submit" value="LOG IN" class="gen_button_prominent">
	<input type="hidden" value="validate" name="content">
	<!-- next page to go to is validate.inc.php -->
</form>

<br><br>
Need <a href="#">Sign Up?</a> Forgot <a href="#">Password?</a>