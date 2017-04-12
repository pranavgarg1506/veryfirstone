<?php
session_start();
include "base.php";
$_SESSION['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<ul class="menu_home">
<a href="home.php" class="active"><li>Home</li></a>
<a href="teacher_login.php"><li id="active">Teacher's Panel</li></a>
<a href="contactus.php"><li>Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a>
</ul>
<br />
<div class="back">
<br />
<table width="0" height="405" border="0" align="center">
  <tr align="center">
  <td width="286" height="137">&nbsp;<a href="insert_student.php"><input class="log_btn" type="button" value="Register Student" /></a></td>
  <td width="421">&nbsp;<a href="teacher_atten0.php"><input class="log_btn" type="button" value="Enter Attendance" /></a></td>
 </tr>
 <tr align="center">
 <td height="103"><a href="delete_student.php"><input class="log_btn" type="button" value="Delete an entery" /></a></td>
<td><a href="show_all_students.php"><input class="log_btn" type="button" value="Show all students" /></a></td>
 </tr>
  <tr align="center">
    <td height="157">&nbsp;<a href="update_student.php"><input class="log_btn" type="button" value="update student" /></a></td>
    <td>&nbsp;<a href="teacher_logout.php"><input class="log_btn" type="button" value="logout" /></a></td>
  </tr>
</table>
</div>
<?php
include "footer.php";
?>
</body>
</html>