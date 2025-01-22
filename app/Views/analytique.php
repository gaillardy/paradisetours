<?php include 'templates/admin-header.php';?>

<style>
    /* Réinitialisation de la marge et du padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body, html {
    width: 100%;
    height: 100%;
    font-family: Arial, sans-serif;
    background-color: #f4f4f9; /* Couleur douce pour le fond */
}

/* Conteneur de l'iframe */
.iframe-container {
    position: fixed;
    top: 0;
    left: 50;
    width: 85%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(to bottom, #e3e9f0, #ffffff);
}

/* Style de l'iframe */
iframe {
    width: 100%;
    height: 100%;
    border: none;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Ombre subtile */
    border-radius: 8px; /* Coins légèrement arrondis */
}

</style>

<div class="admin-wrapper">
    <?php  include 'templates/includes/aside.php'; ?>

    <div class="main-content">
        <header class="header">
            <h1>Bonjour <?= $_SESSION['username'] ?></h1>
            <div class="dropdown">
                <a href="javascript:avoid(0)" class="dropdown-toggle">
                    <i class="fa fa-user"></i>
                </a>
                <div class="dropdown-menu">
                    <a href="/nbpt-admin/user/<?= $_SESSION['admin_id'] ?>" class="dropdown-item">
                        <i class="fa fa-user-circle"></i> Voir profil
                    </a>
                    <a href="/nbpt-admin/logout" onclick="return confirm('Souhaitez-vous vraiment vous déconnecter ?')" class="dropdown-item">
                        <i class="fa fa-sign-out-alt"></i>déconnexion
                    </a>
                </div>
            </div>
        </header>
        <div class="iframe-container">
            <iframe src="https://piwik.pro/login/" frameborder="0"></iframe>
        </div>
    </div>
</div>


