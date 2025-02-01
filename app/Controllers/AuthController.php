<?php

namespace App\Controllers;

use App\Models\Admin;
use App\Core\View;

class AuthController
{
    public function loginForm(){
        $title = "Se connecter";

        $flashMessages = FlashController::getFlashMessages();

        View::render('login',[
            'title' => $title,
            'flashMessages' => $flashMessages
        ]);
    }
    public function login()
    {
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
                FlashController::addFlashMessage('error','Email ou mot de passe incorrect');
                header("Location: /nbpt-admin/auth/login");
            }
        }else {
            FlashController::addFlashMessage('error','Une erreur est survenue');
            header("Location: /fr/home");
        }

        
    }

    
}
