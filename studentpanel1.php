<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background-color: #6abadeba;
			font-family: cursive;
		}
		.login{
			width: 382px;
			overflow: hidden;
			margin: auto;
			margin: 20 0 0 450px;
			padding: 25px;
			background: #23463f;
			border-radius: 15px;
		}
		h2{
			text-align: center;
			color: #277582;
			padding: 0px;
			font-size: 40px;
		}
		label{
			color: #08ffd1;
			font-size: 17px;
		}
		#rollno{
			width: 300px;
			height: 30px;
			border: none;
			border-radius: 3px;
			padding-left: 8px;
		}
		#name{
			width: 300px;
			height: 30px;
			border: none;
			border-radius: 3px;
			padding-left: 8px;
		}
		#log{
			width: 80px;
			height: 30px;
			border: none;
			border-radius: 17px;
			padding-left: 8px;
			color: blue;
			font-weight: bold;
			margin-left: 120px;
		}
		span{
			color: white;
			font-size: 17px;
		}
		a{
			float: right;
			background-color: grey;
		}
	</style>
</head>
<body>
<h2>Fill the Details</h2>	
<?php
$con = mysqli_connect("localhost","root","");
$x = mysqli_select_db($con,'onlineexam');
$subject = @$_GET['t'];
?>
<div class="login">
  <form id="login" method="POST" action="error.php">

  	<input type=hidden name=subject value=<?php echo $subject; ?>>

  	<label><b>Roll No.</b></label><br>
  	<input type="text" name="rollno" id="rollno" placeholder="Enter Your Roll No."><br><br><br>
  	 
  	<input type="submit" name="log" id="log" value="Next"><br><br>
   
    <!--Forgot <a href="#">Roll No.</a>-->

  </form>
</div>
</body>

</html>