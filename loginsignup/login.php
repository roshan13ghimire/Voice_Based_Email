<?php
session_start();
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$pwd1=md5($pwd);
$con=mysqli_connect('localhost','root','','oosedb');
if($con==TRUE)
{
//	echo 'connected';
	
	
}	
else
{
	
	echo 'not connected';
	
}
$q="select * from login where uname='$uname' and pwd='$pwd1'";
$run=mysqli_query($con,$q);
if(mysqli_fetch_array($run))
{
	
	echo "login successfully";
	$_SESSION['uname']="$uname";
	$_SESSION['pwd']="$pwd";
	
	header("refresh:1;url=mailer.html");

}
else
{
	echo "invalid username or password";
	header("refresh:1;url=loginsignup.html");
}

?>
