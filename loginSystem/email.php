<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Load PHPMailer library

// Sender's email address and name
$sender_email = 'deepak@gmail.com';
$sender_name = 'Admin';

// Receiver's email address
$recipient_email = 'recipient_email@example.com';

// Generate a unique token for email verification
$token = bin2hex(random_bytes(32));

// Store the token in the database with the user's email

// Create a PHPMailer object
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.example.com';                     // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'your_email@example.com';                     // SMTP username
    $mail->Password   = 'your_password';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($sender_email, $sender_name);
    $mail->addAddress($recipient_email);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Email Verification';
    $mail->Body    = 'Please click the following link to verify your email address: <a href="https://example.com/verify_email.php?token=' . $token . '">https://example.com/verify_email.php?token=' . $token . '</a>';

    $mail->send();
    echo 'Verification email has been sent.';
} catch (Exception $e) {
    echo "Verification email could not be sent. Error: {$mail->ErrorInfo}";
}

?>
