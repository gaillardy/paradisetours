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
}

label {
    display: block;
    margin-bottom: 8px;
    color: #2f3640;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    transition: border-color 0.3s;
}

input[type="text"]:focus,
input[type="email"]:focus,
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

.back-link a {
    display: inline-block;
    color: #3498db;
    text-decoration: none;
    margin-bottom: 20px;
    transition: color 0.3s;
}

.back-link a:hover {
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
            <h1>Ajouter un utilisateur</h1>
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
                <div class="back-link">
                    <a href="/nbpt-admin/comptes">&larr; Retour</a>
                </div>
                <h2>Ajouter un compte</h2>
                <form action="/nbpt-admin/add-account" method="post" id="addAccountForm">
                    <div class="form-group">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" id="username" name="username" required>
                        <small class="error-message" id="usernameError"></small>
                    </div>

                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" required minlength="2" maxlength="50">
                        <small class="error-message" id="nomError"></small>
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" required minlength="2" maxlength="50">
                        <small class="error-message" id="prenomError"></small>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                        <small class="error-message" id="emailError"></small>
                    </div>

                    <div class="form-group">
                        <label for="pass">Mot de passe</label>
                        <input type="password" id="pass" name="pass" required minlength="6">
                        <small class="error-message" id="passError"></small>
                    </div>

                    <div class="form-group">
                        <label for="confirm_pass">Confirmer le mot de passe</label>
                        <input type="password" id="confirm_pass" name="confirm_pass" required>
                        <small class="error-message" id="confirmPassError"></small>
                    </div>

                    <div class="form-group">
                        <button type="submit" id="submitBtn">Ajouter le compte</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("addAccountForm");
    const usernameInput = document.getElementById("username");
    const emailInput = document.getElementById("email");
    const nomInput = document.getElementById("nom");
    const prenomInput = document.getElementById("prenom");
    const passInput = document.getElementById("pass");
    const confirmPassInput = document.getElementById("confirm_pass");

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

