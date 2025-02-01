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
          <div class="col-md-12 nav-link-wrap mb-5 d-flex justify-content-center">
            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">
                <i class="fas fa-info-circle"></i> Bon à savoir
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
                    <h2 class="mb-4"><i class="fas fa-ban"></i> Les achats interdits</h2>
                    <p>Selon la convention sur le Commerce International de la faune et flore, en vue de la protection des espèces rares et protégées et pour vous éviter tous problèmes lors de votre séjour à Madagascar. Il est bon de savoir plusieurs choses avant de venir.</p>
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
                    <h2 class="mb-4"><i class="fas fa-history"></i> Histoire de Nosy Be</h2>
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

                    <h2 class="mb-4">LE VILLAGE ROYAL</h2>
                    <p class="mb-3">
                      Mahabo de Manongarivo : un mahabo est un cimetière sacré où reposent les princes des familles royales. Le tombeau central de Manongarivo abrite différentes sépultures dont celles de la Reine Sakalava Binao qui a régné de 1881 à 1921. La petite maison de gauche est la Case au Trésor et contient les objets personnels des dépouilles. L’accès est très réglementé, la tenue et les rites à faire au préalable doivent être respectées autant pour la population locale que pour les visiteurs. Il est interdit de s’y rendre certains jours de la semaine. Il est primordial de se renseigner avant d’y aller.
                    </p>

                    <h2 class="mb-4">La population :</h2>

                    <p class="mb-3">
                      Chaleureuse et accueillante, la population de Hell-Ville est principalement issue du peuple Sakalava, une des 18 ethnies habitant Madagascar.
                      Elle se démarque par sa culture et son histoire. Les tabous et les interdits y tiennent encore une place importante dans la culture locale. Comme dans tout Madagascar, le culte des ancêtres y est toujours présent. On leur demande toujours bénédictions pour leurs soutiens quotidiens. La simplicité de la vie de ses habitants de l’île Nosy Be se reflète par leurs tenues traditionnelles. Le « kisaly » est la tenue traditionnelle des femmes tandis que pour les hommes, la tradition veut le port du « kitamby ».
                      Cependant, avec les changements que la modernisation a apportés, le port de ce dernier est révolu alors que le « kisaly » reste toujours en vogue. Durant la colonisation, d’autres religions telles que le christianisme et l’islam sont entrées dans l’ile et sont, depuis le temps, en parfaite cohabitation avec la tradition.
                    </p>

                    <h2 class="mb-4">Sites historiques marquent l’histoire de Nosy Be :</h2>

                    <p class="mb-3">
                      Nous pouvons vous en citer quelques-uns et dont il vous est possible de visiter, séjourner à Nosy Be avec ou sans guide.
                      <br>
                      <strong> Le camp vert situé à Hell –Ville.</strong> Les canonniers y sont installés pour marquer l’époque coloniale.
                      <br>
                      
                      <strong>L’arbre de Banian à Mahatsinjo.</strong> Petite note : vous devez mettre la tenue traditionnelle des habitants pour y accéder au lieu sacré. Cependant, le lieu en possède.
                      <br>
                      <strong>Marodoka </strong>: le village fantôme à Ambanoro

                    </p>

                    <h2 class="mb-4">Moyens de déplacements :</h2>

                    <p class="mb-3">
                      L'île de Nosy Be propose divers modes de transport, Taxi spécial, Taxi collectif, et tuk-tuk ou Location. Le taxi spécial : les chauffeurs n'embarquent qu'un seul client à la fois. Par précaution, trouvez un accord sur le prix avant d'embarquer.
                      Le taxi collectif : Le prix de la course est lié à la destination et au nombre de passagers embarqués. Quant à l'heure de départ, elle dépend du moment où toutes les places sont occupées. Chaque passager est ensuite conduit à sa destination.
                      Le taxi-moto : avec ses trois roues et sa couleur jaune, les taxi-motos sont une alternatives bons marchés des taxis.
                      La location : Les voyageurs peuvent louer des voitures (4x4...), des motos, des scooters, des quads et des buggys (des véhicules tout-terrain).
                    </p>

                    <h2 class="mb-4">Le festival sômarôho :</h2>

                    <p class="mb-3">
                      Impossible de parler de Nosy Be sans parler du festival Somaroho. Le festival Somaroho est un véritable hymne à la musique malgache, offrant une programmation riche et variée. Des artistes locaux et internationaux se produisent sur scène, mêlant les sonorités traditionnelles et contemporaines.
                      Le Somaroho met en avant différents genres musicaux malgaches, tels que le salegy, le tsapiky, le reggae, le jazz, le pop ou encore le rock. Les artistes interprètent leurs chansons avec passion, partageant leur héritage culturel et leurs messages à travers la musique. C’est une occasion unique de découvrir la richesse et la diversité de la scène musicale malgache ! Le premier jour du festival, l’intégralité de la ville de Nosy Be s’est remplie et les cortèges ont déambulé : des danseurs, des équilibristes en haut de longues échasses, des cascadeurs en rollers qui sautent au-dessus des tuk-tuks, des associations de jeunes qui préservent l’environnement, de lutte contre les violences faites aux femmes, des musiciens, etc…
                    </p>

                    <h2 class="mb-4">Les 5 suggestions de meilleurs hôtel à Nosy Be :</h2>

                    <ul>
                      <li><strong> Ravintsara Wellness Resort</strong></li>
                      <li><strong> Exora beach resort</strong></li>
                      <li><strong> Orangea beach resort</strong></li>
                      <li><strong> Nosy Be Hôtel et spa</strong></li>
                      <li><strong> L’heure bleue</strong></li>
                    </ul>


                    <h2 class="mb-4">Les 5 suggestions de meilleurs restaurants à Nosy Be:</h2>

                    <ul>
                      <li><strong> Cacao Beach</strong></li>
                      <li><strong> Papillon</strong></li>
                      <li><strong> La cuisine de Marna</strong></li>
                      <li><strong> Karibo </strong></li>
                      <li><strong> Table d’Alexandre</strong></li>
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
