<?php
class ContactModel {
    public function sendEmail($name, $email, $subject, $message) {
        $to = "wiljanverhoeven@xs4all.nl";
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Create the email message
        $fullMessage = "Name: $name\n";
        $fullMessage .= "Email: $email\n\n";
        $fullMessage .= "Message:\n$message";

        // Attempt to send the email
        if (mail($to, $subject, $fullMessage, $headers)) {
            return "Email sent.";
        } else {
            return "Could not send email.";
        }
    }
}
?>
