<?PHP
include ('connection.php');
if (isset($_POST['register']))
{
	function check_potential_error()
	{
		include ('connection.php');
		if (strlen($_POST['passwd']) < 6)
		{
			$err_enre =  "Please enter a password of at least six characters";
			return ("Please enter a password of at least six characters");
		}
		if (!preg_match("/^.+@.+\..+$/", $_POST['login']))
		{
			$err_enre =  "Please enter a valid login";
			return ("Please enter a valid login");
		}
		$query = mysqli_query($dbc, "SELECT * FROM `users`");
		while (($array = mysqli_fetch_assoc($query)) !== NULL)
		{
			if ($array['login'] === $_POST['login'])
			{
				$err_enre =  "This account already exists";
				return ("This account already exists");
			}
		}
		return (TRUE);
	}

if ((!isset($_POST['login']) || !isset($_POST['passwd']))
	$err_enre = "Do not forget to fill in the required fields";
else
{
	if (check_potential_error() === TRUE)
	{
		$stmt = mysqli_prepare($dbc, "INSERT INTO users(login, password) 
			VALUES (?, ?)");
		$bind = mysqli_stmt_bind_param($stmt, "ssssssss", $_POST['login'], 
			hash("whirlpool", $_POST['passwd']));
		$exec = mysqli_stmt_execute($stmt);
		$err_enre = TRUE;
	}
	else
	{
		$err_enre = check_potential_error();
	}
}
}
//echo $_POST['passwd']."<br>".$_POST['login']."<br>".$_POST['phone']."<br>";
?>
