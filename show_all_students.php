<?php
include "connect.php";
session_start();
$id=$_SESSION['id'];
$se=mysql_query("select * from teacher where uid='$id' and activ='Y'");
$get=mysql_fetch_array($se);
$branch=$get['branch'];
$se_stu=mysql_query("select * from student_basic where branch='$branch' and activ='Y'");
?>
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
<a href="teacher_login.php"><li id="active">Teacher's Panel</li></a>
<a href="contactus.php"><li>Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a></ul></ul>
<br />
<div class="back">
<br />
<table width="392" align="center" border="0">
  <tr><td width="90">UId</td>
    <td width="78">&nbsp;Id</td>
    <td width="210">&nbsp;Name</td>
  </tr>
  <?php while($val=mysql_fetch_array($se_stu))
  {
	  ?>
  <tr><td><?php echo $val['uid'];?></td>
    <td>&nbsp;<a href="student_profile.php?id=<?php echo $val['id'];?>"><?php echo $val['id'];?></a></td>
    <td>&nbsp;<?php echo $val['name'];?></td>
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