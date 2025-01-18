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
                <form action="/nbpt-admin/compte/edit" method="post">
                    <label for="username">Nom d'utilisateur</label>
                    <p><input type="text" id="username" name="username" value="<?= $_SESSION['username'] ?>"></p>

                    <label for="nom">Nom</label>
                    <p><input type="text" name="nom" id="nom" value="<?= $_SESSION['nom'] ?>"></p>

                    <label for="nom">Prénom</label>
                    <p><input type="text" name="prenom" id="prenom" value="<?= $_SESSION['prenom'] ?>"></p>

                    <label for="nom">Email</label>
                    <p><input type="text" name="email" id="email" value="<?= $_SESSION['email'] ?>"></p>

                    <p>
                        <a href="/nbpt-admin/user/set-password">Nouveau mot de passe</a>
                    </p>

                    <input type="submit" value="Mettre à jour le profile">
                </form>
            </div>
        </section>
    </div>
</div>


