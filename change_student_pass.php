<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="jquery/jquery-1.11.1.min.js"></script>
</head>
<body>
<?php
include "base.php";
?>
<ul class="menu_home">
<a href="home.php" class="active"><li>Home</li></a>
<a href="student_login.php"><li id="active">Student Panel</li></a>
<a href="contactus.php"><li>Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a>
</ul>
<br />
<div class="back">
<br />
<table width="0" border="0" align="center">
  <tr>
    <td width="134" height="78">&nbsp;Old Password</td>
    <td width="193">&nbsp;<input type="text" id="oldpass" name="oldpass" class="input_text"></td>
  </tr>
  <tr>
    <td height="69">&nbsp;New Password</td>
    <td>&nbsp;<input type="text" id="newpass" name="newpass" class="input_text"></td>
  </tr>
  <tr align="center">
    <td height="89" colspan="2">&nbsp;<input id="sub" class="sub_button" type="submit"></td>
  </tr>
</table>
<script>
$(document).ready(function(){
 $("#sub").click(function(){
	 var op=$("#oldpass").val();
	 var np=$("#newpass").val();
	 var my="oldpass="+op+"&newpass="+np;
	 if(op==""||np==""){
		 alert("enter password");
		 return false;
		 }
		 else{
			 $.ajax({
				 url:"student_password_changed.php",
				 type:'post',
				 data:my,
				 success:function(mess){
					 if(mess==""){
						 window.location.href="student_loggedin.php"
						 alert("password changed successfully");
						 }
					 }
				 });
			 }
	 });    
});
</script>
</div>
<?php
include "footer.php";
?>
</body>
</html>