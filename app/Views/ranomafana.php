<?php include 'templates/header.php'; ?>


    <div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/circuits/fosa.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mf-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Parc Ranomafana</h1>
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
            <h2>SPECIFICITE DU PARC</h2>
            <p class="mb-4">
                Parc National Terrestre classé Site Patrimoine Mondial avec sa forêt dense et humide d’une altitude moyenne entre  800 et 1400m.Une forêt de bambous et de  marécage où les espèces végétales et animales telles que le Pandanus, Varecia variegata variegate, ecrevisses, Limnogale Mergulus y ont choisi comme habitat.
            </p>

            <h2>COMMENT S'Y RENDRE</h2>
            <p>
                Par la RN7 : au départ de Tana à Ambohimahasoa vers Vohiparara, route bitumée de 350 km, et une portion de 25 km bien asphaltée.
                Par la RN 45 : Croisement à Alakamisy vers Vohiparara, route bien asphaltée de 25 km
                Par la RN 25 : Ranomafana-Mananjary, route bitumée de 138 km
            </p>

            <h2>LOCALISATION DU PARC</h2>
            <p>
                GPS: 47°18’ à 47°37’ de longitude Est et 21°02’ à 22°25’ de latitude.
                Le Parc National Ranomafana est situé dans le Sud-est de Madagascar entre les régions Haute-Matsiatra et Vatovavy Fitovinany. Il se trouve à 412 km au Sud-est d’Antananarivo, à 65 km au Nord-est de Fianarantsoa et à 139 km à l’ouest de la commune de Mananjary.
            </p>

            <h2>SUPERFICIE</h2>
            <p> 
                41 601 ha <br> Région : <br> Vatovavy-Fitovinany <br> Période idéale pour la visite <br> Toute   l’année <br> Heures d’ouvertures:
                8h à 16h
            </p>

            <h2>HISTORIQUE</h2>

            <p class="mb-3">Le Parc National Ranomafana a été inauguré officiellement le 31 mai 1991.</p>

           <h2>POPULATION</h2>

            <p>
                Population hétéroclite à dominance Tanala et Betsileo
            </p>

           <h2>GEOGRAPHIE</h2>
            <h5>Hydrographie</h5>

            <p>
                Parc riche en cours d’eau. On en compte 25 en son intérieur. Ainsi que trois rivières dont l’une alimente la centrale hydraulique pour la production d’électricité.
                Contacts
            </p>

            
        </section>


        
        <section class="buttons-section">
            <a href="#" class="btn btn-outline-primary" download="/assets/documents/tour-fosa-fr.pdf">Télécharger le PDF</a>
            <a href="tel:+261320712758" class="btn btn-outline-succsess">Appeler Maintenant</a>
        </section>
    </main>
<?php include 'templates/footer.php'; ?>
