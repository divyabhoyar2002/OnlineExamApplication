<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<style type="text/css">

        body{
			font-family: sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}
		.login-container{
			background-color: lightblue;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			padding: 20px;
			width: 300px;
			text-align: center;
		}
		.login-container h2{
			color: #333;
		}
		.login-form{
			margin-top: 20px;
		}
		.form-group{
			margin-bottom: 15px;
			font-weight: bold;
		}
		.form-group label{
			display: block;
			margin-bottom: 5px;
			color: #555;
		}
		.form-group input{
			width: 100%;
			padding: 8px;box-sizing: border-box;
			border: 1px solid #ccc;
			border-radius: 4px;
			font-size: 16px;
		}
		.form-group button{
			background-color: #4caf50;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
		}
		.form-group button:hover{
			background-color: #45a049;
		}
	</style>
</head>
<body>

<div class="login-container">	
<h2>Login to your account</h2>
<form class="login-form" method="post" action="loginprocess.php">
	<div class="form-group">
	<label for="username">Username or Email</label>
    <input type="text" id="username" name="username"></div>
<div class="form-group">
	<label for="password">Password</label>
    <input type="password" id="password" name="password"></div>
<div class="form-group">
<button type="submit">Login</button> 
</form> 
</div>  
</body>
<?php

session_start();
$_SESSION["divya"]=0;
?>
</html>