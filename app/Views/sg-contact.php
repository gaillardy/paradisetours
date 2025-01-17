<?php include 'templates/admin-header.php';?>

<div class="admin-wrapper">
    <?php  include 'templates/includes/aside.php'; ?>

    <div class="main-content">
        <header class="header">
            <h1>Nom</h1>
            <a href="/nbpt-admin/logout" onclick="return confirm('Se déconnecter ?')" class="logout">Déconnexion</a>
        </header>
        <section class="content">
            <div class="widget">
                <h2>Sujet</h2>
                <p>Message</p>
            </div>
        </section>
    </div>
</div>


