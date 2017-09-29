<?php session_start() ?>
<html>
<link rel="stylesheet" href="log2.css" type="text/css">
<head>
<title>Welcome</title>
</head>

<body>
<body background="pics\newpic.jpg" text="#color" link="#color" vlink="#color">

<ul id="navigation">
<li><a href="second.php">Home</a></li>

 <li class="sub">
 <a href="third.php">Choose Mess</a>
  </li>
 
 <li>
  <a href="meal.php#">Choose Menu</a>
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
a {color:blue;}
</style>
</h1>
<a href="logout.php">Not you ?(Sign In again.) </a>
<h2>Choose Wisely....Eat Well </h2>
  <style>
h2   {color:white;}
</style>

<img src="pics\foodquote.jpg"style="width:500px;height:300px;float:right">
<div id="header">
</div>
<div id="section">
<h1>About Us</h1>
<p>We are a group that has made a project on online college mess choice selection and menu choice system that
can provide the students residing in the hostels of the college, a hassle-free unbiased and easy alternative to the monthly selection of the Mess in which they want to eat.
</p>
<p>Also we have created a system that can give the students the power to decide the weekly Menu for the mess based on 
polling results which will be calculated after the students vote for their favourite dishes.</p>
<style>
p  {color:white;font-size:120%;}
</style>
</div>
</html>