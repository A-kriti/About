<?php
    $name=$_POST("NAME");
    $visitor_email=$_POST("EMAIL");
    $message=$_POST("MESSAGE")

    $email_form="itsalldesignn@gmail.com";
    $email_subject="New Form Submission";
    $email_body="User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Message:$message.\n";

    $to = "akritirock2131@gmail.com";
    $headers="From: $email_form \r\n ";
    $headers .="Reply-To:$visitor_email\r\n ";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>