<?php include 'templates/header.php'; ?>
<?php
if (!isset($_SESSION['contact_success']))
{
    ?>
        <script>
            window.location.href = "/en/contact";
        </script>
    <?php
}

?>
<style>
    .jumbotron h1 {
        font-size: 24px;
        color: black;
        margin-bottom: 20px;
        text-align: center;
    }
</style>


<div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/cover/contact.jpg');">
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
            <h2>Votre message à été envoié avec succès</h2>
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





<?php include 'templates/footer.php'; ?>
