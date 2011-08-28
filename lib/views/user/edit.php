
	<h2>Update Contact Info</h2>
	<div data-role="fieldcontain"><strong>Note:</strong> Only enter your password if you wish to change it, otherwise leave it blank.</div>
	<form action="edit" method="post" class="register-form">
		<div data-role="fieldcontain">
			<label for="name">Name:</label>
			<input type="text" name="name" class="text" id="name" value="<?php echo $user_name; ?>">
		</div>
		<div data-role="fieldcontain">
			<label for="email">E-mail Address:</label>
			<input type="text" name="email" class="text" id="email" value="<?php echo $user_email; ?>">
		</div>
		<div data-role="fieldcontain">
			<label for="password">Password:</label>
			<input type="password" name="password" class="text" id="password">
		</div>
		<div data-role="fieldcontain">
			<label for="password2">Confirm Password:</label>
			<input type="password" name="password2" class="text" id="password2">
		</div>
		<div data-role="fieldcontain">
			<label></label>
			<input type="submit" class="button contact" value="Update">
		</div>
	</form>