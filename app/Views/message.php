<?php include 'templates/admin-header.php';?>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f5f6fa;
    margin: 0;
    padding: 0;
}

.content {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.ftco-section {
    width: 80%;
}

form {
    background: #fff;
    padding: 20px 30px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #2f3640;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #2f3640;
    font-weight: bold;
}

input, textarea, select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    transition: border-color 0.3s;
}

input:focus, textarea:focus, select:focus {
    border-color: #3498db;
    outline: none;
}

textarea {
    resize: none;
    height: 100px;
}

select {
    appearance: none;
    background: #fff url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="%233498db" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>') no-repeat right 12px center;
    background-size: 16px 16px;
}

small.error-message {
    color: #e74c3c;
    font-size: 12px;
    display: none;
    margin-top: 5px;
}

.btn-submit {
    background-color: #2ecc71;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    width: 100%;
}

.btn-submit:hover {
    background-color: #27ae60;
}       
/* Responsive */
@media (max-width: 768px) {
    form {
        padding: 1.5rem;
    }

    h2 {
        font-size: 20px;
    }
}

</style>

<div class="admin-wrapper">
    <?php  include 'templates/includes/aside.php'; ?>

    <div class="main-content">
        <header class="header">
            <h1>Nouveau message</h1>
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
            <section class="ftco-section" id="guide">
                <div class="container">
                    <div class="row justify-content-center align-items-center min-vh-100">
                        <div class="col-md-8 col-lg-6">
                            <form id="contactForm" action="/nbpt-admin/send-new-message" method="post">
                                <h2 class="mb-4 text-center">Rédiger votre message</h2>

                                <div class="form-group">
                                    <label for="email">De</label>
                                    <select name="email" id="email" required>
                                        <option value="contact@nosybeparadisetours.com">contact@nosybeparadisetours.com</option>
                                        <option value="direction@nosybeparadisetours.com">direction@nosybeparadisetours.com</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="dest">À</label>
                                    <input type="email" name="dest" id="dest" placeholder="Entrez l'email du destinataire" required>
                                    <small class="error-message" id="emailError"></small>
                                </div>

                                <div class="form-group">
                                    <label for="sujet">Sujet</label>
                                    <input type="text" name="sujet" id="sujet" placeholder="Entrez le sujet" required minlength="3" maxlength="255">
                                    <small class="error-message" id="sujetError"></small>
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" placeholder="Votre message ici..." required></textarea>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn-submit">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
</div>


<script>

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const emailField = document.getElementById("dest");
    const sujetField = document.getElementById("sujet");
    const messageField = document.getElementById("message");

    // Messages d'erreur
    const emailError = document.getElementById("emailError");
    const sujetError = document.getElementById("sujetError");

    // Validation d'email
    const validateEmail = (email) => {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    };

    // Afficher ou cacher les messages d'erreur
    const showError = (field, errorField, message) => {
        errorField.textContent = message;
        errorField.style.display = message ? "block" : "none";
        field.style.borderColor = message ? "#e74c3c" : "#ccc";
    };

    // Validation sur la soumission du formulaire
    form.addEventListener("submit", function (e) {
        let isValid = true;

        // Validation de l'email
        if (!validateEmail(emailField.value)) {
            showError(emailField, emailError, "Veuillez entrer un email valide.");
            isValid = false;
        } else {
            showError(emailField, emailError, "");
        }

        // Validation du sujet
        if (sujetField.value.trim().length < 3 || sujetField.value.trim().length > 255) {
            showError(sujetField, sujetError, "Le sujet doit contenir entre 3 et 255 caractères.");
            isValid = false;
        } else {
            showError(sujetField, sujetError, "");
        }

        // Validation du message
        if (messageField.value.trim() === "") {
            alert("Le message est obligatoire.");
            isValid = false;
        }

        // Empêcher l'envoi si des erreurs existent
        if (!isValid) {
            e.preventDefault();
        }
    });

    // Validation en temps réel (email)
    emailField.addEventListener("input", () => {
        if (validateEmail(emailField.value)) {
            showError(emailField, emailError, "");
        }
    });

    // Validation en temps réel (sujet)
    sujetField.addEventListener("input", () => {
        if (sujetField.value.trim().length >= 3 && sujetField.value.trim().length <= 255) {
            showError(sujetField, sujetError, "");
        }
    });
});
</script>

