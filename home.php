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
if(isset($_SESSION['id']))
{
	$che=1;
?>
<a href="home.php"><li id="active">Home</li></a>
<a href="teacher_login.php"><li>Teacher's Panel</li></a>
<a href="contactus.php"><li>Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a>
<?php 
}
if(isset($_SESSION['sid']))
{
	$che=2;
?>
<a href="home.php"><li id="active">Home</li></a>
<a href="student_login.php"><li>Student Panel</li></a>
<a href="contactus.php"><li>Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a>
<?php 
}
if($che==8)
{
?>
<a href="home.php"><li id="active">Home</li></a>
<a href="teacher_login.php"><li>Teacher's Panel</li></a>
<a href="student_login.php"><li>Student Panel</li></a>
<a href="contactus.php"><li>Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a>
<?php
}
?>
</ul>
<br>
<div class="back">
<div class="content" style="width:90%;margin:auto;">
<font size="05"><p>The Mac college is a public engineering and research institution located in Powai, Mumbai, India. 
In the QS World University Rankings 2014, Mac college was ranked as India’s top university.It is the second-oldest (after Indian Institute of Technology Kharagpur) institute of the Indian Institutes of Technology system.</p>

<p>Mac college was founded in 1958.In 1961, the Parliament decreed IITs as Institutes of National Importance.
A high-power committee of Government of India recommended in 1946 establishment of four higher institutes of technology to set the direction for the development of technical education in the country.
Planning for the Institute at Mumbai began in 1957 and the first batch of 100 students was admitted in 1958.
Since its establishment in Powai, the institute has physically expanded to include more than 584 major buildings with a combined area of more than 2.396 gross square feet (550 acres or 2.22 km²).</p>

<p>The Institute is traditionally known for its research and education in the physical sciences and engineering, and more recently in biology, economics, linguistics, and management as well.
For several years, Mac School of Engineering has been ranked first in various international and national university rankings, and the Institute is also often ranked among the world's top universities overall.
The "Engineers" compete in 31 sports, most teams of which compete in the NCAA Division III's New England Women's and Men's Athletic Conference; the Division I rowing programs compete as part of the EARC and EAWRC.</p></font>
</div>
<?php
include "footer.php";
?>
</body>
</html>