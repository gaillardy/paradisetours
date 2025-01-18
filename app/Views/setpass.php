<?php include 'templates/admin-header.php';?>

<div class="admin-wrapper">
    <?php  include 'templates/includes/aside.php'; ?>

    <div class="main-content">
        <header class="header">
            <h1>Utilisateurs  <a href="#">Ajouter un utilisateur</a></h1>
            <div class="dropdown">
                <a href="javascript:avoid(0)" class="dropdown-toggle">
                    <i class="fa fa-user"></i>
                </a>
                <div class="dropdown-menu">
                    <a href="/nbpt-admin/user" class="dropdown-item">
                        <i class="fa fa-user-circle"></i> Voir profil
                    </a>
                    <a href="/nbpt-admin/logout" onclick="return confirm('Souhaitez-vous vraiment vous déconnecter ?')" class="dropdown-item">
                        <i class="fa fa-sign-out-alt"></i>déconnexion
                    </a>
                </div>
            </div>
        </header>
        <section class="content">
            <div class="widget">
                <h2><?= $_SESSION['username'] ?></h2>
            </div>
            <div class="widget">
                <form action="/nbpt-admin/user/set-new-password" method="post">
                    <p>
                        <label for="pass">Nouveau mot de passe</label>
                        <input type="password" name="pass" id="pass">
                    </p>

                    <p>
                        <label for="pass">Confireme le mot de passe</label>
                        <input type="password" name="password_confirm" id="pass">
                    </p>
                    <input type="submit" value="Mettre à jour le mot de passe">
                </form>
            </div>
        </section>
    </div>
</div>


