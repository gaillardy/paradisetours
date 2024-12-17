<?php
namespace App\Controllers;

class ContactController {
    public function showForm() {
        include __DIR__ . '/../Views/contact.php';
    }

    public function sendEmail() {
        $adminEmail = "admin@example.com";
        $subject = "Contact Form Submission";
        $message = $_POST['message'];
        $headers = "From: {$_POST['email']}";

        if (mail($adminEmail, $subject, $message, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email.";
        }
    }
}