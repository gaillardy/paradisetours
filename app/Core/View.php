<?php

namespace App\Core;

class View
{
    /**
     * Render a template file with dynamic data.
     */
    public static function render($template, $data = [])
    {
        $templateFile = __DIR__ . "/../Views/{$template}.php";

        if (!file_exists($templateFile)) {
            throw new \Exception("Template {$template} not found.");
        }

        // Extraire les variables pour les rendre disponibles dans le template
        extract($data);

        // Inclure le fichier de template
        include $templateFile;
    }
}
