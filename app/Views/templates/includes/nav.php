<?php
$languages = [
	'en' => 'English', 
	'fr' => 'Français', 
	'it' => 'Italiano',
	'de' => 'Deutsch'
];

?>
<style>
    /* Base styles for the nav-item */
    .nav-item {
      position: relative;
    }
    
    .custom-dropdown .nav-link {
      color: #333;
      text-decoration: none;
      padding: 10px 15px;
      display: inline-block;
      font-weight: bold;
      transition: color 0.3s ease;
    }
    
    .custom-dropdown .nav-link:focus {
      outline: none;
      color: #007bff;
    }
    
    /* Change background on focus-within */
    .custom-dropdown:focus-within {
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    
    /* Dropdown menu styles */
    .custom-dropdown .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 10px 0;
      display: none;
      opacity: 0;
      transform: translateY(10px);
      transition: opacity 0.3s ease, transform 0.3s ease;
      z-index: 1000;
      min-width: 200px;
    }
    
    
    
    
    /* Dropdown menu visible with focus-within */
    .custom-dropdown:focus-within .dropdown-menu {
      display: block;
      opacity: 1;
      transform: translateY(0);
    }
    
    /* Dropdown item styles */
    .custom-dropdown .dropdown-item {
      padding: 10px 20px;
      color: #333;
      text-decoration: none;
      display: block;
      font-size: 14px;
      transition: background-color 0.3s ease, color 0.3s ease;
      transition:0.5s ease-in-out;
    }
    
    .custom-dropdown .dropdown-item:hover,
    .custom-dropdown .dropdown-item:focus {
      background-color: #f8f9fa;
      color: #333;
    }
    
    /* Divider styles */
    .custom-dropdown .divider {
      height: 1px;
      margin: 5px 0;
      background-color: #ddd;
      border: none;
    }
	@media (max-width:750px){
		.navbar-collapse {
			height: 100vh;
		}
	}
</style>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      	<a class="navbar-brand justify-content-start" href="/<?= $lang ?>/home">
			<img src="/assets/images/logo-paradise.png" alt="Nosy be Paradise tour" >
	  	</a>
      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        	<span class="oi oi-menu"></span> <?= $translations['41'] ?>
      	</button>

		<div class="collapse navbar-collapse justify-content-end" id="ftco-nav">
		  	<ul class="navbar-nav ms-auto align-items-start">
				<!-- Accueil -->
				<li class="nav-item <?php if($currentRoute === "/$lang/home"){echo 'active';} else {echo '';}?>">
					<a href="/<?= $lang ?>/home" class="nav-link"><?= $translations['home'] ?></a>
				</li>
			
				<!-- Excursions Dropdown -->
				<li class="nav-item custom-dropdown">
				<a href="javascript:avoid(0)" class="nav-link <?php if($currentRoute === "/$lang/excursions"){echo 'active';} else {echo '';}?>" tabindex="0">
					<?= $translations['39'] ?>
				</a>		
					<ul class="dropdown-menu" >
						<li>
							<a class="dropdown-item  " href="/<?= $lang ?>/excursions">
								<?= $translations['42'] ?>
							</a>
						</li>
						<li><hr class="dropdown-divider"></li>
						<li>
							<a class="dropdown-item  " href="/<?= $lang ?>/excursions">
								<?= $translations['43'] ?>
							</a>
						</li>
					</ul>
				</li>
			
				
				<li class="nav-item custom-dropdown">
					<a href="javascript:avoid(0)" class="nav-link <?php if($currentRoute === "/$lang/circuits"){echo 'active';} else {echo '';}?>" tabindex="0">
						<?= $translations['circuit'] ?>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a class="dropdown-item" href="/<?= $lang ?>/circuits">
							<?= $translations['44'] ?>
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="/<?= $lang ?>/circuits">
								<?= $translations['45'] ?>
							</a>
						</li>
					</ul>
				</li>

				<!-- Contact -->
				<li class="nav-item ">
					<a href="/<?=  $lang ?>/contact" class="nav-link <?php if($currentRoute === "/$lang/contact"){echo 'active';} else {echo '';}?>"><?= $translations['contact'] ?></a>
				</li>

				<!-- Langue Dropdown -->
				<li class="nav-item custom-dropdown">
				<a href="javascript:avoid(0)" class="nav-link" tabindex="0">
					<img src="/assets/images/lang/<?= $lang ?>.png" alt="<?= $lang ?>" style="width: 15px; height: 12px;">
				</a>
					
					<ul class="dropdown-menu" aria-labelledby="langDropdown">
						<?php
							foreach ($languages as $code => $name) {
								// Construire l'URL en changeant uniquement la langue
								$newRoute = preg_replace('/^\/[a-z]{2}/', "/$code", $currentRoute);

								?>
									<li>
										<a class="dropdown-item <?= $code === $lang ? 'active' : ''; ?>" 
										href="<?= $newRoute ?>">
											<img src="/assets/images/lang/<?= $code ?>.png" alt="<?= $name ?>" style="width: 15px; height: 12px;">
											<?= $name ?>
										</a>
									</li>
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