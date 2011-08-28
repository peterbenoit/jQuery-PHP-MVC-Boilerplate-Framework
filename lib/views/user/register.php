
	<h2>Register</h2>
	<form action="./user/register" method="post" class="register-form col_8">
		<fieldset>
		<div data-role="fieldcontain">
			<label for="name">Name:</label>
			<input type="text" name="name" class="text" id="name" value="<?php echo $_POST['name']; ?>" required="required">
		</div>
		<div data-role="fieldcontain">
			<label for="email">E-mail Address:</label>
			<input type="email" name="email" class="text" id="email" value="<?php echo $_POST['email']; ?>" required="required">
		</div>
		<div data-role="fieldcontain">
			<label for="password">Password:</label>
			<input type="password" name="password" class="text" id="password" value="<?php echo $_POST['password']; ?>" required="required">
		</div>
		<div data-role="fieldcontain">
			<label for="password2">Confirm Password:</label>
			<input type="password" name="password2" class="text" id="password2" value="<?php echo $_POST['password2']; ?>" required="required">
		</div>
			<input type="submit" data-icon="check" class="button contact" value="register →">
			<a href="./user/login" style="margin-left:115px">Already a User?</a>
		</fieldset>
	</form>