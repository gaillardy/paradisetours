<?php include 'templates/header.php'; ?>


    <div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/cover/parc-ranomafana-cover.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mf-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">DECOUVERTE SAFARI</h1>
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
                            for ($i=1; $i <= 5 ; $i++) { 
                                ?>
                                    <div class="item">
                                        <div class="destination">
                                            <a   target="_blank" href="/assets/images/home/s-<?= $i ?>.jpg" class="img d-flex justify-content-center align-items-center" style='background-image: url("/assets/images/home/s-<?= $i ?>.jpg");'>
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
            <p>Accueil et transfert de l’ aéroport   vers l’hôtel</p>
            <h2>JOUR 2: NOSY BE-ANKIFY- ANKARANA</h2>
            <p>Points fort:  Paysage , Visite du marché , Tsingy Gris de l’Ankarana</p>

            <h2>JOUR 3: MONTAGNE D’AMBRE</h2>
            <p>
            Points fort: Parc national : cascade , forêt humide , espèces faunistiques et floristiques  endemiques de Madagascar , rencontre avec les paysans .
            </p>
            
            
            <h2>JOUR 4: BAIES – RAMENA</h2>
            <p>
            Points fort: Baie de Sakalava , Baies des Dunes et Baie des Pigeons , Ruine militaire , plages , rencontre avec les paysans ,
            </p>

            <h2>JOUR 5:  JOURNEE LIBRE</h2>
            <h2>JOUR 6: TRANSFERT DIEGO SUAREZ – NOSY BE.</h2>

            <h2>JOUR 7: NOSY TANIKELY – NOSY KOMBA – NOSY VORONA</h2>
            <p>Points fort: Reserve marine : snorkeling et plongée sous marine – Mini parc – île privée </p>

            <h2>JOUR 8: TOUR DE L’ÎLE DE NOSY BE</h2>
            <p>
            Points fort: Histoire et culture de Nosy Be , rencontre avec la population , visite Culturelle , animation folklorique , plage , distillerie , couché du soleil
            </p>

            <h2>JOUR 9: JOURNEE LIBRE</h2>

            <h2>JOUR 10: NOSY IRANJA</h2>

            <p>
            Points fort: paysage : pain de sucre , Antsoha , Ankazoberavina , sable blanc , phare , rencontre avec la population,
            </p>

            <h2>JOUR 11: JOUR DE DEPART</h2>
            <p>Transfert   de l’hôtel vers l’ aéroport</p>
        </section>


        <section class="services-section-incl">
            <div class="row">
                <div class="col-sm-6">
                    <div class="service-list" style="width: 100%;">
                        <h3>Services Inclus </h3>
                        <ul>
                            <li>Transfert de l’hôtel au port: arrivée et départ</li>
                            <li>Hébergement: Hôtel à Nosy Be</li>
                            <li>4 WD spacieux et climatisé</li>
                            <li>Tous les petits déjeuners</li>
                            <li>Déjeuners pendant les jours d’excursions</li>
                            <li>TROIS convives</li>
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
            <a href="#" class="btn btn-outline-primary" download="/assets/documents/Tour-North-of-Madagascar-francais-2.pdf">Télécharger le PDF</a>
            <a href="tel:+261320712758" class="btn btn-outline-succsess">Appeler Maintenant</a>
        </section>
    </main>
<?php include 'templates/footer.php'; ?>
