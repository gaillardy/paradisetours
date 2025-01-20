<?php include 'templates/admin-header.php';?>

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
        <section class="content">
            <div class="widget">
                <h2>Boite de reception</h2>
                <p><?= $inbox ?></p>
            </div>
            <div class="widget">
                <h2>Boite d'envoi</h2>
                <p><?= $sendbox ?></p>
            </div>
            <div class="widget">
                <h2>Utilisateurs</h2>
                <p><?= $tota_admin ?></p>
            </div>
            <div class="widget">
                <h2>Inscription au newsletter</h2>
                <p><?= $tota_sub ?></p>
            </div>
        </section>
    </div>
</div>


