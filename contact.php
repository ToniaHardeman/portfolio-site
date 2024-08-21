<?php
$to = 'hello@toniahardeman.com';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$subject = 'Contact Form Submission';
$body = "Name: $name\nEmail: $email\nMessage: $message";

mail($to, $subject, $body);

header('Location: https://toniahardeman.com/thanks.html');
exit;
