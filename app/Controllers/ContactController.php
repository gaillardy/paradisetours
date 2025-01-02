<?php
namespace App\Controllers;
use App\Core\View;
use App\Helpers\Language;
use App\Models\Contact;


class ContactController {
    public function showForm($lang)
    {
        // Charger les traductions pour la langue donnée
        $translations = Language::getTranslations($lang);

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $metaDescription = "formulaire de  contact Nosy be Paradise Tours";
        $metaKeywords = "formulaire de  contact";
        $title = "Contact";
        unset($_SESSION['contact_success']);

        // Rendre la vue `home.php` avec les données nécessaires
        View::render('contact', [
            'lang'         => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'title' => $title
        ]);
    }

    public function success($lang)
    {
        // Charger les traductions pour la langue donnée
        $translations = Language::getTranslations($lang);

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $metaDescription = "formulaire de  contact Nosy be Paradise Tours";
        $metaKeywords = "formulaire de  contact";
        $title = "Contact";

        // Rendre la vue `home.php` avec les données nécessaires
        View::render('sendcontact', [
            'lang'         => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'title' => $title,
        ]);
    }

    public function sendEmail($lang) {
        // Charger les traductions pour la langue donnée
        Language::getTranslations($lang);
        $adminEmail = "contact@nosybeparadisetours.com";
        $subject = $_POST['sujet'];
        $message = $_POST['message'];
        $clientEmail = $_POST['email'];
        $tel = $_POST['tel'];
        $nom = $_POST['nom'];
        $headers = "From: {$_POST['email']}";
        

        $data = new Contact();

        if($data->addContact($nom,$clientEmail,$tel,$subject,$message)){

            $_SESSION['contact_success'] = true;

            header("Location:/$lang/contact/success");
            /**
             * Envoie du message à l'admin
             */
            // if (mail($adminEmail, $subject, $message, $headers)) {
                
            // } else {
            //     $msgerror =  "Failed to send email.";
            // }
        } 
    }
}