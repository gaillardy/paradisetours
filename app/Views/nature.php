<?php include 'templates/header.php'; ?>


    <div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/circuits/ambre.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mf-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">FEEL THE RHYTHM</h1>
                </div>
            </div>
        </div>
    </div>

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
                            for ($i=1; $i <= 8 ; $i++) { 
                                ?>
                                    <div class="item">
                                        <div class="destination">
                                            <a   target="_blank" href="/assets/images/home/n-<?= $i ?>.jpg" class="img d-flex justify-content-center align-items-center" style='background-image: url("/assets/images/home/n-<?= $i ?>.jpg");'>
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
            <h2>JOUR 1: ARRIVEE A NOSY BE</h2>
            <h2>JOUR 2:</h2>
            <h4>OPTION 1: NOSY TANIKELY – NOSY KOMBA – NOSY VORONA</h4>
            <p>Points fort: Reserve marine : snorkeling et plongée sous marine – Mini parc – île privée </p>
            
            <h4>OPTION 2: LA RESERVE NATUREL DE LOKOBE</h4>
            <p>
            Points fort: Village des pêcheurs, visite culturel, pirogue  traditionnel , reserve naturelle rencontre avec la population
            </p>

            <h2>JOUR 3:</h2>
            <h4>OPTION  1 : TOUR DE L’ÏLE DE NOSY BE</h4>
            <p>
            Points fort: Histoire et culture de Nosy Be , rencontre avec la population , visite Culturelle , animation folklorique , plage , distillerie , couché du soleil
            </p>
            
            <h4>OPTION 2: NOSY IRANJA</h4>
            <p>
            Points fort: paysage : pain de sucre , Antsoha , Ankazoberavina , sable blanc , phare , rencontre avec la population,
            </p>

            <h2>JOUR 4:</h2>
            <h4>OPTION 1 : JOURNEE LIBRE</h4>
            <h4>OPTION 2 : NOSY SAKATIA</h4>
            <p>
            Points fort: Village des pêcheurs, visite culturel, snorkeling , rencontre avec la population
            </p>

            <h2>JOUR 5: JOUR DE DEPART</h2>
        </section>


        <section class="services-section-incl">
            <div class="row">
                <div class="col-sm-6">
                    <div class="service-list" style="width: 100%;">
                        <h3>Services Inclus </h3>
                        <ul>
                            <li>Transfert de l’aéroport – l’hôtel: arrivée et départ</li>
                            <li>Hébergement: Hôtel à Nosy Be</li>
                            <li>Véhicule spacieux et climatisé</li>
                            <li>Tous les petits déjeuners</li>
                            <li>Déjeuners pendant les jours d’excursions</li>
                            <li>Diner pendant les jours d’excursions</li>
                            <li>Eau minérale de tous les jours</li>
                            <li>Guide</li>
                            <li>Droit d’entrée dans les sites</li>
                        </ul>
                        
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="service-list">
                        <h3>Services Non Inclus</h3>
                        <ul>
                            <li>Déjeuner: jour 4 si le client reste à l’hôtel</li>
                            <li>Dîner: jour 4 si le client séjourne à l’hôtel</li>
                            <li>Boissons</li>
                            <li>Extras personnels</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="service-list">
                        <h3>Mini liste nécessaire</h3>
                        <ul>
                            <li>Nécessité à l’ordre personnelle</li>
                            <li>Vêtements adaptés au temps chauds, en laine ou en polyester</li>
                            <li>Médecine</li>
                            <li>Sac à dos pour cabine et housse de voyage</li>
                            <li>Lumière ou lampe de poche</li>
                            <li>Bottes et pantalons de trekking</li>
                            <li>Sandales ou chaussures relaxante</li>
                            <li>Lunettes de soleil</li>
                            <li>Crème solaire</li>
                            <li>Spray anti moustique</li>
                            <li>Chapeau de soleil ou capuchon</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="buttons-section">
            <a href="#" class="btn btn-outline-primary" download="/assets/documents/Tour-North-of-Madagascar-francais.pdf">Télécharger le PDF</a>
            <a href="tel:+261320712758" class="btn btn-outline-succsess">Appeler Maintenant</a>
        </section>
    </main>
<?php include 'templates/footer.php'; ?>
