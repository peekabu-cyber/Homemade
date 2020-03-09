<?php
//if(isset($_POST['submit'])) {
//    $name = $_POST['name'];
//    $email_from = $_POST['email'];
//    $formcontent = $_POST['reason'];
//
//    $to = "brukabu@gmail.com";
//    $message = "From: $name. \n".
//        "Message: $formcontent \n";
//    $mailheader = "From: $email_from \r\n";
//    $mailheader .= "Reply-To: $name \r\n";
    $mail = new PHPMailer();

    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';

    $mail->Host       = "https://xhomemadex.herokuapp.com"; // SMTP server example
    $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->Port       = 25;                    // set the SMTP port for the GMAIL server
    $mail->Username   = "brukabu@gmail.com"; // SMTP account username example
    $mail->Password   = "Yawn78242662130445566pop";        // SMTP account password example

// Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'HomeMade - New Contact Form';
    $mail->Body    = `From: $name \n Message: $formcontent \n`;
    $mail->AltBody = `From: $name \n Message: $formcontent \n`;






//    mail($to, $subject, $message, $mailheader) or die("Error!");
//}
?>