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

    public function meva($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Tour Meva - circuits';
        $metaDescription = ' Paysage rencontre avec les paysans ,
        Tsingy Gris de l’Ankarana (10 Circuits aux choix dans la parc) .';

        $metaKeywords = 'Tour Meva';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('meva', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function salama($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Tour Salama - circuits';
        $metaDescription = 'Paysage rencontre avec les paysans, Tsingy Gris de l’Ankarana (10 Circuits aux choix dans la parc) .';
        $metaKeywords = 'Tour Salama';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('salama', [
            'title'          => $title,
            'metaDescription'=> $metaDescription,
            'metaKeywords'   => $metaKeywords,
            'lang'           => $lang,
            'translations'   => $translations,
            'currentRoute'   => $currentRoute,
        ]);
    }
    public function fosa($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Tours Fosa - circuits';
        $metaDescription = ' Randonné : Paysage , 
         de cacao , baobab, Rivière de Sambirano,
         rencontre avec les paysans';
        $metaKeywords = 'Tours fosa';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('fosa', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang'         => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }
}
