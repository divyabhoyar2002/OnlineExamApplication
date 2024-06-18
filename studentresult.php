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
$rollno = $_POST['r'];
$name = $_POST['n'];
$subject = $_POST['s'];
$marks = $_POST['m'];
$result = $_POST['r'];

$sql = "INSERT INTO studentresult VALUES ($rollno, $name, $subject, $marks, $result)";

$run = mysqli_query($con,$sql);
$row = mysqli_fetch_array($run);

?>
</html>