
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- for redirect different page -->
    <!-- <meta http-equiv="refresh" content="0; url=https://dasilvasgroup.com/index.php"> -->
    <title>Document</title>
</head>
<body>
   
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["msg"];
    $mobile= $_POST["phone"];
    $from_date=$_POST["f_date"];
    $to_date=$_POST["t_date"];

}
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'vinayakmandare21@gmail.com';                     //SMTP username
    $mail->Password   = 'pwnm hvlu jzgg akfn';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


 //------------------------------------------------------------- Replaced this for preventing the error of server------------------------------------------------------------- 
  
    // $mail->SMTPOptions = array(
    //     'ssl' => array(
    //         'verify_peer' => false,
    //         'verify_peer_name' => false,
    //         'allow_self_signed' => true
    //     )
    // );

    // -------------------------------------------------------------------------------------------------------------------------------------------------------------

    //Recipients
    $mail->setFrom('vinayakmandare21@gmail.com', 'contact form');// sent from 
    $mail->addAddress($email, 'vinayak');     //Add a recipient
    
    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Hello';
    $mail->Body    = 'sender name - '.$name.' <br> sender email - '.$email.' <br> message - '.$message.'<br> mobile -'.$mobile.'<br> Arrival -'.$from_date.'<br> Departure -'.$to_date.'';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
  
    echo '<script>alert("Message has been sent")</script>';
    // header('location:mail.php');
    // echo '<script>location.replace("mail.php")</script>';

    
} catch (Exception $e) {
    
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
</body>
</html>
