<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    if ($name && $email && $message) {
        $to = "swatisrivastava@gmail.com.com";
        $subject = "Github - Contact Form Submission";
        $body = "Name: $name\n";
        $body .= "Email: $email\n\n";
        $body .= "Message:\n$message";
        $headers = "From: $email";
        
        if (mail($to, $subject, $body, $headers)) {
            header("Location: index.php?status=success#contact");
        } else {
            header("Location: index.php?status=error#contact");
        }
    } else {
        header("Location: index.php?status=error#contact");
    }
} else {
    header("Location: index.php");
}
?>