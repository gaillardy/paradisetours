<?php

spl_autoload_register(function ($class) {
    // Remplacez le namespace racine par le chemin du répertoire des classes
    $baseDir = __DIR__ . '/app/';
    $prefix = 'App\\';

    // Vérifiez si la classe utilise le préfixe de namespace attendu
    if (strncmp($prefix, $class, strlen($prefix)) !== 0) {
        // La classe ne correspond pas au namespace App, ignorez-la
        return;
    }

    // Supprimez le préfixe de namespace
    $relativeClass = substr($class, strlen($prefix));

    // Remplacez les séparateurs de namespace par des séparateurs de dossier et ajoutez .php
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    // Chargez le fichier s'il existe
    if (file_exists($file)) {
        require $file;
    }
});
