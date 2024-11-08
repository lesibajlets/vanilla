<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Recipient email address (change this to your support email)
    $to = "bklesiba@gmail.com";  // Replace with your email
    $subject = "New Contact Us Form Submission";
    
    // Email body
    $body = "You have received a new message from your website contact form.\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message successfully sent!";
    } else {
        echo "Message sending failed!";
    }
} else {
    echo "Form submission error!";
}
?>
