<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			background-color: #ccffff;
		}
		h1{
			text-align: center;
			width: 100%;
			height: 70px;
			margin-top: 20px;
			font-family: cursive, sans-serif;
			font-size: 50px;
	        color: #8f71ff;
			background-color: #9fe8fa;
		}
		h2{
			font-family: cursive, sans-serif;
			line-height: 20px;
			color: blue;
		}
		table{
			padding-left: 30px;
			line-height: 40px;
			font-weight: bold;
			font-size: 15px;
		}
		.button{
			background-color: #04AA6D;
			border: none;
			color: white;
			text-align: center;
			text-decoration: none;
			font-size: 18px;
			display: inline-block;
			margin: 50px 500px;
			cursor: pointer;
			border-radius: 8px;
			padding: 15px 32px;
		}
	</style>
</head>
<body>
	<?php
	$cr=$_GET['t'];
	
	if($cr=="mscit")
		$cr = "Certificate Course in MS-CIT";
	if($cr=="tally")
		$cr = "Certificate Course Tally Accounting";
	if($cr=="ms_office")
		$cr = "MS-OFFICE";
	if($cr == "web_design")
		$cr = "WEB DESIGNING";
	if($cr == "Advance-exel")
		$cr = "ADVANCE EXEL";
	if($cr == "DTP")
		$cr = "DTP";
	?>
    
<?php
$con = mysqli_connect("localhost","root","");
$x = mysqli_select_db($con,'onlineexam');
$rollno = $_GET['r'];
$name = $_GET['n'];
echo "<h2>Enrollment No. : $rollno</h2>";
echo "<h2>Student Name : $name</h2>";
?>    

<div class="heading"><h1><?php  echo $cr; ?></h1></div>

<?php
$subject = $_GET['t'];
$sql = "select * from $subject";
$run = mysqli_query($con,$sql);

	echo"<form method='POST' action='test2.php?r=$rollno' ><table>";
while($row = mysqli_fetch_array($run))
{
    echo "<tr><td>$row[0].$row[1]</td></tr>
    <tr><td><input type=radio name=$row[0] value=1>$row[2]</td></tr>
    <tr><td><input type=radio name=$row[0] value=2>$row[3]</td></tr>
    <tr><td><input type=radio name=$row[0] value=3>$row[4]</td></tr>
    <tr><td><input type=radio name=$row[0] value=4>$row[5]</td></tr>";
}
echo "</table>";
echo "<input type=hidden name=subject value=$subject>"; //to send the value of subject to test2.php
echo "<input class=button type=submit name=submit value=Submit>";
echo"</form>";
?>

</body>
</html>