<?php include 'templates/admin-header.php';?>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f5f6fa;
    margin: 0;
    padding: 0;
}

.content {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
}

.form-container {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    width: 100%;
}

.form-container h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #2f3640;
}

.form-group {
    margin-bottom: 15px;
    position: relative;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #2f3640;
    font-weight: bold;
}

input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    transition: border-color 0.3s;
}

input[type="text"]:focus,
input[type="email"]:focus {
    border-color: #3498db;
    outline: none;
}

.error-message {
    color: #e74c3c;
    font-size: 12px;
    margin-top: 5px;
    display: none;
}

button {
    width: 100%;
    padding: 12px;
    background: #2ecc71;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s;
}

button:hover {
    background: #27ae60;
}

.password-link {
    display: inline-block;
    color: #3498db;
    text-decoration: none;
    margin-top: 10px;
    transition: color 0.3s;
}

.password-link:hover {
    color: #2980b9;
}

@media (max-width: 768px) {
    .form-container {
        padding: 15px;
    }

    button {
        font-size: 14px;
    }
}
</style>
<div class="admin-wrapper">
    <?php  include 'templates/includes/aside.php'; ?>

    <div class="main-content">
        <header class="header">
            <h1>Utilisateurs  | <a href="/nbpt-admin/add-user" class="password-link">Ajouter un utilisateur</a></h1>
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
            <div class="form-container">
                <?php
                    foreach ($flashMessages as $message){
                        ?>
                            <div class="flash-message <?= $message['type']; ?>">
                                <p><?= htmlspecialchars($message['message']); ?></p>
                            </div>
                        <?php
                    }
                ?>
                <h2>Modifier le profil de <?= htmlspecialchars($user['username']) ?></h2>
                <form action="/nbpt-admin/compte/edit/<?= $user['id'] ?>" method="post" id="editForm">
                    <div class="form-group">
                        <input placeholder="Nom d'utilisateur" type="text" id="username" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>
                        <small class="error-message" id="usernameError"></small>
                    </div>

                    <div class="form-group">
                        <input placeholder="Nom" type="text" id="nom" name="nom" value="<?= $user['nom'] ?>" required minlength="2" maxlength="50">
                        <small class="error-message" id="nomError"></small>
                    </div>

                    <div class="form-group">
                        <input placeholder="Prénom" type="text" id="prenom" name="prenom" value="<?= $user['prenom'] ?>" required minlength="2" maxlength="50">
                        <small class="error-message" id="prenomError"></small>
                    </div>

                    <div class="form-group">
                        <input placeholder="Email" type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
                        <small class="error-message" id="emailError"></small>
                    </div>

                    <div class="form-group">
                        <a href="/nbpt-admin/user/set-password/<?= htmlspecialchars($user['id']) ?>" class="password-link">Nouveau mot de passe</a>
                    </div>

                    <div class="form-group">
                        <button type="submit" id="submitBtn">Mettre à jour le profil</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("editForm");
    const usernameInput = document.getElementById("username");
    const emailInput = document.getElementById("email");
    const nomInput = document.getElementById("nom");
    const prenomInput = document.getElementById("prenom");

    form.addEventListener("submit", function (event) {
        let valid = true;

        // Réinitialiser les messages d'erreurs
        document.querySelectorAll(".error-message").forEach((el) => {
            el.style.display = "none";
        });

        // Validation du nom d'utilisateur
        if (usernameInput.value.trim() === "") {
            valid = false;
            showError("usernameError", "Le nom d'utilisateur est obligatoire.");
        }

        // Validation de l'email
        if (!validateEmail(emailInput.value)) {
            valid = false;
            showError("emailError", "Veuillez entrer un email valide.");
        }

        // Validation du nom
        if (nomInput.value.trim().length < 2 || nomInput.value.trim().length > 50) {
            valid = false;
            showError("nomError", "Le nom doit contenir entre 2 et 50 caractères.");
        }

        // Validation du prénom
        if (prenomInput.value.trim().length < 2 || prenomInput.value.trim().length > 50) {
            valid = false;
            showError("prenomError", "Le prénom doit contenir entre 2 et 50 caractères.");
        }

        if (!valid) {
            event.preventDefault();
        }
    });

    function validateEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    function showError(id, message) {
        const errorElement = document.getElementById(id);
        if (errorElement) {
            errorElement.textContent = message;
            errorElement.style.display = "block";
        }
    }
});

</script>


