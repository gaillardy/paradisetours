<?php

namespace App\Controllers;

use App\Helpers\Language;
use App\Core\View;

class HomeController
{
    
    public function index($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Accueil';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $flashMessages = FlashController::getFlashMessages();

        View::render('home', [
            'flashMessages' => $flashMessages,
            'title'         => $title,
            'lang'          => $lang,
            'translations'  => $translations,
            'currentRoute'  => $currentRoute,
        ]);
    }

    public function about($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'A propos';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $metaDescription = "A propos Nosy be Paradise Tour";
        $metaKeywords = "A propos Nosy be Paradise Tour";

        View::render('about', [
            'lang'         => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'title' => $title,
        ]);
    }

    public function service($lang)
    {
        // Charger les traductions pour la langue donnée
        $translations = Language::getTranslations($lang);

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $metaDescription = "Service Nosy be Paradise Tour";
        $metaKeywords = "Service Nosy be Paradise Tour";
        $title = "Service";

        // Rendre la vue `home.php` avec les données nécessaires
        View::render('service', [
            'lang'         => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'title' => $title,
        ]);
    }

    public function guide($lang)
    {
        // Charger les traductions pour la langue donnée
        $translations = Language::getTranslations($lang);

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $metaDescription = "Voyager peut-être excitant et stressant à la foi, 
        surtout lorsqu’il s’agit d’une nouvelle destination. 
        Cependant, Il est toujours plus prudent  de savoir où on va.";
        $metaKeywords = "Nosy be, guide";
        $title = "Guide";

        // Rendre la vue `home.php` avec les données nécessaires
        View::render('guide', [
            'lang'         => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'title' => $title,
        ]);
    }
}
