<?php

namespace App\Controllers;

use App\Helpers\Language;
use App\Core\View;

class ExcurtionController
{
    
    public function index($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Accueil';
        $metaDescription = 'Excurtions Nosy be';
        $metaKeywords = 'Excurtions Nosy be';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('excurtions', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }
}
