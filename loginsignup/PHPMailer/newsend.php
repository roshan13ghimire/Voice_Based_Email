<?php
session_start();
$user=$_SESSION['uname'];
$pass=$_SESSION['pwd'];

$to=$_POST['to'];
$subject=$_POST['subject'];
$body=$_POST['body'];

  require("src/PHPMailer.php");
  require("src/SMTP.php");
  require("src/Exception.php");
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
 
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'STARTTLS'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.office365.com";
    $mail->Port = 587; // or 587
    $mail->IsHTML(true);
    $mail->Username = "$user";
    $mail->Password = "$pass";
    $mail->SetFrom("$user");
    $mail->Subject =$subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
 
     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
	
?>
<h3>Click <a href="../mailer.html">here</a> to send more.</h3>
<h3>Click <a href="../logout.php">here</a> to logout.</h3>