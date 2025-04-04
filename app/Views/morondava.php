<?php include 'templates/header.php'; ?>


    <div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/pack/m-1.webp');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mf-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">MORONDAVA</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-destination mt-5">
    	<div class="container">
    		<div class="row justify-content-start mf-5 pf-3">
            <div class="col-md-7 heading-section ftco-animate">
                <h2 class="mf-4"><?= $translations['103'] ?></h2>
            </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
                        <?php
                            for ($i=1; $i <= 8 ; $i++) { 
                                ?>
                                    <div class="item">
                                        <div class="destination">
                                            <a   target="_blank" href="/assets/images/pack/m-<?= $i ?>.webp" class="img d-flex justify-content-center align-items-center" style='background-image: url("/assets/images/pack/m-<?= $i ?>.webp");'>
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
            <?= $translations['269'] ?>
        </section>


        <section class="services-section-incl">
            <div class="row">
                <div class="col-sm-6">
                    <div class="service-list" style="width: 100%;">
                        <?= $translations['270'] ?> 
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="service-list">
                        <?= $translations['271'] ?>
                    </div>
                </div>
            </div>
        </section>

        <hr>
        <br>

        <section class="content-section">
            <?= $translations['272'] ?>
            <?= $translations['273'] ?>
            <?= $translations['274'] ?>
        </section>
        <section class="services-section-incl">
            <div class="row">
                <div class="col-sm-6">
                    <div class="service-list" style="width: 100%;">
                        <?= $translations['275'] ?>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="service-list">
                        <?= $translations['276'] ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include 'templates/footer.php'; ?>
