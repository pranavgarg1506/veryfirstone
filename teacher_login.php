<?php
session_start();
include "base.php";
if(isset($_SESSION['id'])){
	header("Location:teacher_loggedin.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="jquery/jquery-1.11.1.min.js">
</script>
<script>
$(document).ready(function(){
	$("#sub").click(function(){
		var id=$("#id").val();		
		var pass=$("#pass").val();	
		var my="id="+id+"&pass="+pass;
		if(id==""){
			        $("#mac").show();		
			        $("#mac").html('<div id="doc" style="margin:auto;background-color:red;height:30px;">Enter id</div>');
			        return false;
			}
		 if(pass==""){
			         $("#mac").show()
			         $("#mac").html('<div id="doc" style="margin:auto;background-color:red;height:30px;">Enter Password</div>');
			         return false;
			 }	 
			else{
				     $.ajax({
					  url:"teacher_login_check.php",
					  data:my,
					  type:'post',
					  success:function(mess){
							if(mess=="wrong pass"){
								  alert("wrong combination");
								}
							else
							 {
								 window.location.href="teacher_loggedin.php";	
						         alert("you have successfully logged in");
							  }
						}
					});
				} 
		});	
	});
</script>

</head>

<body>
<ul class="menu_home">
<a href="home.php" class="active"><li>Home</li></a>
<a href="teacher_login.php"><li id="active">Teacher's Panel</li></a>
<a href="student_login.php"><li>Student Panel</li></a>
<a href="contactus.php"><li>Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a>
</ul>
<br />
<div class="back">
<br />
<table align="center" width="300" border="0">
  <tr>
    <td width="101" height="72">&nbsp;UId</td>
    <td width="189">&nbsp;<input name="id" class="input_text" id="id" type="text" /></td>
  </tr>
  <tr>
    <td height="107">&nbsp;Password</td>
    <td>&nbsp;<input name="pass" class="input_text" id="pass" type="password" /></td>
  </tr>
  <tr align="center">
    <td height="66" colspan="2">&nbsp;<input id="sub" class="sub_button" name="sub" type="submit" /></td>
  </tr>
</table>
<span id="mac"></span>
</div>
<?php
include "footer.php";
?>

</body>
</html>
