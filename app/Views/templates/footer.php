<style>
  .error-message {
            color: red;
            font-size: 12px;
            display: none;
            margin-top: 5px;
        }
    /* Effet d'arrière-plan */
    .modal {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.5);
          display: flex;
          justify-content: center;
          align-items: center;
          z-index: 1000;
          opacity: 0;
          visibility: hidden;
          transition: opacity 0.3s ease, visibility 0.3s ease;
      }

      /* Affichage lorsque le modal est actif */
      .modal.show {
          opacity: 1;
          visibility: visible;
      }

      /* Contenu du modal */
      .modal-content {
          background: #fff;
          padding: 20px;
          border-radius: 12px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
          transform: scale(0.8);
          transition: transform 0.3s ease;
          width: 90%;
          max-width: 400px;
      }

      /* Effet de zoom lorsque le modal est affiché */
      .modal.show .modal-content {
          transform: scale(1);
      }

      /* Titre du modal */
      .modal-content h3 {
          font-size: 1.5rem;
          color: #333;
          margin-bottom: 15px;
      }

      /* Zone de texte */
      .modal-content textarea {
          width: 100%;
          height: 100px;
          padding: 10px;
          font-size: 1rem;
          border: 1px solid #ddd;
          border-radius: 8px;
          margin-bottom: 15px;
          resize: none;
          box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
          transition: border 0.2s ease;
      }

      .modal-content textarea:focus {
          border-color: #007bff;
          outline: none;
      }

      /* Style de base des boutons */
      #btn-mod {
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      transition: all 0.3s ease;
      outline: none;
      }

      /* Style pour le bouton 'Annuler' */
      .modal-close {
      background-color: #f44336; /* Rouge */
      color: white;
      font-weight: bold;
      }

      .modal-close:hover {
      background-color: #d32f2f;
      }

      .modal-close:focus {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      /* Style pour le bouton 'Envoyer' */
      .modal-submit {
      background-color: #4CAF50; /* Vert */
      color: white;
      font-weight: bold;
      }

      .modal-submit:hover {
      background-color: #388E3C;
      }

      .modal-submit:focus {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      /* Effet de transition */
      #btn-mod:active {
      transform: scale(0.98);
      }
      /* Style de l'input email */
      .modal-input-email {
      width: 100%;
      padding: 12px 16px;
      margin-bottom: 20px; /* Espacement en bas pour aérer */
      font-size: 16px;
      border: 2px solid #ddd;
      border-radius: 5px;
      background-color: #f9f9f9;
      color: #333;
      transition: all 0.3s ease;
      box-sizing: border-box; /* Pour inclure le padding dans la largeur totale */
      }

      /* Effet au focus */
      .modal-input-email:focus {
      border-color: #4CAF50; /* Couleur verte */
      box-shadow: 0 0 8px rgba(76, 175, 80, 0.5); /* Ombre légère */
      outline: none;
      }

      /* Placeholder personnalisé */
      .modal-input-email::placeholder {
      color: #999; /* Couleur grise plus douce pour le placeholder */
      font-style: italic; /* Style italique pour le placeholder */
      }

      /* Effet au survol */
      .modal-input-email:hover {
      border-color: #66bb6a; /* Légère couleur verte au survol */
      }

      /* Effet de focus actif */
      .modal-input-email:active {
      transform: scale(0.98); /* Effet de réduction lors du clic */
      }
</style>


<footer class="ftco-footer ftco-bg-dark ftco-section">
<div class="container">
  <div class="row mb-5">
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Nosy Be Paradise Tours</h2>
        <p>Suivez nous sur les résaux sociaux.</p>
        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
          <li class="ftco-animate"><a target="_blank" rel="noreferrer noopener" href="https://twitter.com/7paradisetours"><span class="icon-twitter"></span></a></li>
          <li class="ftco-animate"><a target="_blank" rel="noreferrer noopener" href="https://www.facebook.com/NosybeParadiseTours/"><span class="icon-facebook"></span></a></li>
          <li class="ftco-animate"><a target="_blank" rel="noreferrer noopener" href="https://mg.linkedin.com/in/nosy-be-paradise-tours-1bb9088b"><span class="icon-linkedin"></span></a></li>
          <li class="ftco-animate"><a target="_blank" rel="noreferrer noopener" href="https://https//www.google.com/maps/contrib/112713821230749887112/photos/@-13.3996565,48.2711495,17z/data=!3m1!4b1!4m3!8m2!3m1!1e1"><span class="icon-google-plus"></span></a></li>
          <li class="ftco-animate"><a target="_blank" rel="noreferrer noopener" href="https://www.youtube.com/results?search_query=nosy+be+paradise+tours"><span class="icon-youtube"></span></a></li>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4 ml-md-5">
        <h2 class="ftco-heading-2">Informations</h2>
        <ul class="list-unstyled">
          <li><a href="/<?= $lang ?>/a-propos" class="py-2 d-block">À propos</a></li>
          <li><a href="/<?= $lang ?>/services" class="py-2 d-block">Service</a></li>
          <li><a href="/<?= $lang ?>/contact" class="py-2 d-block">Contact</a></li>
          <li><a href="/<?= $lang ?>/guide" class="py-2 d-block">Guide</a></li>
          <li><a href="javascript:avoid(0)" onclick="openModal('forwardModal')" class="py-2 d-block">Newsletter</a></li>


          <!-- Modale pour Newsletter -->
          <div id="forwardModal" class="modal hidden">
                <div class="modal-content">
                    <h3>S'abonner</h3>
                    <form action="/<?= $lang ?>/subscribe" method="post" id="contactForm" >
                      <input type="email" name="email" id="email" placeholder="Votre Adresse email " class="modal-input-email">
                      <div class="error-message" id="emailError">Veuillez entrer un email valide.</div>
                      <button id="btn-mod" class="modal-close" onclick="closeModal('forwardModal')" type="button">Annuler</button>
                      <button id="btn-mod" class="modal-submit" type="submit">Envoyer</button>
                    </form>
                </div>
          </div>

        </ul>
      </div>
    </div>
    <div class="col-md">
       <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Compagnies aériennes</h2>
        <ul class="list-unstyled">
          <li><a target="_blank" rel="noreferrer noopener" href="https://www.airmadagascar.com/fr" class="py-2 d-block">Air Madagascar</a></li>
          <li><a target="_blank" rel="noreferrer noopener" href="https://www.air-austral.com/" class="py-2 d-block">Air Austral</a></li>
          <li><a target="_blank" rel="noreferrer noopener" href="https://www.ethiopianairlines.com/" class="py-2 d-block">Ethiopian Airline</a></li>
          <li><a target="_blank" rel="noreferrer noopener" href="https://www.flyairlink.com/" class="py-2 d-block">Airlink</a></li>
          <li><a target="_blank" rel="noreferrer noopener" href="https://tsaradia.com/" class="py-2 d-block">Tsaradia</a></li>
          <li><a target="_blank" rel="noreferrer noopener" href="https://www.madagasikaraairways.com/fr" class="py-2 d-block">Madagascar Airways</a></li>
          <li><a target="_blank" rel="noreferrer noopener" href="http://www.ewa-air.com/" class="py-2 d-block">Ewa Air</a></li>
          <li><a target="_blank" rel="noreferrer noopener" href="https://www.neosair.it/" class="py-2 d-block">Neos Air</a></li>

        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Des questions?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon icon-map-marker"></span><span class="text">À côté de la pharmacie TSARAJORORue Boulevard Raymond poincaréHell ville- Nosy be 207 MADAGASCAR</span></li>
              <li><a href="tel:+261320712758"><span class="icon icon-phone"></span><span class="text">+261320712758</span></a></li>
              <li><a href="mailto:contact@nosybeparadisetours.com"><span class="icon icon-envelope"></span><span class="text"> Nous contacter </span></a></li>
            </ul>
          </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center">

        <p>
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Nosy Be Paradise Tours</a>
        </p>
    </div>
  </div>
</div>
</footer>
<script>
  // Ouverture du modal avec animation
  function openModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.add('show');
  }

  // Fermeture du modal avec animation
  function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.remove('show');
  }
  document.getElementById("contactForm").addEventListener("submit", function (e) {
    e.preventDefault();
    let isValid = true;

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

    // Si tout est valide, soumettre le formulaire
    if (isValid) {
      this.submit();
    }
  });

</script>

<script src="/assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.easing.1.3.js"></script>
<script src="/assets/js/jquery.waypoints.min.js"></script>
<script src="/assets/js/jquery.stellar.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/aos.js"></script>
<script src="/assets/js/jquery.animateNumber.min.js"></script>
<script src="/assets/js/bootstrap-datepicker.js"></script>
<script src="/assets/js/jquery.timepicker.min.js"></script>
<script src="/assets/js/scrollax.min.js"></script>
<script src="/assets/js/google-map.js"></script>
<script src="/assets/js/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
