<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
include "connect.php";
include "base.php";
session_start();
$sid=$_SESSION['sid'];
$ssele=mysql_query("select * from student_basic where uid='$sid'");
$sinfo=mysql_fetch_array($ssele);
$sselatt=mysql_query("select * from attendance where uid='$sid'");
$satt=mysql_fetch_array($sselatt);
?>
<ul class="menu_home">
<a href="home.php" class="active"><li>Home</li></a>
<a href="student_login.php"><li id="active">Student Panel</li></a>
<a href="contactus.php"><li>Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a></ul>
<br />
<div class="back">
<br />
<table width="357" height="219" border="0" align="center">
  <tr>
    <td>&nbsp;Id</td>
    <td>&nbsp;<?php echo $sinfo['id'];?></td>
  </tr>
    <tr>
    <td width="178">&nbsp;Name</td>
    <td width="114">&nbsp;<?php echo $sinfo['name'];?></td>
  </tr>
  <tr>
    <td>&nbsp;Math</td>
    <td>&nbsp;<a href="student_attended_class.php?sub=math"><?php echo $satt['math'];?></a></td>
  </tr>
  <tr>
    <td>&nbsp;Science</td>
    <td>&nbsp;<a href="student_attended_class.php?sub=science"><?php echo $satt['science'];?></a></td>
  </tr>
  <tr>
    <td>&nbsp;Eng</td>
    <td>&nbsp;<a href="student_attended_class.php?sub=eng"><?php echo $satt['eng'];?></a></td>
  </tr>
</table>
</div>
<?php
include "footer.php";
?>
</body>
</html>