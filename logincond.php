<html>
<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="hostellers";

mysql_connect($host,$user,$pass);
mysql_select_db($db);

if(isset($_POST['regno']))
{
  $regno=$_POST['regno'];
  $password=$_POST['password'];
  $sql = "SELECT * FROM basic_details WHERE regno ='".$regno."' AND password ='".$password."'";
  $res = mysql_query($sql);

if(mysql_num_rows($res))
{

	$sql1 = "SELECT name FROM basic_details WHERE regno ='".$regno."' AND password ='".$password."'";
	$res1 = mysql_query($sql1);

	if($row = mysql_fetch_assoc($res)) 
	{
    $regno = $row['name'];
	}

	$_SESSION['username'] =  $regno;
	header("Location: second.php");
	exit();
}
else
{
  echo "Invalid log in";
  exit();
}
}
?>
</html>

