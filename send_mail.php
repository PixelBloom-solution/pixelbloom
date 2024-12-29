<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "pixelbloomsolutions@gmail.com";
    $subject = "New Quote Request";
    $body = "Name: $name\nEmail: $email\nService: $service\nMessage:\n$message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Your request has been sent successfully!";
    } else {
        echo "There was an error sending your request. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
