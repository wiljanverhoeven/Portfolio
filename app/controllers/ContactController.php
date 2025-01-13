<?php
require_once './app/model/ContactModel.php';

class ContactController {
    public function index() {
        $messageSent = null;

        //Check if the form was submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //Retrieve input
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $subject = htmlspecialchars($_POST['subject']);
            $message = htmlspecialchars($_POST['message']);

            //send the email
            $contactModel = new ContactModel();
            $messageSent = $contactModel->sendEmail($name, $email, $subject, $message);
        }

        include './app/views/contact.php';
    }
}
?>
