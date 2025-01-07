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
          <img src="/assets/images/services/transfer.jpg" alt="Transfert Premium" class="img-fluid rounded-top">
          <div class="service-card-body">
            <h3>Transfert Premium</h3>
            <p>Service de transport haut de gamme, pour des trajets confortables et rapides.</p>
            <a href="#" class="btn btn-outline-primary">En savoir plus</a>
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
            <a href="#" class="btn btn-outline-primary">En savoir plus</a>
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
            <a href="#" class="btn btn-outline-primary">En savoir plus</a>
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

    <div class="row">
      <div class="col-md-12" >
        <h3 class="text-center">Réception Croisières</h3>
        <p class="text-justify">
        Par la qualité de ses infrastructures portuaires pouvant accueillir jusqu’à 2 
        bateaux de croisières et de l’accueil chaleureux des ses habitants , 
        Nosy Be est le 1er port de débarquement et 
        d’escale de bateau de croisière à Madagascar avec ses 1 200 passagers croisiéristes.
        Tout au long de l’année, 
        les plus grandes compagnies de croisières 
        proposent une large palette de voyages pour tous les goûts et pour tous les budgets :
         festive, familiale, conviviale, curieuse, d’une durée de 14 jours.
        N’oubliez pas une escale pour visiter Nosy Be et ses environs en 
        tant que 1ère escale du bateau de croisière à Madagascar!Logistiques Disponible:
        </p>
      </div>
    </div>

    <!-- Table 1: Service Details (5 columns) -->
    <div class="table-responsive">
      <table class="table table-hover table-bordered">
        <caption class="text-center">Détails des Services</caption>
        <thead class="table-dark">
          <tr>
            <th scope="col">Service</th>
            <th scope="col">Description</th>
            <th scope="col">Durée</th>
            <th scope="col">Tarif</th>
            <th scope="col">Disponibilité</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Transfert Premium</td>
            <td>Transport de luxe pour un voyage confortable.</td>
            <td>2-3 heures</td>
            <td>€200</td>
            <td>Disponible toute l'année</td>
          </tr>
          <tr>
            <td>Service Traiteur</td>
            <td>Repas gastronomiques adaptés à vos événements.</td>
            <td>1-2 heures</td>
            <td>€150</td>
            <td>Disponible sur demande</td>
          </tr>
          <tr>
            <td>Réception Croisières</td>
            <td>Réception sur bateau de luxe.</td>
            <td>3-4 heures</td>
            <td>€500</td>
            <td>Disponible saisonnièrement</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Table 2: Service Packages (4 columns) -->
    <div class="table-responsive mt-4">
      <table class="table table-hover table-bordered">
        <caption class="text-center">Nos Forfaits</caption>
        <thead class="table-dark">
          <tr>
            <th scope="col">Forfait</th>
            <th scope="col">Services Inclus</th>
            <th scope="col">Tarif</th>
            <th scope="col">Durée</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Forfait Standard</td>
            <td>Transfert standard + Service Traiteur</td>
            <td>€150</td>
            <td>4 heures</td>
          </tr>
          <tr>
            <td>Forfait Premium</td>
            <td>Transfert Premium + Service Traiteur + Réception Croisière</td>
            <td>€700</td>
            <td>6 heures</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- Culture and Events Section -->
  <section id="culture-events" class="container py-5" data-aos="fade-up">
    <h2 class="text-center mb-4">Culture et Événements</h2>
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
          <img src="/assets/images/services/somaroho.jfif" alt="Festival Sômarôho" class="img-fluid mb-3">
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
          <img src="service.jpg" alt="Culture Tsangan-Tsaina" class="img-fluid mb-3">
          <p class="text-justify">La culture Tsangan-Tsaina est un aspect fondamental de la vie locale, mélangeant musique, arts et traditions ancestrales.</p>
        </div>
      </div>
    </div>
  </section>
<?php include 'templates/footer.php'; ?>
