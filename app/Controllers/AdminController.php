<?php

namespace App\Controllers;

use App\Models\Admin;
use App\Core\View;
use App\Models\Contact;

class AdminController
{
    public function index()
    {

        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $title = 'Tableau de bord';

        // Stat
        $Totalusers       = Admin::getTotalUsersAdmin();
        $TotalSubscribers = Admin::getTotalSubscribers();
        $TotalInbox       = Admin::getTotalInbox();
        $getTotalSendbox  = Admin::getTotalSendbox();
        $total_admin      = $Totalusers['total_admin'];
        $total_sub        = $TotalSubscribers['total_sub'];
        $inbox            = $TotalInbox['total_inbox'];
        $sendbox          = $getTotalSendbox['total_sendbox'];
        

        View::render('dashboard', [
            'tota_admin'   => $total_admin,
            'tota_sub'     => $total_sub,
            'inbox'        => $inbox,
            'sendbox'      => $sendbox,
            'currentRoute' => $currentRoute,
            'title'        => $title,
        ]);
    }


    


    public function actionCreateUser(){
        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();

        if(

            !empty($_POST['username']) &&
            !empty($_POST['pass']) &&
            !empty($_POST['confirm_pass']) &&
            !empty($_POST['nom']) &&
            !empty($_POST['prenom']) &&
            !empty($_POST['email']) 
        ){

            $username         = $_POST['username'];
            $password         = $_POST['pass'];
            $password_confirm = $_POST['confirm_pass'];
            $nom              = $_POST['nom'];
            $prenom           = $_POST['prenom'];
            $email            = $_POST['email'];

            if($password_confirm === $password){
                Admin::create($username, $email,$nom,$prenom,$password);
                header("Location:/nbpt-admin/add-user?msg=success");
            }else{
                header("Location:/nbpt-admin/add-user?msg=error");
            }
        }else{
            header("Location:/nbpt-admin/add-user?msg=error");
        }

    }

    public function createAccount()
    {

        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $title = 'Ajouter un compte';

        // Exemple de vue avec liste des utilisateurs
        // $users = Admin::create();

        View::render('create', [
            'currentRoute' => $currentRoute,
            'title' => $title,
        ]);
    }

    /**
     * Réponder à un email
     * 
     * @param int $id
     * @return void
     */
    public function actionReponse(int $id){
        $this->checkAuthentication();
        if (isset($_POST['message']) && !empty($_POST['message'])) {
            $response  = Admin::getEmailByID($id);
            $to        = $response['email'];
            $message   = $_POST['message'];
            $subject   = $response['sujet'];
            $from      = 'contact@nosybeparadisetours.com';

            mail($to, $subject, $message,$from);

            header("Location:/nbpt-admin/inbox/$id?msg=success");
        }else{
            header("Location:/nbpt-admin/inbox/$id?msg=error");
        }
    }

    /**
     * Transferer  un email
     * 
     * @param int $id
     * @return void
     */
    public function actionTransfer(int $id){
        $this->checkAuthentication();
        if (!empty($_POST['to'])) {
            $response     = Admin::getEmailByID($id);
            $to           = $_POST['to'];
            $tr_message   = $response['messages'];
            $subject      = $response['sujet'];
            $from         = 'contact@nosybeparadisetours.com';

            mail($to, $subject, $tr_message,$from);

            header("Location:/nbpt-admin/inbox/$id?msg=success");
        }else{
            header("Location:/nbpt-admin/inbox/$id?msg=error");
        }
    }

     /**
     * Transferer  un email envoyé
     * 
     * @param int $id
     * @return void
     */
    public function actionTransferSendbox(int $id){
        $this->checkAuthentication();
        if (!empty($_POST['to'])) {
            $trans        = Admin::getSendEdEmailByID($id);
            $to           = $_POST['to'];
            $tr_message   = $trans['messages'];
            $subject      = $trans['sujet'];
            $from         = $trans['de'];

            mail($to, $subject, $tr_message,$from);

            header("Location:/nbpt-admin/send-box/$id?msg=success");
        }else{
            header("Location:/nbpt-admin/send-box/$id?msg=error");
        }
    }

    public function SingleSendBox($id){
        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $title = "Boite d'envoi";
        $sendbox = Admin::getOneSenbox($id);
        View::render('sg-sendbox', [
            'sendbox'   => $sendbox,
            'currentRoute' => $currentRoute,
            'title' => $title,
        ]);
    }

    /**
     * Summary of sendBox
     * @return void
     */
    public function sendBox(){
        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $title = "Boite d'envoi";
        $sendbox = Admin::getAllSendbox();
        View::render('sendbox', [
            'sendbox'   => $sendbox,
            'currentRoute' => $currentRoute,
            'title' => $title,
        ]);
    }

