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
      
      .text-center {
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
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Voyage incentive</h1>
      </div>
    </div>
  </div>
</div>


<!-- Hero Section: Large title, services introduction -->
<section id="hero" class="container-fluid text-center py-5" style="background: #f0f4f8;">
    <div class="container" data-aos="fade-up">
      <h1 class="display-4">Voyage incentive</h1>
        <p class="lead">
            Besoin de détente et de dépaysement tout en restant dans un cadre professionnel? Envie de renforcer le travail d’équipe? De se stimuler face aux challenges? 
            Envie de découvrir Madagascar ?  Nosy-be et son archipel? 

            Dite Adieu au séminaire ennuyeux: 
            réinventez l’incentive en vous offrant un voyage d’entreprise original. Que vous soyez sportif,
            aventurier ou simplement curieux,
            Nosy-Be Paradise Tours vous propose un accompagnement dans votre processus de 
            team building tout en restant dans le cadre du plaisir et du bon temps.
        </p>
    </div>
</section>

    <!-- Image Section -->
    <section class="ftco-section ftco-destination mt-5">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <h2 class="mb-4">Images</h2>
            </div>
        </div>
            <div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
                        <?php
                            for ($i=1; $i < 9 ; $i++) { 
                                ?>
                                    <div class="item">
                                        <div class="destination">
                                            <a href="/assets/images/services/v-<?= $i ?>.jpg" class="img d-flex justify-content-center align-items-center" style="background-image: url('/assets/images/services/v-<?= $i ?>.jpg');">
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

  <!-- Additional Information Section -->
    <section id="additional-info" class="container py-5 " data-aos="fade-up">
        <div class="row mb-4">
        <div class="col-md-12" >
            <h3 class="text-center">Pourquoi un Voyage incentive ?</h3>
            <p class="text-center">
                Tout le monde aime voyager. 
                C’est toujours une expérience gratifiante, qui permet de resserrer les liens entre collègues. 
                Ce sont des moments qui restent gravés dans les mémoires.

                Que votre incentive management soit dans le but de récompenser vos collègues particulièrement efficaces ou de dynamiser  votre personnel,
                La motivation passe au premier plan dans la qualité du travail
                fourni par les employés d’une entreprise. Le tourisme d’affaires doit avoir de l’impact à long terme dans l’esprit de vos employés.

                Le voyage incentive est une activité planifié par une entreprise comme prime ou gratification pour motiver les employés à atteindre leurs objectifs. 
                De cette manière, l’implication de l’employé est d’autant plus grande, créant une meilleure relation entre les personnes de l’entreprise.
            </p>
        </div>
        </div>

        <div class="row mb-4">
        <div class="col-md-12" >
            <h3 class="text-center">En quoi consistent les voyages incentives ?</h3>
            <p class="text-center">
                Ils regroupent les séjours et séminaires dont le but est de développer la cohésion des équipes et leur motivation, le team building 
                (challenges sportifs, culturels ou artistiques),
                les séjours de valorisation offerts aux équipes ou aux commerciaux méritants, destinés à les récompenser dans un cadre atypique
                (château, péniche, pays étranger, etc.) et les séjours offerts aux partenaires pour les remercier.

                Les entrepreneurs ont constaté que les voyages incentives sont des outils efficaces pour fidéliser les clients,
                motiver la force de vente, faire des team building et promouvoir l’entreprise. Cette initiative est devenue une 
                arme de marketing puissante.

                Si le voyage incentive est bien organisé, tout l’argent que l’entreprise investit dedans, lui sera bénéfique, 
                en améliorant les résultats finaux. Mais pour cela, l’événement se doit d’avoir une liste de caractéristiques :
            </p>
            <ul>
                <li>
                    L’objectif à atteindre doit être très clair et bien défini. 
                    Renforcer la motivation, 
                    la loyauté envers les employés, 
                    les fournisseurs ou les clients, créer de nouveaux marchés, 
                    renforcer le travail en équipe et améliorer l’image de l’entreprise.
                </li>
                <li>
                    Le voyage doit être bien organisé, avec des transports commodes, 
                    respect des horaires et hôtels de qualité. 
                    De plus, l’animation, l’organisation de jeux ou activités,
                    doivent viser à atteindre les objectifs donner par l’entreprise.
                </li>
                <li>
                    Profiter du voyage pour former les employés. 
                    Il y aura toujours des temps libre ou les participants ne sauront pas faire. 
                    Vous pouvez réaliser des activités, comme des jeux amusant. 
                    C’est ce que l’on connaît comme  <strong>gamification</strong> .
                </li>
                <li>
                    C’est le contexte idéal pour connaître ses collègues, 
                    à resserrer les relations entre les personnes. 
                    Ainsi, l’entreprise pourra être plus efficace et productive de manière naturelle.
                </li>
                <li>
                    Les clients qui participent connaîtront plus personnellement ces fournisseurs ou prestataires de service, 
                    ugmenter la fidélité et la complicité entre eux.
                </li>
            </ul>
        </div>
        </div>

        <div class="row">
            <div class="col-md-12" >
                <h3 class="text-center">NOS ACTIVITÉS :</h3>
                <p class="text-center">
                    Nous avons un large choix d’activités proposés suivant l’envie 
                    et le type de clientèle ou selon ce qu’il recherche. 
                    En effet ; Que vous soyez sportif, aventurier ou simplement curieux ; 
                    que vous recherchez du repos ou de la sensation forte, 
                    nous vous proposons un panel d’activité qui sont programmable selon la durée de votre séjour.
                </p>
                <ol>
                    <li>
                        <b>Activités Maritimes:</b>  Croisières en Catamaran / yacht, Pêche au gros, Balade en Pirogue, Rallye nautique.
                    </li>
                    <li>
                        <b>Activités Terrestres:</b> Plongée, Randonnée, Tour de l’île, visite des parcs, Golf initiation, Circuit Quad, balade en charrette.
                    </li>
                    <li>
                        <b>Activité aérienne: </b>Balade en hélicoptère.
                    </li>
                    <li>
                        <b>Ambiance:</b> Beach party, Soirée à thème, Barbecue, Soirée DJ, 
                        Percussion africaine, Activité musicale 
                        (karaoké, instruments malgaches, Folklor), 
                        Après-midi pétanque, Casino,
                    </li>
                    <li>
                        <b>Atelier:</b> Battle de cuisine, faites vos cocktails, fabrication de panier artisanal, peinture sur panier;
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" >
                <h3 class="text-center"> À la demande:</h3>
                <p class="text-center">
                    rivatisation de lieu, Service VIP, Régime alimentaire,
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" >
                <h3 class="text-center">Qualité de nos services:</h3>
                <p class="text-center">
                    Nous avons pour mission d’assurer un service à la hauteur de votre demande et votre attente. 
                    L’idée est d’aider votre entreprise à être plus efficace et productive de manière naturelle. 
                    en resserrant  les relations entre les personnes.

                    Nous pouvons assurer jusqu’à 150 pax pour un incentive.
                </p>
            </div>
        </div>

    </section>
        <section class="services-section-incl">
            <div class="row">
                <div class="col-sm-6">
                    <div class="service-list" style="width: 100%;">
                        <h3>Services Inclus </h3>
                        <ul>
                            <li>Eau minéral</li>
                            <li>transport sur place</li>
                            <li>hébergement</li>
                            <li>Pensions complètes</li>
                            <li>droits de visite</li>
                        </ul>
                        
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="service-list">
                        <h3>Services Non Inclus</h3>
                        <ul>
                            <li>Boissons</li>
                            <li>Les extras à caractère personnel</li>
                            <li>Pourboires</li>
                            <li>Activités optionnelles</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
<?php include 'templates/footer.php'; ?>
