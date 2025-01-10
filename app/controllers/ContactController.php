<?php
class ContactController {
    public function index() {
        $messageSent = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Sanitize input data
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $subject = htmlspecialchars($_POST['subject']);
            $message = htmlspecialchars($_POST['message']);

            // Load the model
            require_once '../app/models/ContactModel.php';
            $contactModel = new ContactModel();

            // Send the email and get the result
            $messageSent = $contactModel->sendEmail($name, $email, $subject, $message);
        }

        // Load the view and pass the result
        require_once '../app/views/contact.php';
    }
}
?>
