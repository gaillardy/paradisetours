<?php

namespace App\Controllers;
class FlashController 
{
    // Méthode pour ajouter un message flash
    public static function addFlashMessage(string $type, string $message): void {
        $_SESSION['flash_messages'][] = ['type' => $type, 'message' => $message];
    }

    // Méthode pour récupérer les messages flash
    public static function getFlashMessages(): array {
        $messages = $_SESSION['flash_messages'] ?? [];
        unset($_SESSION['flash_messages']); // Supprime les messages après lecture
        return $messages;
    }
}
