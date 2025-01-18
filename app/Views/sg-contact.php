<?php include 'templates/admin-header.php';?>
<style>
    /* Styles principaux */
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        background-color: #f9f9f9;
    }

    .content {
        max-width: 600px;
        margin: auto;
        background: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    .email-view {
        padding: 20px;
    }

    .email-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #e0e0e0;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .email-subject {
        margin: 0;
        font-size: 1.5rem;
        color: #333;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .badge-important {
        background: #dc3545;
        color: #fff;
        padding: 3px 8px;
        border-radius: 4px;
        font-size: 0.8rem;
    }

    .email-date {
        font-size: 0.9rem;
        color: #999;
    }

    .email-meta {
        margin-bottom: 20px;
    }

    .email-meta p {
        margin: 5px 0;
        font-size: 0.9rem;
        color: #666;
    }

    .email-body {
        font-size: 1rem;
        color: #444;
        line-height: 1.6;
    }

    .email-body p {
        margin-bottom: 10px;
    }

    .email-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 20px;
    }

    .email-actions button {
        background: #007bff;
        color: #fff;
        border: none;
        padding: 10px 15px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 0.9rem;
        transition: background 0.3s;
    }

    .email-actions button:hover {
        background: #0056b3;
    }

    .email-actions .delete-btn {
        background: #dc3545;
    }

    .email-actions .delete-btn:hover {
        background: #c82333;
    }

    /* Effet d'arrière-plan */
    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    /* Affichage lorsque le modal est actif */
    .modal.show {
        opacity: 1;
        visibility: visible;
    }

    /* Contenu du modal */
    .modal-content {
        background: #fff;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transform: scale(0.8);
        transition: transform 0.3s ease;
        width: 90%;
        max-width: 400px;
    }

    /* Effet de zoom lorsque le modal est affiché */
    .modal.show .modal-content {
        transform: scale(1);
    }

    /* Titre du modal */
    .modal-content h3 {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 15px;
    }

    /* Zone de texte */
    .modal-content textarea {
        width: 100%;
        height: 100px;
        padding: 10px;
        font-size: 1rem;
        border: 1px solid #ddd;
        border-radius: 8px;
        margin-bottom: 15px;
        resize: none;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        transition: border 0.2s ease;
    }

    .modal-content textarea:focus {
        border-color: #007bff;
        outline: none;
    }

    /* Style de base des boutons */
    button {
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: all 0.3s ease;
    outline: none;
    }

    /* Style pour le bouton 'Annuler' */
    .modal-close {
    background-color: #f44336; /* Rouge */
    color: white;
    font-weight: bold;
    }

    .modal-close:hover {
    background-color: #d32f2f;
    }

    .modal-close:focus {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    /* Style pour le bouton 'Envoyer' */
    .modal-submit {
    background-color: #4CAF50; /* Vert */
    color: white;
    font-weight: bold;
    }

    .modal-submit:hover {
    background-color: #388E3C;
    }

    .modal-submit:focus {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    /* Effet de transition */
    button:active {
    transform: scale(0.98);
    }
    /* Style de l'input email */
    .modal-input-email {
    width: 100%;
    padding: 12px 16px;
    margin-bottom: 20px; /* Espacement en bas pour aérer */
    font-size: 16px;
    border: 2px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
    color: #333;
    transition: all 0.3s ease;
    box-sizing: border-box; /* Pour inclure le padding dans la largeur totale */
    }

    /* Effet au focus */
    .modal-input-email:focus {
    border-color: #4CAF50; /* Couleur verte */
    box-shadow: 0 0 8px rgba(76, 175, 80, 0.5); /* Ombre légère */
    outline: none;
    }

    /* Placeholder personnalisé */
    .modal-input-email::placeholder {
    color: #999; /* Couleur grise plus douce pour le placeholder */
    font-style: italic; /* Style italique pour le placeholder */
    }

    /* Effet au survol */
    .modal-input-email:hover {
    border-color: #66bb6a; /* Légère couleur verte au survol */
    }

    /* Effet de focus actif */
    .modal-input-email:active {
    transform: scale(0.98); /* Effet de réduction lors du clic */
    }

    /* Style de base du header */

    /* Style du menu déroulant */
    .dropdown {
        position: relative;
    }

    .dropdown-toggle {
        display: inline-block;
        cursor: pointer;
        font-size: 24px;
        color: black;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        background-color: #fff;
        color: #333;
        border-radius: 5px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        min-width: 160px;
        z-index: 10;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.4s ease, transform 0.4s ease, visibility 0s 0.4s;
        transform: translateY(10px);
    }

  

    /* Style des éléments du menu */
    .dropdown-item {
        padding: 10px 20px;
        font-size: 16px;
        text-decoration: none;
        color: #333;
        display: flex;
        align-items: center;
        transition: background-color 0.3s ease, color 0.3s ease;
        border-bottom: 1px solid #ddd;
    }

    /* Icônes du menu */
    .dropdown-item i {
        margin-right: 10px;
    }

    /* Effet de survol sur les éléments du menu */
    .dropdown-item:hover {
        background-color: #f1f1f1;
        color: #007bff;
    }

    /* Focus sur le lien de l'icône utilisateur */
    .dropdown-toggle:focus {
        outline: none;
    }
    .dropdown:focus-within .dropdown-menu{
        display: block;
        opacity: 1;
        pointer-events: all;
        transform: translateY(0);
        visibility: visible;
        transition: opacity 0.4s ease, transform 0.4s ease;
    }


</style>

<div class="admin-wrapper">
    <?php  include 'templates/includes/aside.php'; ?>

    <div class="main-content">
        <header class="header">
            <h1><?= $contact['sujet'] ?></h1>
            <div class="dropdown">
                <a href="javascript:avoid(0)" class="dropdown-toggle">
                    <i class="fa fa-user"></i>
                </a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-user-circle"></i> Voir profil
                    </a>
                    <a href="/nbpt-admin/logout" onclick="return confirm('Souhaitez-vous vraiment vous déconnecter ?')" class="dropdown-item">
                        <i class="fa fa-sign-out-alt"></i>déconnexion
                    </a>
                </div>
            </div>
        </header>
        <a href="/nbpt-admin/contact"><i class="fa fa-arrow-left"></i></a>

        <section class="content">
            <div class="email-view">
                <div class="email-header">
                    <h2 class="email-subject">
                        Sujet : <?= $contact['sujet'] ?>
                    </h2>
                    <span class="email-date">
                    <?php
                        if (isset($contact['created_at']) && !empty($contact['created_at'])) {
                            // Convertit en timestamp si nécessaire
                            $timestamp = is_numeric($contact['created_at']) 
                                ? $contact['created_at'] 
                                : strtotime($contact['created_at']);
                        
                            // Création de l'objet DateTime
                            $date = new DateTime();
                            $date->setTimestamp($timestamp);
                        
                            // Formatteur pour la localisation française
                            $formatter = new IntlDateFormatter(
                                'fr_FR', // Locale pour le français
                                IntlDateFormatter::LONG, // Format long (18 janvier 2025)
                                IntlDateFormatter::NONE // Pas d'heure
                            );
                        
                            // Affiche la date formatée
                            echo $formatter->format($date);
                        } else {
                            echo "Date invalide";
                        }
                    ?>
                    </span>
                </div>
                <div class="email-meta">
                    <p><strong>De :</strong> <?= $contact['email'] ?></p>
                    <p><strong>À :</strong> contact@nosybeparadisetours.com</p>
                    <p><strong>Nom:</strong> <?= $contact['nom'] ?></p>
                </div>
                <div class="email-body">
                    <?= $contact['messages'] ?>
                </div>
                <div class="email-actions">
                    <button class="reply-btn" onclick="openModal('replyModal')">Répondre</button>
                    <button class="forward-btn" onclick="openModal('forwardModal')">Transférer</button>

                    <form action="/nbpt-admin/contact/delete/<?= $contact['id'] ?>" method="post">
                        <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet email ?')" style="background: red;"><i class="fa fa-trash"></i></button>
                    </form>
                    
                </div>
            </div>

            <!-- Modale pour répondre -->
            <div id="replyModal" class="modal hidden">
                <div class="modal-content">
                    <h3>Répondre</h3>
                    <textarea placeholder="Écrivez votre réponse ici..."></textarea>
                    <button class="modal-close" onclick="closeModal('replyModal')">Annuler</button>
                    <button class="modal-submit">Envoyer</button>
                </div>
            </div>

            <!-- Modale pour transférer -->
            <div id="forwardModal" class="modal hidden">
                <div class="modal-content">
                    <h3>Transférer</h3>
                    <input type="email" placeholder="Adresse email du destinataire" class="modal-input-email">
                    <textarea placeholder="Ajoutez un message ici..."></textarea>
                    <button class="modal-close" onclick="closeModal('forwardModal')">Annuler</button>
                    <button class="modal-submit">Envoyer</button>
                </div>
            </div>
        </section>

    </div>
</div>

<script>
// Ouverture du modal avec animation
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.add('show');
}

// Fermeture du modal avec animation
function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.remove('show');
}



</script>


