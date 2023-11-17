<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "contact@yellowbirddx.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $mailBody = "Name: $name\n";
    $mailBody .= "Phone Number: $number\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Message:\n$message";

    // Send email
    $success = mail($to, $subject, $mailBody, $headers);
    // Check if the email was sent successfully
    if ($success) {
        // Display a thank you message
        echo "<p>Thank you for your submission! We will get back to you shortly.</p>";
    } else {
        // Display an error message
        echo "<p>Error sending email. Please try again.</p>";
    }
}
?>
