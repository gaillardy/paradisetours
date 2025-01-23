<?php include 'templates/header.php'; ?>


    <div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/activite1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mf-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Croisière en catamaran</h1>
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
        h2 a{
            color: black;
        }
    </style>

    <!-- Section image 
    <section class="ftco-section ftco-destination mt-5">
    	<div class="container">
    		<div class="row justify-content-start mf-5 pf-3">
            <div class="col-md-7 heading-section ftco-animate">
                <h2 class="mf-4">Images</h2>
            </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
                        <?php
                            // for ($i=1; $i <= 11 ; $i++) { 
                                ?>
                                    <div class="item">
                                        <div class="destination">
                                            <a   target="_blank" href="/assets/images/circuits/f-<?php //$i ?>.jpg" class="img d-flex justify-content-center align-items-center" style='background-image: url("/assets/images/circuits/f-<?= $i ?>.jpg");'>
                                                <div class="icon d-flex justify-content-center align-items-center">
                                                    <span class="icon-search2"></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php
                            // }
                        ?>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>-->

    <main>
        <section class="content-section">
            <h2><a href="#" download="/assets/documents/archipel_mitsio_radama.pdf">ARCHIPEL DE MITSIO <small>Download PDF</small></a> </h2>
            
            <p class="mb-4">
                Visites:  Nosy Tsarabanjina , Grand Mitsio, Nosy Ankarea, les 4 frères <br>
                Durée: 3jours – 2nuits <br>
                Départ: Nosy Be
            </p>

            <h2><a href="#" download="/assets/documents/archipel_radama.pdf"> ARCHIPEL DE RADAMA <small>Download PDF</small></a></h2>

            <p>
                Visites: Nosy Kalakajoro, Baie de Russe, Antany Mora, Baramamahay, Nosy Iranja, Nosy Tanikely <br>
                Durée: 5jours – 4nuits
            </p>

            <h2><a href="#" download="/assets/documents/archipel_radama.pdf"> ARCHIPEL DE MITSIO ET DE RADAMA <small>Download PDF</small></a></h2>

            <p>
            Visites: Nosy Tsarabanjina , Grand Mitsio, Nosy Ankarea, les 4 frères, Nosy Sakatia, Nosy Kalakajoro, Baie de Russe, Antany Mora Baramamahay, Nosy Iranja, Nosy Tanikely <br>
            Durée: 11jours – 10nuits.
            </p>

            <b>Tous les départs : Nosy Be</b>

            <p>Point Fort</p>

            <ul>
                <li>des plages paradisiaques et calmes</li>
                <li>découverte de plusieurs types de pêches</li>
                <li>une vrai découverte de la nature à l’Etat pur</li>
                <li>une faune et flore riche en contenu</li>
            </ul>


            
        </section>

        <section class="services-section-incl">
            <div class="row">
                <div class="col-sm-6">
                    <div class="service-list" style="width: 100%;">
                        <h3>Services Inclus </h3>
                        <ul>
                            <li>Accueil à l’hôtel</li>
                            <li>Pension Complet</li>
                            <li>Eau minérale</li>
                            <li>Équipement de plongée apnée</li>
                            <li>Équipement de pêche.</li>
                        </ul>
                        
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="service-list">
                        <h3>Services Non Inclus</h3>
                        <ul>
                            <li>Les boissons</li>
                            <li>Les extras à caractère personnel</li>
                            <li>Pourboire</li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </section>
    </main>
<?php include 'templates/footer.php'; ?>
