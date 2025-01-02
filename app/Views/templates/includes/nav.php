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
		  <ul class="navbar-nav ms-auto align-items-center">
			<!-- Accueil -->
			<li class="nav-item active">
			  <a href="/en/home" class="nav-link">Accueil</a>
			</li>
		
			<!-- Excursions Dropdown -->
			<li class="nav-item ">
			  <a href="/<?= $lang ?>/excurtions" class="nav-link "  aria-expanded="false">
				Excursions
			  </a>
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
		
			<!-- Contact -->
			<li class="nav-item">
			  <a href="/<?=  $lang ?>/contact" class="nav-link">Contact</a>
			</li>

			<!-- Contact -->
			<li class="nav-item">
			  <a href="" class="nav-link">Services</a>
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
		
			<!-- CTA -->
			<li class="nav-item cta">
			  <a href="tel:+261320712758">
				<span>Reserver</span>
			  </a>
			</li>
		  </ul>
		</div> 
    </div>
  </nav>
<!-- END nav -->