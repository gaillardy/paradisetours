<?php include 'templates/header.php'; ?>


    <div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/cover/l-cover.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">La Réserve Naturelle de Lokobe</h1>
                    <p>Paysage calme et paisible d’Ampasipohy.</p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-destination mt-5">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <h2 class="mb-4">Images</h2>
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
            <h2>Description du Circuit</h2>
            <p>
                Départ de votre hôtel à 08h30, 
                une voiture vous amène jusqu’ au village de pêcheurs
                 d’Ambatozavavy en 30 minutes de trajet au Sud Est de Nosy-Be.
            </p>
            <p>
                Une fois au village, vous continuez le circuit en pirogue 
                pour une traversée de 45 minutes durant laquelle une forêt de mangrove, 
                d’arbre de voyageur (Ravinala) et une forêt sauvage offrira un magnifique paysage 
                à vos yeux tout en jouissant d’un plaisir de balade en compagnie du guide et du rameur.
            </p>
            <p>
                À l’arrivée au village d’Ampasipohy l’entrée du parc, 15 mn 
                de pause vous sera donnée afin de vous donner l’occasion de vous préparer tranquillement pour le trajet.
                À l’intérieur de la forêt, une faune et flore riche en espèces s’ouvre à vos yeux dont nos guides 
                spécialistes se feront un plaisir à vous les faire apprécier. Comme, les vertus de nos plantes médicinales
                pour les flores et l’endémicité de nos 
                faunes sont tous à explorer avec la rencontre des lémuriens macaco, des serpents boa, des caméléons, ….
            </p>
            <ul class="unstyled-list">
                <li><b>Visite : </b>Caméléon, Gecko uroplatus, Boa constrictor serpent, lémuriens macaco</li>
                <li><b>Durée : </b>  Une journée</li>
                <li><b>Départ :</b> De votre Hôtel</li>
                <li><b>Nombre de pax : </b> Les clients, Guide Accompagnateur, des piroguiers</li>
                <li><b>Moyen de transport : </b> Voiture et pirogue traditionnelle</li>
                <li><b>Déjeuner :</b> plats spécialement préparés par une association de jeune femmes</li>
            </ul>
        </section>

        <section class="content-section">
            <h2> À propos de la <strong> Réserve naturelle de Lokobe</strong></h2>
            <p>
                Réserve naturelle de Lokobe  est unique sur l’île de Nosy Be où forêt luxuriants 
                et mangroves riment avec paysage calme et paisible d’Ampasipohy. 
                Rejoindre la réserve naturelle de Lokobe au départ d’Ambatozavavy en pirogue traditionnel
                fait de cette excursion la plus authentique parmi tant d’autres.
            </p>
        </section>

        <section class="services-section-incl">
            <div class="row">
                <div class="col-sm-12">
                    <div class="service-list" style="width: 100%;">
                        <h3>Points fort</h3>
                        <ul>
                            <li>expérience d’une traversée en pirogue typiquement locale</li>
                            <li>Lémuriens nocturnes et Caméléons</li>
                            <li>Plus grand chantier de sculpture sur bois</li>
                            <li>Plante médicinale</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="services-section-incl">
            <div class="row">
                <div class="col-sm-6">
                    <div class="service-list" style="width: 100%;">
                        <h3>Services Inclus </h3>
                        <ul>
                            <li> Accueil à l’hôtel</li>
                            <li>Transfert en voiture et pirogue</li>
                            <li>Déjeuner à base des fruits de mer</li>
                            <li>Eau minérale</li>
                            <li>Droit des visites.</li>
                        </ul>
                        
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="service-list">
                        <h3>Services Non Inclus</h3>
                        <ul>
                            <li>Boissons</li>
                            <li>Les extras à caractère personnel</li>
                            <li>Pourboires</li>
                            <li>Activités optionnelles</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="buttons-section">
            <a href="#" class="btn btn-outline-primary" download="/assets/documents/fiche-tech-La-résèrve-de-Lokobe.pdf">Télécharger le PDF</a>
            <a href="tel:+261320427235" class="btn btn-outline-succsess">Appeler Maintenant</a>
        </section>
    </main>
<?php include 'templates/footer.php'; ?>
