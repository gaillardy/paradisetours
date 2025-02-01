<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">  
<link rel="icon" href="/assets/images/favicon.png">
<link rel="stylesheet" href="/assets/styles/login.css">
<title>Se connecter - NBPT Admin</title>
<style>
    .back-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: fit-content;
        margin: 20px auto;
        padding: 12px 20px;
        font-size: 18px;
        font-weight: 600;
        text-decoration: none;
        color: #333;
        background: #f8f9fa;
        border: 2px solid #333;
        border-radius: 8px;
        transition: all 0.3s ease-in-out;
    }

    .back-link i {
        margin-right: 8px;
    }

    .back-link:hover {
        background: #333;
        color: #fff;
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .back-link {
            font-size: 16px;
            padding: 10px 16px;
        }
    }

.error-message {
    color: #e74c3c;
    font-size: 12px;
    margin-top: 5px;
    display: none;
}
</style>


<div class="container-fluid">
    <div class="login-section">
        <?php
            foreach ($flashMessages as $message){
                ?>
                    <div class="flash-message <?= $message['type']; ?>">
                        <p><?= htmlspecialchars($message['message']); ?></p>
                    </div>
                <?php
            }
        ?>
        
        <div class="login-box">
            <h3 class="login-title">Administration</h3>
            <p class="login-subtitle"></p>
            <form action="/nbpt-admin/change-password" method="POST" id="updatePasswordForm">
                <div class="form-group">
                    <div class="input-wrapper">
                        <i class="icon fas fa-lock"></i>
                        <input type="password" class="form-control" id="pass" name="password" placeholder="Nouveau mot de passe" required>
                    </div>
                    <small class="error-message" id="passError"></small>
                </div>
                <div class="form-group">
                    <div class="input-wrapper">
                        <i class="icon fas fa-lock"></i>
                        <input type="password" class="form-control" id="password_confirm" name="passwordConfirm" placeholder="Confirmer le nouveau mot de passe" required>
                    </div>
                    <small class="error-message" id="confirmPassError"></small>
                </div>
                
                <button type="submit" class="btn btn-primary btn-full-width">Log In</button>
            </form>
        </div>
        <div class="image-section">
            <img src="/assets/images/cover/login.jpg" alt="Login">
        </div>
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

// Message flash

document.addEventListener('DOMContentLoaded', () => {
        const flashMessages = document.querySelectorAll('.flash-message');

        flashMessages.forEach(message => {
            setTimeout(() => {
                message.style.opacity = 0;
                setTimeout(() => {
                    message.remove();
                }, 1000); // Retire le message après l'animation
            }, 3000); // Le message disparaît après 3 secondes
        });
});

        
</script>