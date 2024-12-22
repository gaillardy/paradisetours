<?php
namespace App\Models;

use App\Models\Database;
use PDO;

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
        $stmt = $this->db->prepare('INSERT INTO subscribers (email,created_at) VALUES (?,NOW())');
        return $stmt->execute([$email]);
    }
}