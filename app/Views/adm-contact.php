<?php include 'templates/admin-header.php';?>

<div class="admin-wrapper">
    <?php  include 'templates/includes/aside.php'; ?>

    <div class="main-content">
        <header class="header">
            <h1>Boite de reception</h1>
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
        <section class="content">
            <?php 
                foreach ($contacts as $item) {
                    ?>
                        <div class="inbox" data-id="<?= $item->id ?>">
                            <div class="widget" data-id="<?= $item->id ?>">
                                <div class="details">
                                    <a href="/nbpt-admin/inbox/<?= $item->id ?>" class="email-link">
                                        <p class="non-lu"><?= $item->nom ?></p>
                                    </a>
                                    <p class="subject"><?= $item->sujet ?></p>
                                </div>
                                <div class="meta">
                                    <span class="date">2025-01-15</span>
                                    <button class="delete-btn" title="Delete">
                                        🗑️
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </section>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".email-link").forEach((link) => {
        link.addEventListener("click", function (e) {
            e.preventDefault(); // Empêche la redirection
            window.location.href = this.getAttribute("href"); // Redirige manuellement
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const storedReadEmails = JSON.parse(localStorage.getItem("readEmails")) || [];
    const storedDeletedEmails = JSON.parse(localStorage.getItem("deletedEmails")) || [];

    // Fonction pour afficher ou masquer les emails supprimés
    function refreshEmailDisplay() {
        document.querySelectorAll(".widget").forEach((widget) => {
            const emailId = widget.dataset.id;

            // Masquer les emails supprimés
            if (storedDeletedEmails.includes(emailId)) {
                widget.style.display = "none";
            } else {
                widget.style.display = "block";

                // Marquer les emails comme lus
                if (storedReadEmails.includes(emailId)) {
                    widget.querySelector(".non-lu").classList.remove("non-lu");
                    widget.querySelector(".email-link").style.color = "black";
                }
            }
        });
    }

    // Événement pour marquer un email comme lu
    document.querySelectorAll(".email-link").forEach((link) => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const parentWidget = this.closest(".widget");
            const emailId = parentWidget.dataset.id;

            // Marquer comme lu
            this.querySelector(".non-lu").classList.remove("non-lu");
            this.style.color = "black";

            if (!storedReadEmails.includes(emailId)) {
                storedReadEmails.push(emailId);
                localStorage.setItem("readEmails", JSON.stringify(storedReadEmails));
            }
        });
    });

    // Événement pour supprimer un email
    document.querySelectorAll(".delete-btn").forEach((button) => {
        button.addEventListener("click", function () {
            const parentWidget = this.closest(".widget");
            const emailId = parentWidget.dataset.id;

            // Demander confirmation
            if (confirm("Êtes-vous sûr de vouloir supprimer cet email ?")) {
                if (!storedDeletedEmails.includes(emailId)) {
                    storedDeletedEmails.push(emailId);
                    localStorage.setItem("deletedEmails", JSON.stringify(storedDeletedEmails));
                }

                // Masquer immédiatement l'email
                parentWidget.style.display = "none";
            }
        });
    });

    // Initialiser l'affichage des emails
    refreshEmailDisplay();
});


</script>
