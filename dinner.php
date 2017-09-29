<?php session_start() ?>
<html>
<link rel="stylesheet" href="bf.css" type="text/css">
<head>
<script type="text/javascript">
function checkboxlimit(checkgroup, limit){
	var checkgroup=checkgroup
	var limit=limit
	for (var i=0; i<checkgroup.length; i++){
		checkgroup[i].onclick=function(){
		var checkedcount=0
		for (var i=0; i<checkgroup.length; i++)
			checkedcount+=(checkgroup[i].checked)? 1 : 0
		if (checkedcount>limit){
			alert("You can only select a maximum of "+limit+" checkboxes")
			this.checked=false
			}
		}
	}
}

</script>
<title>choose menu</title>
</head>

<body>
<body background="pics\menupic.jpg" text="#color" link="#color" vlink="#color">

<ul id="navigation">
<li><a href="second.php">Home</a></li>

 <li class="sub">
 <a href="third.php">Choose Mess</a>
  </li>
 
 <li>
  <a href="meal.php">Choose Menu</a>
 </li>

 <li>
 <a href="logout.php">Logout</a>
 </li>
</ul>
<br>

<h1>
  <span>Welcome <?php echo $_SESSION['username']; ?></span>
  <style>
h1   {color:white;}
</style>
</h1>
<div class="container">
  
  <h2>SELECT THE 7 CHOICES FOR DINNER</h2>
  <style>
h2  {color:black;font-size:300%;font-family:sans-serif;}
</style>

<form action ="dinnerdb.php" method ="post" >

	<input type="checkbox" value="dalrotisabzi" name ="dinnerarray[]" />Dal Sabzi Chapati
	<br>
	<br>
	<input type="checkbox" value="chanamasala" name ="dinnerarray[]" />Chana Masala  
	<br>
	<br>
	<input type="checkbox" value="kadhaipaneer" name ="dinnerarray[]" />Kadhai paneer
	<br>
	<br>
	<input type="checkbox" value="chickenmasala" name ="dinnerarray[]" />Chicken masala  
	<br>
	<br>
	<input type="checkbox" value="shahipaneer" name ="dinnerarray[]" />Shahi Paneer 
	<br>
	<br>
	<input type="checkbox" value="eggcurry" name ="dinnerarray[]" />Egg Curry   
	<br>
	<br>
	<input type="checkbox" value="jeeraricemixveg" name ="dinnerarray[]" />Mix Veg Jeera Rice Chapati      
	<br>
	<br>
	<input type="checkbox" value="aloopalak" name ="dinnerarray[]" />Aloo Palak       
	<br>
	<br>
	<input type="checkbox" value="palakpaneer" name ="dinnerarray[]" />Palak Paneer    
	<br>
	<br>
	<input type="checkbox" value="manchurian" name ="dinnerarray[]" />Manchurian Gravy      
	<br>
	<br>
	<input type="submit" class="button-0"></a>

<style type="text/css">
.button-0 {
    position: relative;
    padding: 10px 40px;
    margin: 0px 10px 10px 0px;
    float: left;
    border-radius: 10px;
    font-family: 'Helvetica', cursive;
    font-size: 25px;
    color: #FFF;
    text-decoration: none;  
    background-color: #3498DB;
    border-bottom: 5px solid #2980B9;
    text-shadow: 0px -2px #2980B9;
    /* Animation */
    transition: all 0.1s;
    -webkit-transition: all 0.1s;
}

.button-0:hover, 
.button-0:focus {
    text-decoration: none;
    color: #fff;
}

.button-0:active {
    transform: translate(0px,5px);
    -webkit-transform: translate(0px,5px);
    border-bottom: 1px solid;
}
</style>
	</FORM>
	<script type="text/javascript">
		checkboxlimit(document.forms.world.countries, 7)
		</script>
	
	<br>
	
 <br>
</html>