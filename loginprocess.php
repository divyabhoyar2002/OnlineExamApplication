<html>
<?php
session_start();
//$_SESSION["divya"]=1;
$con = mysqli_connect("localhost","root","");
$x = mysqli_select_db($con,'onlineexam');
$user1 = @$_POST['username'];
$pass1 = @$_POST['password'];
$sql = "select * from admin";
$run = mysqli_query($con,$sql);
$row = mysqli_fetch_array($run);
$user2=$row[1];
$pass2=$row[2];
//echo "<br>$user2";
//echo "<br>$pass2";
if($user1==$user2 && $pass1==$pass2){
  echo "<script>window.open('adminMain.php','_self')</script>";

}
else
{
	echo "<script>alert('Invalid Username/Password');</script>";
   echo "<script>window.open('adminpanel.php','_self')</script>";
}


?>
</html>