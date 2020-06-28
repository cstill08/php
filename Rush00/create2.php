<?php
	//include ('template/header.php');
	include "create.php";
	include "login.php";

?>

<div class="form">
<form id="Registr" class="std" method="post" action="create.php">
	<fieldset>
		<h3>Create an account</h3>
		<?php   
		if(isset($err_enre))
		{
			if ($err_enre === TRUE)
				echo "<span class='succes'>Your account has been successfully created</span>";
			else
				echo "<span class='error'> $err_enre </span>";
				
		}
	?>
		<div class="labele">
			Login: <input id="login" type="text" name="login" /> <br>
			Password: <input id="passwd" type="password" name="passwd" /> <br>
			<input type="submit" class="submit" value="Create an account" name="register">
		</div>
	</fieldset>
</form>
</div>

<div class="form">
<form id="Auth" class="std" method="post" action="create.php">
	<fieldset>
		<h3>Connect</h3>
		<?php   
		if(isset($conne))
		{
				echo "<span class='error'>$conne</span>";
		}
		?>
		<div class="labele">
			Login: <input id="login" type="text" name="login" /> <br>
			Password: <input id="passwd" type="password" name="passwd" /> <br>
			<input type="submit" class="submit" name="сonnect" value="Connect">
		</div>
	</fieldset>
</form>
</div>
