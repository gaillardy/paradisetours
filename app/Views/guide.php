<?php include 'templates/header.php'; ?>

<style>
    .img-fluid {
        height: 200px;
    }
    /* Optimisation de la section */
.guide-section {
    background: linear-gradient(to right, #f8fafc, #e8f1f6); /* Dégradé doux */
    padding: 60px 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre subtile */
}

/* Titre de section */
.guide-section .section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #0056b3; /* Couleur vive pour attirer l'attention */
    text-transform: uppercase;
    margin-bottom: 20px;
}

/* Description de section */
.guide-section .section-description {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #444; /* Texte facile à lire */
    max-width: 800px;
    margin: 0 auto;
    padding: 0 15px;
}

/* Responsive */
@media (max-width: 768px) {
    .guide-section {
        padding: 40px 10px;
    }

    .guide-section .section-title {
        font-size: 2rem;
    }

    .guide-section .section-description {
        font-size: 1rem;
    }
}

.info-tabs {
    background: #f9f9f9;
    padding: 60px 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.nav-pills .nav-link {
    font-size: 1.2rem;
    font-weight: 600;
    color: #0056b3;
    margin-right: 10px;
    border-radius: 30px;
    background: #e8f1f6;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 10px;
}

.nav-pills .nav-link:hover,
.nav-pills .nav-link.active {
    background: #0056b3;
    color: #fff;
}

.tab-pane h2 {
    font-size: 2rem;
    color: #0056b3;
    font-weight: bold;
}

.tab-pane p {
    font-size: 1.1rem;
    color: #444;
    line-height: 1.8;
}

.img-fluid {
    border-radius: 10px;
}

@media (max-width: 768px) {
    .nav-pills .nav-link {
        font-size: 1rem;
    }

    .tab-pane h2 {
        font-size: 1.6rem;
    }

    .tab-pane p {
        font-size: 1rem;
    }
}


</style>

<div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/cover/guide-cover-2.jpg');">
<div class="overlay"></div>
<div class="container">
  <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
    <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
      <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Guide</h1>
    </div>
  </div>
</div>
</div>


<section class="ftco-section guide-section" id="guide">
  <div class="container">
    <div class="row d-md-flex align-items-center">
      <div class="col-md-12 ftco-animate p-md-5 text-center">
        <h2 class="mb-4 section-title">Guide</h2>
        <p class="section-description">Voyager peut-être excitant et stressant à la fois, surtout lorsqu’il s’agit d’une nouvelle destination. Cependant, il est toujours plus prudent de savoir où on va. Nous avons le « guide » pour vous. Retrouvez-y toutes les informations primordiales à savoir avant de visiter Madagascar. Des informations utiles surtout pour ceux qui n’y ont jamais été.</p>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section info-tabs">
  <div class="container">
    <div class="row d-md-flex">
      <div class="col-md-12 ftco-animate p-md-5">
        <div class="row">
          <!-- Navigation Tabs -->
          <div class="col-md-12 nav-link-wrap mb-5">
            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">
                <i class="fas fa-info-circle"></i> Bon à savoir
              </a>
              <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">
                <i class="fas fa-globe-africa"></i> Madagascar
              </a>
              <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">
                <i class="fas fa-map-marker-alt"></i> Nosy Be
              </a>
            </div>
          </div>
          <!-- Tab Content -->
          <div class="col-md-12 d-flex align-items-center">
            <div class="tab-content ftco-animate" id="v-pills-tabContent">
              <!-- Tab 1 -->
              <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                <div class="row">
                  <div class="col-md-6">
                    <h2 class="mb-4"><i class="fas fa-ban"></i> Les achats interdits</h2>
                    <p>Selon la convention sur le Commerce International de la faune et flore, en vue de la protection des espèces rares et protégées et pour vous éviter tous problèmes lors de votre séjour à Madagascar. Il est bon de savoir plusieurs choses avant de venir.</p>
                  </div>
                  <div class="col-md-6">
                    <img src="/assets/images/savoir.jpg" alt="Bon à savoir" class="img-fluid rounded mb-4">
                  </div>
                </div>
              </div>
              <!-- Tab 2 -->
              <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                <div class="row">
                  <div class="col-md-6">
                    <h2 class="mb-4"><i class="fas fa-paw"></i> Madagascar</h2>
                    <p>Madagascar est une île immense et un pays situé au large de la côte sud-est de l’Afrique. Il abrite des milliers d’espèces animales endémiques comme les lémuriens, ainsi que des forêts tropicales, des plages et des récifs. 
                        À proximité de l’effervescente capitale, Antananarivo, se trouve la colline d’Ambohimanga, 
                        un ensemble de palais royaux et de cimetières, ainsi que l’Avenue des Baobabs.</p>
                  </div>
                  <div class="col-md-6">
                    <img src="/assets/images/cover/cover-mada.jpg" alt="Madagascar" class="img-fluid rounded mb-4">
                  </div>
                </div>
              </div>
              <!-- Tab 3 -->
              <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                <div class="row">
                  <div class="col-md-6">
                    <h2 class="mb-4"><i class="fas fa-history"></i> Histoire de Nosy Be</h2>
                    <p>Nosy Be se situe dans le Nord-Ouest de Madagascar, précisément à 8 km des côtes du pays. Principale île d’un archipel Nosy Be composé de plusieurs îles paradisiaques, l’histoire de l’île aux parfums a commencé lors de l’arrivée des Arabes.</p>
                  </div>
                  <div class="col-md-6">
                    <img src="/assets/images/Nosy-be-story.jpg" alt="Nosy Be" class="img-fluid rounded mb-4">
                  </div>
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
