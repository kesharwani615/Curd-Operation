<?php
echo $stu_id=$_POST['sid'];
$stu_name=$_POST['sname'];
$stu_address=$_POST['saddress'];
$stu_class=$_POST['sclass'];   
$stu_phone=$_POST['sphone'];

$con=mysqli_connect('localhost','root','','crud') or die('connection failed!');
$sql="update student set s_name='{$stu_name}',s_address='{$stu_address}',s_class={$stu_class},s_phone='{$stu_phone}' where s_id={$stu_id}";
$result=mysqli_query($con,$sql) or die('query unsuccessfull.');

header("Location: http://localhost/LearnPHP/Curd%20Operation/crud_html/crud_html/index.php");

mysqli_close($con); 
?>