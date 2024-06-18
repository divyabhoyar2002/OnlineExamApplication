<html>
<style type="text/css">
	*{
		background-color:  lightblue;
		font-family: arial;
		font-size: 15px;
		font-weight: bold;
	}
	h1{
		font-family: arial;
		text-align: center;
		padding: 5px; 
		font-size: 40px;
	}
	input[type=text]{
     
       padding: 0px 10px 0px 0px;
       margin: 8px 0;
       box-sizing: border-box;
	}
</style>
<h1>Edit Record Page</h1><br>
<?php
$r = $_GET['r'];
?>
<form method="post" action="editStudentInfo2.php"><pre>
										 		Roll No. 			: <input type="text" name="field1" value='<?php echo $r; ?>'/><br><br>
										 		Name 			: <input type="text" name="field2" value="<?php echo $_GET['n']; ?>" /><br><br>
											Examdone 			: <input type="text" name="field3" value="<?php echo $_GET['e']; ?>" /><br><br>
	
     														<input type="submit" value="Update Record" />
</pre>
</form>

</html>