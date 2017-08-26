<?php
if (isset($_POST['submit']))
	{	  




$hostname='localhost';
$user = 'root';
$password = '';
$mysql_database = 'hotel';
$db = mysql_connect($hostname, $user, $password,$mysql_database);
mysql_select_db("hotel", $db);


session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$_SESSION['login_user']=$username;
 
$query = mysql_query("SELECT username FROM user WHERE username='$username' and password='$password'");

 if (mysql_num_rows($query) != 0)
{

 echo "<script language='javascript' type='text/javascript'> location.href='index1.php' </script>";	
  }

  else
  {
echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
}

}
header('Location: login.php'); // Redirecting To Home Page



?>
