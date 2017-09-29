<?php session_start() ?>
<html>
<link rel="stylesheet" href="log3.css" type="text/css">
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
<a href="logout.php">Not you ?(Sign In again.) </a>
<div class="container">
  
  <h2>RESPOND TO YOUR MESS CHOICE</h2>
  <style>
  a {color:blue;}
h2  {color:white;font-size:300%;font-family:sans-serif;}
</style>
 
  </div>
 <form action ="updatemess.php" method ="post" > 
 REGNO: <input type="checkbox" checked name="regno" value = <?php  echo $_SESSION['username'];?> <br>
 <br>
 <br>
venkateshwara:<input type="radio" name="choice" value="venk" class="radio"/>
<br>
<br>
sushila:<input type="radio" name="choice" value="sush" class="radio"/>
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
</div>
</html>
