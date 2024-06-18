<html>
<style type="text/css">
	*{
		background-color: lightblue;
		font-size:  20px;
	}
	h1{
		text-align: center;
		font-size: 40px;
	}
	table{
		border-collapse: collapse;
		color: black;
	}
	td{
		height: 40px;
	}
	a{
		color: blue;
	}
</style>
<body>
	<h1>Edit Student Record</h1>
<?php
$con = mysqli_connect("localhost","root","");
$x = mysqli_select_db($con,'onlineexam');

echo "<font size=3>";
$sql = "select * from studentinfo";
$run = mysqli_query($con,$sql);

echo "<background color = red>";
echo "<table border=1 align=center width=700 font >";
echo "<tr><th>Roll No.</th><th>Name</th><th>Examdone</th><th>Edit</th></tr>";

while($row = mysqli_fetch_array($run))
{
	echo "<tr>";
    echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td><a href='editStudentInfo1.php?r=$row[0]&n=$row[1]&e=$row[2]'>Edit</a></td>";
	echo "</tr>";

}
echo "</table>";
//?r=$row[0]&n=$row[1]&c=$row[2]&e=$row[3]
?>
</body>
</html>