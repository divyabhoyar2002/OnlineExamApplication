<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: #ccffff;
			color: red;
			text-align: center;
			font-size: 30px;
			line-height: 50px;
			font-family: cursive, sans-serif;
			font-weight: bold;
		}
		.container{
			width: 40%;
			height: 200px;
			background-color: #43a5be;
			padding-left: 0px;
			margin-left: 350px;
			border-radius: 20px;
			box-shadow: 0px 0px 5px 5px #96c3eb;
		}
		span.score
			{
			position:relative;
			left:0px;
			top:30px;
			color: #330066;
			}
		span.result{
			position: relative;
			left: 0px;
			top: 33px;
		}	
		a.score2
			{
			position:relative;
			left:0px;
			top:35px;
			}
		a{
			text-decoration: none;
		}

	</style>
</head>
<body>
<?php

$con = mysqli_connect("localhost","root","");
$x = mysqli_select_db($con,'onlineexam');
$roll = $_GET['r'];
//echo "Hello...........................$roll";
$sql = "select * from studentinfo where rollno=$roll";
$run = mysqli_query($con,$sql);
$row=mysqli_fetch_array($run);
$name = $row[1];

if(isset($_POST['submit'])){
$subject = @$_POST['subject'];
$count=0;
//echo "$subject";
$sql = "select * from $subject";
$run = mysqli_query($con,$sql);

$a=1;
//$sql="DELETE FROM temp";
//$del=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($run)){
	$userans=@$_POST[$a];
	if($userans==$row[6]){
		$count++;
	}
	$a++;
  }
}
echo "<br><br><br><br>";
echo "<div class=container>";
echo "<span class='score'>Your Score is : $count</span><br>";
if($count>=5)
{
      echo "<span class='result'><font color=#006400>Result : PASS</span><br>";
      $result="PASS";
}
else
{
      echo "<span class='result'><font color=red>Result : FAIL</span><br>";
      $result="FAIL";

}

$qry = "UPDATE studentinfo SET exam='Yes' WHERE rollno=$roll";
$run = mysqli_query($con,$qry);

$qry = "INSERT INTO studentresult VALUES ($roll, '$name', '$subject', $count, '$result')";
$run = mysqli_query($con,$qry);

echo "<a class='score2' href='test3.php?s=$subject'>Check for wrong answer</a>";
echo "</div>";
?>
</body>
</html>