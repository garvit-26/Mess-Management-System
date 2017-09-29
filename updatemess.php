 <html>
<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="hostellers";
  $regno = $_POST['regno'];

mysql_connect($host,$user,$pass);
mysql_select_db($db);
if(isset($_POST['choice']))
{
  $radio=$_POST['choice'];
  $sql ="UPDATE basic_details SET messchoosen = '".$radio."' WHERE regno ='".$regno."' ";
   $res = mysql_query($sql);
}
?>
<script type="text/javascript">
	if(confirm("Thanx Your Mess Choice Has Been Recorded..")) {
    window.location.href = "second.php"
}
</script>
</html>