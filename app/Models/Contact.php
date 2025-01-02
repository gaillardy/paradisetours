<?php
namespace App\Models;

use App\Models\Database;
use PDO;

class Contact {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getContact(){
        $stmt = $this->db->query("SELECT * FROM contact");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function addContact($nom,$email,$tel,$sujet,$message) {
        $stmt = $this->db->prepare("INSERT INTO 
        contact(nom,email,telephone,sujet,messages,created_at) 
        VALUES (?,?,?,?,?,NOW())");
        return $stmt->execute([$nom,$email,$tel,$sujet,$message]);
    }
}