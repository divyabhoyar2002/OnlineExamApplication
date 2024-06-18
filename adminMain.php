<html>
<style type="text/css">
	*{
		color: black;
		background-color: lightblue;
	    text-decoration: none;
	    text-align: left;
	    margin-top: 20px;
	    padding-left: 50px;
	}
    .container{
		background-color: #43a5be;
		height: 300px;
		width: 40%;
		margin-left: 200px;
		margin-top: 50px;
		border-radius: 10px;
	}
	input{
		padding-left: 0px;
		margin-left: 130px;
		margin-top: -20px;
		text-decoration: none;
		border: none;
		font-size: 16px;
		border:1px solid black;
		padding: 8px 15px;
		background-color: gray;
		font-weight: bold;
	}
	a{ 
		
        background-color: #43a5be;
		line-height: 40px;
		font-weight: bold;
		font-family: roboto;
		font-style: italic;
	}
	a:link{
		color: red;
	}
	a:visited{
		color: black;
	}
	a:hover{
		color: red;
	}
	a:active{
		color: blue;
	}

</style>
<font size=5 font color=red text align=center>
<form method=post action=abc4.php>

<?php
/*session_start();
if($_SESSION['divya']==0)
  {
  	echo "<script>alert('Please login with divya2_login')</script>";
  	echo "<script>window.open('divya2_login','_self')</script>";

  }*/
?>
<div class="container">
<a href="viewStudentInfo.php">View Student Information</a><br>
<a href="addStudentInfo.php">Add New Student Information</a><br>
<a href="editStduentInfo.php">Edit Student Record</a><br>
<a href="viewResult.php">View Student Result</a><br>
<a href="deleteStudentInfo.php">Delete Student Record</a><br><br><br>
<input type="submit" value="LOGOUT"><br><br>
</div>
</form>
</html>