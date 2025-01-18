<?php include 'templates/admin-header.php';?>

<div class="admin-wrapper">
    <?php  include 'templates/includes/aside.php'; ?>

    <div class="main-content">
        <header class="header">
            <h1>Comptes</h1>
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
            <table border="1">
                <thead>
                    <tr>
                        <th>Nom d'utilisateurs</th>
                        <th>Email</th>
                        <th>Date de creation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($users as $user){
                            ?>
                                <tr>
                                    <td><a href="/nbpt-admin/user/<?=  $user['id'] ?>"><?=  $user['username'] ?></a></td>
                                    <td><a href="mailto:<?=  $user['email'] ?>"><?=  $user['email'] ?></a></td>
                                    <td>
                                        <?php
                                            if (isset($user['created_at']) && !empty($user['created_at'])) {
                                                // Convertit en timestamp si nécessaire
                                                $timestamp = is_numeric($user['created_at']) 
                                                    ? $user['created_at'] 
                                                    : strtotime($user['created_at']);
                                            
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
                                    </td>
                                </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
</div>


