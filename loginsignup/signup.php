<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$pwd=md5($pwd);

$con=mysqli_connect('localhost','root','','oosedb');
$query="INSERT INTO `login` VALUES ('','$fname','$lname','$uname','$pwd')";
$run=mysqli_query($con,$query);
if($run==TRUE)
{
	echo "inserted</a>";
	header("refresh:1;url=loginsignup.html");
	
}
else
{
	echo "not inserted";
	
}
?>