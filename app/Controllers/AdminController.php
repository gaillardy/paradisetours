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
