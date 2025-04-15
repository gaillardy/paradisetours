<?php include 'templates/header.php'; ?>

    <div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/cover/s-cover.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?= $translations['304'] ?> </h1>
                    <p><?= $translations['305'] ?> </p>
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
                        <div class="item">
                            <div class="destination">
                                <a   target="_blank" href="/assets/images/excurtions/s-1.jpg" class="img d-flex justify-content-center align-items-center" style='background-image: url("/assets/images/excurtions/s-1.jpg");'>
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a  target="_blank" href="/assets/images/excurtions/s-2.jpg" class="img d-flex justify-content-center align-items-center" style='background-image: url("/assets/images/excurtions/s-2.jpg");'>
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a  target="_blank" href="/assets/images/excurtions/s-3.jpg" class="img d-flex justify-content-center align-items-center" style='background-image: url("/assets/images/excurtions/s-3.jpg");'>
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a  target="_blank" href="/assets/images/excurtions/s-4.jpg" class="img d-flex justify-content-center align-items-center" style='background-image: url("/assets/images/excurtions/s-4.jpg");'>
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a  target="_blank" href="/assets/images/excurtions/s-5.jpg" class="img d-flex justify-content-center align-items-center" style='background-image: url("/assets/images/excurtions/s-4.jpg");'>
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <?= $translations['306'] ?>

<?php include 'templates/footer.php'; ?>
