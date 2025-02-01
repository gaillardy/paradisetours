<?php include 'templates/header.php'; ?>

<style>
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
        /* Styles de la navigation */
        .custom-tabs {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
            padding: 10px;
            background: #f8fafc;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .custom-tabs a {
            text-decoration: none;
            padding: 10px 15px;
            font-weight: bold;
            color: #333;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .custom-tabs a.active,
        .custom-tabs a:hover {
            background: #0056b3;
            color: #fff;
        }

        /* Contenu principal */
        .content {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #444;
        }

        .guide-heading {
            color: #0056b3;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
        }

        ul {
            list-style: none;
            padding-left: 0;
        }

        ul li {
            margin-bottom: 5px;
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
        <h2 class="mb-4 section-title ">Guide</h2>
        <p class="section-description">Voyager peut-être excitant et stressant à la fois, surtout lorsqu’il s’agit d’une nouvelle destination. Cependant, il est toujours plus prudent de savoir où on va. Nous avons le « guide » pour vous. Retrouvez-y toutes les informations primordiales à savoir avant de visiter Madagascar. Des informations utiles surtout pour ceux qui n’y ont jamais été.</p>
      </div>
    </div>
  </div>
</section>


<!-- Navigation Personnalisée -->
    <nav class="custom-tabs">
        <a href="/<?= $lang?>/madagascar " class="<?php if($currentRoute === "/$lang/madagascar"){echo 'active';} else {echo '';}?>">Madagascar</a>
        <a href="/<?= $lang?>/nosy-be "  class="<?php if($currentRoute === "/$lang/nosy-be"){echo 'active';} else {echo '';}?>">Nosy Be</a>
        <a href="/<?= $lang?>/savoir " class="<?php if($currentRoute === "/$lang/savoir"){echo 'active';} else {echo '';}?>">Bon à savoir</a>
    </nav>

    <!-- Contenu -->
    <div class="content">
        <h2 class="guide-heading">Les achats interdits</h2>
        <p>
        Selon la convention sur le Commerce International de la faune et flore, en vue de la protection des espèces rares et protégées et pour vous éviter tous problèmes lors de votre séjour à Madagascar. Il est bon de savoir plusieurs choses avant de venir.
        </p>
    </div>


<?php include 'templates/footer.php'; ?>
