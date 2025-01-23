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
						<h3 class="heading mb-3"><?= $translations['guide'] ?></h3>
						<p>
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
                <p>
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
					<p>
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
                <p>
					<?= $translations['37'] ?>
				</p>
				
              </div>
			  <a href="/<?= $lang ?>/services" class="btn-savoir"><?= $translations['read'] ?></a>
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
					<h2 class="mb-4 styled-title"><?= $translations['package'] ?></h2>
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
		    						<h3><a href="#"><?= $translations['key1'] ?></a></h3>
		    						<span class="listing" id="pack"><?= $translations['key2'] ?></span>
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
		    						<h3><a href="#"><?= $translations['key3'] ?></a></h3>
		    						<span class="listing" id="pack"><?= $translations['key4'] ?></span>
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
		    						<h3><a href="#"><?= $translations['key5'] ?></a></h3>
		    						<span class="listing" id="pack"><?= $translations['key6'] ?></span>
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
		    						<h3><a href="#"><?= $translations['key7'] ?></a></h3>
		    						<span class="listing" id="pack"><?= $translations['key8'] ?></span>
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
					<h2 class="mb-4 styled-title"><?= $translations['key9'] ?></h2>
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
											<h3><a href="/<?= $lang ?>/excursions/peche-au-gros"><?= $translations['key10'] ?></a></h3>
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
											<h3><a href="/<?= $lang ?>/excursions/croisiere-en-catamaran"><?= $translations['key13'] ?></a></h3>
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
											<h3><a href="/<?= $lang ?>/services#voyage-de-noce"><?= $translations['key16'] ?></a></h3>
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
											<h3><a href="/<?= $lang ?>/voyage-incentive"><?= $translations['key19'] ?> <span><?= $translations['key20'] ?></span> </a></h3>
											
										</div>
										
									</div>
									<p>
										<?= $translations['key21'] ?>
									</p>
									<p class="days"><span style="visibility:hidden;"><?= $translations['key19'] ?>  <?= $translations['key20'] ?></span></p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="/<?= $lang ?>/voyage-incentive"><?= $translations['decouvrir'] ?></a></span>
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
											<h3><a href="#"><?= $translations['key22'] ?></a></h3>
										</div>
										
									</div>
									<p><?= $translations['key23'] ?></p>
									<p class="days"><span><?= $translations['key24'] ?></span></p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="#"><?= $translations['decouvrir'] ?></a></span>
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
											<h3><a href="#"><?= $translations['key27'] ?></a></h3>
										</div>
										<div class="two">
										</div>
									</div>
									<p>
										<?= $translations['key28'] ?>
									</p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="#"><?= $translations['decouvrir'] ?></a></span>
									</p>
								</div>
							</div>
	    				</div>
	    				<div class="item">
							<div class="destination">
								<a href="/<?= $lang ?>/tour-de-l-ile-en-helicot" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/tour2.jpg');">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<h3><a href="/<?= $lang ?>/tour-de-l-ile-en-helicot"><?= $translations['key29'] ?></a></h3>
										</div>
										
									</div>
									<p>
										<?= $translations['key30'] ?> ...
									</p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="/<?= $lang ?>/tour-de-l-ile-en-helicot"><?= $translations['decouvrir'] ?></a></span>
									</p>
								</div>
							</div>
	    				</div>
	    				<div class="item">
							<div class="destination">
								<a href="/<?= $lang ?>/kite-surf-a-diego-suarez" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/tour3.jpg');">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<h3><a href="/<?= $lang ?>/kite-surf-a-diego-suarez"><?= $translations['key31'] ?></a></h3>
											
										</div>
										
									</div>
									<p>
										<?= $translations['key32'] ?>
									</p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="/<?= $lang ?>/kite-surf-a-diego-suarez"><?= $translations['decouvrir'] ?></a></span>
									</p>
								</div>
    						</div>
	    				</div>
	    				<div class="item">
							<div class="destination">
								<a href="/<?= $lang ?>/sejour-plage-vierge" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/tour4.jpg');">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<div class="d-flex">
										<div class="one">
											<h3><a href="/<?= $lang ?>/sejour-plage-vierge"><?= $translations['key33'] ?></a></h3>
											
										</div>
										
									</div>
									<p>
										<?= $translations['key34'] ?>
									</p>
									<hr>
									<p class="bottom-area d-flex">
										<span class="ml-auto"><a href="/<?= $lang ?>/sejour-plage-vierge"><?= $translations['decouvrir'] ?></a></span>
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
