
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
            top: -4px;
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

        @media (max-width: 600px) {
            form {
                padding: 15px;
            }
        }
        .jumbotron {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }

        .jumbotron h1 {
            font-size: 24px;
            color: black;
            margin-bottom: 20px;
            text-align: center;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            margin: 10px 0;
        }

        p i {
            color: black;
            margin-right: 10px;
        }

        h1 i {
            color: black;
            margin-right: 10px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
</style>


<div class="admin-wrapper">
    <?php  include 'templates/includes/aside.php'; ?>

    <div class="main-content">
        <header class="header">
            <h1>Envoyer un nensletter aux abonnées</h1>
            <a href="/nbpt-admin/logout" onclick="return confirm('Se déconnecter ?')" class="logout">Déconnexion</a>
        </header>
        <section class="ftco-section" id="guide" >
            <div class="container">
                <div class="row d-md-flex">
                    <div class="col-md-6 ftco-animate p-md-5 ">
                        <form id="contactForm" action="/nbpt-admin/sendnews" method="post" novalidate>
                            <h2 class="mb-4">Newsletter</h2>
                            <div class="form-group">
                                <input type="text" name="sujet" id="sujet" placeholder=" " required>
                                <label for="sujet">Sujet</label>
                                <div class="error-message" id="nomError">Veuillez entrer un nom valide (3-255 caractères).</div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" placeholder=" " required></textarea>
                                <label for="message">Message</label>
                            </div>
                            <input type="submit" value="Envoyer" class="btn-submit">

                        </form>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
</div>



