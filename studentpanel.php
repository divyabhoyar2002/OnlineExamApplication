<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			background-color: #ccffff;
		}
		div{
			height: 60px;
			width: 70%;
			margin-left: 50px;
			color: red;
			font-family: cursive;
			font-size: 20px;
			text-decoration: underline;
		}
		a{
			text-decoration: none;
			text-align: center;
			padding-left: 500px;
            color: black;
            font-weight: bold;
            font-family: cursive;

		}
		
	</style>
</head>
<body>
<div class="first"><h1>Select your courses.</h1></div>

<?php
$con = mysqli_connect("localhost","root","");
$x = mysqli_select_db($con,'onlineexam');
$c = @$_POST['subject'];

$sql = "select * from subjectlist";
$run = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($run))
{
	if($row[1]=="mscit")
		$cr = "MS-CIT";
	if($row[1]=="tally")
		$cr = "Tally Accounting";
	if($row[1]=="ms_office")
		$cr = "MS-OFFICE";
	if($row[1] == "web_design")
		$cr = "WEB DESIGNING";
	if($row[1] == "Advance-exel")
		$cr = "ADVANCE EXEL";
	if($row[1] == "DTP")
		$cr = "DTP";
	echo "<br><br><a href='studentpanel1.php?t=$row[1]'>$cr";
	
}


?>

</body>
</html>