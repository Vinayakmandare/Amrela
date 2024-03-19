<?php

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["msg"];
    $mobile= $_POST["phone"];
    $from_date=$_POST["f_date"];
    $to_date=$_POST["t_date"];

require("class.phpmailer.php");

// info@dasilvasgroup.com
// Bu1Dwf?wFbkx
$mail = new PHPMailer;

$mail->IsSMTP(); // Set mailer to use SMTP
$mail->Host = "mail.dasilvasgroup.com"; // Specify main and backup server
//$mail->Host = "Give IP Address"; // If the above does not work.
$mail->Port = 465; // Set the SMTP port
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = "info@dasilvasgroup.com"; // SMTP username(email/gmail id)
$mail->Password = "Bu1Dwf?wFbkx"; // SMTP password
$mail->SMTPSecure = "ssl"; // Enable encryption, 'ssl' also accepted

$mail->From ='info@dasilvasgroup.com';
$mail->FromName = 'From name';
$mail->AddAddress('info@dasilvasgroup.com'); // Add a recipient

$mail->IsHTML(true); // Set email format to HTML

$mail->Subject = 'Enquiry';
$mail->Body    = 'Sender name - '.$name.' <br> Sender email - '.$email.' <br> Message - '.$message.'<br> Mobile -'.$mobile.'<br> Arrival -'.$from_date.'<br> Departure -'.$to_date.'';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


if(!$mail->Send()) {
print_r($mail);
echo '<script>alert("Message could not be sent.")</script>';
// echo 'Mailer Error: ' . $mail->ErrorInfo;
exit;
}

echo '<script>alert("Your Enquiry is submitted successfully")</script>';
echo '<script>location.replace("index.php");</script>';
exit(0);
}

else if(isset($_POST['subscribe'])){
$subscribe=$_POST['sub'];
require("class.phpmailer.php");
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
$mail->FromName = 'Amarela Restaurant With Bar';
$mail->AddAddress($subscribe); // Add a recipient

$mail->IsHTML(true); // Set email format to HTML

$mail->Subject = 'Subscribed';
$mail->Body    = 'Hello You have subscribed our website!';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


if(!$mail->Send()) {
print_r($mail);
echo '<script>alert("An Error Occurred!Please try again...")</script>';
// echo 'Mailer Error: ' . $mail->ErrorInfo;
exit;
}

echo '<script>alert("You have successfully subscribed our Website!")</script>';
echo '<script>location.replace("index.php");</script>';
exit(0);
}


else {
    $name = $_POST["name"];
    // $email = $_POST["email"];
    $message = $_POST["msg"];
    $mobile= $_POST["phone"];
    $from_date=$_POST["f_date"];
    $to_date=$_POST["t_date"];

    require("class.phpmailer.php");
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

$mail->Subject = 'Enquiry';
$mail->Body    = 'Sender name - '.$name.' <br> Message - '.$message.'<br> Mobile -'.$mobile.'<br> Arrival -'.$from_date.'<br> Departure -'.$to_date.'';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


if(!$mail->Send()) {
print_r($mail);
echo '<script>alert("Message could not be sent.")</script>';
// echo 'Mailer Error: ' . $mail->ErrorInfo;
exit;
}

echo '<script>alert("Your Enquiry is submitted successfully")</script>';
echo '<script>location.replace("index.php");</script>';
exit(0);
}
?>

