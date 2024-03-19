<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["msg"];
    $mobile= $_POST["phone"];
    $from_date=$_POST["f_date"];
    $to_date=$_POST["t_date"];

}

require("class.phpmailer.php");

// info@dasilvasgroup.com
// Bu1Dwf?wFbkx
$mail = new PHPMailer;

$mail->IsSMTP(); // Set mailer to use SMTP
$mail->Host = "mail.dasilvasgroup.com"; // Specify main and backup server
//$mail->Host = "Give IP Address"; // If the above does not work.
$mail->Port = 465; // Set the SMTP port
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = "info@dasilvasgroup.com"; // SMTP username
$mail->Password = "Bu1Dwf?wFbkx"; // SMTP password
$mail->SMTPSecure = "ssl"; // Enable encryption, 'ssl' also accepted

$mail->From ='info@dasilvasgroup.com';
$mail->FromName = 'From name';
$mail->AddAddress('info@dasilvasgroup.com'); // Add a recipient

$mail->IsHTML(true); // Set email format to HTML

$mail->Subject = 'Hello';
$mail->Body    = 'sender name - '.$name.' <br> sender email - '.$email.' <br> message - '.$message.'<br> mobile -'.$mobile.'<br> Arrival -'.$from_date.'<br> Departure -'.$to_date.'';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


if(!$mail->Send()) {
print_r($mail);
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $mail->ErrorInfo;
exit;
}

echo 'Message has been sent';
exit(0);

?>

