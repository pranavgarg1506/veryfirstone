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
include "connect.php";
session_start();
$uid=$_SESSION['sid'];
$se=mysql_query("select * from student_basic where uid='$uid' and activ='Y'");
$val=mysql_fetch_array($se);
?>
<ul class="menu_home">
<a href="home.php" class="active"><li>Home</li></a>
<a href="student_login.php"><li id="active">Student Panel</li></a>
<a href="contactus.php"><li>Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a></ul>
</ul>
<br />
<div class="back">
<br />
<table align="center" width="0" border="0">
  <tr>
    <td width="145" height="36">&nbsp;User Id</td>
    <td width="166">&nbsp;<?php echo $val['uid'];?></td>
  </tr>
  <tr>
    <td height="45">&nbsp;College Id</td>
    <td>&nbsp;<?php echo $val['id'];?></td>
  </tr>
  <tr>
    <td height="31">&nbsp;Name</td>
    <td>&nbsp;<?php echo $val['name'];?></td>
  </tr>
  <tr>
    <td height="42">&nbsp;Father's Name</td>
    <td>&nbsp;<?php echo $val['father_name'];?></td>
  </tr>
  <tr>
    <td height="37">&nbsp;Branch</td>
    <td>&nbsp;<?php echo $val['branch'];?></td>
  </tr>
  <tr>
    <td height="37">&nbsp;Contact</td>
    <td>&nbsp;<?php echo $val['contact'];?></td>
  </tr>
  <tr>
    <td height="38">&nbsp;Address</td>
    <td>&nbsp;<?php echo $val['address'];?></td>
  </tr>
</table>
</div>
<?php
include "footer.php";
?>
</body>
</html>