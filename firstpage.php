<!DOCTYPE html>
<html>
<head>
	<title>Online Exam Portal</title>
	<style>
		.start{
			display: flex;
		}
		.heading{
			color: white;
			background-color: blue;
			width: 100%;
			height: 90px;
			font-size: 30px;
			font-family: cursive, sans-serif;
			box-shadow:;
			

		}
		.first{
			background-color: #2ecc71;
			width: 30%;
			height: 100px;
			
			font-size: 40px;
			font-family: cursive, sans-serif;
			margin-left: 170px;
			margin-top: 100px;
			border-radius: 4px;
			box-shadow: 1px 1px 10px 12px #7fecad;
		}
		.second{
			background-color: #2ecc71;
			width: 30%;
			height: 100px;
			justify-content: center;
			align-items: center;
			font-size: 40px;
			font-family: cursive, sans-serif;
			margin-left: 50px;
			margin-top: 100px;
			border-radius: 4px;
			box-shadow: 1px 1px 10px 12px #7fecad;


		}
		h1{
           
			text-align: center;
			margin-bottom: 45px;
			align-items: center;
		}
		a{
			text-decoration: none;
		    color: black;
		    font-weight: bold;
		    padding-left: 50px;
		    position:relative;
			left:0px;
			top:20px;

		}
	</style>
</head>
<body>
<div class="heading">
	<h1>Online Exam Portal</h1>
</div>
<div class="start">
<div class="first"><a href=adminpanel.php>Admin Panel</a></div>
<div class="second" name=subject><a href=studentpanel.php>Student Panel</a></div>
</div>
</body>
</html>