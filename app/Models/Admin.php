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
    public static function create($username,$email,$nom,$prenom,$pass): bool
    {
        $db = Database::getInstance();
        $query = "INSERT INTO 
        admins (username, email, nom, prenom, pass, created_at, updated_at) 
        VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
        $stmt = $db->prepare($query);
        return $stmt->execute([$username,$email,$nom,$prenom,$pass]);
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
     * Summary of getTotalUsersAdmin : Stat des users
     * @return mixed
     */
    public static function getTotalUsersAdmin()
    {
        $db = Database::getInstance();
        $query = "SELECT COUNT(*) AS total_admin  FROM admins";
        $stmt = $db->query($query);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Summary of getTotalUsersAdmin : Stat des abonnées
     * @return mixed
     */
    public static function getTotalSubscribers()
    {
        $db = Database::getInstance();
        $query = "SELECT COUNT(*) AS total_sub  FROM subscribers";
        $stmt = $db->query($query);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Summary of getTotalUsersAdmin : Stat des inbox
     * @return mixed
     */
    public static function getTotalInbox()
    {
        $db = Database::getInstance();
        $query = "SELECT COUNT(*) AS total_inbox  FROM contact";
        $stmt = $db->query($query);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Summary of getTotalUsersAdmin : Stat des sendbox
     * @return mixed
     */
    public static function getTotalSendbox()
    {
        $db = Database::getInstance();
        $query = "SELECT COUNT(*) AS total_sendbox  FROM sendbox";
        $stmt = $db->query($query);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Récupère tous la boite d'envoi.
     *
     * @return array
     */
    public static function getAllSendbox(): array
    {
        $db = Database::getInstance();
        $query = "SELECT * FROM sendbox ORDER BY id DESC";
        $stmt = $db->query($query);

        return $stmt->fetchAll(PDO::FETCH_OBJ);
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

    public static function deleteSendBox($id): bool
    {
        // Récupération de l'instance de la base de données
        $db = Database::getInstance();

        // Préparation de la requête DELETE
        $query = "DELETE FROM sendbox WHERE id = :id";
        $stmt = $db->prepare($query);

        // Liaison de la valeur du paramètre
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        // Exécution de la requête et retour du résultat (true si réussi, false sinon)
        return $stmt->execute();
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

    /**
     * Summary of getOnecontacts : Recuperer un message envoyé
     * @param mixed $id
     * @return mixed
     */
    public static function getOneSenbox($id): ?array
    {
        $db = Database::getInstance();
        $query = "SELECT * FROM sendbox WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }



    /**
     * Summary of getOnecontacts : Recuperer un message recu
     * @param mixed $id
     * @return mixed
     */
    public static function getOnecontacts($id): ?array
    {
        $db = Database::getInstance();
        $query = "SELECT * FROM contact WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public static function updatePassword($password,$id): bool
    {
        $db = Database::getInstance();
        $query = "UPDATE admins SET 
         pass = ?, updated_at = NOW()
        WHERE id = ?";
        $stmt = $db->prepare($query);

        return $stmt->execute([$password,$id]);
    }

    public static function updateCode($code,$id): bool
    {
        $db = Database::getInstance();
        $query = "UPDATE admins SET 
         reset_pass = ?
        WHERE id = ?";
        $stmt = $db->prepare($query);

        return $stmt->execute([$code,$id]);
    }

    public static function updateViewEmail($view,$id): bool
    {
        $db = Database::getInstance();
        $query = "UPDATE contact SET 
         view = ?
        WHERE id = ?";
        $stmt = $db->prepare($query);
        return $stmt->execute([$view,$id]);
    }

    /**
     * Enregistrer un Nouveau message.
     *
     * @param array $data
     * @return bool
     */
    public  function newMessage($headers,$clientEmail,$subject,$message)
    {
        $stmt = $this->db->prepare("INSERT INTO 
        sendbox(de,a,sujet,messages,send_at) 
        VALUES (?,?,?,?,NOW())");
        return $stmt->execute([$headers,$clientEmail,$subject,$message]);
    }


    /**
     * Met à jour les informations d'un administrateur.
     *
     * @param int $id
     * @return mixed
     */
    public static function updateProfile($username,$email,$nom,$prenom,$id)
    {
        $db = Database::getInstance();
        $query = "UPDATE admins SET 
        username = ?, email = ?, nom =  ?, prenom = ?, updated_at = NOW()
        WHERE id = ?";
        $stmt = $db->prepare($query);
        return $stmt->execute([$username,$email,$nom,$prenom,$id]);
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

        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    /**
     * Récupère un administrateur par son email.
     *
     * @param int $email
     * @return array|null
     */
    public static function getByEmail(string $email): ?array
    {
        $db = Database::getInstance();
        $query = "SELECT * FROM admins WHERE email = :email";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }


    /**
     * Récupère un administrateur par son email.
     *
     * @param int $code
     * @return array|null
     */
    public static function getByCode(int $code): ?array
    {
        $db = Database::getInstance();
        $query = "SELECT * FROM admins WHERE reset_pass = :code";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':code', $code);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    /**
     * Summary of setCode : ajoute le code de réinitialisation du compte
     * @param string $email
     * @param string $code
     */
    public static function setCode(string $email,string $code){
        $db = Database::getInstance();
        $query = "UPDATE admins SET reset_pass = :code WHERE email = :email";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':code', $code);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;

    }

    /**
     * Recuperer un email avant derépondre
     * @param int $id
     * @return mixed
     */
    public static function getEmailByID(int $id): ?array
    {
        $db = Database::getInstance();
        $query = "SELECT * FROM contact WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    /**
     * Recuperer un email envoyé
     * @param int $id
     * @return mixed
     */
    public static function getSendEdEmailByID(int $id): ?array
    {
        $db = Database::getInstance();
        $query = "SELECT * FROM sendbox WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }
}
