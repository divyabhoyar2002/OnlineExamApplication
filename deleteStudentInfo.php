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
		border-color: black;
	}
	td{
		height: 40px;
	}
	a{
		color: red;
	}
</style>
<h1>Click Delete....</h1>
<?php
$con = mysqli_connect("localhost","root","");
$x = mysqli_select_db($con,'onlineexam');

echo "<font size=5>";
$sql = "select * from studentinfo";
$run = mysqli_query($con,$sql);


echo "<table border=2 align=center width=700 font >";
echo "<tr><th>Roll No.</th><th>Name</th><th>Examdone</th><th>Delete</th></tr>";

while($row = mysqli_fetch_array($run))
{
	echo "<tr>";
    echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td><a href='deleteStudentInfo1.php?r=$row[0]&n=$row[1]&e=$row[2]'>Delete</a></td>";
	echo "</tr>";

}
echo "</table>";

?>
</html>