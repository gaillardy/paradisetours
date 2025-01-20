<?php include 'templates/admin-header.php';?>
<style>
    /* Global Container */
.inbox-container {
    padding: 20px;
    max-width: 900px;
    margin: auto;
    font-family: Arial, sans-serif;
}

/* Email Item */
.email-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    background: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 10px;
    transition: transform 0.2s, box-shadow 0.3s;
    position: relative;
    overflow: hidden;
}

/* Hover Effect */
.email-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    background: linear-gradient(135deg, #ffffff, #f3f4f6);
}

/* Email Details */
.details {
    flex: 1;
}

.details a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
    font-size: 1.1em;
    display: block;
    margin-bottom: 5px;
    transition: color 0.3s;
}

.details a:hover {
    color: #007bff;
}

.details .subject {
    color: #666;
    font-size: 0.95em;
}

/* Container for meta details */
/* Container for meta details */
.meta {
    position: relative;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 10px; /* Spacing between date and trash button */
    height: 100%;
    overflow: hidden; /* Prevents content overflow */
}

/* Default state: show date, hide trash icon */
.meta .date {
    font-size: 12px;
    color: #95a5a6;
    transition: opacity 0.3s ease;
    opacity: 1; /* Fully visible */
}

.meta .delete-btn {
    background: none;
    border: none;
    padding: 0;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0; /* Hidden by default */
    transform: scale(0.9); /* Slightly smaller */
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.meta .delete-btn i {
    font-size: 18px;
    color: #e74c3c;
    transition: color 0.3s ease, transform 0.3s ease;
}

/* On hover: hide date, show trash icon */
.meta:hover .date {
    opacity: 0; /* Fade out */
}

.meta:hover .delete-btn {
    opacity: 1; /* Fade in */
    transform: scale(1); /* Normal size */
}

/* Hover effects for trash icon */
.meta .delete-btn i:hover {
    color: #c0392b;
    transform: scale(1.1); /* Slight zoom */
}

/* Pagination */
.pagination-controls {
    display: flex;
    justify-content: center;
    margin: 20px 0;
    gap: 10px;
}

.pagination-controls {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    margin: 20px 0;
}

.pagination-button {
    padding: 8px 12px;
    border: 1px solid #ccc;
    background-color: #f9f9f9;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
    border-radius: 5px;
}

.pagination-button.active {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
}

.pagination-button:hover {
    background-color: #0056b3;
    color: #fff;
}

.ellipsis {
    padding: 8px 12px;
    color: #999;
    cursor: default;
}

.inbox {
    display: none; /* Géré par JS */
}

.inbox-container {
    margin-bottom: 20px;
}




.lu {
    font-weight: normal;
}
.non-lu {
    font-weight: bold;
}


</style>



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
                    <a href="/nbpt-admin/user/<?= $_SESSION['admin_id'] ?>" class="dropdown-item">
                        <i class="fa fa-user-circle"></i> Voir profil
                    </a>
                    <a href="/nbpt-admin/logout" onclick="return confirm('Souhaitez-vous vraiment vous déconnecter ?')" class="dropdown-item">
                        <i class="fa fa-sign-out-alt"></i>déconnexion
                    </a>
                </div>
            </div>
        </header>
        <section class="content inbox-container">
            <?php foreach ($contacts as $item): ?>
                <div class="inbox" data-id="<?= $item->id ?>">
                    <div class="widget email-item" data-id="<?= $item->id ?>">
                        <div class="details">
                            <a href="/nbpt-admin/inbox/view/<?= $item->id ?>" class="email-link">
                                <p 
                                class="<?= $item->view == true ? 'lu' : 'non-lu'; ?>"
                                >
                                <?= $item->nom ?>
                                </p>
                            </a>
                            <p class="subject"><?= $item->sujet ?></p>
                            
                            <br>
                            <div class="meta">
                                <span class="date" data-received-date="<?= $item->created_at ?>">
                                
                                </span>
                            </div>
                            
                        </div>
                        <div class="meta">
                            
                            <button class="delete-btn" title="Supprimer" data-id="<?= $item->id ?>">
                                <i class="fa-solid fa-trash"></i>
                                
                            </button>
                            
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
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
        // Suppression dynamique avec AJAX
        document.querySelectorAll(".delete-btn").forEach((button) => {
            button.addEventListener("click", function () {
                const emailId = this.dataset.id;
                const parentWidget = this.closest(".widget");

                if (confirm("Êtes-vous sûr de vouloir supprimer cet email ?")) {
                    fetch(`/nbpt-admin/inbox/delete/${emailId}`, {
                        method: "DELETE",
                    })
                    .then((response) => {
                        if (response.ok) {
                            parentWidget.style.transition = "opacity 0.3s ease";
                            parentWidget.style.opacity = 0;

                            // Retirer l'email après l'animation
                            setTimeout(() => {
                                parentWidget.remove();
                            }, 300);
                        } else {
                            alert("Erreur lors de la suppression. Veuillez réessayer.");
                        }
                    })
                    .catch((error) => {
                        console.error("Erreur AJAX :", error);
                        alert("Une erreur s'est produite.");
                    });
                }
            });
        });
    });

    // Formatage date
    function formatDate(receivedDate) {
        const now = new Date(); // Date actuelle
        const date = new Date(receivedDate); // Convertir la date reçue

        // Calculer la différence en millisecondes
        const diff = now - date;

        // Si la différence est inférieure à 24 heures
        if (diff < 24 * 60 * 60 * 1000) {
            // Retourner l'heure au format HH:mm
            return date.toLocaleTimeString('fr-FR', {
                hour: '2-digit',
                minute: '2-digit',
            });
        } else {
            // Retourner la date au format JJ/MM/AAAA
            return date.toLocaleDateString('fr-FR', {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric',
            });
        }
    }

    // Exemple d'utilisation
    const messages = document.querySelectorAll('.meta .date');
    messages.forEach((message) => {
        const receivedDate = message.dataset.receivedDate; // Ajouter un attribut data-received-date
        message.textContent = formatDate(receivedDate);
    });

    // Pagination
    document.addEventListener("DOMContentLoaded", () => {
        const itemsPerPage = 2; // Nombre d'éléments par page
        const inboxContainer = document.querySelector(".inbox-container");
        const inboxItems = Array.from(inboxContainer.querySelectorAll(".inbox"));
        const totalItems = inboxItems.length;
        const totalPages = Math.ceil(totalItems / itemsPerPage);

        let currentPage = 1;

        // Fonction pour afficher les éléments de la page actuelle
        function showPage(page) {
            const startIndex = (page - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;

            inboxItems.forEach((item, index) => {
                if (index >= startIndex && index < endIndex) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });

            updatePaginationControls();
        }

        // Crée les contrôles de pagination dynamiques
        function createPaginationControls() {
            const paginationContainer = document.createElement("div");
            paginationContainer.classList.add("pagination-controls");
            inboxContainer.after(paginationContainer);
            updatePaginationControls();
        }

        // Met à jour les contrôles de pagination
        function updatePaginationControls() {
            const paginationContainer = document.querySelector(".pagination-controls");
            paginationContainer.innerHTML = ""; // Réinitialise les boutons

            const maxVisiblePages = 2; // Nombre maximum de pages visibles
            const halfVisible = Math.floor(maxVisiblePages / 2);

            let startPage = Math.max(1, currentPage - halfVisible);
            let endPage = Math.min(totalPages, currentPage + halfVisible);

            if (currentPage <= halfVisible) {
                endPage = Math.min(totalPages, maxVisiblePages);
            } else if (currentPage + halfVisible >= totalPages) {
                startPage = Math.max(1, totalPages - maxVisiblePages + 1);
            }

            // Bouton "Précédent"
            if (currentPage > 1) {
                const prevButton = createPaginationButton("«", currentPage - 1);
                paginationContainer.appendChild(prevButton);
            }

            // Pages dynamiques
            if (startPage > 1) {
                paginationContainer.appendChild(createPaginationButton(1, 1));
                if (startPage > 2) {
                    paginationContainer.appendChild(createEllipsis());
                }
            }

            for (let i = startPage; i <= endPage; i++) {
                const button = createPaginationButton(i, i);
                if (i === currentPage) button.classList.add("active");
                paginationContainer.appendChild(button);
            }

            if (endPage < totalPages) {
                if (endPage < totalPages - 1) {
                    paginationContainer.appendChild(createEllipsis());
                }
                paginationContainer.appendChild(createPaginationButton(totalPages, totalPages));
            }

            // Bouton "Suivant"
            if (currentPage < totalPages) {
                const nextButton = createPaginationButton("»", currentPage + 1);
                paginationContainer.appendChild(nextButton);
            }
        }

        // Crée un bouton de pagination
        function createPaginationButton(text, page) {
            const button = document.createElement("button");
            button.textContent = text;
            button.classList.add("pagination-button");
            button.dataset.page = page;

            button.addEventListener("click", () => {
                currentPage = page;
                showPage(currentPage);
            });

            return button;
        }

        // Crée des "..." pour les pages intermédiaires
        function createEllipsis() {
            const ellipsis = document.createElement("span");
            ellipsis.textContent = "...";
            ellipsis.classList.add("ellipsis");
            return ellipsis;
        }

        // Initialisation
        if (totalItems > itemsPerPage) {
            createPaginationControls();
            showPage(currentPage);
        } else {
            inboxItems.forEach((item) => (item.style.display = "block"));
        }
    });



</script>
