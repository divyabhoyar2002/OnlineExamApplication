<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<?php
$con = mysqli_connect("localhost","root","");
$x = mysqli_select_db($con,'onlineexam');
$examdone = $_POST['y'];


$sql = "UPDATE studentinfo SET examdone='Yes' WHERE $examdone=";

$run = mysqli_query($con,$sql);
$row = mysqli_fetch_array($run);

?>
</html>