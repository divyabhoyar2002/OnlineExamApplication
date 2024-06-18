<html>
<style type="text/css">
  *{
    background-color: lightblue;
    font-size:  30px;
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
    height: 50px;
  }
  
</style>
<h1>PASS/FAIL Results</h1>
<?php
$con = mysqli_connect("localhost","root","");
$x = mysqli_select_db($con,'onlineexam');

echo "<font size=5>";
$sql = "select * from studentresult";
$run = mysqli_query($con,$sql);

echo "<table border=1 align=center width=600 font >";
echo "<tr><th>Roll No.</th><th>Name</th><th>Subject</th><th>Marks</th><th>Result</th>";

while($row = mysqli_fetch_array($run))
{
	echo "<tr>";
    echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo "<td>$row[4]</td>";
	
	echo "</tr>";
	
}
echo "</table>";

?>
</html> 