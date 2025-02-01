<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">  
<link rel="icon" href="/assets/images/favicon.png">
<link rel="stylesheet" href="/assets/styles/login.css">
<title>Code de réinitialisation - NBPT Admin</title>
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
            <h3 class="login-title">Code de réinitialisation</h3>
            <p class="login-subtitle">Entrez le code qu'ont a envoyé à votre adresse email. vérifier votre spam</p>
            <form action="/nbpt-admin/checking-code" method="POST" id="loginForm">
                <div class="form-group">
                    <div class="input-wrapper">
                        <i class="icon fas fa-lock-open"></i>
                        <input type="password" class="form-control" id="password" name="code" placeholder="Code" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-full-width">Soumettre</button>
            </form>
            <a href="/auth/login" class="back-link"><i class="fa fa-arrow-left"></i>Annuler</a>
        </div>
    </div>
</div>

<script>
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