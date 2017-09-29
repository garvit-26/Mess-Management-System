 <html>
<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="hostellers";
mysql_connect($host,$user,$pass);
mysql_select_db($db);

$_POST['snacksarray'];  
     foreach($_POST['snacksarray'] as $snacksarray) 
   {
	$sql ="UPDATE snacks SET Votes = Votes+1 WHERE Name ='".$snacksarray."' ";
    $res = mysql_query($sql);
   }
?>
<script type="text/javascript">
	if(confirm("Thanx Your monthly snacks Choice poll is completed")) {
    window.location.href = "meal.php"
}
</script>
</html>