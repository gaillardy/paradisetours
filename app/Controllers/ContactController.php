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

        $flashMessages = FlashController::getFlashMessages();


        // Rendre la vue `home.php` avec les données nécessaires
        View::render('contact', [
            'flashMessages'      => $flashMessages,
            'lang'               => $lang,
            'translations'       => $translations,
            'currentRoute'       => $currentRoute,
            'metaDescription'    => $metaDescription,
            'metaKeywords'       => $metaKeywords,
            'title'              => $title
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

        $flashMessages = FlashController::getFlashMessages();

        // Rendre la vue `home.php` avec les données nécessaires
        View::render('sendcontact', [
            'flashMessages'      => $flashMessages,
            'lang'              => $lang,
            'translations'      => $translations,
            'currentRoute'      => $currentRoute,
            'metaDescription'   => $metaDescription,
            'metaKeywords'      => $metaKeywords,
            'title'             => $title,
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
        $headers = $_POST['email'];
        

        $data = new Contact();

        if($data->addContact($nom,$clientEmail,$tel,$subject,$message)){

            mail($adminEmail, $subject, $message, $headers);
            FlashController::addFlashMessage('success','Votre message a été envoyé');
            header("Location:/$lang/contact");
           
        } 
    }
}