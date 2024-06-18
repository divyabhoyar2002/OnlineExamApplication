<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>
<?php 
  //echo "<br><br><a href='test.php?t=$row[1]'>$cr";
$con = mysqli_connect("localhost","root","");
$x = mysqli_select_db($con,'onlineexam');
$c = $_POST['rollno'];
$sub = $_POST['subject'];
//echo $c;
$sql = "select * from studentinfo where rollno='$c'";
$run = mysqli_query($con,$sql);
$row = mysqli_fetch_array($run);
//$name = $row[1];
$examdone = $row[2];
if($row)
	{
	if($examdone=="Yes")
		{
		echo "<script>alert('Exam is already done, Pls contact Admin for Re-Exam')</script>";
		echo "<script>window.open('studentpanel1.php','_self')</script>";
		}
	else
		{
		echo "<script>window.open('test.php?t=$sub&r=$row[0]&n=$row[1]&y=$examdone','_self')</script>";
		}
    }
else
	{
	echo "<script>alert('Invalid Roll No., Pls contact Admin')</script>";
    echo "<script>window.open('studentpanel1.php','_self')</script>";
	}

?>
</html>