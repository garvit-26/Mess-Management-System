 <html>
<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="hostellers";
mysql_connect($host,$user,$pass);
mysql_select_db($db);
  
     foreach($_POST['bfarray'] as $bfarray) 
   {
	$sql ="UPDATE breakfast SET Votes = Votes+1 WHERE Name ='".$bfarray."' ";
    $res = mysql_query($sql);
   }
?>
<script type="text/javascript">
	if(confirm("Thanx Your Breakfast Choice poll is completed")) {
    window.location.href = "meal.php"
}
</script>
</html>