<?php
$to = 'hello@toniahardeman.com';

// Validate and sanitize input
if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    if ($name && $email && $message) {
        $subject = 'Contact Form Submission';
        $body = "Name: $name\nEmail: $email\nMessage: $message";

        // Send email
        if (mail($to, $subject, $body)) {
            header('Location: https://toniahardeman.com/thanks.html');
            exit;
        } else {
            echo 'Error sending email. Please try again later.';
        }
    } else {
        echo 'Please fill in all the required fields.';
    }
} else {
    echo 'Invalid request. Please try again.';
}
