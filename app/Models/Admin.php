<?php

namespace App\Models;

use App\Models\Database;

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
        $query = "SELECT * FROM admins WHERE email = :email";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $admin = $stmt->fetch();

        if ($admin && password_verify($password, $admin['password'])) {
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
        $query = "SELECT id, username, email FROM admins";
        $stmt = $db->query($query);

        return $stmt->fetchAll();
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
        $query = "UPDATE admins SET username = :username, email = :email WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':username', $data['username']);
        $stmt->bindParam(':email', $data['email']);
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
        $query = "SELECT id, username, email FROM admins WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch() ?: null;
    }
}
