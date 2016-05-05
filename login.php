<?php
include("header.php");
?>
	<div class="container">
		<div class="col-md-12">
			<h3 class="text-center">Login</h3>
			<form action="getlogin.php" method="post">				
				<label for="username">Username</label>
				<input type="text" class="form-control" name="username" id ="username" />
				<br/>
				<label for="pwd">Password</label>
				<input type="password" class="form-control" name="pwd" id ="pwd" />
				<br/>
				<input type="submit" value="Login" />
				<a href="registration.php">New User?</a>
			</form>
            <br/>
            <br/>
		</div>
	</div>

<?php
include("footer.php");
?>	