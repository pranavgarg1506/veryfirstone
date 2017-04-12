<?php
include "connect.php";
session_start();
$tid=$_SESSION['id'];
$sub=$_POST['sub'];
$tget=mysql_query("select * from teacher where uid='$tid'") or die("t prob");
$tinfo=mysql_fetch_array($tget);
$tbr=$tinfo['branch'];
$stget=mysql_query("select * from student_basic where branch='$tbr'") or die(" s prob");
?>
<br>
<br>
<form action="entered_student_attendance.php" method="post">
<input name="sub" type="hidden" value="<?php echo $sub;?>">
<table align="center" width="0" border="0">
  <tr>
    <td width="55" height="39">&nbsp;Id</td>
    <td width="85">&nbsp;Name</td>
    <td width="92">&nbsp;Present</td>
    <td width="105">&nbsp;Absent</td>
  </tr>
  <?php 
  while($stinfo=mysql_fetch_array($stget))
  {
  ?>
  <tr>
    <td height="40">&nbsp;<?php echo $stinfo['id'];?></td>
    <td>&nbsp;<?php echo $stinfo['name'];?></td>
    <td>&nbsp;<input name="<?php echo $stinfo['uid']?>" type="radio" value="1" checked="checked"></td>
    <td>&nbsp;<input name="<?php echo $stinfo['uid']?>" type="radio" value="0"></td>
  </tr>
  <?php
   }
  ?>
  <tr>
    <td colspan="4" align="center" height="48">&nbsp;<input name="" type="submit"></td>
      </tr>
</table>
</form>