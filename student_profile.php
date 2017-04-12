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
session_start();
$id=$_REQUEST['id'];
$sh=mysql_query("select * from student_basic where id='$id'");
$stu=mysql_fetch_array($sh);
include "base.php";
?>
<ul class="menu_home">
<a href="home.php" class="active"><li>Home</li></a>
<a href="teacher_login.php"><li id="active">Teacher's Panel</li></a>
<a href="contactus.php"><li>Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a>
</ul>
<br />
<div class="back">
<br />
<table align="center" width="0" border="0">
    <tr>
    <td width="115" height="35">&nbsp;Id</td>
    <td width="195">&nbsp;<?php echo $stu['id'];?></td>
  </tr>
  <tr>
    <td height="40">&nbsp;Name</td>
    <td>&nbsp;<?php echo $stu['name'];?></td>
  </tr>
  <tr>
    <td height="42">&nbsp;Father's Name</td>
    <td>&nbsp;<?php echo $stu['father_name'];?></td>
  </tr>
  <tr>
    <td height="38">&nbsp;Branch</td>
    <td>&nbsp;<?php echo $stu['branch'];?></td>
  </tr>
  <tr>
    <td height="35">&nbsp;Contact No.</td>
    <td>&nbsp;<?php echo $stu['contact'];?></td>
  </tr>
  <tr>
    <td height="43">&nbsp;Address</td>
    <td>&nbsp;<?php echo $stu['address'];?></td>
  </tr>
  </table>
</div>
<?php
include "footer.php";
?>
</body>
</html>