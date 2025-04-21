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
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?= $translations['service'] ?></h1>
      </div>
    </div>
  </div>
</div>


<!-- Hero Section: Large title, services introduction -->
<section id="hero" class="container-fluid text-center py-5" style="background: #f0f4f8;">
    <div class="container" data-aos="fade-up">
      <?= $translations['323'] ?>
    </div>
</section>

  <!-- Services Section -->
  <section id="services" class="container py-5" data-aos="fade-up">
    <h2 class="text-center mb-4"><?= $translations['324'] ?></h2>
    <div class="row">
      <!-- Service Card 1 -->
      <div class="col-md-4" data-aos="fade-up">
        <div class="service-card shadow-lg rounded overflow-hidden">
          <img src="/assets/images/services/transfert.jpg" alt="Transfert Premium" class="img-fluid rounded-top">
          <div class="service-card-body">
            <?= $translations['325'] ?>
            <a href="/<?= $lang ?>/transfert-premium" class="btn btn-outline-primary"><?= $translations['326'] ?></a>
          </div>
        </div>
      </div>
      <!-- Service Card 2 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card shadow-lg rounded overflow-hidden">
          <img src="/assets/images/services/service.jpg" alt="Service Traiteur" class="img-fluid rounded-top">
          <div class="service-card-body">
            <?= $translations['327'] ?>
            <a href="#service-traiteur" class="btn btn-outline-primary"><?= $translations['326'] ?></a>
          </div>
        </div>
      </div>
      <!-- Service Card 3 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="service-card shadow-lg rounded overflow-hidden">
          <img src="/assets/images/services/croisière.jpg" alt="Réception Croisières" class="img-fluid rounded-top">
          <div class="service-card-body">
            <?= $translations['328'] ?>
            <a href="#reception-coisières" class="btn btn-outline-primary"><?= $translations['326'] ?></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

      <!-- Service Card 1 -->
      <div class="col-md-4" data-aos="fade-up">
        <div class="service-card shadow-lg rounded overflow-hidden">
          <img src="/assets/images/services/s-2.jpg" alt="Transfert Premium" class="img-fluid rounded-top">
          <div class="service-card-body">
            <?= $translations['329'] ?>
            <a href="/<?=  $lang ?>/voyage-incentive" class="btn btn-outline-primary"><?= $translations['326'] ?></a>
          </div>
        </div>
      </div>

      <!-- Service Card 2 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card shadow-lg rounded overflow-hidden">
          <img src="/assets/images/services/s-3.jpg" alt="Service Traiteur" class="img-fluid rounded-top">
          <div class="service-card-body">
            <?= $translations['330'] ?>
            <a href="#mariage-et-lune-de-miel" class="btn btn-outline-primary"><?= $translations['326'] ?></a>
          </div>
        </div>
      </div>
      <!-- Service Card 3 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="service-card shadow-lg rounded overflow-hidden">
          <img src="/assets/images/services/donia.jpg" alt="Réception Croisières" class="img-fluid rounded-top">
          <div class="service-card-body">
            <?= $translations['331'] ?>
            <a href="#culture-events" class="btn btn-outline-primary"><?= $translations['326'] ?></a>
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <!-- Additional Information Section -->
  <section id="additional-info" class="container py-5" data-aos="fade-up">
    <div class="row">
      <div class="col-md-12" >
      <?= $translations['332'] ?>
      </div>
    </div>

    <div class="row" id="reception-coisières">
      <div class="col-md-12" >
        <?= $translations['333'] ?> 
      </div>
    </div>

    <!-- Table 1: Service Details (3 columns) -->
    <div class="table-responsive">
      <table class="table table-hover table-bordered">
        <?= $translations['334'] ?> 
      </table>
    </div>

    <!-- Table 2: Service Packages (4 columns) -->
    <div class="table-responsive mt-4">
      <table class="table table-hover table-bordered">
        <?= $translations['335'] ?>
      </table>
    </div>
  </section>

  <!-- Culture and Events Section -->
  <section id="culture-events" class="container py-5" data-aos="fade-up">
    <?= $translations['336'] ?>
    <div class="row">
      <!-- Event Block 1 -->
      <div class="col-md-6 mb-4" data-aos="fade-up">
        <div class="event-block shadow-lg rounded overflow-hidden">
          <?= $translations['337'] ?> 
        </div>
      </div>
      <!-- Event Block 2 -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="event-block shadow-lg rounded overflow-hidden">
          <?= $translations['338'] ?> 
        </div>
      </div>
      <!-- Event Block 3 -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="event-block shadow-lg rounded overflow-hidden">
          <?= $translations['339'] ?> 
        </div>
      </div>
      <!-- Event Block 4 -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="event-block shadow-lg rounded overflow-hidden">
          <?= $translations['340'] ?>
        </div>
      </div>
      <!-- Event Block 5 -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
        <div class="event-block shadow-lg rounded overflow-hidden">
          <?= $translations['341'] ?>
        </div>
      </div>
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
        <div class="event-block shadow-lg rounded overflow-hidden">
          <?= $translations['342'] ?>
        </div>
      </div>
    </div>
  </section>


    <!-- Mariage Section -->
  <section id="mariage-et-lune-de-miel" class="container py-5" data-aos="fade-up">
    <h2 class="text-center mb-4" id="voyage-de-noce"><?= $translations['343'] ?></h2>
    <div class="row">
      <!-- Event Block 1 -->
      <div class="col-md-6 mb-4" data-aos="fade-up">
        <div class="event-block shadow-lg rounded overflow-hidden">
          
          <img src="/assets/images/services/s-1.jpg" alt="Festival Donia" class="img-fluid mb-3">
          <p class="text-justify">
            <?= $translations['344'] ?>
            <p class="mb-4"></p>
            <br>
            <br>
          </p>
        </div>
      </div>
      <!-- Event Block 2 -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="event-block shadow-lg rounded overflow-hidden">
          <img src="/assets/images/services/s-3.jpg" alt="Festival Sômarôho" class="img-fluid mb-3">
          <p class="text-justify">
            <?= $translations['345'] ?>
          </p>
          <br>
        </div>
      </div>
    </div>
  </section>

  <p id="service-traiteur"></p>

  <section id="additional-info" class="container py-5" data-aos="fade-up">
    <div class="row" >
      <div class="col-md-12" >
        <h3 class="text-center"><?= $translations['346'] ?></h3>
        <p class="text-justify">
          <?= $translations['347'] ?>
        </p>
      </div>
    </div>
  </section>

  <!-- Image Section -->
    <section class="ftco-section ftco-destination mt-5">
    	<div class="container">
        <div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
              <?php
                for ($i=1; $i < 18 ; $i++) { 
                  ?>
                    <div class="item">
                        <div class="destination">
                            <a href="/assets/images/services/tr-<?= $i ?>.jpg" class="img d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/services/tr-<?= $i ?>.jpg');">
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


<?php include 'templates/footer.php'; ?>
