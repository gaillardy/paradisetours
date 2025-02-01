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

    public function savoir($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Chose à savoir';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $flashMessages = FlashController::getFlashMessages();

        $metaDescription = "évation à Morondava, là où la nature raconte ses secrets!";
        $metaKeywords = "Morondava, Madagascar";

        View::render('savoir', [
            'flashMessages' => $flashMessages,
            'title'         => $title,
            'lang'          => $lang,
            'translations'  => $translations,
            'currentRoute'  => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
        ]);
    }

    public function nosybe($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Nosy be';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $flashMessages = FlashController::getFlashMessages();

        $metaDescription = "évation à Morondava, là où la nature raconte ses secrets!";
        $metaKeywords = "Morondava, Madagascar";

        View::render('nosybe', [
            'flashMessages' => $flashMessages,
            'title'         => $title,
            'lang'          => $lang,
            'translations'  => $translations,
            'currentRoute'  => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
        ]);
    }

    public function madagascar($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'madagascar';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $flashMessages = FlashController::getFlashMessages();

        $metaDescription = "évation à Morondava, là où la nature raconte ses secrets!";
        $metaKeywords = "Morondava, Madagascar";

        View::render('madagascar', [
            'flashMessages' => $flashMessages,
            'title'         => $title,
            'lang'          => $lang,
            'translations'  => $translations,
            'currentRoute'  => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
        ]);
    }

    public function morondava_long($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'morondava';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $flashMessages = FlashController::getFlashMessages();

        $metaDescription = "évation à Morondava, là où la nature raconte ses secrets!";
        $metaKeywords = "Morondava, Madagascar";

        View::render('morondava_long', [
            'flashMessages' => $flashMessages,
            'title'         => $title,
            'lang'          => $lang,
            'translations'  => $translations,
            'currentRoute'  => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
        ]);
    }

    public function morondava($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'morondava';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $flashMessages = FlashController::getFlashMessages();

        $metaDescription = "évation à Morondava, là où la nature raconte ses secrets!";
        $metaKeywords = "Morondava, Madagascar";

        View::render('morondava', [
            'flashMessages' => $flashMessages,
            'title'         => $title,
            'lang'          => $lang,
            'translations'  => $translations,
            'currentRoute'  => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
        ]);
    }

    public function sud($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Circuit RN7';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $flashMessages = FlashController::getFlashMessages();

        $metaDescription = "Explorer Madagascar avec le Circuit RN7, un voyage au coeur du sud.";
        $metaKeywords = "Sud Madagascar";

        View::render('sud', [
            'flashMessages' => $flashMessages,
            'title'         => $title,
            'lang'          => $lang,
            'translations'  => $translations,
            'currentRoute'  => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
        ]);
    }

    public function nord($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Nosy Iranja';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $flashMessages = FlashController::getFlashMessages();

        $metaDescription = "Visite : Réserve spéciale d’Ankarana (Tsingy Gris – Perte de rivière – Lémuriens)";
        $metaKeywords = "North Madagascar";

        View::render('nord', [
            'flashMessages' => $flashMessages,
            'title'         => $title,
            'lang'          => $lang,
            'translations'  => $translations,
            'currentRoute'  => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
        ]);
    }

    public function w_iranja($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Nosy Iranja';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $flashMessages = FlashController::getFlashMessages();

        $metaDescription = "Week-End à Nosy Iranja";
        $metaKeywords = "Week-End à Nosy Iranja";

        View::render('w_iranja', [
            'flashMessages' => $flashMessages,
            'title'         => $title,
            'lang'          => $lang,
            'translations'  => $translations,
            'currentRoute'  => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
        ]);
    }

    public function notfound($lang)
    {

        $title = '404 - not found';
        $translations = Language::getTranslations($lang);


        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('404', [
            'title'         => $title,
            'currentRoute'  => $currentRoute,
            'lang'         => $lang,
            'translations' => $translations,

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
