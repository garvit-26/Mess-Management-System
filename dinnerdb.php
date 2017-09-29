 <html>
<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="hostellers";
mysql_connect($host,$user,$pass);
mysql_select_db($db);

$_POST['dinnerarray'];  
     foreach($_POST['dinnerarray'] as $dinnerarray) 
   {
	$sql ="UPDATE dinner SET Votes = Votes+1 WHERE Name ='".$dinnerarray."' ";
    $res = mysql_query($sql);
   }
?>
<script type="text/javascript">
	if(confirm("Thanx Your monthly dinner Choice poll is completed")) {
    window.location.href = "meal.php"
}
</script>
</html>