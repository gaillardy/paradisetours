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
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">&Agrave; propos</h1>
      </div>
    </div>
  </div>
</div>


<!-- Hero Section: Large title, services introduction -->
<section id="hero" class="container-fluid text-center py-5" style="background: #f0f4f8;">
    <div class="container" data-aos="fade-up">
      <h1 class="display-4">STATUS</h1>
        <p class="lead">
        NOSY BE PARADISE TOURS est une entreprise individuelle 
        créée en 2004 qui opère dans le secteur du tourisme et dont l’activité principale 
        est la prestation touristique spécialisée notamment dans 
        l’organisation des excursions non seulement à Nosy Be et aux nombreuses 
        petites iles autour mais également dans la partie Nord 
        de Madagascar jusque sur la coté grande terre de la Grande île.
        </p>
    </div>
</section>

  <!-- Additional Information Section -->
  <section id="additional-info" class="container py-5" data-aos="fade-up">
    <div class="row">
        <div class="col-md-12" >
            <h3 class="text-center">Nos renseignements</h3>
            <!-- Table 1: Service Details (5 columns) -->
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <caption class="text-center">renseignements</caption>
                    <tbody>
                        <tr>
                            <th>Raison social</th>
                            <td>NOSY BE PARADISE TOURS</td>
                        </tr>
                        <tr>
                            <th>Forme juridique</th>
                            <td>Entreprise individuelle</td>
                        </tr>
                        <tr>
                            <th>Enseigne Commercial</th>
                            <td>NOSY BE PARADISE TOURS</td>
                        </tr>
                        <tr>
                            <th>Activité</th>
                            <td>Organisation d’Excursions et Circuits Touristiques</td>
                        </tr>
                        <tr>
                            <th>Numéro Statistique</th>
                            <td>N° : 79904 71 2014 0 00300 du 14/07/2006</td>
                        </tr>
                        <tr>
                            <th>Numéro d’identification Fiscale</th>
                            <td>3000 444 434 du 24/06/2011</td>
                        </tr>
                        <tr>
                            <th>RCS</th>
                            <td>NB/2008/A/043</td>
                        </tr>
                        <tr>
                            <th>Autorisation MINTOUR</th>
                            <td>N° : 035-10/MTA/EDBM…du 20/07/2010</td>
                        </tr>
                        <tr>
                            <th>Catégorie Licence</th>
                            <td>Licence C</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
      <div class="col-md-12" >
        <h3 class="text-center">Identité du promoteur</h3>
        <p class="text-justify">
            Le premier Responsable est l’heureux créateur et qui en est le propriétaire Monsieur Narcisse TSIMPA. 
            C’est un jeune entrepreneur natif de Nosy Be et a fait actuellement 17 années d’expériences dans le domaine du tourisme en tant qu’organisateur d’excursions et circuits touristiques. Il constitue un atout considérable 
            dans l’évolution de l’entreprise et c’est lui qui inspire la vision et l’objectif à long terme de la société.
            En tant que jeune, il veut contribuer au changement positif dans sa communauté à Nosy Be. De ce fait, 
            il participe à ce changement à travers son engagement, premièrement avec la Jeune Chambre 
            International en tant que membre très actif et deuxièmement en apportant sa compétence et son leadership
            dans le développement touristique à Nosy Be et à en tant que membre au niveau du Conseil d’Administration 
            de l’Office Régional du Tourisme de Nosy Be.
        </p>
      </div>
    </div>
  </section>

<?php include 'templates/footer.php'; ?>
