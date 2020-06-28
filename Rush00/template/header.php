<?PHP
include ('connect_bd.php');
if (isset($_POST['submit']))
{
    if (!isset($_POST['login']))
        echo "Do not forget to write your email address";
    else if (!isset($_POST['passwd']))
        echo "Do not forget to write your password";
    else
    {
        $passwd = hash("whirlpool", $_POST['passwd']);
        $mail = mysqli_real_escape_string($link, $_POST['login']);
        $query = 'SELECT email,mdp FROM client WHERE email="'.$login.'" AND mdp="'.$passwd.'"';
        $array = mysqli_query($link, $query);
        if ( mysqli_fetch_assoc($array) === NULL)
        {
            $conne = "Mauvais mail ou mauvais mot de passe, réessayez";
        }
        else
        {
            $_SESSION['loggued_on_user'] = $_POST['login'];
            header("Location: index.php");
        }
    }
}