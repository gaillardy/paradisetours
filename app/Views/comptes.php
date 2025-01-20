<?php include 'templates/admin-header.php';?>
<style>
    /* Style général */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f5f6fa;
        margin: 0;
        padding: 0;
    }

    /* Enveloppe du tableau */
    .table-wrapper {
        max-width: 100%;
        margin: 20px auto;
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        overflow-x: auto;
    }

    /* Titre */
    .table-wrapper h2 {
        text-align: center;
        color: #2f3640;
        margin-bottom: 20px;
    }

    /* Tableau */
    .styled-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 16px;
    }

    /* En-tête */
    .styled-table thead tr {
        background-color: #2ecc71;
        color: white;
        text-align: left;
    }

    /* Lignes */
    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
        text-align: left;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    /* Survol */
    .styled-table tbody tr:hover {
        background-color: #f1f1f1;
        transform: scale(1.01);
    }

    /* Lien */
    .username-link, .email-link {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .username-link:hover, .email-link:hover {
        color: #333;
    }

    /* Réactivité */
    @media screen and (max-width: 768px) {
        .styled-table th, .styled-table td {
            font-size: 14px;
        }
        .table-wrapper {
            padding: 15px;
        }
    }
</style>

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
    <div class="table-wrapper">
        <h2>Liste des utilisateurs</h2>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Nom d'utilisateur</th>
                    <th>Email</th>
                    <th>Date de création</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($users as $user) {
                        ?>
                            <tr>
                                <td>
                                    <a href="/nbpt-admin/user/<?= $user['id'] ?>" class="username-link"><?= $user['username'] ?></a>
                                </td>
                                <td>
                                    <a href="mailto:<?= $user['email'] ?>" class="email-link"><?= $user['email'] ?></a>
                                </td>
                                <td>
                                    <?php
                                        if (isset($user['created_at']) && !empty($user['created_at'])) {
                                            $timestamp = is_numeric($user['created_at']) 
                                                ? $user['created_at'] 
                                                : strtotime($user['created_at']);
                                            $date = new DateTime();
                                            $date->setTimestamp($timestamp);
                                            $formatter = new IntlDateFormatter(
                                                'fr_FR',
                                                IntlDateFormatter::LONG,
                                                IntlDateFormatter::NONE
                                            );
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
    </div>
</section>
    </div>
</div>


