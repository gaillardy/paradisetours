<?php include 'templates/header.php'; ?>
    
    <div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/gallery/11.jpeg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?= $translations['259'] ?></h1>
                    
                </div>
            </div>
        </div>
    </div>

    

    <main>
        <section class="content-section">
            <?= $translations['260'] ?>
        </section>

        <section class="content-section">
            <?= $translations['261'] ?>
        </section>

        

        <section class="services-section-incl">
            <div class="row">
                <div class="col-sm-6">
                    <div class="service-list">
                        <?= $translations['262'] ?>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="service-list">
                        <?= $translations['263'] ?>
                    </div>
                </div>
            </div>
        </section>
    </main>



<?php include 'templates/footer.php'; ?>
