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
?>
<ul class="menu_home">
<a href="home.php" class="active"><li>Home</li></a>
<a href="student_login.php"><li id="active">Student Panel</li></a>
<a href="contactus.php"><li>Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a></ul>
<br />
<div class="back">
<br />
<?php
$sub=$_REQUEST['sub'];
$sid=$_SESSION['sid'];
$select=mysql_query("select * from attendedclasses where uid='$sid' and sub='$sub'") or die("selection problem");
?>
<table width="0" border="0" align="center">
  <tr>
    <td width="214">&nbsp;Date of Class</td>
    <td width="113">&nbsp;Status</td>
  </tr>
 <?php
 while($info=mysql_fetch_array($select)){
 ?>
  <tr>
    <td>&nbsp;<?php  echo $info['date'];?></td>
    <td>&nbsp;<?php  echo $info['status'];?></td>
  </tr>
  <?php
 }
  ?>
</table>

</div>
<?php
include "footer.php";
?>
</body>
</html>