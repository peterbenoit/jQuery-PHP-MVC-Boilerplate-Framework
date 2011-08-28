<?php

//home and or index

?>
	<nav class="width_3 col">
		<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
			<li data-role="list-divider">User Navigation:</li>
			<li><a href="./home" data-transition="slide">Home</a></li>
			<?php if($user->is_admin()){ ?><li><a href="./admin">Admin</a></li><?php } ?>
			<?php if($user->is_logged){ ?>
			<li><a href="./user" data-transition="slide">Profile</a></li>
			<?php if(UPLOAD_ENABLED){ ?>
			<li><a href="./upload" data-transition="slide">Upload</a></li>
			<?php } ?>
			<li><a href="./user/logout" data-transition="fade">Logout</a></li>
			<?php }else{ ?>
			<li><a href="./user/register" data-transition="slide">Register</a></li>
			<li><a href="./user/login" data-transition="slide">Login</a></li>
			<?php } ?>
			<li data-role="list-divider">Pages:</li>
			<li><a href="./about" data-transition="slide">About</a></li>
			<li><a href="./terms" data-transition="slide">Terms of Service</a></li>
		</ul>
	</nav>