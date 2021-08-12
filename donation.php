<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeload();

$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $_ENV['GMAIL_USER_NAME'];                     //SMTP username
    $mail->Password   = $_ENV['GMAIL_APP_PASSWORD'];                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('vocalpalettes@petiteopera.org', 'Petite Opera Chicago');  //Add a recipient
    $mail->addAddress('petiteopera@gmail.com');              //Name is optional
    $mail->addReplyTo($_POST['email'], $_POST['name']);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Attendance - ' . $_POST['name'] ;
    $mail->Body    = '<h1>Vocal Palettes & Pairing</h1><h2>Contact info:</h2><p>Full Name: ' . $_POST['name'] . '</p><p>E-Mail: ' . $_POST['email'] . '</p><p>Phone Number: ' . $_POST['phone'] . "</p><p>Number of guests: " . $_POST['party'] . '</p>';
    $mail->AltBody = "Vocal Palettes & Pairing\nContact info: \nFull Name: " . $_POST['name'] . "\nE-Mail: " . $_POST['email'] . "\nPhone Number: " . $_POST['phone'] . "\nNumber of guests: " . $_POST['party'];

    $mail->send();
    echo '<p style="width:100%; text-align:center; height:100%">Message has been sent. Redirecting to Paypal payment page...</p>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>

<script>
    setTimeout(() => {
        window.location.replace("https://paypal.com/us/fundraiser/charity/1263109");
    }, 3000);
</script>