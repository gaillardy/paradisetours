<?php

namespace App\Controllers;

use App\Helpers\Language;
use App\Core\View;

class ToursController
{
    
    public function index($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Tours';
        $metaDescription = 'Tours de Madagascar';
        $metaKeywords = 'Tours de Madagascar';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('tours', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang'         => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }
}
