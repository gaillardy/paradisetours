<?php

namespace App\Models;

use App\Models\Database;
use PDO;

class Admin
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    /**
     * Authentifie un administrateur avec email et mot de passe.
     *
     * @param string $email
     * @param string $password
     * @return array|null
     */
    public static function authenticate(string $email, string $password): ?array
    {
        $db = Database::getInstance();
        $query = "SELECT * FROM admins WHERE email = :email AND  pass = :pass";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pass', $password);
        $stmt->execute();

        $admin = $stmt->fetch();

        if ($admin &&  $password /*password_verify($password, $admin['password'])*/) {
            return $admin;
        }

        return null;
    }

    /**
     * Crée un nouvel administrateur.
     *
     * @param array $data
     * @return bool
     */
    public static function create(array $data): bool
    {
        $db = Database::getInstance();
        $query = "INSERT INTO admins (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':username', $data['username']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':password', $data['password']);

        return $stmt->execute();
    }

    /**
     * Récupère tous les administrateurs.
     *
     * @return array
     */
    public static function getAllUsers(): array
    {
        $db = Database::getInstance();
        $query = "SELECT * FROM admins";
        $stmt = $db->query($query);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Récupère tous les contact.
     *
     * @return array
     */
    public static function getAllcontacts(): array
    {
        $db = Database::getInstance();
        $query = "SELECT * FROM contact ORDER BY id DESC";
        $stmt = $db->query($query);

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function deleteContact($id): bool
    {
        // Récupération de l'instance de la base de données
        $db = Database::getInstance();

        // Préparation de la requête DELETE
        $query = "DELETE FROM contact WHERE id = :id";
        $stmt = $db->prepare($query);

        // Liaison de la valeur du paramètre
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        // Exécution de la requête et retour du résultat (true si réussi, false sinon)
        return $stmt->execute();
    }



    public static function getOnecontacts($id): ?array
    {
        $db = Database::getInstance();
        $query = "SELECT * FROM contact WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public static function updatePassword(int $id, array $data): bool
    {
        $db = Database::getInstance();
        $query = "UPDATE admins SET 
         pass = :password , updated_at = NOW()
        WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':password', $data['pass']);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }


    /**
     * Met à jour les informations d'un administrateur.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public static function updateProfile(int $id, array $data): bool
    {
        $db = Database::getInstance();
        $query = "UPDATE admins SET 
        username = :username, email = :email, nom =  :nom, prenom = :prenom, pass = :password , updated_at = NOW()
        WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':username', $data['username']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':nom', $data['nom']);
        $stmt->bindParam(':prenom', $data['prenom']);
        $stmt->bindParam(':password', $data['pass']);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }

    /**
     * Récupère un administrateur par son ID.
     *
     * @param int $id
     * @return array|null
     */
    public static function getById(int $id): ?array
    {
        $db = Database::getInstance();
        $query = "SELECT * FROM admins WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch() ?: null;
    }
}
