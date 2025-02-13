<?php include 'templates/header.php'; ?>
<?php
    foreach ($flashMessages as $message){
        ?>
            <div class="flash-message <?= $message['type']; ?>">
                <p><?= htmlspecialchars($message['message']); ?></p>
            </div>
        <?php
    }
?>

<style>
/* Conteneur principal */
.hero-wrap {
  position: relative;
  height: 100vh;
  overflow: hidden;
}

/* Superposition sombre */
.hero-wrap .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.3);
  z-index: 2;
}

/* Slideshow */
.slideshow {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  overflow: hidden;
}

/* Chaque slide */
.slideshow .slide {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  opacity: 0;
  transition: opacity 2s ease-in-out;
}

.slideshow .slide.active {
  opacity: 1;
}

/* Texte centré */
.slider-text {
  z-index: 3;
  color: #fff;
}

h5 {
	text-transform: capitalize;
}
/* Conteneur de l'entête */
.heading-perso {
  margin: 40px 0;
}

/* Titre stylé */
.styled-title {
  font-family: 'Poppins', sans-serif;
  font-size: 2.5rem;
  font-weight: bold;
  color: #2c3e50; /* Bleu profond */
  text-transform: uppercase;
  letter-spacing: 2px;
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  background: #f8f9fa; /* Légèrement différent du blanc pour un effet subtil */
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Lignes décoratives */
.line-decor {
  display: inline-block;
  width: 50px;
  height: 3px;
  background-color: #3498db; /* Bleu éclatant */
  vertical-align: middle;
  margin: 0 10px;
}

/* Effet hover sur le titre */
.styled-title:hover {
  color: #2980b9; /* Plus clair au survol */
  box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
  transition: all 0.3s ease;
}

/* Pour garantir le centrage sur toutes tailles d'écran */
.text-center {
  text-align: center;
}

/* Conteneur principal des blocs */
.item {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: stretch;
  margin: 10px;
}

/* Bloc de destination */
.destination {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  height: 100%; /* Assurer la pleine hauteur pour les flexbox enfants */
}

/* Image du bloc */
.destination .img {
  height: 200px; /* Hauteur fixe pour l'image */
  background-size: cover;
  background-position: center;
  border-bottom: 1px solid #ddd;
}

/* Contenu du texte */
.destination .text {
  padding: 20px;
  flex: 1; /* Occupe tout l'espace restant pour uniformiser les hauteurs */
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

/* Titre */
.destination .text h3 {
  font-size: 1.25rem;
  font-weight: bold;
  color: #2c3e50;
  margin-bottom: 10px;
  text-align: center;
}

/* Description */
.destination .text p {
  font-size: 0.9rem;
  color: #6c757d;
  text-align: justify;
}

/* Section bas */
.destination .text .bottom-area {
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

/* Effet hover */
.destination:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

/* Pour assurer des hauteurs uniformes */
.item {
  min-height: 350px; /* Hauteur minimale */
}

.one {
	width: 100%;
	font-weight: bold;
}
.one a {
	color: black;
	word-spacing: normal;
}
.one p {
	word-spacing: normal;
}

#pack  a{
	color:#333!important;
	font-weight: bold;
}

.listing {
	font-size: small!important;
	text-transform: lowercase!important;
}

#discover  a{
 background: #8bc34a;
color: #fff;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
 border-radius: 4px;
padding: 3px  5px!important;
}

#discover  a:hover {
background: #8bc34a;
color: #fff; 
}

