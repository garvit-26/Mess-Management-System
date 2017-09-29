<?php session_start() ?>
<html>
<link rel="stylesheet" href="bf.css" type="text/css">
<head>
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
  
  <h2>SELECT THE 7 CHOICES FOR LUNCH</h2>
  <style>
h2  {color:black;font-size:300%;font-family:sans-serif;}
</style>

<form action ="lunchdb.php" method ="post" >

	   <input type="checkbox" value="dalchapatisabzi" name="luncharray[]" />dal chapati sabzi :
	<br>
	<br>
	<input type="checkbox" value="matarpaneer" name="luncharray[]" />matar paneer
	<br>
	<br>
	<input type="checkbox" value="kadhi" name="luncharray[]" />kadhi chapati 
	<br>
	<br>
	<input type="checkbox" value="rajma" name="luncharray[]" />Rajma Chapati 
	<br>
	<br>
	<input type="checkbox" value="dalmixvegpapad" name="luncharray[]" />papad dal sabzi chapati
	<br>
	<br>
	<input type="checkbox" value="chholebhature" name="luncharray[]" />Chhole Bhature      
	<br>
	<br>
	<input type="checkbox" value="dumaloo" name="luncharray[]" />Dum Aloo 
	<br>
	<br>
	  <input type="checkbox" value="dalmakhni" name="luncharray[]" />Dal Makhni
	<br>
	<br>
	<input type="checkbox" value="mixvegmixdal" name="luncharray[]" />Mix veg Mix dal
	<br>
	<br>
	<input type="checkbox" value="kofta" name="luncharray[]" />kofta
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
	
	<br>
	
 <br>
</html>

















