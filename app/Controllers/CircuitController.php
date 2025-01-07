<?php

namespace App\Controllers;

use App\Helpers\Language;
use App\Core\View;

class CircuitController
{
    
    public function index($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Circuits';
        $metaDescription = 'Circuits de Madagascar';
        $metaKeywords = 'Circuits de Madagascar';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('circuit', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }
}
