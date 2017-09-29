 <html>
<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="hostellers";
mysql_connect($host,$user,$pass);
mysql_select_db($db);

$_POST['luncharray'];  
     foreach($_POST['luncharray'] as $luncharray) 
   {
	$sql ="UPDATE lunch SET Votes = Votes+1 WHERE Name ='".$luncharray."' ";
    $res = mysql_query($sql);
   }
?>
<script type="text/javascript">
	if(confirm("Thanx Your monthly lunch Choice poll is completed")) {
    window.location.href = "meal.php"
}
</script>
</html>