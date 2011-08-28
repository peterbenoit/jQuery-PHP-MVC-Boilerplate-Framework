
	<h2>Request Password Reset</h2>
	
	<p>Please enter your e-mail address to have your password sent to you.</p>
	<form action="./user/request" method="post" class="request-form col_7">
		<fieldset>
		<div data-role="fieldcontain">
			<label for="email">E-mail Address:</label>
			<input type="text" name="email" class="text" id="email" value="" required="required">
		</div>
			<input type="submit" data-icon="check" class="button contact" value="send reminder →">
		</fieldset>
	</form>