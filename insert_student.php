<?php
include "connect.php";
include "base.php";
session_start();
$id=$_SESSION['id'];
$se=mysql_query("select * from teacher where uid='$id'");
$ba=mysql_fetch_array($se);
$bran=$ba['branch'];
?>
<script type="text/javascript" src="jquery/jquery-1.11.1.min.js">
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/style.css">
<script>
$(document).ready(function(){
	$("#sub").click(function(){
		var name=$("#name").val();
		var cn=$("#cn").val();
		var f_n=$("#f_n").val();
		var add=$("#add").val();
		var branch=$("#branch").val();
		var email=$("#email").val();
		var my="name="+name+"&cn="+cn+"&branch="+branch+"&email="+email+"&add="+add+"&f_n="+f_n;
			               if(name==""||cn==""||branch==""){
							   alert("mandatory field empty");
							   return false;
							   }
						   else{
						     $.ajax({
				                    url:"insert_into_student.php",
				                    data:my,
				                    type:'post',
				                    success: function(mess){
									alert(mess);
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
<a href="contactus.php"><li>Contact Us</li></a>
<a href="aboutus.php"><li>About Us</li></a>
</ul>
<br>
<div class="back">
<br />
<table width="399" align="center" border="0">
  <tr>
    <td width="165" height="40">&nbsp;Name*</td>
    <td width="224">&nbsp;<input class="input_text" id="name" name="name" type="text" /></td>
  </tr>
  <tr>
    <td height="40">&nbsp;Contact No*</td>
    <td>&nbsp;<input class="input_text" name="cn" id="cn" type="number" /></td>
  </tr>
  <tr>
    <td height="36">&nbsp;Branch*</td>
    <td>&nbsp;<input class="input_text" name="branch" id="branch" type="hidden" value="<?php echo $bran;?>" /><?php echo $bran;?></td>
  </tr>
  <tr>
    <td height="46">&nbsp;Father's Name</td>
    <td>&nbsp;<input class="input_text" name="f_n" id="f_n" type="text" /></td>
  </tr>
 <tr>
     <td height="48">&nbsp;Address</td>
    <td>&nbsp;<textarea class="textar" name="add" id="add" cols="" rows="3"></textarea></td>
   </tr>

  <tr>
    <td height="39">&nbsp;E-mail</td>
    <td>&nbsp;<input class="input_text" name="email" id="email" type="email" /></td>
  </tr>
  <tr align="center">
    <td height="62" colspan="2">&nbsp;<input class="sub_button" name="sub" id="sub" type="submit" />
</td>
  </tr>
</table>
<span id="mac"></span>
</div>
<?php
include "footer.php";
?>
</body>
</html>