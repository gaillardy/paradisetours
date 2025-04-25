<?php include 'templates/header.php'; ?>


    <div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/cover/tour-tsangatsanga-cover.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mf-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?= $translations['378'] ?></h1>
                </div>
            </div>
        </div>
    </div>


    <main>
        <section class="content-section">
            <?= $translations['379'] ?>
            <?= $translations['380'] ?>
        </section>


        <section class="services-section-incl">
            <div class="row">
                <div class="col-sm-6">
                    <div class="service-list" style="width: 100%;">
                        <?= $translations['381'] ?>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="service-list">
                        <?= $translations['382'] ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="service-list">
                        <?= $translations['383'] ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="buttons-section">
            <a href="#" class="btn btn-outline-primary" download="/assets/documents/tour-fosa-fr.pdf"><?= $translations['112'] ?></a>
            <a href="tel:+261320712758" class="btn btn-outline-succsess"><?= $translations['113'] ?></a>
        </section>
    </main>
<?php include 'templates/footer.php'; ?>
