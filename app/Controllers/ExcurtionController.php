<?php

namespace App\Controllers;

use App\Helpers\Language;
use App\Core\View;

class ExcurtionController
{
    
    public function index($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Excurtions';
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

    public function russe($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Baie des Russes';
        $metaDescription = "Découvrez l'une des plus belles baies du monde, entre histoire, aventure et sérénité.";
        $metaKeywords = 'Baie des Russes';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('russe', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }
}
