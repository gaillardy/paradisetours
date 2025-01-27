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

    public function green($lang)
    {
        $translations = Language::getTranslations($lang);

        $title           = 'Green';
        $metaDescription = "Nosy Komba est une île volcanique face à Nosy Be. Le village de Nosy Komba est agrémenté de son marché de broderies et d'artisanat en bois. ";
        $metaKeywords    = 'Green, Nosy Komba, Excurtions Nosy be';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('green', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function blue($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Blue tour';
        $metaDescription = "Une fois arrivé sur l'île IRANJA, vous serez accueilli avec un paysage à couper le souffle. Une immersion totale dans la nature embellira votre journée.  ";
        $metaKeywords = 'Blue tour, Excurtions Nosy be';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('blue', [
            'title'           => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang'         => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function bivouac($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = strtolower('L’ARCHIPEL DE MITSIO en bivouac - Excurtions');
        $metaDescription = "Mer turquoise et propre, parfait pour de la plongée apnée, Chasse sous-marine ou pêche à la traîne et rencontre avec les villageois.";
        $metaKeywords = 'ARCHIPEL DE MITSIO en bivouac';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('grand_mitsio', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }


    public function radamaMitsiho($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Catamaran Mitsio et Radama - Excurtions';
        $metaDescription = 'Catamaran Mitsio et Radama, Direction Tanikely c’est une réserve sous-marine ou toutes sortes de poissons de récif sont présentes';
        $metaKeywords = 'Catamaran Mitsio et Radama';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('radama_mitsiho', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function radama($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Catamaran Radama - Excurtions';
        $metaDescription = strtolower('PROGRAMME CROISIERE DECOUVERTE À L’ARCHIPEL DES RADAMES SUR 5 JOURS/4 NUITS');
        $metaKeywords = 'Catamaran Radama';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('radama', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function mitsiho($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Archipel de Mitsiho en catamaran - Excurtions';
        $metaDescription = "Découverte de l’île au sable blanc. Vous profiterez de la très belle plage de TSARABANJINA pour vous adonner au farniente, ";
        $metaKeywords = 'Archipel de Mitsiho en catamaran';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('mitsiho', [
            'title'           => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'lang'            => $lang,
            'translations'    => $translations,
            'currentRoute'    => $currentRoute,
        ]);
    }

    public function helicot($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = "Tour de l'ile en helicot";
        $metaDescription = "Tour de l'ile en helicot";
        $metaKeywords = "Tour de l'ile en helicot";

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('helicot', [
            'title'           => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'lang'            => $lang,
            'translations'    => $translations,
            'currentRoute'    => $currentRoute,
        ]);
    }

    public function kite($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Kite Surf à Diego-Suarez';
        $metaDescription = 'Kite Surf à Diego-Suarez';
        $metaKeywords = 'Kite Surf à Diego-Suarez';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('kite', [
            'title'           => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'lang'            => $lang,
            'translations'    => $translations,
            'currentRoute'    => $currentRoute,
        ]);
    }

    public function sejour($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Séjour en plage vierge';
        $metaDescription = 'Visites: Baie des Russes, Nosy Antsoha, Nosy Iranja';
        $metaKeywords = 'Séjour en plage vierge';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('sejour', [
            'title'           => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'lang'            => $lang,
            'translations'    => $translations,
            'currentRoute'    => $currentRoute,
        ]);
    }

    public function catamaran($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Croisière en catamaran - Excurtions';
        $metaDescription = 'Croisière en catamaran avec ou sans plongée';
        $metaKeywords = 'Croisière en catamaran avec ou sans plongée';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('catamaran', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function peche($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Excurtions - Pêche aux gros';
        $metaDescription = 'Passionné de pêche sportive ou simplement 
        envie de découvrir cette discipline, 
        rejoignez notre guide de pêche au gros à Nosy Be.';
        $metaKeywords = 'Pêche aux gros';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('peche', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function baleine($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Excurtions - Observation baleine et dauphin';
        $metaDescription = 'Observation baleine sur Nosy Be est l’une des spectacles 
        marines à ne pas rater chaque année. Les Baleines à bosse,
         les requins baleines et les dauphins  seront au rendez vous  dans le large  de la baie d’Ampasindava  
        et le canal de Mozambique  entre Août – Septembre – Octobre et Novembre.';
        $metaKeywords = 'Observation baleine et dauphin';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('baleine', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'lang' => $lang,
            'translations'    => $translations,
            'currentRoute'    => $currentRoute,
        ]);
    }

    public function sakatia($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Excurtions - Nosy Sakatia';
        $metaDescription = 'NOSY SAKATIA est une charmante île qui se trouve à seulement 15 minutes de Nosy Be. 
        Nosy Sakatia est fameuse par sa plantation des orchidées, 
        de fruits et d’épices de Madagascar mais surtout le plus important : sa richesse maritime.';
        $metaKeywords = 'Nosy Sakatia';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('sakatia', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'lang'            => $lang,
            'translations'    => $translations,
            'currentRoute'    => $currentRoute,
        ]);
    }

    public function parfumTour($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Excurtions - Parfum tour';
        $metaDescription = 'En voiture, en Tuk tuk, en moto ou en quad, 
        Nosy-be Island Tour 
        est l’une des activités préférées des visiteurs car elle leur fait découvrir l’île en une seule journée. ';
        $metaKeywords = 'Parfum tour';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('tour', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function lokobe($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Excursion - Réserve naturelle de Lokobe';
        $metaDescription = "Réserve naturelle de Lokobe  est unique 
        sur l’île de Nosy Be où forêt luxuriants 
        et mangroves riment avec paysage calme et paisible d’Ampasipohy.";
        $metaKeywords = 'Excurtions Nosy be';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('lokobe', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }


    public function iranja($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Excursion - Nosy Iranja';
        $metaDescription = 'Nosy Iranja  la plus charmante île de Nosy be composée de 
        deux îlots reliées par un banc de sable immaculé, 
        qui est totalement submergé à marée haute';
        $metaKeywords = 'Nosy Iranja';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('iranja', [
            'title' => $title,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }

    public function komba($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Excurtions - Nosy Komba et Nosy Tanikely ';
        $metaDescription = "Nosy Komba est une magnifique île  juste en face de Nosy Be . 
        Son village est orné par un marché de broderie et d’artisanat en bois. 
        l’île abrite quelques espèces endémiques tels que le célèbre lémurien local les lémuriens macaco, 
        les serpents BOA constrictor";
        $metaKeywords = 'Nosy Komba et Nosy Tanikely';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('komba', [
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

        $title = 'Excurtions - Baie des Russes';
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