</style>

	<div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/slide_header/1.webp');">
		<div class="overlay"></div>
		<div class="slideshow">
			<?php
				for ($i=1; $i <= 8 ; $i++) { 
					?>
						<div class="slide" style="background-image: url('/assets/images/slide_header/<?= $i ?>.webp');"></div>
					<?php
				}
			?>
			
			<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
				<div class="col-md-9 ftco-animate" data-scrollax="properties: { translateY: '70%' }">
					<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
					<strong>Love the nature <br></strong>and enjoy our services
					</h1>
					<p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"></p>
				</div>
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
						<h3 class="heading mb-3"><?= $translations['guide'] ?></h3>
						<p class="text-white">
							<?= $translations['38'] ?>
						</p>
					</div>
					<a href="/<?= $lang ?>/guide" class="btn-savoir"><?= $translations['read'] ?></a>
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
					<h3 class="heading mb-3"><?= $translations['excursion'] ?></h3>
					<p class="text-white">
						<?= $translations['35'] ?>
					</p>
              	</div>
			  <a href="/<?= $lang ?>/excursions" class="btn-savoir"><?= $translations['read'] ?></a>
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
					<h3 class="heading mb-3"><?= $translations['circuit-2'] ?></h3>
					<p class="text-white">
						<?= $translations['36'] ?>
					</p>
              	</div>
			  <a href="/<?= $lang ?>/circuits" class="btn-savoir"><?= $translations['read'] ?></a>
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
                <h3 class="heading mb-3"><?= $translations['service'] ?></h3>
                <p class="text-white">
					<?= $translations['37'] ?>
				</p>
				
              </div>
			  <a href="/<?= $lang ?>/services" class="btn-savoir"><?= $translations['read'] ?></a>
            </div>      
          </div>
        </div>
      </div>
    </section>
	
	<!-- Nos package -->
    <section class="ftco-section ftco-destination mt-2">
    	<div class="container">
    		<div class="row justify-content-start mb-2 pb-3">
				<div class="col-md-7 heading-section ftco-animate">
				</div>
				<div class="col-sm-12 heading-perso text-center">
					<h2 class="mb-4 styled-title">
						<span class="line-decor"></span>
						<?= $translations['package'] ?>
						<span class="line-decor"></span>
					</h2>
				</div>

        	</div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
						<div class="item">
		    				<div class="destination">
		    					<a href="/<?= $lang ?>/north-mada" class="img d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/pack/20.avif');">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3" id="pack">
		    						<a href="/<?= $lang ?>/north-mada"><?= $translations['55'] ?></a>
		    						<span class="listing" id="pack">12 <?= $translations['jour'] ?> - 11 <?= $translations['nuit'] ?></span>
		    					</div>
		    				</div>
	    				</div>
						<div class="item">
		    				<div class="destination">
		    					<a href="/<?= $lang ?>/green" class="img d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/gallery/2.jpg');">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3" id="pack">
		    						<a href="/<?= $lang ?>/green">Green</a>
		    						<span class="listing" id="pack">6 <?= $translations['jour'] ?> - 5 <?= $translations['nuit'] ?></span>
		    					</div>
		    				</div>
	    				</div>
						<div class="item">
		    				<div class="destination">
		    					<a href="/<?= $lang ?>/blue-tour" class="img d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/home/pack-blue.jpg');">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3" id="pack">
		    						<a href="/<?= $lang ?>/blue-tour">Blue tour</a>
		    						<span class="listing" id="pack">5 <?= $translations['jour'] ?> - 4 <?= $translations['nuit'] ?></span>
		    					</div>
		    				</div>
	    				</div>
    					<div class="item">
		    				<div class="destination">
		    					<a href="/<?= $lang ?>/nature-pack" class="img d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/package1.jpg');">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3" id="pack">
		    						<a href="/<?= $lang ?>/nature-pack"><?= $translations['key1'] ?></a>
		    						<span class="listing" id="pack"><?= $translations['key2'] ?></span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="/<?= $lang ?>/tourisme-vert" class="img d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/package2.jpg');">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3" id="pack">
		    						<a href="/<?= $lang ?>/tourisme-vert"><?= $translations['key3'] ?></a>
		    						<span class="listing" id="pack"><?= $translations['key4'] ?></span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="/<?= $lang ?>/decouverte" class="img d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/package3.jpg');">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3" id="pack">
		    						<a href="/<?= $lang ?>/decouverte"><?= $translations['key5'] ?></a>
		    						<span class="listing" id="pack"><?= $translations['key6'] ?></span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="/<?= $lang ?>/circuit/tour-fosa" class="img d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/package4.jpg');">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3" id="pack">
		    						<a href="/<?= $lang ?>/circuit/tour-fosa"><?= $translations['key7'] ?></a>
		    						<span class="listing" id="pack"><?= $translations['key8'] ?></span>
		    					</div>
								
		    				</div>
	    				</div>
						
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

	

	<!-- slider : Nos activité -->
	<section class="ftco-section ftco-destination mt-2">
    	<div class="container">
    		<div class="row justify-content-start mb-2 pb-3">
				<div class="col-md-7 heading-section ftco-animate">
				</div>
				<div class="col-sm-12 heading-perso text-center">
					<h2 class="mb-4 styled-title">
						<span class="line-decor"></span>
						<?= $translations['key9'] ?>
						<span class="line-decor"></span>
					</h2>
				</div>
        	</div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
    					<div class="item">
							<div class="destination">
								<a href="/<?= $lang ?>/excursions/peche-au-gros" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/activite3.jpg');">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<a href="/<?= $lang ?>/excursions/peche-au-gros"><?= $translations['key10'] ?></a>
										</div>
									</div>
									<p>
										<?= $translations['key11'] ?>
									</p>
									<p class="days"><span><?= $translations['key12'] ?></span></p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="/<?= $lang ?>/excursions/peche-au-gros"><?= $translations['decouvrir'] ?></a></span>
									</p>
								</div>
    						</div>
	    				</div>
	    				<div class="item">
							<div class="destination">
								<a href="/<?= $lang ?>/excursions/croisiere-en-catamaran" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/activite1.jpg');">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<a href="/<?= $lang ?>/excursions/croisiere-en-catamaran"><?= $translations['key13'] ?></a>
										</div>
									</div>
									<p><?= $translations['key14'] ?></p>
									<p class="days"><span><?= $translations['key15'] ?></span></p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="/<?= $lang ?>/excursions/croisiere-en-catamaran"><?= $translations['decouvrir'] ?></a></span>
									</p>
								</div>
    						</div>
	    				</div>
	    				<div class="item">
							<div class="destination">
								<a href="/<?= $lang ?>/services#voyage-de-noce" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/activite2.jpg');">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<a href="/<?= $lang ?>/services#voyage-de-noce"><?= $translations['key16'] ?></a>
										</div>
									</div>
									<p>
										<?= $translations['key17'] ?>
									</p>
									<p class="days"><span><?= $translations['key18'] ?></span></p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="/<?= $lang ?>/services#voyage-de-noce"><?= $translations['decouvrir'] ?></a></span>
									</p>
								</div>
    						</div>
	    				</div>
	    				<div class="item">
							<div class="destination">
								<a href="/<?= $lang ?>/voyage-incentive" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/activite4.jpg');">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<a href="/<?= $lang ?>/voyage-incentive"><?= $translations['key19'] ?> <span><?= $translations['key20'] ?></span></a>
											
										</div>
										
									</div>
									<p>
										<?= $translations['key21'] ?>
									</p>
									<p class="days"><span style="visibility:hidden;"><?= $translations['key19'] ?>  <?= $translations['key20'] ?></span></p>
									<hr>
									<p class="bottom-area d-flex" id="discover">
										<span class="ml-auto"><a href="/<?= $lang ?>/voyage-incentive"><?= $translations['decouvrir'] ?></a></span>
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

	<!-- Paradise tour-->		
    <section class="ftco-section ftco-destination mt-2">
    	<div class="container">
                <div class="row mb-4">
				<div class="col-sm-12 heading-perso text-center">
					<h2 class="mb-4 styled-title">
						<span class="line-decor"></span>
						Paradise Tour
						<span class="line-decor"></span>
					</h2>
				</div>
		        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
                        

                        <div class="item">
							<div class="destination">
                                <div class="gallery-item" style="background-image: url('/assets/images/tour2.jpg')">
                                    <div class="overlay">
                                        <h2 class="mb-2"><?= $translations['key29'] ?></h2>
                                        <p class="text-white">
                                            <?= $translations['key30'] ?>
                                        </p>
                                        <a href="/<?= $lang ?>/tour-de-l-ile-en-helicot" class="btn"><?= $translations['decouvrir'] ?></a>
                                    </div>
                                </div>
							</div>
	    				</div>

                        <div class="item">
							<div class="destination">
                                <div class="gallery-item" style="background-image: url('/assets/images/home/kit_surf.jpg')">
                                    <div class="overlay">
                                        <h2 class="mb-2"><?= $translations['key31'] ?></h2>
                                        <p class="text-white">
                                        <?=$translations['key32']?>
                                        </p>
                                        <a href="/<?= $lang ?>/kite-surf-a-diego-suarez" class="btn"><?=$translations['decouvrir']?></a>
                                    </div>
                                </div>
							</div>
	    				</div>
						<div class="item">
							<div class="destination">
                                <div class="gallery-item" style="background-image: url('/assets/images/pack/rn-7.webp')">
                                    <div class="overlay">
                                        <h2 class="mb-2"><?=$translations['56']?></h2>
                                        <p class="text-white">
                                        	<?= $translations['57'] ?>
                                        </p>
                                        <a href="/<?= $lang ?>/circuit-sud" class="btn"><?=$translations['decouvrir']?></a>
                                    </div>
                                </div>
							</div>
	    				</div>
						<div class="item">
							<div class="destination">
                                <div class="gallery-item" style="background-image: url('/assets/images/pack/m-1.webp')">
                                    <div class="overlay">
                                        <h2 class="mb-2"><?= $translations['58'] ?></h2>
                                        <p class="text-white">
											<?= $translations['59'] ?>
										</p>
                                        <a href="/<?= $lang ?>/morondava" class="btn"><?=$translations['decouvrir']?></a>
                                    </div>
                                </div>
							</div>
	    				</div>
						<div class="item">
							<div class="destination">
                                <div class="gallery-item" style="background-image: url('/assets/images/pack/m-2.webp')">
                                    <div class="overlay">
                                        <h2 class="mb-2"><?= $translations['60'] ?></h2>
                                        <p class="text-white">
										<?= $translations['59'] ?>
										</p>
                                        <a href="/<?= $lang ?>/morondava-long" class="btn"><?=$translations['decouvrir']?></a>
                                    </div>
                                </div>
							</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
	</section>

	<!-- À propos  -->
	<section class="ftco-section ftco-counter img" id="section-counter" 
		style="background-image: url('/assets/images/bg_1.jpg');background-attachment: fixed;">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-2"><?= $translations['key25'] ?></h2>
          </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <span>
									<?= $translations['key26'] ?>
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



<?php include 'templates/footer.php'; ?>
