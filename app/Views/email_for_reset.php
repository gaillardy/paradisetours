<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">  
<link rel="icon" href="/assets/images/favicon.png">
<link rel="stylesheet" href="/assets/styles/login.css">
<title>Demande de réinitialisation - NBPT Admin</title>
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
            <p class="login-subtitle">Entrer l'email de votre compte NBPT Admin</p>
            <form action="/nbpt-admin/send-code-reset" method="POST" id="loginForm">
                <div class="form-group">
                    <div class="input-wrapper">
                        <i class="icon fas fa-envelope"></i>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Adresse Email" required>
                    </div>
                    <div id="emailError" class="text-danger mt-2" style="display: none;">Please enter a valid email address.</div>
                </div>
                <button type="submit" class="btn btn-primary btn-full-width">Envoyer</button>
            </form>
            <a href="/auth/login" class="back-link"><i class="fa fa-arrow-left"></i>Annuller</a>
        </div>
        <div class="image-section">
            <img src="/assets/images/cover/login.jpg" alt="Login">
        </div>
    </div>
</div>

<script>

        function goBack() {
            window.history.back();
        }
    
        document.getElementById("loginForm").addEventListener("submit", function(event) {
        let valid = true;

        // Clear previous errors
        document.getElementById("emailError").style.display = "none";
        document.getElementById("passwordError").style.display = "none";

        // Email validation
        const email = document.getElementById("email").value;
        const emailError = document.getElementById("emailError");
        const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

        if (!emailRegex.test(email)) {
            emailError.style.display = "block";
            valid = false;
        }

        // Password validation
        const password = document.getElementById("password").value;
        const passwordError = document.getElementById("passwordError");

        if (password.trim() === "") {
            passwordError.style.display = "block";
            valid = false;
        }

        // If invalid, prevent form submission
        if (!valid) {
            event.preventDefault();
        }
        });

        document.getElementById('loginForm').addEventListener('submit', function (event) {
            const rememberMeCheckbox = document.getElementById('rememberMe');

            if (rememberMeCheckbox.checked) {
                const email = document.getElementById('email').value;

                // Définir un cookie pour "Remember Me"
                const days = 30; // Durée de validité du cookie en jours
                const expiryDate = new Date();
                expiryDate.setTime(expiryDate.getTime() + (days * 24 * 60 * 60 * 1000)); // Calcul de l'expiration
                document.cookie = `rememberMe=${encodeURIComponent(email)}; expires=${expiryDate.toUTCString()}; path=/; Secure`;
            }
        });

        // Charger automatiquement l'email si le cookie existe
        window.addEventListener('load', function () {
            const cookies = document.cookie.split('; ');
            const rememberCookie = cookies.find(cookie => cookie.startsWith('rememberMe='));
            if (rememberCookie) {
                const emailValue = decodeURIComponent(rememberCookie.split('=')[1]);
                document.getElementById('email').value = emailValue;
                document.getElementById('rememberMe').checked = true;
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