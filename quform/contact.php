<?php
// Your email address where the form submissions will be sent
$to = 'abefalglobalhomecare@gmail.com';

// Grab the form data
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validate the form data
if (!$name || !$email || !$subject || !$message) {
    echo 'error';
    exit;
}

// Prepare the email content
$email_subject = "Contact Form: $subject";
$email_body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: $email\r\nReply-To: $email\r\n";

// Send the email
if (mail($to, $email_subject, $email_body, $headers)) {
    echo 'success';
} else {
    echo 'error';
}
?>
