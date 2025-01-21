<?php

namespace App\Controllers;

use App\Helpers\Language;
use App\Core\View;

class ServiceController
{

    public function index($lang)
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
            'lang'            => $lang,
            'translations'    => $translations,
            'currentRoute'    => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'title'           => $title,
        ]);
    }

    public function incentive($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Voyage incentive';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $metaDescription = "Dite Adieu au séminaire ennuyeux: réinventez l’incentive en vous offrant un voyage d’entreprise original. ";

        $metaKeywords = "Voyage incentive";

        View::render('incentive', [
            'lang'            => $lang,
            'translations'    => $translations,
            'currentRoute'    => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'title'           => $title,
        ]);
    }

    public function transfert($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Transfert premium';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $metaDescription = "Nous offrons des services et prestations 
        touristiques complètes et diversifiées pour des 
        clients particuliers ou en groupes que ce soit au niveau local";

        $metaKeywords = "Transfert terrestre, transfert maritime, transfert aérienne";

        View::render('transfert_premium', [
            'lang'            => $lang,
            'translations'    => $translations,
            'currentRoute'    => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'title'           => $title,
        ]);
    }
}
