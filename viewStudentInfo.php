<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			background-color: lightblue;
		}
		h1{
			text-align: center;
		}
	</style>
</head>
<body>
<h1>Student Information</h1>
</body>
<?php
$con = mysqli_connect("localhost","root","");
$x = mysqli_select_db($con,'onlineexam');


$sql = "select * from studentinfo";
$run = mysqli_query($con,$sql);

echo "<background color = red>";
echo "<table border=1 align=center width=700 font >";
echo "<tr><th>Roll No.</th><th>Name</th><th>Examdone</th></tr>";

while($row = mysqli_fetch_array($run))
{
	echo "<tr>";
    echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "</tr>";
	
}
echo "</table>";

?>
</html>