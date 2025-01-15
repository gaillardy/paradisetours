<?php include 'templates/admin-header.php';?>

<div class="admin-wrapper">
    <?php  include 'templates/includes/aside.php'; ?>

    <div class="main-content">
        <header class="header">
            <h1>Contacts</h1>
            <a href="/nbpt-admin/logout" onclick="return confirm('Se déconnecter ?')" class="logout">Déconnexion</a>
        </header>
        <section class="content">
            <?php 
            foreach ($contacts as $item) {
                ?>
                    <div class="widget">
                        <h3><?= $item->nom ?></h3>
                        <p>0</p>
                    </div>
                <?php
            }
            ?>
            
            
        </section>
    </div>
</div>


