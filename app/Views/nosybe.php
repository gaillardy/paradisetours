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
    <h2 class="guide-heading"><i class="fas fa-history"></i> Histoire de Nosy Be</h2>
                    <p class="mb-3">
                      Nosy Be se situe dans le Nord-Ouest de Madagascar, précisément à 8 km des côtes du pays. Principale île d’un archipel Nosy be composé de plusieurs iles paradisiaques, l’histoire de l’île aux parfums a commencé lors de l’arrivée des arabes. Anciennement appelée « Vario Be » par la population locale, elle fut, à cette époque, gouvernée par la reine Ambrym II.  Un autre fut construit à Ambanoro en 1100 qui est devenu, 300 ans après, le pôle économique de l’il. Nosy Be figure, de nos jours, parmi les plus grands producteurs de cette plante, d’où son surnom : « l’ile aux parfums » 
                      Elle s’étend sur environ 26 kilomètres du nord au sud sur 20 kilomètres d’est en ouest. 
                      C’est l’île principale d’un archipel qui comprend les petites îles de Nosy Komba, 
                      Nosy Fanihy, Nosy Sakatia, Nosy Iranja, Nosy Tanikely et les archipels des Mitsio et des Radama. 

                    </p>

                    <ul class="unstiled-list mb-3">
                      <li>Pays : Madagascar</li>
                      <li>Région : DI.A.N.A</li>
                      <li>Devise : Ariary</li>
                      <li>Population : 92 000 habitants</li>
                      <li>Ethnie : Sakalava</li>
                      <li>Climat : moyenne annuelle de température de 25 °C (en hiver 22 °C et pendant l’été, d’octobre à février, 28 °C).</li>
                    </ul>

                    <p class="mb-3">
                      L’île de Nosy Be et son archipel ont un climat particulièrement agréable avec une moyenne annuelle de température de 25 °C (en hiver 22 °C et pendant l’été, d’octobre à février, 28 °C). Dans la région Nord de l’archipel de Nosy Be, les îles Mitsio et la Baie du Courrier, il souffle pendant l’hiver un vent assez fort appelé « avarabe » tandis que tous les après-midi, la chaleur de la journée est tempérée par une agréable brise d’ouest, appelée « talio » qui souffle jusqu’au coucher du soleil.
                      L’île offre encore des endroits authentiques et préservés à découvrir et où séjourner à  Nosy be, en dehors des espaces investis par le tourisme de masse. C’est le cas de la côte sud-est et des villages situés en bord de plage autour de la Réserve naturelle de Lokobe tels que les villages de Doany-Antafondro et d’Ampasipohy.
                      Île Nosy Be est également connue dans l’océan Indien pour son festival annuel, le Donia et la Somaroho, qui réunit  une sélection d’artistes de Madagascar et des autres îles de l’océan Indien.
                      Depuis 2014 a lieu chaque fin de mois d’août pendant 6 jours dans les plus prestigieux hôtels de l’île Nosy Be, ainsi qu’une finale lors de coucher du soleil sur le Mont Passot, le Nosy Be Symphonies  – le Festival de Musique Classique de l’Océan Indien – regroupant des artistes internationaux, de l’Océan Indien et de Madagascar.
                      La population de l’île Nosy Be est très métissée et multiculturelle. Toutefois, les Antakarana et les Sakalava sont les principales éthnies qui peuplent cette région. Issus du nord de Madagascar, les Antakarana demeurent un groupe en forte concentration dans l’île Nosy Be. Par la venue des étrangers indiens et des européens, dits les ”vazaha”, la population est devenue pluriculturelle et colorée.
                    </p>

                    <h2 class="guide-heading">LE VILLAGE ROYAL</h2>
                    <p class="mb-3">
                      Mahabo de Manongarivo : un mahabo est un cimetière sacré où reposent les princes des familles royales. Le tombeau central de Manongarivo abrite différentes sépultures dont celles de la Reine Sakalava Binao qui a régné de 1881 à 1921. La petite maison de gauche est la Case au Trésor et contient les objets personnels des dépouilles. L’accès est très réglementé, la tenue et les rites à faire au préalable doivent être respectées autant pour la population locale que pour les visiteurs. Il est interdit de s’y rendre certains jours de la semaine. Il est primordial de se renseigner avant d’y aller.
                    </p>

                    <h2 class="guide-heading">La population :</h2>

                    <p class="mb-3">
                      Chaleureuse et accueillante, la population de Hell-Ville est principalement issue du peuple Sakalava, une des 18 ethnies habitant Madagascar.
                      Elle se démarque par sa culture et son histoire. Les tabous et les interdits y tiennent encore une place importante dans la culture locale. Comme dans tout Madagascar, le culte des ancêtres y est toujours présent. On leur demande toujours bénédictions pour leurs soutiens quotidiens. La simplicité de la vie de ses habitants de l’île Nosy Be se reflète par leurs tenues traditionnelles. Le « kisaly » est la tenue traditionnelle des femmes tandis que pour les hommes, la tradition veut le port du « kitamby ».
                      Cependant, avec les changements que la modernisation a apportés, le port de ce dernier est révolu alors que le « kisaly » reste toujours en vogue. Durant la colonisation, d’autres religions telles que le christianisme et l’islam sont entrées dans l’ile et sont, depuis le temps, en parfaite cohabitation avec la tradition.
                    </p>

                    <h2 class="guide-heading">Sites historiques marquent l’histoire de Nosy Be :</h2>

                    <p class="mb-3">
                      Nous pouvons vous en citer quelques-uns et dont il vous est possible de visiter, séjourner à Nosy Be avec ou sans guide.
                      <br>
                      <strong> Le camp vert situé à Hell –Ville.</strong> Les canonniers y sont installés pour marquer l’époque coloniale.
                      <br>
                      
                      <strong>L’arbre de Banian à Mahatsinjo.</strong> Petite note : vous devez mettre la tenue traditionnelle des habitants pour y accéder au lieu sacré. Cependant, le lieu en possède.
                      <br>
                      <strong>Marodoka </strong>: le village fantôme à Ambanoro

                    </p>

                    <h2 class="guide-heading">Moyens de déplacements :</h2>

                    <p class="mb-3">
                      L'île de Nosy Be propose divers modes de transport, Taxi spécial, Taxi collectif, et tuk-tuk ou Location. Le taxi spécial : les chauffeurs n'embarquent qu'un seul client à la fois. Par précaution, trouvez un accord sur le prix avant d'embarquer.
                      Le taxi collectif : Le prix de la course est lié à la destination et au nombre de passagers embarqués. Quant à l'heure de départ, elle dépend du moment où toutes les places sont occupées. Chaque passager est ensuite conduit à sa destination.
                      Le taxi-moto : avec ses trois roues et sa couleur jaune, les taxi-motos sont une alternatives bons marchés des taxis.
                      La location : Les voyageurs peuvent louer des voitures (4x4...), des motos, des scooters, des quads et des buggys (des véhicules tout-terrain).
                    </p>

                    <h2 class="guide-heading">Le festival sômarôho :</h2>

                    <p class="mb-3">
                      Impossible de parler de Nosy Be sans parler du festival Somaroho. Le festival Somaroho est un véritable hymne à la musique malgache, offrant une programmation riche et variée. Des artistes locaux et internationaux se produisent sur scène, mêlant les sonorités traditionnelles et contemporaines.
                      Le Somaroho met en avant différents genres musicaux malgaches, tels que le salegy, le tsapiky, le reggae, le jazz, le pop ou encore le rock. Les artistes interprètent leurs chansons avec passion, partageant leur héritage culturel et leurs messages à travers la musique. C’est une occasion unique de découvrir la richesse et la diversité de la scène musicale malgache ! Le premier jour du festival, l’intégralité de la ville de Nosy Be s’est remplie et les cortèges ont déambulé : des danseurs, des équilibristes en haut de longues échasses, des cascadeurs en rollers qui sautent au-dessus des tuk-tuks, des associations de jeunes qui préservent l’environnement, de lutte contre les violences faites aux femmes, des musiciens, etc…
                    </p>

                    <h2 class="guide-heading">Les 5 suggestions de meilleurs hôtel à Nosy Be :</h2>

                    <ul>
                      <li><strong> Ravintsara Wellness Resort</strong></li>
                      <li><strong> Exora beach resort</strong></li>
                      <li><strong> Orangea beach resort</strong></li>
                      <li><strong> Nosy Be Hôtel et spa</strong></li>
                      <li><strong> L’heure bleue</strong></li>
                    </ul>


                    <h2 class="guide-heading">Les 5 suggestions de meilleurs restaurants à Nosy Be:</h2>

                    <ul>
                      <li><strong> Cacao Beach</strong></li>
                      <li><strong> Papillon</strong></li>
                      <li><strong> La cuisine de Marna</strong></li>
                      <li><strong> Karibo </strong></li>
                      <li><strong> Table d’Alexandre</strong></li>
                    </ul>
    </div>


<?php include 'templates/footer.php'; ?>
