<html>
<style type="text/css">
	*{
		background-color: #6900ff;
	}
</style>
<h1></h1>
<?php

$roll = $_POST['field1'];
$name = $_POST['field2'];
$exam = $_POST['field3'];

$con = mysqli_connect("localhost","root","");
$new = mysqli_select_db($con,'onlineexam');
$sql = "INSERT INTO studentinfo VALUES ($roll,'$name','$exam')";

$x=mysqli_query($con,$sql);

if($x)
	echo "<script>alert ('Inserted data successfully...')</script>";
else
	echo "<script>alert ('Data Not Inserted/may duplicate roll no....')</script>";

echo "<script>window.open('addStudentInfo.php','_self')</script>";
mysqli_close($con);
?>
</html>