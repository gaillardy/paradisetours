<?php
namespace App\Controllers;

use App\Core\View;
use App\Models\Newsletter;
use App\Helpers\FlashMessage;
use App\Helpers\Language;
use Exception;

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

    public function newsForm()
    {
        $title =  "Newsletter";

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $metaDescription = "Envoyer un newsletter";
        $metaKeywords = "S'abonner au site, newlsetter, nosy be";

        // Rendre la vue `home.php` avec les données nécessaires
        View::render('news', [
            'currentRoute'    => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'title' => $title,
        ]);
    }

    public function sendnews(){
        $news = new Newsletter();
        $subs = $news->getSubscribers();
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];
        $from = "contact@nosybeparadisetours.com";
        foreach ($subs as $items) {
            mail($items->email, $sujet, $message, "From: $from");
        }

        header("Location:/nbpt-admin/newsletter");
        exit;
    }

    public function subscribe($lang) {
        $newsletter = new Newsletter();
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
    
        // Validation de l'email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            FlashController::addFlashMessage('error', 'Veuiller entrer un email valide');
            header("Location:/$lang/home");
            exit;
        }
    
        // Ajout à la newsletter
        try {
            if ($newsletter->addSubscriber($email)) {
                FlashController::addFlashMessage('success', 'Vous êtes abonnées avec succès!');
                header("Location:/$lang/home");
            } else {
                FlashController::addFlashMessage('error', 'Vous êtes déja abonnée');
                header("Location:/$lang/home");
            }
        } catch (Exception $e) {
            // // Logger l'erreur pour le diagnostic
            // error_log($e->getMessage());
            FlashController::addFlashMessage('error', 'Une erreur c\'est produite lors du traitement, reessayer');
            header("Location:/$lang/home");
        }
        exit;
    }
    
}