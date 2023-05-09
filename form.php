<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];

$email_subject='Sanunatta98@gmail.com';
$email_subject='New Submission';
$email_body="User Name : $name.\n".
           "User Email : $visitor_email.\n".
          "User Subject : $subject.\n".
           "User Massage : $massage.\n".

    $to='Sanunatta98@gmail.com';
    $headers="Form : $email_form \r\n";
    $headers .="Reply-To : $visitor_email \r\n;
    mail($to,$email_subject,$email_body,$headers);
    header("Location : contact.html");

 ?>