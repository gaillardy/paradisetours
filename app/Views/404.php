<?php include 'templates/header.php'; ?>
<style>
      
      h2, h3, h4 {
        color: #2a3d45;
      }
      
      #hero {
        background-color: #f0f4f8;
      }
      
      .service-card {
        margin-bottom: 30px;
        overflow: hidden;
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
      }
      
      .service-card:hover {
        transform: scale(1.03);
      }
      
      .service-card img {
        height: 250px;
        width: 100%;
      }
      
      .service-card-body {
        padding: 20px;
      }
      
      .table {
        margin-top: 20px;
        border-radius: 10px;
      }
      
      .table th, .table td {
        text-align: center;
        vertical-align: middle;
      }
      
      .text-justify {
        text-align: justify;
      }
      
      .bg-dark {
        background-color: #333;
      }
      
      .text-white {
        color: white;
      }
      
      .event-block {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      }
      
      .event-block h3, .event-block h4 {
        color: #2a3d45;
      }
      
      .event-block img {
        border-radius: 10px;
      }
      
      .table-responsive {
        overflow-x: auto;
      }
      
      @media (max-width: 768px) {
        .service-card-body {
          padding: 10px;
        }
      
        .event-block {
          padding: 15px;
        }
    }
</style>


<div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/dark-cover.jpg');">
<div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Page not found</h1>
      </div>
    </div>
  </div>
</div>


<!-- Hero Section: Large title, services introduction -->
<section id="hero" class="container-fluid text-center py-5" style="background: #f0f4f8;">
    <div class="container" data-aos="fade-up">
      <h1 class="display-4">404</h1>
      <p class="lead">Page not found</p>
    </div>
</section>

  


<?php include 'templates/footer.php'; ?>
