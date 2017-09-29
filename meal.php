<?php session_start() ?>
<html>
<link rel="stylesheet" href="log4.css" type="text/css">
<head>
<title>choose menu</title>
</head>

<body>
<body background="pics\newpic.jpg" text="#color" link="#color" vlink="#color">

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
  
  <h2>SELECT THE MEAL</h2>
  <style>
h2  {color:white;font-size:300%;font-family:sans-serif;}
</style>
<a href="bf.php" class="myButton">Breakfast</a>
<br>
<br>
<a href="lunch.php" class="myButton">Lunch</a>
<br>
<br>
<a href="snacks.php" class="myButton">Snacks</a>
<br>
<br>
<a href="dinner.php" class="myButton">Dinner</a>
 
 <br>
</html>
