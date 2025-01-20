<?php include 'templates/header.php'; ?>
<?php //htmlspecialchars($translations['welcome'] ?? 'Welcome') ?>
<?php //Language::translate('contact'); ?>
<?php
    foreach ($flashMessages as $message){
        ?>
            <div class="flash-message <?= $message['type']; ?>">
                <p><?= htmlspecialchars($message['message']); ?></p>
            </div>
        <?php
    }
?>

	<div class="hero-wrap js-fullheight" style="
		background-image: url('/assets/images/dark-cover.jpg');
		background-color: rgba(0, 0, 0, 0.3);
		background-attachment: fixed;
		">
      <div class="overlay"></div>
      <div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
				<div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
					<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Love the nature <br></strong>and enjoy our services</h1>
					<p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> </p>
				</div>
			</div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex" >
          <div class="col-md-3 d-flex align-self-stretch ftco-animate" id="media">
            <div class="media block-6 services d-block text-center" 
			style="background-image: url('/assets/images/home-1.jpg');
					background-size: cover;
					outline:4px solid white;
					color:white;
					background-color: black; 
			">
              	<div class="d-flex justify-content-center ">
					<div class="icon"><span class="flaticon-detective" style="color:#fff;"></span>
					</div>
				</div>
					<div class="media-body p-2 mt-2">
						<h3 class="heading mb-3">Guide</h3>
						<p>
							Voyager peut-être excitant et stressant à la foi, 
							surtout lorsqu’il s’agit d’une nouvelle destination.
						</p>
					</div>
					<a href="/<?= $lang ?>/guide" class="btn-savoir">En savoir plus</a>
            	</div>      
          	</div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate" id="media">
            <div class="media block-6 services d-block text-center"
			style="background-image: url('/assets/images/home-2.jpg');
					background-size: cover;
					outline:4px solid white;
					color:white;
					background-color: black; 
			">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-hotel" style="color:#fff;"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Excursions</h3>
                <p>Nosy Be est connu pour un tourisme balnéaire, 
					nos excursions sont parfaitement organisées.
				</p>
				
              </div>
			  <a href="/<?= $lang ?>/excursions" class="btn-savoir">En savoir plus</a>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate" id="media">
            <div class="media block-6 services d-block text-center"
			style="background-image: url('/assets/images/home-3.jpg');
					background-size: cover;
					outline:4px solid white;
					color:white;
					background-color: black; 
			">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-meeting-point" style="color:#fff;"></span></div></div>
              	<div class="media-body p-2 mt-2">
					<h3 class="heading mb-3">Circuits</h3>
					<p>Pour un maximum de découverte dans notre magnifique culture, 
						nous vous proposons différents packages.
					</p>
              	</div>
			  <a href="/<?= $lang ?>/circuits" class="btn-savoir">En savoir plus</a>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate" id="media">
            <div class="media block-6 services d-block text-center"
			style="background-image: url('/assets/images/home-4.jpg');
					background-size: cover;
					outline:4px solid white;
					color:white;
					background-color: black; 
			">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support" style="color:#fff;"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Service</h3>
                <p>À part organisateur d’excursions, 
					est aussi prestataire de transferts  terrestres et marins.
				</p>
				
              </div>
			  <a href="/<?= $lang ?>/services" class="btn-savoir">En savoir plus</a>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-destination mt-2">
    	<div class="container">
    		<div class="row justify-content-start mb-2 pb-3">
				<div class="col-md-7 heading-section ftco-animate">
				</div>
				<div class="col-sm-12 heading-perso justify-content-center">
					<h2 class="mb-4 styled-title">Nos packages</h2>
				</div>
        	</div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
    					<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/package1.jpg');">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">Nature</a></h3>
		    						<span class="listing" id="pack">faune et flore</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/package2.jpg');">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">Tourisme vert</a></h3>
		    						<span class="listing" id="pack">culture – histoire</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/package3.jpg');">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">Découverte</a></h3>
		    						<span class="listing" id="pack">EXCURSION – SAFARI</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/package4.jpg');">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">Sauvage</a></h3>
		    						<span class="listing" id="pack">Intensive trip</span>
		    					</div>
		    				</div>
	    				</div>
						<div class="item">
		    				<div class="destination">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/package4.jpg');">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="#">Sauvage</a></h3>
		    						<span class="listing" id="pack">Intensive trip</span>
		    					</div>
		    				</div>
	    				</div> 
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

	

	<!-- slider -->
	<section class="ftco-section ftco-destination mt-2">
    	<div class="container">
    		<div class="row justify-content-start mb-2 pb-3">
				<div class="col-md-7 heading-section ftco-animate">
				</div>
				<div class="col-sm-12 heading-perso justify-content-center">
					<h2 class="mb-4 styled-title">Nos activités</h2>
				</div>
        	</div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
    					<div class="item">
							<div class="destination">
								<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/activite3.jpg');">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<h3><a href="#">Pêche aux gros</a></h3>
										</div>
									</div>
									<p>Passionné de pêche sportive
										ou simplement envie de découvrir cette discipline.</p>
									<p class="days"><span>Vivez l'expérience</span></p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="#">Découvrir</a></span>
									</p>
								</div>
    						</div>
	    				</div>
	    				<div class="item">
							<div class="destination">
								<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/activite1.jpg');">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<h3><a href="#">Croisière en Catamaran</a></h3>
										</div>
									</div>
									<p>L’Archipel des Mitsio et les îles Radama avec Paradise tours</p>
									<p class="days"><span>Avec ou sans plongée</span></p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="#">Découvrir</a></span>
									</p>
								</div>
    						</div>
	    				</div>
	    				<div class="item">
							<div class="destination">
								<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/activite2.jpg');">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<h3><a href="#">Voyage de noce</a></h3>
										</div>
									</div>
									<p>Un cadre idyllique et un service personnalisé
										pour fêter ce qu’il y a de plus beau sur terre</p>
									<p class="days"><span>Mariage et lune de miel</span></p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="#">Découvrir</a></span>
									</p>
								</div>
    						</div>
	    				</div>
	    				<div class="item">
							<div class="destination">
								<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/activite4.jpg');">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<h3><a href="#">Voyage <span>incentive</span> </a></h3>
											
										</div>
										
									</div>
									<p>
										C’est une belle expérience qui permet de resserrer les liens entre collègue .
									</p>
									<p class="days"><span style="visibility:hidden;">Voyage incentive</span></p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="#">Découvrir</a></span>
									</p>
								</div>
    						</div>
	    				</div>
						<div class="item">
							<div class="destination">
								<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/plage.jpg');">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<h3><a href="#">Séjour à la plage</a></h3>
										</div>
										
									</div>
									<p>Idéales pour les amoureux , plus d’intimité en savourant  la beauté des plages.</p>
									<p class="days"><span>4 Jours 3 nuits</span></p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="#">Découvrir</a></span>
									</p>
								</div>
    						</div>
	    				</div> 
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
	<!-- End of slider-->






    <section class="ftco-section ftco-counter img" id="section-counter" 
		style="background-image: url('/assets/images/bg_1.jpg');background-attachment: fixed;">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-2">Qui sommes nous ?</h2>
          </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <span>Créée en 2004, NOSY BE PARADISE TOURS est une entreprise individuelle 
                                    qui opère dans le secteur du tourisme. Elle a pour activité 
                                    principale la prestation de services touristiques spécialisée dans l’organisation des excursions 
                                    non seulement sur Nosy-Be et les petites îles environnantes mais également dans la partie Nord de Madagascar Grande île.
                                </span>
                            </div>
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
    		<div class="row justify-content-start mb-2 pb-3">
				<div class="col-md-7 heading-section ftco-animate">
				</div>
				<div class="col-sm-12 heading-perso justify-content-center">
					<h2 class="mb-4 styled-title">Paradise tours</h2>
				</div>
        	</div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
    					<div class="item">
							<div class="destination">
								<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/tour1.jpg');">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<h3><a href="#">WEEK-END À NOSY IRANJA</a></h3>
										</div>
										<div class="two">
										</div>
									</div>
									<p>Témoigné le plus beau moment d’éclosion d’œuf des tortues de mer pendant un week-end à Nosy Iranja.
										
									</p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="#">Découvrir</a></span>
									</p>
								</div>
							</div>
	    				</div>
	    				<div class="item">
							<div class="destination">
								<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/tour2.jpg');">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<h3><a href="#">TOUR DE L’ÎLE EN HELICOT</a></h3>
										</div>
										
									</div>
									<p>Prendre de la hauteur permet de voir encore plus. Un paysage époustouflant et unique : plages, 7 lacs, ...</p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="#">Découvrir</a></span>
									</p>
								</div>
							</div>
	    				</div>
	    				<div class="item">
							<div class="destination">
								<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/tour3.jpg');">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<h3><a href="#">KITE SURF</a></h3>
											
										</div>
										
									</div>
									<p>C’est un séjour conçu pour tous types de clients qui s’intéresse au sport 
										de glisse que ce soit débutants amateurs , professionnels. 
										</p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="#">Découvrir</a></span>
									</p>
								</div>
    						</div>
	    				</div>
	    				<div class="item">
							<div class="destination">
								<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/tour4.jpg');">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<h3><a href="#">SEJOUR PLAGE VIERGE</a></h3>
											
										</div>
										
									</div>
									<p>
										Visites:Idéales pour les amoureux , plus d’intimité en savourant la nature et la beauté des plages vierges.
										
									</p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="#">Découvrir</a></span>
									</p>
								</div>
							</div>
	    				</div>
						
    				</div>
    			</div>
    		</div>
    	</div>
    </section>



<?php include 'templates/footer.php'; ?>
