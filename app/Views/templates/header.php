<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $metaDescription ?? 'Default description' ?>">
    <meta name="keywords" content="<?= $metaKeywords ?? 'tourism, travel' ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?> - Nosy be Paradise Tours</title>
        <link rel="icon" href="/assets/images/favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/animate.css">
        
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="/assets/css/magnific-popup.css">

        <link rel="stylesheet" href="/assets/css/aos.css">

        <link rel="stylesheet" href="/assets/css/ionicons.min.css">

        <link rel="stylesheet" href="/assets/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="/assets/css/jquery.timepicker.css">

        
        <link rel="stylesheet" href="/assets/css/flaticon.css">
        <link rel="stylesheet" href="/assets/css/icomoon.css">

        <link rel="stylesheet" href="/assets/css/fontawesome.css">
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="/assets/css/fontawesome-all.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.3.11/tiny-slider.css'>
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/app.css">
        <link rel="stylesheet" href="/assets/styles/app.css">
        <link rel="stylesheet" href="/assets/css/slider.css">

        <!-- Bootstrap CSS -->
        <!-- Animation on Scroll CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
        <!-- Font Awesome for icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">  
</head>
<body>
<?php
// Rendre le switcher avec la route actuelle
// echo Language::renderSwitcher($lang, $currentRoute);
?>
<?php include 'includes/nav.php' ?>

<!-- Social network -->
<div class="cta-button">
    <div class="main-btn">
      <i class="icon-message"></i>
    </div>
    <div class="social-icons">
      <a href="https://www.facebook.com/NosybeParadiseTours/" target="_blank" class="social-icon facebook">
        <i class="icon-facebook"></i>
      </a>
      <a href="https://www.youtube.com/results?search_query=nosy+be+paradise+tours" target="_blank" class="social-icon youtube">
        <i class="icon-youtube"></i>
      </a>
      <a href="https://mg.linkedin.com/in/nosy-be-paradise-tours-1bb9088b" target="_blank" class="social-icon linkedin">
        <i class="icon-linkedin"></i>
      </a>
      <a href="https://twitter.com/7paradisetours" target="_blank" class="social-icon twitter">
        <i class="icon-twitter"></i>
      </a>
      <a href="https://https//www.google.com/maps/contrib/112713821230749887112/photos/@-13.3996565,48.2711495,17z/data=!3m1!4b1!4m3!8m2!3m1!1e1" target="_blank" class="social-icon google">
        <i class="icon-google-plus"></i>
      </a>
    </div>
</div>
<!-- Social network -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<script src="/assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap and AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
    document.addEventListener('DOMContentLoaded', () => {
      const mainBtn = document.querySelector('.main-btn');
      const ctaButton = document.querySelector('.cta-button');
      const close = document.querySelector('.icon-message');
    
      mainBtn.addEventListener('click', () => {
        ctaButton.classList.toggle('active');
        close.classList.toggle('icon-close');
        close.classList.toggle('icon-message');
      });
    });
</script>
</body>
</html>