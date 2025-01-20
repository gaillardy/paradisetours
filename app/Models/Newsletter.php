<?php
namespace App\Models;

use App\Models\Database;
use PDO;
use PDOException;

class Newsletter {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getSubscribers(){
        $stmt = $this->db->query("SELECT * FROM subscribers");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function addSubscriber($email) {
        try {
            // Vérifie si l'email existe déjà
            $stmt = $this->db->prepare('SELECT COUNT(*) FROM subscribers WHERE email = ?');
            $stmt->execute([$email]);
            if ($stmt->fetchColumn() > 0) {
                return false; // Email déjà abonné
            }
    
            // Ajout de l'email
            $stmt = $this->db->prepare('INSERT INTO subscribers (email, created_at) VALUES (?, NOW())');
            return $stmt->execute([$email]);
        } catch (PDOException $e) {
            // Logger l'erreur pour le diagnostic
            // error_log($e->getMessage());
            return false;
        }
    }
}