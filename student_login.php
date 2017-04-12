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
session_start();
include "base.php";
if(isset($_SESSION['sid']))
   {
	header("Location:student_loggedin.php");
	}
?>
<ul class="menu_home">
<a href="home.php" class="active"><li>Home</li></a>
<a href="teacher_login.php"><li>Teacher's Panel</li></a>
<a href="student_login.php"><li id="active">Student Panel</li></a>
<a href="contactus.php"><li>Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a></ul></ul>
<br />
<div class="back">
<br />
<table width="0" align="center" border="0">
  <tr>
    <td width="90" height="64">&nbsp;UId</td>
    <td width="171">&nbsp;<input class="input_text" id="id" name="id" type="text" /></td>
  </tr>
  <tr>
    <td height="93">&nbsp;Password</td>
    <td>&nbsp;<input class="input_text" id="pass" name="pass" type="password" /></td>
  </tr>
  <tr align="center">
    <td height="109" colspan="2">&nbsp;<input name="sub" id="sub" class="sub_button" type="submit" /></td>
  </tr>
</table>
</div>
<script>
    $(document).ready(function(){
        $("#sub").click(function(){
			var id=$("#id").val();
			var pass=$("#pass").val();
			var my="id="+id+"&pass="+pass;
			 if(id==""){
				 alert("enter id");
				 return false;
				 }
				 if(pass=="")
				 {
					 alert("enter password");
					 return false;
					 }
					 else{
						 $.ajax({
							 url:"student_login_check.php",
							 data:my,
							 type:'post',
							 success:function(mess){
								 if(mess==""){
									window.location.href="student_loggedin.php"; 
									 }
									 else
									 alert(mess);
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