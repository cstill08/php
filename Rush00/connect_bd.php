<?PHP
// $db_host = "localhost";
// $db_user = "root";
// $db_pass = "";
// $db_name = "regauth";

// $dbc = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// if (!$dbc) 
// {
// 	die("Error " . mysqli_error($dbc));
// }
$connection = mysqli_connect("localhost", "root", "", "regauth") or die("Error!!!");
?>
