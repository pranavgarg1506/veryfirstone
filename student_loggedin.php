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
?>
<ul class="menu_home">
<a href="home.php" class="active"><li>Home</li></a>
<a href="student_login.php"><li id="active">Student Panel</li></a>
<a href="contactus.php"><li>Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a></ul>
<br />
<div class="back">
<br />
<table width="611" height="294" border="0" align="center">
  <tr align="center">
    <td width="300" height="138">&nbsp;<a href="student_attendance.php"><input value="Check Attendance" name="" class="log_btn" type="submit" /></a></td>
    <td width="301">&nbsp;<a href="change_student_pass.php"><input value="Change Password" name="" class="log_btn" type="submit" /></a></td>
  </tr>
  <tr align="center">
    <td height="150">&nbsp;<a href="stu_student_profile.php"><input value="View Profile" name="" class="log_btn" type="submit" /></a></td>
 <td width="301"><a href="student_logout.php"><input type="submit" value="Log out" class="log_btn" name=""></a></td>
  </tr>
</table>

</div>
<?php
include "footer.php";
?>
</body>
</html>