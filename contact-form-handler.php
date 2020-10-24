<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "abhishekrnc790@gmail.com";

    $email_subject = "New Enquiry";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "abhishektupudana@gmail.com"

    