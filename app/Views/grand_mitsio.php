<?php include 'templates/header.php'; ?>
    
    <div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/gallery/7.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?= $translations['194'] ?></h1>
                </div>
            </div>
        </div>
    </div>

    <main>
        <section class="content-section">
            <?= $translations['195'] ?>
            <?= $translations['196'] ?>
        </section>

        <section class="services-section-incl">
            <div class="row">
                <div class="col-sm-6">
                    <div class="service-list">
                        <?= $translations['197'] ?>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="service-list">
                        <?= $translations['198'] ?>
                    </div>
                </div>
            </div>
        </section>

       <!--<section class="buttons-section">
            <a href="#" class="btn btn-outline-primary" download="/assets/documents/br.pdf">Télécharger le PDF</a>
            <a href="tel:+261320712758" class="btn btn-outline-succsess">Appeler Maintenant</a>
        </section>-->
    </main>

<?php include 'templates/footer.php'; ?>
