<?php include 'templates/admin-header.php';?>

<div class="admin-wrapper">
    <?php  include 'templates/includes/aside.php'; ?>

    <div class="main-content">
        <header class="header">
            <h1>Bonjour <?= $_SESSION['username'] ?></h1>
            <a href="/nbpt-admin/logout" onclick="return confirm('Se déconnecter ?')" class="logout">Déconnexion</a>
        </header>
        <section class="content">
            <div class="widget">
                <h2>Boite de reception</h2>
                <p>0</p>
            </div>
            <div class="widget">
                <h2>Utilisateurs</h2>
                <p>0</p>
            </div>
            <div class="widget">
                <h2>Inscription au newsletter</h2>
                <p>0</p>
            </div>
        </section>
    </div>
</div>


