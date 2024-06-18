<html>
<style type="text/css">
	*{
		background-color: #fff;
	}
</style>
<?php
$con = mysqli_connect("localhost","root","");
$new = mysqli_select_db($con,'onlineexam');

//echo $_POST['field1'];

$roll = $_POST['field1'];
$name = $_POST['field2'];
$examdone = $_POST['field3'];

$sql = "UPDATE studentinfo SET name='$name',exam='$examdone' where rollno=$roll";

$x=mysqli_query($con,$sql);

if($x)
	echo "<script>alert ('Update data successfully...')</script>";
else
	echo "<script>alert ('Error....')</script>";

echo "<script>window.open('editStduentInfo.php','_self')</script>";

mysqli_close($con);
?>
</html>