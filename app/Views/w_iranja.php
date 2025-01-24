<?php include 'templates/header.php'; ?>

    <div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/cover/i-cover.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Week-End à Nosy Iranja</h1>
                    <p>L’île aux tortues</p>
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
                            for ($i=1; $i <= 10 ; $i++) { 
                                ?>
                                    <div class="item">
                                        <div class="destination">
                                            <a   target="_blank" href="/assets/images/excurtions/i-<?= $i ?>.jpg" class="img d-flex justify-content-center align-items-center" style='background-image: url("/assets/images/excurtions/i-<?= $i ?>.jpg");'>
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
            <h2>WEEK END CHEZ PRINCESSE IRANJA</h2>
            <p>
                <b> Visites:</b> Pain de Sucre, Petite Iranja, Grande Iranja, Le phare, la langue de sable blanche, visite nocturne <br>

                <b>Durée:</b> 2 jours 1 nuit <br>

                <b>Départ:</b> Ambatoloaka
            </p>

            <h2>Description des circuits</h2>
            
            <ul class="unstyled-list">
                <li><b>Nombre de pax  : </b> Clients + 1  Guides  Accompagnateur + Skippeurs</li>
                <li><b>Moyen de transport  : </b>  bateau rapide</li>
                <li><b>Points forts :</b> Pain de sucre – la langue de sable – baignade – le phare- Pêche à langouste</li>
            </ul>

            <p>
                Partant du port de Nosy Be à 08h 30, le Nosy Iranja se situe à 1h30min en hors-bord.

                En traversant de magnifiques paysages de Madagascar, la plage vierge et de nombreux îlots embellissent le transfert.

                Une fois sur l’île, non seulement une immersion totale dans un village de pêcheurs vous sera offerte mais aussi la visite de deux îles reliées par un long sable blanc vous accueille à 2 km à marée basse, une plage de sable blanc et préservée est à votre disposition pour tous vos moments de plaisir, soleil, baignade et balade pour découvrir quelques fougères, le tout sur une mer turquoise … Possibilité d’un camp pour observer les tortues marines qui nichent sur la plage pendant la nuit.

                A midi un bon repas préparé sur place à l’ombre des cocotiers vous sera servi.

                Lorsque le groupe retourne à Nosy Be, un guide local (responsable) vous guidera jusqu’à votre bungalow typique, pied dans l’eau, propre avec toilette, où vous passerez la nuit et vous laisserez vous reposer.

                Après le dîner, vous retournez vers le band de  sable blanc pour assister à la première réunion spectaculaire de bébés tortus à la mer. Par chance, vous aiderez également la tortue mère à pondre des œufs sur la plage …

                

                Le matin, le rythme de vie de la population vous réveillera et nous vous invitons à admirer le lever du soleil sur la plage entre ces îles, prendre le petit déjeuner sur ces îles est un moment de vie inoubliable. Journée libre  et déjeuner en groupe.

                Nous reviendrons vers Nosy Be vers 15h en rejoignant un groupe de touristes.
            </p>
        </section>

        

        <section class="services-section-incl">
            <div class="row">
                <div class="col-sm-6">
                    <div class="service-list" style="width: 100%;">
                        <h3>Services Inclus </h3>
                        <ul>
                            <li>Transfert en bateau rapide allé et retour</li>
                            <li>2 déjeuners</li>
                            <li>1 diner</li>
                            <li>1 petit déjeuner</li>
                            <li>Ticket sur le site</li>
                            <li>Hébergement « bungalow »</li>
                            <li>Visite nocturne</li>
                            <li>Eau minérale</li>
                            <li>Guide</li>
                        </ul>
                        
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="service-list">
                        <h3>Services Non Inclus</h3>
                        <ul>
                            <li>Boissons</li>
                            <li>Les dépenses à caractère personnel</li>
                            <li>Pourboires</li>
                            <li>Repas hors les mentionnés</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="buttons-section">
            <a href="#" class="btn btn-outline-primary" download="/assets/documents/WEEK-END-CHEZ-PRINCESSE-IRANJA.pdf">Télécharger le PDF</a>
            <a href="tel:+261320712758" class="btn btn-outline-succsess">Appeler Maintenant</a>
        </section>
    </main>


<?php include 'templates/footer.php'; ?>
