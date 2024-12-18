<?php

namespace App\Helpers;

class Language
{
    private static $translations = [
        'en' => [
            'title' => 'Welcome to Our Tourism Agency',
            'description' => 'Explore amazing destinations worldwide.',
            'keywords' => 'tourism, travel, vacations, adventure',
            'welcome' => 'Welcome to the home page!',
            'intro' => 'This is the English version of the site.',
            'contact' => 'Contact page',
        ],
        'fr' => [
            'title' => 'Bienvenue dans notre agence de tourisme',
            'description' => 'Découvrez des destinations incroyables dans le monde entier.',
            'keywords' => 'tourisme, voyage, vacances, aventure',
            'welcome' => 'Bienvenue sur la page d\'accueil!',
            'intro' => 'Ceci est la version française du site.',
            'contact' => 'La page de contact',
        ],
        'es' => [
            'title' => 'Bienvenido a nuestra agencia de turismo',
            'description' => 'Explora destinos increíbles en todo el mundo.',
            'keywords' => 'turismo, viajes, vacaciones, aventura',
            'welcome' => '¡Bienvenido a la página principal!',
            'intro' => 'Esta es la versión en español del sitio.',
        ],
    ];



    /**
     * Récupère les traductions pour une langue donnée.
     */
    public static function getTranslations($lang)
    {
        if (!array_key_exists($lang, self::$translations)) {
            throw new \Exception("Langue non prise en charge.");
        }
        return self::$translations[$lang];
    }

    /**
     * Génère un switcher de langue dynamique pour la page courante.
     *
     * @param string $currentLang Langue actuelle
     * @param string $currentRoute Route actuelle
     * @return string HTML du switcher
     */
    public static function renderSwitcher($currentLang, $currentRoute)
    {
        $languages = ['en' => 'English', 'fr' => 'Français', 'es' => 'Español'];
        $output = '<ul>';

        foreach ($languages as $code => $name) {
            // Construire l'URL en changeant uniquement la langue
            $newRoute = preg_replace('/^\/[a-z]{2}/', "/$code", $currentRoute);
            $activeClass = ($code === $currentLang) ? 'class="active"' : '';
            $output .= "<li><a href='$newRoute' $activeClass>$name</a></li>";
        }

        $output .= '</ul>';
        return $output;
    }
}
