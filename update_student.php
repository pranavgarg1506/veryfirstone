<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="jquery/jquery-1.11.1.min.js"></script>
</head>

<body>
<div id="pop1" style="display:none;"></div>
<div id="pop2" style="display:none;"></div>
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
<table width="0" border="0" align="center">
  <tr>
    <td width="71" height="57">&nbsp;Id</td>
    <td width="195">&nbsp;<input name="id" id="id" class="input_text" type="text" /></td>
  </tr>
  <tr align="center">
    <td height="73" colspan="2">&nbsp;<input name="" id="sub" class="sub_button" type="submit" /></td>
  </tr>
</table>
<script>
$(document).ready(function(){
	$("#sub").click(function(){
		var id=$("#id").val();
		my="id="+id;
		if(id==""){
			alert("Enter Id");
			return false;
		}
			 else{
				$.ajax({
					url:"update_show_student_details.php",
					data:my,
					type:'post',
					success:function(mess){
						$("#pop1").show();
						$("#pop2").show();
						$("#pop2").html(mess);
						}
					});
				}
		});
$("#pop1").click(function(){
	$("#pop1").hide();
	$("#pop2").empty();
	$("#pop2").hide();
	});		
	});
</script>
</div>
<?php
include "footer.php";
?>
</body>
</html>