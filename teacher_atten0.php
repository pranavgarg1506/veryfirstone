<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript" src="jquery/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
session_start();
$id=$_SESSION['id'];
include "base.php";
include "connect.php";
$select=mysql_query("select * from teacher where uid='$id'");
$info=mysql_fetch_array($select);
$sub1=$info['sub1']; 
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
    <td width="144">&nbsp;Select Subject</td>
    <td width="130">&nbsp;<select id="sub" name="sub"><option value=""></option>
    <option value="<?php echo $sub1;?>"><?php echo $sub1;?></option>
    </select>
    </td>
  </tr>
</table>
<span id="attendance"></span>
</div>
<script>
$(document).ready(function(){
     $("#sub").change(function(){
		 var su=$("#sub").val();
		 var my="sub="+su;
		 if(su==""){
			 alert("select a branch");
			 $("#attendance").hide();
			 $("#attendance").empty();
			 }
			 else{
				 $.ajax({
					 url:"enter_student_attendance.php",
					 data:my,
					 type:'post',
					 success:function(mess){
						 $("#attendance").show();
						 $("#attendance").html(mess);
						 	 }
					 });
                  }
		 });
});
</script>
<?php
include "footer.php";
?>
</body>
</html>