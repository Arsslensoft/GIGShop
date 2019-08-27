<?php
function SendMail($address, $subject, $alt, $body)
{
require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();


//$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.yourdomain.com"; // SMTP server           
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "ns0.ovh.net"; // sets the SMTP server
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "no-reply@greedingames.net"; // SMTP account username
$mail->Password   = "A4SD9e4uiv";        // SMTP account password

$mail->SetFrom('no-reply@greedingames.com', 'Greed in Games Shop');

$mail->AddReplyTo("no-reply@greedingames.com", "Greed in Games Shop");

$mail->Subject    = $subject;

$mail->AltBody    = $alt; // optional, comment out and test

$mail->MsgHTML($body);


$mail->AddAddress($address, "Greed in Games");


if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
}
    ?>