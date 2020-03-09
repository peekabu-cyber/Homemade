<?php
//if(isset($_POST['submit'])) {

$SENDGRID_API_KEY='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';
require 'vendor/autoload.php';


$email = new \SendGrid\Mail\Mail();
$email->setFrom("test@example.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("test@example.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}

//
//    $name = $_POST['name'];
//    $email_from = $_POST['email'];
//    $formcontent = $_POST['reason'];
//
//    $to = "brukabu@gmail.com";
//    $message = "From: $name. \n".
//        "Message: $formcontent \n";
//    $mailheader = "From: $email_from \r\n";
//    $mailheader .= "Reply-To: $name \r\n";
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);
//var_dump($_POST);
//
//    $mail = new PHPMailer();
//
//    $mail->IsSMTP();
//    $mail->CharSet = 'UTF-8';
//
//    $mail->Host       = "https://xhomemadex.herokuapp.com"; // SMTP server example
//    $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
//    $mail->SMTPAuth   = true;                  // enable SMTP authentication
//    $mail->Port       = 25;                    // set the SMTP port for the GMAIL server
//    $mail->Username   = "brukabu@gmail.com"; // SMTP account username example
//    $mail->Password   = "Yawn78242662130445566pop";        // SMTP account password example
//
//// Content
//    $mail->isHTML(true);                                  // Set email format to HTML
//    $mail->Subject = 'HomeMade - New Contact Form';
//    $mail->Body    = `From: $name \n Message: $formcontent \n`;
//    $mail->AltBody = `From: $name \n Message: $formcontent \n`;
//
//
//
//


    mail($to, $subject, $message, $mailheader) or die("Error!");
//}
?>