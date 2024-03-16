<?php

$stu_name=$_POST['sname'];
$stu_address=$_POST['saddress'];
$stu_class=$_POST['class'];
$stu_phone=$_POST['sphone'];

$con=mysqli_connect('localhost','root','','crud') or die('connection failed!');
$sql="insert into student(s_name,s_address,s_class,s_phone) values('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result=mysqli_query($con,$sql) or die('query unsuccessfull.');

header("Location: http://localhost/LearnPHP/Curd%20Operation/crud_html/crud_html/index.php");


mysqli_close($con);
?>