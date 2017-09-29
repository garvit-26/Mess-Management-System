<html>
<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="hostellers";

mysql_connect($host,$user,$pass);
mysql_select_db($db);

  $sql = "UPDATE TABLE breakfast SET Votes = 0";
  $res = mysql_query($sql);
  exit();
?>
</html>

