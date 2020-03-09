<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email_from = $_POST['email'];
    $formcontent = $_POST['reason'];

    $to = "brukabu@gmail.com";
    $subject = "HomeMade - New Contact Form";
    $message = "From: $name. \n".
        "Message: $formcontent \n";
    $mailheader = "From: $email_from \r\n";
    $mailheader .= "Reply-To: $name \r\n";

    mail($to, $subject, $message, $mailheader) or die("Error!");
}
?>