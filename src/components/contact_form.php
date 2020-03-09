<?php
if(isset($_POST['submit'])) {
    echo "got here";
    echo var_dump($_POST);
    echo "got here";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $formcontent = $_POST['reason'];
    echo "got here";
    $recipient = "brukabu@gmail.com";
    $subject = "HomeMade - New Contact Form";
    $message = "From: $name \n Message: $formcontent";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $message, $mailheader) or die("Error!");
    echo "Thanks!";
}
?>