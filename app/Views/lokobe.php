<?php include 'templates/header.php'; ?>


    <div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/cover/l-cover.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?= $translations['231'] ?></h1>
                    <p><?= $translations['232'] ?></p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-destination mt-5">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <h2 class="mb-4"><?= $translations['103'] ?></h2>
            </div>
        </div>
            <div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
                        <?php
                            for ($i=1; $i <= 4 ; $i++) { 
                                ?>
                                    <div class="item">
                                        <div class="destination">
                                            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/excurtions/l-<?= $i ?>.jpg');">
                                                <div class="icon d-flex justify-content-center align-items-center">
                                                    <span class="icon-search2"></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php
                            }
                        ?>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <main>
        <section class="content-section">
            <?= $translations['233'] ?>
        </section>

        <section class="content-section">
            <?= $translations['234'] ?>
        </section>

        <section class="services-section-incl">
            <div class="row">
                <div class="col-sm-12">
                    <div class="service-list" style="width: 100%;">
                        <?= $translations['235'] ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-section-incl">
            <div class="row">
                <div class="col-sm-6">
                    <div class="service-list" style="width: 100%;">
                        <?= $translations['236'] ?>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="service-list">
                        <?= $translations['237'] ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="buttons-section">
            <a href="#" class="btn btn-outline-primary" download="/assets/documents/fiche-tech-La-résèrve-de-Lokobe.pdf"><?= $translations['112'] ?></a>
            <a href="tel:+261320427235" class="btn btn-outline-succsess"><?= $translations['113'] ?></a>
        </section>
    </main>
<?php include 'templates/footer.php'; ?>
