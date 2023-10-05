<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "your-email@example.com"; // Replace with your email address

    // Create email headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "OK";
    } else {
        // Error sending email
        echo "Failed to send email. Please try again later.";
    }
} else {
    // Not a POST request, show an error message
    echo "Error: Invalid request.";
}
?>
