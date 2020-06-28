<?PHP
include ('connection.php');
if (isset($_POST['сonnect']))
{
if (!isset($_POST['login']))
	echo "Do not forget to write your login";
else if (!isset($_POST['passwd']))
	echo "Do not forget to write your password";
else
{
	$passwd = hash("whirlpool", $_POST['passwd']);
	$login = mysqli_real_escape_string($dbc, $_POST['login']);
	$query = 'SELECT login,password FROM user WHERE login="'.$login.'" AND password="'.$passwd.'"';
	$array = mysqli_query($dbc, $query);
	if ( mysqli_fetch_assoc($array) === NULL)
	{
		$conne = "Wrong email or wrong password, try again";
	}
	else
	{
		$_SESSION['loggued_on_user'] = $_POST['login'];
		header("Location: index.php");
	}
}
}
?>
