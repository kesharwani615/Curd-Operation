<?php
$stu_id=$_GET['id'];

$con=mysqli_connect('localhost','root','','crud') or die('connection failed!');
$sql="delete from student where s_id=$stu_id";
mysqli_query($con,$sql);

header("Location: http://localhost/LearnPHP/Curd%20Operation/crud_html/crud_html/index.php");

mysqli_close($con);
?>