    public function newMessage(){
        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $title = 'Nouveau message';

        
        View::render('message', [
            'currentRoute' => $currentRoute,
            'title' => $title,
        ]);
    }

    public function sendEmailAdmin() {

        if(!empty($_POST['sujet'] && 
        !empty($_POST['message']) &&
        !empty($_POST['email']) && 
        !empty($_POST['dest'])
        )){
            // Charger les traductions pour la langue donnée
            $subject = $_POST['sujet'];
            $message = $_POST['message'];
            $clientEmail = $_POST['dest'];
            $headers = $_POST['email'];

            $data = new Admin();

            if ($data->newMessage($headers,$clientEmail,$subject,$message)) {
                /**
                * Envoie du message à l'email du destinataire
                */
                mail($clientEmail, $subject, $message, $headers);

                header("Location:/nbpt-admin/new-message?msg=success");
            }
        }else{
            header("Location:/nbpt-admin/new-message?msg=error");
        }
        
    }

    public function editPassword($id)
    {

        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();

        if ($_POST['pass'] === $_POST['password_confirm']) {

            $_SESSION['password'] = $_POST['pass'];

            Admin::updatePassword($_POST['pass'],$id);
            
            FlashController::addFlashMessage('success', 'Le changement a été effectué avec succès!');
            header("Location: /nbpt-admin/user/$id");
            
        }else {
            header('Location: /nbpt-admin/user/set-password?msg=error');
        }
    }

    public function setPassword($id)
    {
        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $title = 'Nouveau mot de passe';
        $user = Admin::getById($id);
        $flashMessages = FlashController::getFlashMessages();

        View::render('setpass', [
            'flashMessages'=> $flashMessages,
            'user'         => $user,
            'currentRoute' => $currentRoute,
            'title'        => $title,
        ]);
    }

    public function updateAccount($id)
    {

        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();

        if (!filter_var($id, FILTER_VALIDATE_INT)) {
            header("Location:/nbpt-admin");
        }

        $_SESSION['username'] = $_POST['username'];
        $_SESSION['email']    = $_POST['email'];
        $_SESSION['nom']      = $_POST['nom'];
        $_SESSION['prenom']   = $_POST['prenom'];

        Admin::updateProfile(
        $_POST['username'],
        $_POST['email'],
        $_POST['nom'],
        $_POST['prenom'],
        $id
        );

        header("Location:/nbpt-admin/user/$id");
    }

    public function getSingleAccount($id)
    {

        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();

        if (!filter_var($id, FILTER_VALIDATE_INT)) {
            header("Location:/nbpt-admin");

        }

        $user = Admin::getById($id);

        if (!$user) {
            http_response_code(404);
            View::render('404', ['message' => "Utilisateur introuvable."]);
            return;
        }

        $flashMessages = FlashController::getFlashMessages();

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $title = 'Utilisateur';
        View::render('profile', [
            'flashMessages'=> $flashMessages,
            'user'         => $user,
            'currentRoute' => $currentRoute,
            'title'        => $title,
        ]);
    }

    /**
     * Recuperer le profile
     * @param mixed $id
     * @return void
     */
    public function getProfile()
    {

        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();

        if (!filter_var($_SESSION['admin_id'], FILTER_VALIDATE_INT)) {
            header("Location:/nbpt-admin");

        }

        $user = Admin::getById($_SESSION['admin_id']);

        if (!$user) {
            http_response_code(404);
            View::render('404', ['message' => "Utilisateur introuvable."]);
            return;
        }

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $title = 'Utilisateur';
        View::render('profile', [
            'user'        => $user,
            'currentRoute' => $currentRoute,
            'title'        => $title,
        ]);
    }

    public function getAllAccount()
    {

        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $title = 'Comptes';

        // Exemple de vue avec liste des utilisateurs
        $users = Admin::getAllUsers();
        View::render('comptes', [
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
            header("Location: /nbpt-admin/inbox");
            exit;
        } else {
            // En cas d'échec, afficher un message d'erreur ou rediriger vers une page appropriée
            echo "Une erreur est survenue lors de la suppression de l'email.";
        }
    }

    public function deleteSendBoxAction($id)
    {
        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();

        // Appel au modèle pour supprimer l'email
        $isDeleted = Admin::deleteSendBox($id);

        if ($isDeleted) {
            // Redirection vers la liste des contacts après suppression
            header("Location: /nbpt-admin/send-box");
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

    

    public function logout()
    {
        session_destroy();
        header('Location: /auth/login');
        exit;
    }

    public function updateViewInbox($id){
        // Vérifie si l'administrateur est connecté
        $this->checkAuthentication();
        Admin::updateViewEmail(true, $id);
        header("Location:/nbpt-admin/inbox/$id");
    }

    private function checkAuthentication()
    {
        if (empty($_SESSION['admin_id'])) {
            header('Location: /auth/login');
            exit;
        }
    }
}
