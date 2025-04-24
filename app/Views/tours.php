<?php include 'templates/header.php'; ?>

<div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/tours/tour.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?= $translations['368'] ?> </h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section ftco-destination mt-5">
    <div class="container">
        <div class="row justify-content-center">
    		<div class="col-md-10">
		    	<div class="row">
		            <div class="col-md-12 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <h2 class="mb-2"><?= $translations['369'] ?></h2>
                            <div class="text">
                                <span>
                                    <?= $translations['370'] ?>
                                </span>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
	    </div>
    </div>
</section>

<section class="ftco-section ftco-destination mt-2">
    	<div class="container">
                <div class="row">
		            <div class="col-md-12 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <h2 class="mb-4"><?= $translations['368'] ?></h2>
                            
                        </div>
                    </div>
		        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
    					
                        
                        
    				</div>
    			</div>
    		</div>
    	</div>
</section>



<?php include 'templates/footer.php'; ?>