<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'bruceakamps020@gmail.com';

$email_subject = 'New form submission'

$email_body = "user name: $name.\n".
               "user email: $visitor_email.\n".
               "user subject: $subject.\n".
               "user message: $message.\n";

$to = 'akampubruce@gmail.com';

$headers = "From: $email_from \r\n";

$headers . = "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header('Location:contact-page.html');
?>