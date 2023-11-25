<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $number = $_POST["number"];

    $to = "lioscar58@gmail.com";
    $subject = "Mail From website";
    $headers = "From: " .$email;
    
    $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message; 
    $headers = "From: noreply@yoursite.com" . "\r\n" ."CC: somebodyelse@example.com";
    if ($email!=NULL) {
        mail($to,$subject,$txt,$headers);
        // Display a thank you message
        echo "<p>Thank you for your submission! We will get back to you shortly.</p>";
    } else {
        // Display an error message
        echo "<p>Error sending email. Please try again.</p>";
    }
}
?>