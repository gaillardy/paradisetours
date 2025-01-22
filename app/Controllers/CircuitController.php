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

    public function isalo($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Parc National  Isalo - Circuits';
        $metaDescription = 'Le Parc National Terrestre Isalo est une représentation écologique unique au sein du réseau Parc Nationaux Madagascar';
        $metaKeywords = 'Parc National Terrestre Isalo';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('isalo', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function ambre($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Montagne d’Ambre - Circuits';
        $metaDescription = 'Parc National Terrestre et Réserve Spéciale, forêt dense humide avec un taux d’endémisme très élevé dont des milliers d’espèces de bois précieux';
        $metaKeywords = 'Montagne d’Ambre';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('ambre', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function mantadia($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Parc Mantadia - circuits';
        $metaDescription = 'Parc National Terrestre avec une forêt dense humide sempervirente où des espèces d’amphibiens, de reptiles et des lémuriens ont élu habitat.';
        $metaKeywords = 'Parc Mantadia';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('mantadia', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function marojejy($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Parc Marojejy - Circuits';
        $metaDescription = 'Parc National Terrestre classé Patrimoine Mondial,
         massif impressionnant, 
        forêt dense humide de basse altitude habitat du Propithecus candidus ou Simpona fotsy';

        $metaKeywords = 'Parc Marojejy';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('marojejy', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function zombitse($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Parc Zombitse - circuits';
        $metaDescription = 'Le complexe Zombitse Vohibasia 
        est réputé par sa richesse en espèce d’oiseaux rares, 
        endémiques de Madagascar et / ou de la zone. ';

        $metaKeywords = 'Parc Zombitse';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('zombitse', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function ankarafantsika($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Parc Ankarafantsika - circuits';
        $metaDescription = 'Ankarafantsika comprend une formation floristique 
        unique sur massif sableux dans laquelle se trouvent 
        des espèces faunistiques à un taux d’endémicité très élevé 
        et non représentés dans d’autres aires protégées.';


        $metaKeywords = 'Parc Ankarafantsika';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('ankarafantsika', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function bemaraha($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Parc Bemaraha - Circuits';
        $metaDescription = 'Réserve National Terrestre classée Patrimoine Mondial 
        au paysage de Tsingy de différentes formes où lémuriens, 
        oiseaux terrestres et aquatiques, chauves-souris, amphibiens,
         reptiles, 
        des mammifères endémiques et une flore de plus de 650 espèces de plantes sont répertoriés.';
        $metaKeywords = 'Parc Bemaraha ';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('bemaraha', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }


    public function ankarana($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Parc Ankarana - Circuits';
        $metaDescription = 'Réserve Spéciale, Forêt dense sèche, le Tsingy et son peuplement et la Forêt des canyons.';
        $metaKeywords = 'Parc Ankarana';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('ankarana', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function andringitra($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Parc Andringitra - circuits';
        $metaDescription = 'Parc National Terrestre classé Site Patrimoine Mondial, 
        refuge des plantes et animaux du massif forestier du Moyen Est de Madagascar';
        $metaKeywords = 'Parc Andringitra';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('andringitra', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function andohahela($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Parc Andohahela - circuits';
        $metaDescription = 'Parc National Terrestre classé Site 
        Patrimonial Mondial, 
        Andohahela représente 
        la diversité biologique de l’extrême Sud-Est de Madagascar. ';

        $metaKeywords = 'Parc Andohahela';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('andohahela', [
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
