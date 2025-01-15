<?php include 'templates/admin-header.php' ?>
<link rel="stylesheet" href="/assets/styles/login.css">



<div class="container-fluid">
    <div class="login-section">
        <?php
            if (isset($error)) {
                ?>
                    <div class="error-container">
                        <h1>Erreur</h1>
                        <p><?= $error ?></p>
                    </div>
                <?php
            }
        ?>
        
        <div class="login-box">
            <h3 class="login-title">Administration</h3>
            <p class="login-subtitle"></p>
            <form action="/auth/login" method="POST" id="loginForm">
                <div class="form-group">
                    <div class="input-wrapper">
                        <i class="icon icon-message"></i>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Adresse Email" required>
                    </div>
                    <div id="emailError" class="text-danger mt-2" style="display: none;">Please enter a valid email address.</div>
                </div>
                <div class="form-group">
                    <div class="input-wrapper">
                        <i class="icon fas fa-lock"></i>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
                    </div>
                    <div id="passwordError" class="text-danger mt-2" style="display: none;">Password is required.</div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-4 remember-section">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <a href="#" class="forgot-password">Mot de passe oublié ?</a>
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
    </script>