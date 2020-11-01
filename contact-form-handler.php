<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = "contact@abhishek.com";             <!-- Hey this is just a demo mail address -->

$email_subject = "New Enquiry";

$email_body = "User Name: $name.\n" .
    "User Email: $visitor_email.\n" .
    "User Message: $message.\n";

$to = "abhishektupudana@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: index.html");


?>