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
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Services</h1>
      </div>
    </div>
  </div>
</div>


<!-- Hero Section: Large title, services introduction -->
<section id="hero" class="container-fluid text-center py-5" style="background: #f0f4f8;">
    <div class="container" data-aos="fade-up">
      <h1 class="display-4">Découvrez Nos Services Premium</h1>
      <p class="lead">Des solutions sur mesure adaptées à vos besoins spécifiques. Explorez nos offres et transformez votre expérience.</p>
    </div>
</section>

  <!-- Services Section -->
  <section id="services" class="container py-5" data-aos="fade-up">
    <h2 class="text-center mb-4">Nos Services</h2>
    <div class="row">
      <!-- Service Card 1 -->
      <div class="col-md-4" data-aos="fade-up">
        <div class="service-card shadow-lg rounded overflow-hidden">
          <img src="/assets/images/services/transfert.jpg" alt="Transfert Premium" class="img-fluid rounded-top">
          <div class="service-card-body">
            <h3>Transfert Premium</h3>
            <p>Service de transport haut de gamme, pour des trajets confortables et rapides.</p>
            <a href="/<?= $lang ?>/transfert-premium" class="btn btn-outline-primary">En savoir plus</a>
          </div>
        </div>
      </div>
      <!-- Service Card 2 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card shadow-lg rounded overflow-hidden">
          <img src="/assets/images/services/service.jpg" alt="Service Traiteur" class="img-fluid rounded-top">
          <div class="service-card-body">
            <h3>Service Traiteur</h3>
            <p>Offre de repas gastronomiques pour tous types d'événements.</p>
            <a href="#service-traiteur" class="btn btn-outline-primary">En savoir plus</a>
          </div>
        </div>
      </div>
      <!-- Service Card 3 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="service-card shadow-lg rounded overflow-hidden">
          <img src="/assets/images/services/croisière.jpg" alt="Réception Croisières" class="img-fluid rounded-top">
          <div class="service-card-body">
            <h3>Réception Croisières</h3>
            <p>Organisation de réceptions sur des bateaux de luxe avec vue sur mer.</p>
            <a href="#reception-coisières" class="btn btn-outline-primary">En savoir plus</a>
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
            <h3>Voyage Incentive</h3>
            <p>Réinventez l’incentive en vous offrant un voyage d’entreprise original. </p>
            <a href="/<?=  $lang ?>/voyage-incentive" class="btn btn-outline-primary">En savoir plus</a>
          </div>
        </div>
      </div>

      <!-- Service Card 2 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="service-card shadow-lg rounded overflow-hidden">
          <img src="/assets/images/services/s-3.jpg" alt="Service Traiteur" class="img-fluid rounded-top">
          <div class="service-card-body">
            <h3>Mariage et Lune de Miel</h3>
            <p>L’équipe Paradise Tours vous propose son forfait mariage et Lune de miel. </p>
            <a href="#mariage-et-lune-de-miel" class="btn btn-outline-primary">En savoir plus</a>
          </div>
        </div>
      </div>
      <!-- Service Card 3 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="service-card shadow-lg rounded overflow-hidden">
          <img src="/assets/images/services/donia.jpg" alt="Réception Croisières" class="img-fluid rounded-top">
          <div class="service-card-body">
            <h3>Culture et Événements</h3>
            <p>Organisation de réceptions sur des bateaux de luxe avec vue sur mer.</p>
            <a href="#culture-events" class="btn btn-outline-primary">En savoir plus</a>
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <!-- Additional Information Section -->
  <section id="additional-info" class="container py-5" data-aos="fade-up">
    <div class="row">
      <div class="col-md-12" >
        <h3 class="text-center">Nos Offres Complètes</h3>
        <p class="text-justify">
          Découvrez plus en détail les services que nous proposons. 
          Nous avons conçu des solutions uniques pour répondre à vos besoins les plus exigeants. 
          Que vous soyez à la recherche de services de transfert premium, 
          de repas gastronomiques ou d'une réception croisière,
           nous avons la solution idéale pour vous. 
           Tous nos services sont conçus pour offrir une expérience inégalée et 
           garantir votre satisfaction à chaque étape de votre projet.
          </p>
      </div>
    </div>

    <div class="row" id="reception-coisières">
      <div class="col-md-12" >
        <h3 class="text-center">Réception Croisières</h3>
        <p class="text-justify">
          &nbsp;Une compagnie de croisière est une compagnie maritime spécialiste des croisières, soit une entreprise touristique proposant des voyages récréatifs à bord de navires de croisière. Par la qualité de ses infrastructures portuaires pouvant accueillir jusqu’à 2 bateaux de croisières et de l’accueil chaleureux de ses habitants, Nosy Be est le 1er port de débarquement et d’escale de bateau de croisière à Madagascar avec ses         1 200 passagers croisiéristes. Chaque saison de croisière voit plusieurs navires faire escale le long des côtes malgaches, renforçant ainsi la position de Madagascar en tant qu’étape incontournable des circuits touristiques. Le navire de croisière a réalisé une nouvelle escale à Antsiranana. Le bateau, offrant aux touristes une occasion unique de découvrir les trésors de cette destination de Nosy Be et le  Nord de Madagascar.
          Parmi les moments forts de cette visite, l’exploration de la Montagne d’Ambre s’est imposée comme un incontournable. Située à 38 km de Diego-Suarez, cette destination offres une immersion dans la riche biodiversité de la réserve naturelle, tout en admirant des panoramas époustouflants en altitude. N’oubliez pas une escale pour visiter Nosy Be et ses environs en tant que 1ère escale du bateau de croisière à Madagascar! 
          Nous pouvons vous proposer différents type de logistiques.

        </p>
      </div>
    </div>

    <!-- Table 1: Service Details (3 columns) -->
    <div class="table-responsive">
      <table class="table table-hover table-bordered">
        <caption class="text-center">En catamaran ou vedette rapide</caption>
        <thead class="table-dark">
          <tr>
            <th scope="col">TYPE</th>
            <th scope="col">NOMBRE  DE PLACES</th>
            <th scope="col">ETAT</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Catamaran à voile et moteur</td>
            <td>12 places</td>
            <td>neuf</td>
          </tr>

          <tr>
            <td>Coque rapide à moteur</td>
            <td>20 places</td>
            <td>neuf</td>
          </tr>

          <tr>
            <td>Catamaran rapide à moteur</td>
            <td>50 places</td>
            <td>neuf</td>
          </tr>
          
        </tbody>
      </table>
    </div>

    <!-- Table 2: Service Packages (4 columns) -->
    <div class="table-responsive mt-4">
      <table class="table table-hover table-bordered">
        <caption class="text-center">Autre moyens de transports </caption>
        <thead class="table-dark">
          <tr>
            <th scope="col">TYPE</th>
            <th scope="col">NOMBRE  DE PLACES</th>
            <th scope="col">ETAT</th>
          </tr>
        </thead>
        <tr>
          <tr>
            <td>Grand bus</td>
            <td>20 places</td>
            <td>neuf</td>
          </tr>
          <tr>
            <td>Mini bus (Starex)</td>
            <td>9 places</td>
            <td>neuf</td>
          </tr>
          <tr>
            <td>4WD</td>
            <td>4 places</td>
            <td>bon état</td>
          </tr>
          <tr>
            <td>4WD wagon</td>
            <td>3 places</td>
            <td>bon état</td>
          </tr>
          <tr>
            <td>Tuk Tuk</td>
            <td>2 places</td>
            <td>neuf</td>
          </tr>
          <tr>
            <td>Quad</td>
            <td>2 places</td>
            <td>bon état</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- Culture and Events Section -->
  <section id="culture-events" class="container py-5" data-aos="fade-up">
    <h2 class="text-center mb-4">Événements</h2>
    <p class="text-justify mb-4">
      Nosy Be Paradise Tours, est aussi un organisateur  d’événements, prépare et coordonne des événements variés comme le mariage, baptême, fête de remise de diplôme et service traiteur aussi. Peut gérer l'événement du début à la fin, en fonction des besoins et de la demande du client. Les services que Nosy Be Paradise Tours varie selon budget donc nous acceptons tous type de clientèle et le  déplacement est possible partout à Madagascar.
    </p>
    <div class="row">
      <!-- Event Block 1 -->
      <div class="col-md-6 mb-4" data-aos="fade-up">
        <div class="event-block shadow-lg rounded overflow-hidden">
          <h3>Les Grands Festivals de Nosy Be</h3>
          <h4>Festival Donia</h4>
          <img src="/assets/images/services/Donia.jpg" alt="Festival Donia" class="img-fluid mb-3">
          <p class="text-justify">
            Le Festival Donia est l'un des événements culturels les plus attendus à Nosy Be, 
            célébrant la musique, la danse et les traditions locales. 
            Chaque année, il attire des milliers de visiteurs venus découvrir 
            les richesses culturelles de l'île.
            Le festival DONIA, comme décrit le peuple Sakalava « la belle vie », 
            a été créé en 1994, se fête tous les mois de Mai pour célébrer la vie et le bonheur d’exister.
             Il rassemble les grands artistes de Madagascar et de l’Océan Indien. 
             Cet événement se caractérise par des manifestations culturelles et sportives différentes
              qui sont montrés à travers un concours du rythme Salegy lors d’un carnaval pour le jour de son ouverture.
          </p>
        </div>
      </div>
      <!-- Event Block 2 -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="event-block shadow-lg rounded overflow-hidden">
          <h4>Festival Sômarôho</h4>
          <img src="/assets/images/services/Somaroho.jpg" alt="Festival Sômarôho" class="img-fluid mb-3">
          <p class="text-justify">
            En tant que jeune artiste nosybéen, 
            WAWA fut décidé depuis 2014 d’organiser une festivité appelé «SOMAROHO» particulièrement tous les mois d’Août,
            pour fêter l’anniversaire du Groupe avec les peuple de Nosy Be. 
            Ce grand festival se manifeste par les concours sportifs, culturels, traditionnels, du rythme de danse différent, 
            mais surtout le Salegy et Wadraha, 
            durant lequel des artistes nationaux et internationaux participent aussi pour assurer l’ambiance.
          </p>
        </div>
      </div>
      <!-- Event Block 3 -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="event-block shadow-lg rounded overflow-hidden">
          <h4>Le Morengy</h4>
          <img src="/assets/images/services/morengy.jpg" alt="Le Morengy" class="img-fluid mb-3">
          <p class="text-justify">
            Le Morengy est un événement sportif où les compétiteurs
             s'affrontent dans des matchs de boxe traditionnelle malgache. 
             Il incarne l'esprit de la compétition et de la discipline.

             Le Morengy ou lutte malgache, 
             est une culture que pratique les peuples habitant particulièrement 
             dans Nord-Ouest  de Madagascar tous les dimanches après-midi. 
             Il s’agit d’une lutte à laquelle chaque participant démontre sa force 
             et les spectateurs soutiennent en pariant sur le gagnant.
          </p>
        </div>
      </div>
      <!-- Event Block 4 -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="event-block shadow-lg rounded overflow-hidden">
          <h4>Sortie Baleine</h4>
          <img src="/assets/images/services/b-1.jpg" alt="Sortie Baleine" class="img-fluid mb-3">
          <p class="text-justify">
            Les sorties baleines offrent l'opportunité d'observer 
            les baleines à bosse dans leur habitat naturel. 
            Une expérience inoubliable au cœur de l'océan Indien.
            Les journées sont généralement chaudes et sèches la majeure partie de l’année. 
            Les eaux côtières constituent une voie de migration pour les baleines à bosse 
            (Juillet à Octobre). La saison de nidification des tortues 
            et les conditions météorologiques attirent les amateurs de snorkeling.
          </p>
        </div>
      </div>
      <!-- Event Block 5 -->
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
        <div class="event-block shadow-lg rounded overflow-hidden">
          <h4>Culture Tsangan-Tsaina</h4>
          <img src="/assets/images/services/15.jpg" alt="Culture Tsangan-Tsaina" class="img-fluid mb-3">
          <p class="text-justify">La culture Tsangan-Tsaina est un aspect fondamental de la vie locale, mélangeant musique, arts et traditions ancestrales.</p>
        </div>
      </div>
      <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
        <div class="event-block shadow-lg rounded overflow-hidden">
          <h4>BAPTEME</h4>
          <img src="/assets/images/services/15.jpg" alt="Culture Tsangan-Tsaina" class="img-fluid mb-3">
          <p class="text-justify">
          Le baptême est un évènement qui nécessite d'être préparé en amont afin de pouvoir l'organiser dans sa globalité et ainsi éviter tout problème le jour J. Il est souvent conseillé de préparer cette fête près de 3 mois en avance ! Si vous décidez de baptiser un bébé vous pouvez déjà réfléchir à son baptême dès sa naissance !
          </p>
        </div>
      </div>
    </div>
  </section>


    <!-- Mariage Section -->
  <section id="mariage-et-lune-de-miel" class="container py-5" data-aos="fade-up">
    <h2 class="text-center mb-4" id="voyage-de-noce">Mariage et Lune de Miel</h2>
    <div class="row">
      <!-- Event Block 1 -->
      <div class="col-md-6 mb-4" data-aos="fade-up">
        <div class="event-block shadow-lg rounded overflow-hidden">
          
          <img src="/assets/images/services/s-1.jpg" alt="Festival Donia" class="img-fluid mb-3">
          <p class="text-justify">
            Pour fêter ce qu’il y a de plus beau sur terre, l’AMOUR.
            Vous rêvez d’un mariage dans un cadre exceptionnel, hors du commun ou d’une lune de miel sur une île paradisiaque?

            L’équipe Paradise Tours vous propose son forfait mariage et Lune de miel. 
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
            Nous disposons de plusieurs coordonnateurs de mariage expérimentés, pouvant vous assurer un mariage de rêve. 
            Que ce soit pour des événements intimes ou de grande envergure pouvant accueillir jusqu’à 150 invités,
           nos équipes de professionnels mettent tout en œuvre pour créer un moment unique pour vous.
           Un cadre idyllique, un décor paradisiaque et une équipe motivée à votre disposition pour rendre vos moments uniques. 
           Pas étonnant que l’île se distingue comme l’une des destinations préférées pour célébrer l’amour!
            
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
        <h3 class="text-center">Service traiteur</h3>
        <p class="text-justify">
          Le service traiteur est un terme technique qui désigne la fourniture de repas et de boissons à un groupe de personnes dans un lieu quelconque .Le service traiteur fait partie du segment catering et s'occupe généralement d'événements éphémères et festifs. En tant que traiteur, Nosy Be Paradise Tours  accorde en outre une grande importance à l'effet produit sur les invités. Nos services soutiennent et concrétisent les objectifs fixés par le client et visent à créer des souvenirs chaleureux que les invités garderont longtemps après l’événement.
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
