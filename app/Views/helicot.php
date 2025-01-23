<?php include 'templates/header.php'; ?>


    <div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mf-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tour de l'ile en helicot</h1>
                </div>
            </div>
        </div>
    </div>
    <style>
        small{
            font-weight: normal;
            font-size: xx-small;
            color: black;
        }
        h4 a{
            color: black;
        }
    </style>

    

    <main>
        <section class="content-section">
            <h4>Tour de l'ile en helicot</h4>
            
            <p class="mb-4">
                Il est toujours rafraichissant de changer de point de vue.
                Nous vous proposons une balade verticale : contemplez Nosy –Be comme le font les oiseaux, depuis le ciel. Entre sa côte, ses montagnes et sa campagne verdoyante, c’est tout un monde à (re)découvrir. Un vol en hélicoptère est une expérience physique. L’ascension rapide,
                les vibrations de l’air et du vent sont une source d’émotions intenses.
            </p>

            <p>
                Découvrir Nosy be à travers des excursions vous permet de découvrir L’île,
                sa population et sa culture. 
                Mais prendre de la hauteur vous permet de voir encore plus. Un paysage époustouflant et unique : 
                plages, 7 lacs, anciens volcans, magnifique cratère,  et sa verdure. 
            </p>
        </section>


        <!-- Section image -->
    <section class="ftco-section ftco-destination mt-5">
    	<div class="container">
    		<div class="row justify-content-start mf-5 pf-3">
            <div class="col-md-7 heading-section ftco-animate">
                <h4 class="mf-4">Images</h4>
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
                                            <a   target="_blank" href="/assets/images/services/h-<?= $i ?>.jpg" class="img d-flex justify-content-center align-items-center" style='background-image: url("/assets/images/services/h-<?= $i ?>.jpg");'>
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

        
    </main>
<?php include 'templates/footer.php'; ?>
