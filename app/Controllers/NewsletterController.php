<?php
namespace App\Controllers;

use App\Core\View;
use App\Models\Newsletter;
use App\Helpers\FlashMessage;
use App\Helpers\Language;

class NewsletterController {

    public function showForm($lang)
    {
        // Charger les traductions pour la langue donnée
        $translations = Language::getTranslations($lang);

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $metaDescription = "S'abonner au site";
        $metaKeywords = "S'abonner au site, newlsetter, nosy be";

        // Rendre la vue `home.php` avec les données nécessaires
        View::render('newsletter', [
            'lang'         => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'=>$metaKeywords
        ]);
    }

    public function newsForm($lang)
    {
        // Charger les traductions pour la langue donnée
        $translations = Language::getTranslations($lang);

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $metaDescription = "Envoyer un newsletter";
        $metaKeywords = "S'abonner au site, newlsetter, nosy be";

        // Rendre la vue `home.php` avec les données nécessaires
        View::render('news', [
            'lang'            => $lang,
            'translations'    => $translations,
            'currentRoute'    => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords
        ]);
    }

    public function sendnews($lang){
        $news = new Newsletter();
        $subs = $news->getSubscribers();
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];
        $from = "contact@nosybeparadisetours.com";
        foreach ($subs as $items) {
            mail($items->email, $sujet, $message, "From: $from");
        }
    }

    public function subscribe($lang) {
        $newsletter = new Newsletter();
        $email = $_POST['email'];
        
        if ($newsletter->addSubscriber($email)) {
            // FlashMessage::add('success', 'You have successfully subscribed to the newsletter!');
        } else {
            // FlashMessage::add('error', 'Subscription failed. Try again later.');
        }
        header('Location:/en/newsletter'); // Rediriger vers la page d'accueil
        exit;
    }
}