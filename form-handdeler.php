<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form = 'rklaser8@gmail.com';

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
                  "User Name: $visitor_email.\n".
                   "User Name: $subject.\n".
                    "User Name: $message.\n".;



$to = 'ragavanskml@gmail.com';

$headers = "Form: $email_form \r\n"
$headers .= "Reply-to: $visitor_email \r\n";
?>