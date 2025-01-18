<?php

namespace App\Controllers;

use App\Models\Admin;
use App\Core\View;

class AuthController
{
    public function login()
    {
        $title = "Se connecter";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            

            $admin = Admin::authenticate($email, $password);

            if ($admin) {
                $_SESSION['admin_id'] = $admin['id'];
                $_SESSION['username'] = $admin['username'];
                $_SESSION['email'] = $admin['email'];
                $_SESSION['password'] = $admin['pass'];
                $_SESSION['nom'] = $admin['nom'];
                $_SESSION['prenom'] = $admin['prenom'];


                
                header('Location: /nbpt-admin/dashboard');
                exit;
            } else {
                $error = 'Mot de passe ou email incorrect';
                View::render('login', ['error' => $error]);
                return;
            }
        }

        View::render('login',[
            'title' => $title,
        ]);
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'username' => $_POST['username'] ?? '',
                'email' => $_POST['email'] ?? '',
                'password' => password_hash($_POST['password'] ?? '', PASSWORD_BCRYPT),
            ];

            Admin::create($data);
            header('Location: /auth/login?registered=true');
            exit;
        }

        View::render('auth/register');
    }
}
