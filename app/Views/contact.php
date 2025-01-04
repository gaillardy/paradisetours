<?php include 'templates/header.php'; ?>
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
            border-color: #007bff;
            background: #fff;
            outline: none;
        }

        input:focus + label,textarea:focus + label,
        input:not(:placeholder-shown) + label {
            top: -4px;
            font-size: 12px;
            color: #007bff;
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
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-submit:hover {
            background: #0056b3;
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

<div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/dark-cover.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?= htmlspecialchars($translations['contact'] ?? 'contact') ?></h1>
            </div>
        </div>
    </div>
</div>



<section class="ftco-section" id="guide" >
  <div class="container">
    <div class="row d-md-flex">
        <div class="col-md-6 ftco-animate p-md-5 ">
            <form id="contactForm" action="/<?= $lang ?>/sub" method="post" novalidate>
                <h2 class="mb-4">Nous contacter</h2>
                <div class="form-group">
                    <input type="text" name="nom" id="nom" placeholder=" " required>
                    <label for="nom">Nom</label>
                    <div class="error-message" id="nomError">Veuillez entrer un nom valide (3-255 caractères).</div>
                </div>
                <div class="form-group">
                    <input type="text" name="email" id="email" placeholder=" " required>
                    <label for="email">Email</label>
                    <div class="error-message" id="emailError">Veuillez entrer un email valide.</div>
                </div>
                <div class="form-group">
                    <input type="tel" name="tel" id="tel" placeholder=" " required>
                    <label for="tel">Téléphone</label>
                    <div class="error-message" id="telError">Veuillez entrer un numéro valide.</div>
                </div>
                <div class="form-group">
                    <input type="text" name="sujet" id="sujet" placeholder=" " required>
                    <label for="sujet">Sujet</label>
                    <div class="error-message" id="sujetError">Le sujet doit contenir entre 2 et 100 caractères.</div>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" placeholder=" " required></textarea>
                    <label for="message">Message</label>
                </div>
                <input type="submit" value="Envoyer" class="btn-submit">
            </form>
        </div>
        <div class="col-md-6 ftco-animate p-md-5">
            <div class="jumbotron">
            <h1><i class="fas fa-info-circle"></i> Informations de Contact</h1>
            <p><i class="fas fa-globe"></i> <strong>Site :</strong> Nosy Be Paradise Tour</p>
            <p><i class="fas fa-map-marker-alt"></i> <strong>Localisation :</strong> À côté de la pharmacie Tsarajoro, Rue Boulevard Raymond Poincaré, Hell-Ville, Nosy Be 207, Madagascar</p>
            <p><i class="fab fa-whatsapp"></i> <strong>WhatsApp :</strong><a href="tel:+261320712758">+261 32 07 127 58</a></p>
            <p><i class="fas fa-envelope"></i> <strong>Email :</strong> <a href="mailto:contact@nosybeparadisetour.com">contact@nosybeparadisetour.com</a></p>
            </div>
        </div>
    </div>
  </div>
</section>

<script>
        document.getElementById("contactForm").addEventListener("submit", function (e) {
            e.preventDefault();
            let isValid = true;

            // Validation du champ Nom
            const nom = document.getElementById("nom");
            const nomError = document.getElementById("nomError");
            if (nom.value.length < 3 || nom.value.length > 255) {
                nomError.style.display = "block";
                isValid = false;
            } else {
                nomError.style.display = "none";
            }

            // Validation de l'email
            const email = document.getElementById("email");
            const emailError = document.getElementById("emailError");
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email.value)) {
                emailError.style.display = "block";
                isValid = false;
            } else {
                emailError.style.display = "none";
            }

            // Validation du téléphone
            const tel = document.getElementById("tel");
            const telError = document.getElementById("telError");
            if (isNaN(tel.value) || tel.value.trim() === "") {
                telError.style.display = "block";
                isValid = false;
            } else {
                telError.style.display = "none";
            }

            // Validation du sujet
            const sujet = document.getElementById("sujet");
            const sujetError = document.getElementById("sujetError");
            if (sujet.value.length < 2 || sujet.value.length > 100) {
                sujetError.style.display = "block";
                isValid = false;
            } else {
                sujetError.style.display = "none";
            }

            // Si tout est valide, soumettre le formulaire
            if (isValid) {
                this.submit();
            }
        });
    </script>
<?php include 'templates/footer.php'; ?>