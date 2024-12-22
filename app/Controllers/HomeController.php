<?php

namespace App\Controllers;

use App\Helpers\Language;
use App\Core\View;

class HomeController
{
    
    public function index($lang)
    {
        $translations = Language::getTranslations($lang);

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('home', [
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }
}
