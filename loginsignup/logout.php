<?php 
session_start();
session_destroy();
echo "you have been logout";
header("refresh:2;url=loginsignup.html");

?>