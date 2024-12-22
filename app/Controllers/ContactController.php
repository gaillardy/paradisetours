<?php
namespace App\Controllers;
use App\Core\View;
use App\Helpers\Language;


class ContactController {
    public function showForm($lang)
    {
        // Charger les traductions pour la langue donnée
        $translations = Language::getTranslations($lang);

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $metaDescription = "Description contact";
        $metaKeywords = "Keywords for contact";

        // Rendre la vue `home.php` avec les données nécessaires
        View::render('contact', [
            'lang'         => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'=>$metaKeywords
        ]);
    }

    public function sendEmail() {
        $adminEmail = "admin@example.com";
        $subject = "Contact Form Submission";
        $message = $_POST['message'];
        $headers = "From: {$_POST['email']}";

        echo $message."</br>";
        echo $headers."</br>";
        echo "Email sent successfully!";

        if (mail($adminEmail, $subject, $message, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email.";
        }
    }
}