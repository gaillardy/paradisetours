
<?php include 'templates/admin-header.php';?>
<style>
 form {
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        label {
            position: absolute;
            top: 12px;
            left: 15px;
            font-size: 14px;
            color: #aaa;
            pointer-events: none;
            transition: 0.3s;
        }

        input, textarea {
            width: 100%;
            padding: 12px 15px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f9f9f9;
            transition: 0.3s;
        }

        input:focus, textarea:focus {
            border-color: #f08300;
            background: #fff;
            outline: none;
        }

        input:focus + label,textarea:focus + label,
        input:not(:placeholder-shown) + label {
            top: -2px;
            font-size: 12px;
            color: #f08300;
        }

        textarea {
            resize: none;
            height: 100px;
        }

        .error-message {
            color: red;
            font-size: 12px;
            display: none;
            margin-top: 5px;
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            background: #f08300;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-submit:hover {
            background: #cc6f02;
        }

        .btn-submit:disabled {
        background-color: #ddd;
        color: #888;
        cursor: not-allowed;
        }

        .btn-submit:not(:disabled):hover {
            background-color: #cc6f02;
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
            <h1>Envoyer un nensletter aux abonnées</h1>
            <a href="#" >
                <i class="fa fa-user"></i>
            </a>
        </header>
        <center>
            <section class="ftco-section" id="guide">
                <div class="container">
                    <div class="row justify-content-center align-items-center min-vh-100">
                        <div class="col-md-8 col-lg-6">
                            <form id="contactForm" action="/nbpt-admin/sendnews" method="post" >
                                <h2 class="mb-4 text-center">Newsletter</h2>
                                <div class="form-group">
                                    <input type="text" name="sujet" id="sujet" placeholder=" " required>
                                    <label for="sujet">Sujet</label>
                                    <div class="error-message" id="nomError">Veuillez entrer un nom valide (3-255 caractères).</div>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" placeholder=" " required></textarea>
                                    <label for="message">Message</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn-submit" >Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </center>
    </div>
</div>
<script>
        document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('contactForm');
        const submitButton = form.querySelector('.btn-submit');

        form.addEventListener('submit', (event) => {
            submitButton.disabled = true;
            submitButton.textContent = "Envoi...";

        });
    });

</script>



