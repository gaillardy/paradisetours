<?php
$languages = [
	'en' => 'English', 
	'fr' => 'Français', 
	'it' => 'Italiano'
];

?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      	<a class="navbar-brand justify-content-start" href="/<?= $lang ?>/home">
			<img src="/assets/images/logo-paradise.png" alt="Nosy be Paradise tour" >
	  	</a>
      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        	<span class="oi oi-menu"></span> Menu
      	</button>

		<div class="collapse navbar-collapse justify-content-end" id="ftco-nav">
		  <ul class="navbar-nav ms-auto align-items-start">
			<!-- Accueil -->
			<li class="nav-item active">
			  <a href="/en/home" class="nav-link">Accueil</a>
			</li>
		
			<!-- Excursions Dropdown -->
			<li class="nav-item dropdown">
			  <a href="/<?= $lang ?>/excurtions" class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Excursions
			  </a>		
			  	<ul class="dropdown-menu" aria-labelledby="langDropdown">
			  		<li>
						<a class="dropdown-item  " href="/<?= $lang ?>/excurtions">
							Excursions Nord
						</a>
					</li>
					<li><hr class="dropdown-divider"></li>
					<li>
						<a class="dropdown-item  " href="/<?= $lang ?>/excurtions">
							Excursions Sud
						</a>
					</li>
			  	</ul>
			</li>
		
			<!-- Circuits Dropdown -->
			<li class="nav-item">
			  <a href="#" class="nav-link"   aria-expanded="false">
				Circuits
			  </a>
			</li>

			<!-- Circuits Dropdown -->
			<li class="nav-item">
			  <a href="#" class="nav-link"   aria-expanded="false">
				Tours
			  </a>
			</li>

			<!-- Guide -->
			<li class="nav-item">
			  <a href="/<?=  $lang ?>/guide" class="nav-link">Guide</a>
			</li>
		
			<!-- Contact -->
			<li class="nav-item">
			  <a href="/<?=  $lang ?>/contact" class="nav-link">Contact</a>
			</li>

			<!-- Service -->
			<li class="nav-item">
			  <a href="" class="nav-link">Services</a>
			</li>

			
		
			<!-- social network -->
			<li class="nav-item dropdown">
			  <a href="javascript:avoid(0)" class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Nous suivre
			  </a>

			  	<ul class="dropdown-menu" aria-labelledby="langDropdown">
			  		<li>
					  	<a class="dropdown-item" target="_blank" rel="noreferrer noopener" href="https://www.facebook.com/NosybeParadiseTours/">
							<span class="icon-facebook"></span>
							&nbsp; Facebook
						</a>
					</li>
					<li><hr class="dropdown-divider"></li>
					<li>
						<a class="dropdown-item" target="_blank" rel="noreferrer noopener" href="https://twitter.com/7paradisetours">
							<span class="icon-twitter"></span>
							&nbsp;Twitter X
						</a>
					</li>
					<li><hr class="dropdown-divider"></li>
					<li>
						<a class="dropdown-item" target="_blank" rel="noreferrer noopener" href="https://mg.linkedin.com/in/nosy-be-paradise-tours-1bb9088b">
						<span class="icon-linkedin"></span>
						&nbsp;Linkedin
						</a>
					</li>

					<li><hr class="dropdown-divider"></li>
					<li>
						<a class="dropdown-item" target="_blank" rel="noreferrer noopener" href="https://https//www.google.com/maps/contrib/112713821230749887112/photos/@-13.3996565,48.2711495,17z/data=!3m1!4b1!4m3!8m2!3m1!1e1">
							<span class="icon-google-plus"></span>
							&nbsp;Google +
						</a>
					</li>

					<li><hr class="dropdown-divider"></li>
					<li>
						<a class="dropdown-item" target="_blank" rel="noreferrer noopener" href="https://www.youtube.com/results?search_query=nosy+be+paradise+tours">
							<span class="icon-youtube"></span>
							&nbsp; Youtube
						</a>
					</li>
			  	</ul>

			</li>

			<!-- Langue Dropdown -->
			<li class="nav-item dropdown">
			  <a href="#" class="nav-link dropdown-toggle" id="langDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				<img src="/assets/images/lang/<?= $lang ?>.png" alt="Français" style="width: 15px; height: 12px;">
			  </a>
			  	
			  	<ul class="dropdown-menu" aria-labelledby="langDropdown">
				  	<?php
						foreach ($languages as $code => $name) {
							// Construire l'URL en changeant uniquement la langue
							$newRoute = preg_replace('/^\/[a-z]{2}/', "/$code", $currentRoute);

							?>
								<li>
									<a class="dropdown-item <?= $code === $lang ? 'active' : ''; ?>" href="<?= $newRoute ?>">
										<img src="/assets/images/lang/<?= $code ?>.png" alt="<?= $name ?>" style="width: 15px; height: 12px;">
										<?= $name ?>
									</a>
								</li>
								<li><hr class="dropdown-divider"></li>
							<?php
						}
					?>
			  	</ul>
			</li>
		  </ul>
		</div> 
    </div>
  </nav>
<!-- END nav -->