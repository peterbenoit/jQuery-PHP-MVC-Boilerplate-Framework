
	<h2>Login</h2>

	<p>Please login to access the member content.</p>
	
	<form method="post" action="./user/login" class="login-form col_7">
		<fieldset>
		<div data-role="fieldcontain">
			<label for="email" class="ui-input-text">E-mail Address:</label>
			<input type="email" name="email" class="text" id="email" value="" required="required">
		</div>
		<div data-role="fieldcontain">
			<label for="password">Password:</label>
			<input type="password" name="password" class="text" id="password" required="required">
		</div>
		<input type="hidden" name="task" value="login">
		<input type="hidden" name="return_to" value="">
		<input type="submit" data-icon="check" class="button login" value="login →">
		<a href="./user/register" style="margin-left:100px">New User?</a>
		</fieldset>
	</form>