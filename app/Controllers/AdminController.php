<?php

namespace App\Controllers;

use App\Models\Admin;
use App\Core\View;

class AdminController
{
    public function index()
    {

        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $title = 'Tableau de bord';

        // Exemple de vue avec liste des utilisateurs
        $users = Admin::getAllUsers();
        View::render('dashboard', [
            'users' => $users,
            'currentRoute' => $currentRoute,
            'title' => $title,
        ]);
    }

    public function getContact($id)
    {
        $this->checkAuthentication();

        if (!filter_var($id, FILTER_VALIDATE_INT)) {
            throw new \Exception("L'identifiant est invalide.");
        }

        $contact = Admin::getOnecontacts($id);

        if (!$contact) {
            http_response_code(404);
            View::render('404', ['message' => "Email introuvable."]);
            return;
        }

        $currentRoute = $_SERVER['REQUEST_URI'];
        $title = 'Boite de réception';

        View::render('sg-contact', [
            'contact' => $contact,
            'currentRoute' => $currentRoute,
            'title' => $title,
        ]);
    }


    public function contact()
    {

        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $title = 'Boite de reception';

        // Exemple de vue avec liste des utilisateurs
        $contacts = Admin::getAllcontacts();
        View::render('adm-contact', [
            'contacts' => $contacts,
            'currentRoute' => $currentRoute,
            'title' => $title,
        ]);
    }

    public function deleteContactAction($id)
    {
        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();

        // Appel au modèle pour supprimer l'email
        $isDeleted = Admin::deleteContact($id);

        if ($isDeleted) {
            // Redirection vers la liste des contacts après suppression
            header("Location: /nbpt-admin/contact");
            exit;
        } else {
            // En cas d'échec, afficher un message d'erreur ou rediriger vers une page appropriée
            echo "Une erreur est survenue lors de la suppression de l'email.";
        }
    }


    public function isLoggedIn() {
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $email    = $_POST['email'];
                $password = $_POST['password'];
        
                // Tente de connecter l'admin
                if (Admin::authenticate($email, $password)) {
                    header("Location: /nbpt-admin/dashboard"); // Redirige vers le tableau de bord
                    exit;
                } else {
                    header("Location: /auth/login?msg=error");
                }
            }
        } catch (\PDOException $e) {
            echo "Erreur de connexion à la base de données : " . $e->getMessage();
        }
    }

    public function editProfile()
    {
        $this->checkAuthentication();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'username' => $_POST['username'] ?? '',
                'email' => $_POST['email'] ?? '',
            ];

            Admin::updateProfile($_SESSION['admin_id'], $data);
            header('Location: /admin/profile?success=true');
            exit;
        }

        $admin = Admin::getById($_SESSION['admin_id']);
        View::render('edit-profile', ['admin' => $admin]);
    }

    public function logout()
    {
        session_destroy();
        header('Location: /auth/login');
        exit;
    }

    private function checkAuthentication()
    {
        if (empty($_SESSION['admin_id'])) {
            header('Location: /auth/login');
            exit;
        }
    }
}
