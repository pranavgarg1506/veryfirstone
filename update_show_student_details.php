<?php
include "connect.php";
$id=$_POST['id'];
$get=mysql_query("select * from student_basic where id='$id' and activ='Y'");
if($fet=mysql_fetch_array($get)){
?>
<br>
<table align="center" width="0" border="0">
  <tr>
    <td>&nbsp;Id</td>
    <td>&nbsp;<?php echo $id;?></td>
  </tr>
  <tr>
    <td>&nbsp;Name</td>
    <td>&nbsp;<input name="name" id="name" class="input_text" type="text" value="<?php echo $fet['name'];?>"></td>
  </tr>
  <tr>
    <td>&nbsp;Father's Name</td>
    <td>&nbsp;<input name="f_n" id="f_n" class="input_text" value="<?php echo $fet['father_name'];?>" type="text"></td>
  </tr>
  <tr>
    <td>&nbsp;Contact</td>
    <td>&nbsp;<input name="cn" id="cn" class="input_text" value="<?php echo $fet['contact'];?>" type="text"></td>
  </tr>
  <tr>
    <td>&nbsp;E-mail</td>
    <td>&nbsp;<input name="email" id="email" class="input_text" value="<?php echo $fet['email'];?>" type="text"></td>
  </tr>
  <tr>
    <td>&nbsp;Address</td>
    <td>&nbsp;<textarea class="textar" id="add" name="add" cols="" rows=""><?php echo $fet['address'];?></textarea></td>
  </tr>
  <tr align="center">
    <td colspan="2">&nbsp;<input name="sub1" id="sub1" class="sub_button" type="submit"></td>
  </tr>
</table>
<?php 
}
else
 echo "Wrong id";
?>
<script>
$(document).ready(function(){
	$("#sub1").click(function(){
	     var id='<?php echo $id;?>';
	     var name=$("#name").val();
	     var f_n=$("#f_n").val();
	     var cn=$("#cn").val();
	     var email=$("#email").val();
	     var add=$("#add").val();
		 var my="id="+id+"&name="+name+"&f_n="+f_n+"&cn="+cn+"&email="+email+"&add="+add;
		 $.ajax({
			 url:"updated_student.php",
			 data:my,
			 type:'post',
			 success:function(mess){
				 if(mess==""){
					 alert("Successfully updated");
					 }
				 
				 }
			 });  
	  });
	});
</script>