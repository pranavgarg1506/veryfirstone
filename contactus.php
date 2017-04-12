<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
include "base.php";
$che=8;
session_start();
?>
<ul class="menu_home">
<?php 
if(isset($_SESSION['id'])){
	$che=1;
?>
<a href="home.php"><li>Home</li></a>
<a href="teacher_login.php"><li>Teacher's Panel</li></a>
<a href="contactus.php"><li id="active">Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a>
<?php 
}
if(isset($_SESSION['sid'])){
	$che=2;
?>
<a href="home.php"><li>Home</li></a>
<a href="student_login.php"><li>Student Panel</li></a>
<a href="contactus.php"><li id="active">Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a>
<?php 
}
if($che==8){
?>
<a href="home.php"><li>Home</li></a>
<a href="teacher_login.php"><li>Teacher's Panel</li></a>
<a href="student_login.php"><li>Student Panel</li></a>
<a href="contactus.php"><li id="active">Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a>
<?php
}
?>
</ul>
<br />
<div class="back">
<br />
<br />
<br />
<br />
<div align="center"><font size="05">Phone No.:-8989889XXX
<br />
E-Mail:-maccooledge@macmail.com
</font>
</div>
</div>
<?php
include "footer.php";
?>
</body>
</html>