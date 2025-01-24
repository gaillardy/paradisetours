<?php include 'templates/header.php'; ?>


    <div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/circuits/fosa.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mf-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tour Soa</h1>
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
                            for ($i=1; $i <= 11 ; $i++) { 
                                ?>
                                    <div class="item">
                                        <div class="destination">
                                            <a   target="_blank" href="/assets/images/circuits/f-<?= $i ?>.jpg" class="img d-flex justify-content-center align-items-center" style='background-image: url("/assets/images/circuits/f-<?= $i ?>.jpg");'>
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
            <p class="mb-4">
                Points fort:  visite Ambanja, rivière de Sambirano, plantation cacao et des épices de Madagascar .
            </p>
            <p>
                Départ de votre hôtel vers 07h 00 et direction vers le port de Nosy Be, pour un transfert en bateau pour Ankify en 45 minutes. Du second port vers la ville d’Ambanja nous continuons en voiture. La visite de champ des épices et la culture de Cacao de la vallée du Sambirano qui fait la réputation de cette ville et les épices de tels que les poivres, citronnelle, café, 4 épices, …
            </p>
            <p>
                Après la visite et le déjeuner, un tour dans la ville d’Ambanja pour découvrir : l’originalité et la charme de cette ville, quelques infrastructures et des lieux publics en fin d’après-midi. Retour à Nosy- Be vers 15h00. 
            </p>                   
            
            <ul class="unstyled-list">
                <li><b>Nombre de Pax :    </b> Clients, Guide Accompagnateur, Chauffeur</li>
                <li><b>Type de véhicule : </b>  voiture spacieuse et climatisée</li>
            </ul>
        </section>


        <section class="services-section-incl">
            <div class="row">
                <div class="col-sm-6">
                    <div class="service-list" style="width: 100%;">
                        <h3>Services Inclus </h3>
                        <ul>
                            <li>Transfert de l’hôtel vers au port</li>
                            <li>Voiture</li>
                            <li>Transfert au Bateaux rapide</li>
                            <li>Déjeuner</li>
                            <li>Guide</li>
                            <li>Eau minéral</li>
                            <li>Droit d'entrée de visite</li>
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
            <a href="#" class="btn btn-outline-primary" download="/assets/documents/tour-fosa-fr.pdf">Télécharger le PDF</a>
            <a href="tel:+261320712758" class="btn btn-outline-succsess">Appeler Maintenant</a>
        </section>
    </main>
<?php include 'templates/footer.php'; ?>
