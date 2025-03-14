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
    max-width: 400px;
    width: 100%;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #2f3640;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #2f3640;
    font-weight: bold;
}

input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    transition: border-color 0.3s;
}

input[type="password"]:focus {
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
</style>


<div class="admin-wrapper">
    <?php  include 'templates/includes/aside.php'; ?>

    <div class="main-content">
        <header class="header">
            <h1>Utilisateurs  <a href="#" class="password-link">Ajouter un utilisateur</a></h1>
            <?php
                foreach ($flashMessages as $message){
                    ?>
                        <div class="flash-message <?= $message['type']; ?>">
                            <p><?= htmlspecialchars($message['message']); ?></p>
                        </div>
                    <?php
                }
            ?>
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
                <h2><?= $user['username'] ?></h2>
                <form action="/nbpt-admin/user/set-new-password/<?= $user['id'] ?>" method="post" id="updatePasswordForm">
                    <div class="form-group">
                        <label for="pass">Nouveau mot de passe</label>
                        <input type="password" name="pass" id="pass" required minlength="6">
                        <small class="error-message" id="passError"></small>
                    </div>

                    <div class="form-group">
                        <label for="password_confirm">Confirmer le mot de passe</label>
                        <input type="password" name="password_confirm" id="password_confirm" required>
                        <small class="error-message" id="confirmPassError"></small>
                    </div>

                    <div class="form-group">
                        <button type="submit" id="submitBtn">Mettre à jour le mot de passe</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("updatePasswordForm");
    const passInput = document.getElementById("pass");
    const confirmPassInput = document.getElementById("password_confirm");

    form.addEventListener("submit", function (event) {
        let valid = true;

        // Réinitialiser les messages d'erreurs
        document.querySelectorAll(".error-message").forEach((el) => {
            el.style.display = "none";
        });

        // Validation du mot de passe
        if (passInput.value.length < 6) {
            valid = false;
            showError("passError", "Le mot de passe doit contenir au moins 6 caractères.");
        }

        // Validation de la confirmation du mot de passe
        if (passInput.value !== confirmPassInput.value) {
            valid = false;
            showError("confirmPassError", "Les mots de passe ne correspondent pas.");
        }

        if (!valid) {
            event.preventDefault();
        }
    });

    function showError(id, message) {
        const errorElement = document.getElementById(id);
        if (errorElement) {
            errorElement.textContent = message;
            errorElement.style.display = "block";
        }
    }
});

</script>


