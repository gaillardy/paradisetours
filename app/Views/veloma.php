<?php include 'templates/header.php'; ?>


    <div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/circuits/fosa.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mf-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tour Veloma</h1>
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
            <h2>JOUR 1: NOSY BE – ANKIFY  – RÉSERVE SPÉCIALE DE L’ANKARANA – AMBILOBE</h2>

            <p class="mb-4">
                <b>Points fort</b> :   Paysage rencontre avec les paysans ,Tsingy Gris de l’Ankarana (10 Circuits aux choix dans la parc) .
            </p>
            <p>
                Visites : Tsingy Gris – Perte de rivière – espèces faunistiques et floristiques.
            </p>
            <p>
                Départ : vers 07h 00 de votre hôtel et direction vers le port de Nosy Be, pour un transfert en bateau pour le port d’Ankify en 35 minutes.
            </p>
            <p>
                 Du port d’Ankify, on continue vers le Nord en traversant les villages typiques de tribus Antakarana d’une part et un immense champ d’acajou d’autre part avant de rejoindre la commune urbaine d’Ambilobe en traversant les superbes paysages pour des vues panoramiques et surtout la forêt de ravinala, une des plantes emblématiques de Madagascar en 2h 30 minutes de trajet. De la ville d’Ambilobe vers Mahamasina, l’entrée principale du parc de l’Ankarana. Après l’installation on passe à table pour un délicieux déjeuner. On commence la visite du parc par les Tsingy Gris avec ses formations aigues et spectaculaires ; avec ses traces d’animaux fossilisés, les 11 espèces de lémuriens et les 92 espèces d’oiseaux qui abritent ses forêts. Vers la fin de la journée une visite du village de Mahamasina sera une autre option. Diner et nuitée dans un bungalow à Mahamasina.
            </p>

            <h2>JOUR 2:  AMBILOBE – ANKIFY – NOSY BE</h2>

            <p>
               <b>Points fort</b> : Ville d’ Ambilobe : marché , palais royal  et ses alentours , atelier de poterie .
            </p>

            <p>
                Départ : Après un bon petit déjeuner, nous quittons la ville d’ambilobe vers 08h00 pour rejoindre un champ de plantation des épices.  Puis nous Continuerons vers Ankify, transfert en bateau pour Nosy Be.
            </p>
            <p>
                Transfert en véhicule vers le port d’Ankify et en bateau vers Nosy Be
            </p>

            <ul class="unstyled-list">
                <li><b>Nombre de Pax :    </b> Clients, Guide Accompagnateur, Chauffeur</li>
                <li><b>Type de véhicule : </b> 4WD spacieuse, confortable et climatisée</li>
            </ul>
        </section>


        <section class="services-section-incl">
            <div class="row">
                <div class="col-sm-6">
                    <div class="service-list" style="width: 100%;">
                        <h3>Services Inclus </h3>
                        <ul>
                            <li>Transfert de l’hôtel vers au port</li>
                            <li>4WD</li>
                            <li>Hébergement à Mahamasina</li>
                            <li>Transfert au Bateaux rapide</li>
                            <li>Pension complète</li>
                            <li>Guide</li>
                            <li>Eau minéral</li>
                            <li>Droit de visite</li>
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
