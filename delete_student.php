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
<table align="center" width="281" border="0">
  <tr>
    <td width="109" height="48">&nbsp;Id</td>
    <td width="162">&nbsp;<input name="id" id="id"  class="input_text" type="text" /></td>
  </tr>
  <tr>
    <td height="61">&nbsp;Name</td>
    <td>&nbsp;<input name="name" id="name" class="input_text" type="text" /></td>
  </tr>
  <tr align="center">
    <td height="68" colspan="2">&nbsp;<input name="sub" id="sub" class="sub_button" type="submit" /> </td>
    </tr>
</table>
<script>
$(document).ready(function(){
	$("#sub").click(function(){
		var id=$("#id").val();
		var name=$("#name").val();
		var my="id="+id+"&name="+name;
		if(id==""){
			alert("enter Id")
			return false;
			}
		    if(name==""){
				alert("enter Name");
				return false;
				}
				else{
					$.ajax({
						url:"student_deleted.php",
						data:my,
						type:'post',
						success:function(mess){
							if(mess=="deleted successfully"){
								alert("deleted successfully");
								window.location.href="teacher_loggedin.php";
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