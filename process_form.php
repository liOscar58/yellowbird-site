<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $mailTo = "contact@yellowbirddx.com";
    $headers = "From: " .$email;

    $txt = "You have received an e-mail from " .$name.".\n\n".$message;
    mail($email, $number, $message, $headers);
    header("Location: index.html?mailsend");
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
