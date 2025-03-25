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

  


</style>

<div class="hero-wrap js-fullheight" style="background-image: url('/assets/images/cover/guide-cover-2.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?= $translations['guide'] ?></h1>
      </div>
    </div>
  </div>
</div>


<section class="ftco-section guide-section" id="guide">
  <div class="container">
    <div class="row d-md-flex align-items-center">
      <div class="col-md-12 ftco-animate p-md-5 text-center">
        <h2 class="mb-4 section-title"><?= $translations['guide'] ?></h2>
        <p class="section-description"><?= $translations['199'] ?></p>
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
          <div class="col-md-12 nav-link-wrap mb-5 d-flex justify-content-center">
            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">
                <i class="fas fa-info-circle"></i><?= $translations['200'] ?> 
              </a>
              <a class="nav-link active"  href="/<?= $lang ?>/madagascar" >
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
                  <div class="col-md-12">
                    <h2 class="mb-4"><i class="fas fa-ban"></i><?= $translations['201'] ?></h2>
                    <p><?= $translations['202'] ?></p>
                  </div>
                </div>
              </div>
              <!-- Tab 2 -->
              <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="mb-4"><i class="fas fa-paw"></i> Madagascar</h2>
                    <p>
                      L'Île de Madagascar est un pays de l'océan Indien au sud-est de l'Afrique divisé en six provinces autonomes. La majorité de la population est de confessions traditionnelles, avec une minorité de confession musulmane ou chrétienne. Il abrite des milliers d’espèces animales endémiques comme les lémuriens, ainsi que des forêts tropicales, des plages et des récifs coraliens.
                    </p>
                    <h2 class="mb-4">Description</h2>
                    <ul style="list-style:none;">
                      <li> Capitale : Tananarive</li>
                      <li> Président : Andry Nirina Rajoelina</li>
                      <li> Population : 32.7 millions</li>
                      <li> Continent : Afrique</li>
                      <li> Devise : Ariary</li>
                      <li> Langues officielles : Malgache, Français</li>
                    </ul>


                    <h2 class="mb-4">Le tourisme à Madagascar :</h2>

                    <p>
                      Le tourisme est une des activités économiques les plus importantes pour Madagascar, notamment Nosy Be. Il est une des premières sources de devises du pays. Il se concentre sur les parcs naturels du pays. La faune et la flore de Madagascar sont en effet les mieux préservées au monde. La Grande île abrite en effet de nombreuses espèces endémiques dont le plus connu est le lémurien et dans les côtes de , les faunes marines ne passent pas inaperçues. 
                      Le tourisme sportif se développe également. De nombreux amoureux de sports nautiques se donnent rendez-vous dans les environs de Diégo-Suarez ou de Nosy-Be dans le Nord du Pays, pour pratiquer kitesurf et au windsurf. La saison annuelle de vent dure de fin mars à fin novembre. Elle figure parmi les plus longues et les plus fortes au monde.

                    </p>


                    <h2 class="mb-4">Les 23 Régions de Madagascar :</h2>

                    <p>
                      Chacune des régions de Madagascar offre son lot de paysages époustouflants, de traditions riches, et d’histoires fascinantes. De la pointe nord aux confins du sud, , chaque région offre une expérience unique qui ne manquera pas de vous séduire. Ce sont : Diégo/Suarez, Sambava, Itasy, Analamanga, Vakinankaratra ,Bongolava ,Sofia ,Boeny, Betsiboka ,Melaky ,Alaotra, Mangoro ,Atsinanana, Analanjorofo, Amoron’iMania, Haute Matsiatra, Vatovavy Fitovinany,	Androy, Atsimo Atsinanana, Ihorombe, Menabe ,Atsimo Andrefana , Tôlagnaro.
                    </p>

                    <h2 class="mb-4">Les 18 ethnies de Madagascar :</h2>

                    <p>
                      Magagascar possede differents ethnies : Merina, Betsileo, Betsimisaraka, Sakalava ,Antaisaka ,Antandroy , Mahafaly, Vezo ,Bara, Antakarana ,Antemoro, Antaifasy  ,Masikoro , Antambahoaka, Tsimihety , Tanala  ,Bezanozano , Sihanaka. 
                    </p>

                    <h2 class="mb-4">Histoire, culture et coutume :</h2>

                    <p>
                      La culture de Madagascar désigne d’abord les pratiques culturelles patentes de sa vaste population. Cette culture reflète les différentes vagues de peuplement à travers les siècles. Néanmoins, tous ces Malgaches aux cultures hétérogènes observent le même geste de respect lorsqu’ils se croisent : ils s’inclinent. 
                      Ce pays d’environ 32.7 millions d’habitants est donc très divers sur le plan culturel. Il compte 18 ethnies distinctes, parlant la même langue mais différents dialectes. Il n’est pas étonnant d’apprendre que chaque ethnie a des tabous et des interdits différents tabous (fady) qui se transmettent de génération en génération. Ici, on ne porte pas la couleur rouge pendant une forte pluie où il y a le tonnerre et la foudre. 
                      La circoncision est une réelle tradition sur toute l’île, il s’agit d’inciser le prépuce d’un petit garçon par cette tradition pour être réellement considérés comme des hommes.
                      Madagascar est le seul pays où l’on pratique le « FAMADIHANA ou retournement des morts ». Sur les Hautes Terres, même si cela se perd à cause de son coût, la saison des famadihana se déroule de juin à septembre. 

                    </p>

                    <h2 class="mb-4">Coutumes</h2>
                    <p>
                      La culture malgache provient en grande partie d'autres continents. La croyance dans le vintana – destin – pourrait découler de la cosmologie islamique, tandis que le symbolisme religieux et le statut conférés au bétail rappellent l'héritage africain.
                      Les principales coutumes malgaches concernent le culte des ancêtres, qui désigne à la fois les ancêtres et le respect qui leur est accordé, consiste en un système complexe de fady et de rites funèbres. Le fady correspond à un système de tabous locaux destiné à apaiser les ancêtres. Un fady peut par exemple prohiber le sifflement sur une plage près d'un village, ou la marche devant un arbre sacré. Il existe ainsi des milliers de superstitions de ce genre, dont un certain nombre ne dépasse pas le cadre d'un village.
                      Le zébu est un signe de richesse et donc il est très important. Avec le riz, c’est un des deux symboles du pays. Ces bovins, dont la viande est consommée en abondance, sont presque aussi nombreux que la population humaine.

                    </p>

                    <h2 class="mb-4">La cuisine malgache :</h2>

                    <p>
                      Le riz est la base de l’alimentation malgache qui est cultivé sur l’île. La cuisine malgache regroupe toutes les traditions culinaires variées de l'océan Indien et créoles : cuisine généreuses et épicées. 
                      <b>Les principaux plats sont :</b> la viande mijotée à l’ail et gingembre, feuille de manioc pilé mélangé au lait de coco et pavé de zébu ou poissons ou crevettes. Bouillon de zébu aux brèdes, poulet fermier mijoté à l’ail, poissons frits, sans oublier les pâtisseries locales et les différentes sortes de beignets.

                    </p>

                    <h2 class="mb-4">Les moyens de transport :</h2>

                    <p>
                    Divers sont les moyens de transport à Madagascar : Le taxi-brousse est le moyen de transport le plus utilisé sur l'île, avion, location de véhicule, train, pirogues, boutres, ferries, voitures.
                    </p>


                    <h2 class="mb-4">Les fêtes et festivals de Madagascar :</h2>

                    <p class="mb-2">
                     <b> Janvier-Février-Mars :</b> les trois premiers mois de l’année marquent le début de la période cyclonique dans l’océan Indien, qui s’étend jusqu’en mars. Les cyclones touchent avant tout les côtes, La saison des pluies a maintenant débuté sur tout le pays, avec une intensité variable selon les régions. Elle s’accompagne d’une chaleur lourde pendant la journée. Janvier inaugure le début de la “période de soudure” : le stock de riz de l’année précédente est épuisé et les nouveaux plants n’ont pas encore été récoltés. Ce moment critique de l’année s’étale jusqu’en mars.
                    </p>
                    <p class="mb-2">
                      <b>Mars (08 mars) :</b> Journée mondiale de la femme, fait l’objet de nombreuses manifestations dans les villes du pays. La fête des Mères et la fête des Pères sont également importantes sur l’île. Fête de l’Insurrection : Le pays commémore chaque 29 mars la rébellion contre les Français en 1947.
                    </p>
                    <p class="mb-2">
                    <b>Avril (Santabary) :</b> La fête du Santabary célèbre la première récolte de riz de l’année, en avril-mai. C’est la période d’abondance dans les campagnes, les marchés sont animés.
                    </p>

                    <p class="mb-2">
                    <b>Juin (26 juin) :</b> La journée marquée par des célébrations officielles et festives, est également une date clé pour les revendications politiques. Juin donne le signal de nombreuses fêtes de la circoncision dans l’île.
                    </p>
                    <p class="mb-2">
                    <b>Juillet : Dans les campagnes, c’est le début de la “période de kabary”, ou “période de palabres”. Jusqu’en septembre, c’est le moment de l’année où l’on dépense l’argent de la récolte du riz, prépare des fêtes, des mariages, des famadihana…
                    
                    <b>Vanille :</b> le triangle SAVA (Sambava, Antalaha, Vohémar, Andapa) vit entre juillet et début août au rythme de la récolte de la vanille, dont les gousses luisantes sèchent au soleil et embaument les villes. 
                    </p>

                    <p class="mb-2">
                    <b>Août :</b> Le festival Somarôho est le grand carnaval annuel qui illumine Nosy Be début août. Cet événement emblématique joue un rôle crucial dans la promotion du tourisme à Nosy Be. Somarôho est le plus grand  festival de l’Océan Indien.  Ne manquez pas cette occasion unique de découvrir l’âme de Nosy Be et de vivre une expérience inoubliable au cœur du festival Somarôho !
                    </p>

                    <p class="mb-2">
                    <b>Septembre :</b> Grandes voyageuses, les baleines à bosse migrent chaque année depuis l’Antarctique pour gagner des régions tropicales où elles peuvent s’accoupler et mettre bas. On les retrouve autour de l’île Sainte-Marie et Nosy Be, où elles donnent un véritable spectacle.
                    </p>
                    <p class="mb-2">
                    <b>Octobre :</b> C’est la saison des mangues. Goûteuses et déclinées en une dizaine de variétés, elles font leur apparition sur les tables et les marchés. Autre don de la nature : les jacarandas sont en fleur. 
                    </p>
                    <p class="mb-2">
                      <b>Novembre :</b> le mois de récolte des litchis. Ceux de Madagascar sont particulièrement juteux et délicieux…Début de la saison des pluies, qui empêchent la circulation sur certaines pistes saisonnières. Certaines années, les nuages attendent patiemment le mois de décembre.
                    </p>

                    <p class="mb-2">
                      <b>Décembre :</b> C’est la période d’abondance sur la luxuriante côte est, avec la récolte de nombreux fruits.
                    </p>
                      
                  </div>
                </div>
              </div>
              <!-- Tab 3 -->
              <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="mb-4"><i class="fas fa-history"></i><?= $translations['203'] ?></h2>
                    <p class="mb-3">
                      <?= $translations['204'] ?>

                    </p>
                    <?= $translations['205'] ?>
                    <?= $translations['206'] ?>
                    

                    
                    </ul>
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
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const tabs = document.querySelectorAll('.nav-link');
    const tabContent = document.querySelector('.tab-content');

    function adjustHeight() {
      let activeTab = document.querySelector('.tab-pane.show');
      if (activeTab) {
        tabContent.style.minHeight = activeTab.scrollHeight + "px";
      }
    }

    tabs.forEach(tab => {
      tab.addEventListener("shown.bs.tab", adjustHeight);
    });

    adjustHeight(); // Ajuster la hauteur au chargement
  });
</script>


<?php include 'templates/footer.php'; ?>
