<html>
<?php

$con = mysqli_connect("localhost","root","");
$new = mysqli_select_db($con,'onlineexam');

$roll =  $_GET['r'];

$sql = "DELETE FROM studentinfo WHERE rollno=$roll";

$x=mysqli_query($con,$sql);

if($x)
	echo "<script>alert ('Delete Record successfully...')</script>";
else
	echo "<script>alert ('Record not Delete')</script>";

echo "<script>window.open('deleteStudentInfo.php','_self')</script>";

mysqli_close($con);
?>
</html>