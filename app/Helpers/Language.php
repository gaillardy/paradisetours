<?php

namespace App\Helpers;

class Language
{
    private static $translations = [
        'en' => [
            'english'   => 'English',
            'jout'      => 'DAY',
            'inclus'    => 'Services Included',
            'non_inclus'=> 'Services Not Included',
            '79'        => "Mitsio and RADAMA catamaran",
            '80'        => "Enter a magical and mysterious world.",
            '81'        => "Whale and Dolphin watching",
            '82'        => "Listen to the power of nature.",
            '83'        => "Big game fishing",
            '84'        => "Eine entspannende und einzigartige Erfahrung",
            '85'        => "Catamaran Cruise",
            '86'        => "Relive history through authentic places.",
            '87'        => "Excursions on land",
            '88'        => "TOUR DIA LAVA THE LOKOBE NATURE RESERVE + NOSY KOMBA",
            '89'        => "Experience adventure on the endless dunes.",
            '90'        => "Perfume tours: Tour of the island",
            '91'        => "Discover vibrant, modern architecture.",
            '92'        => "ARRIVAL IN NOSY BE",
            '93'        => "Welcome at Fascene International Airport
                            Installation and transfer to the hotel of the clients in a spacious air-conditioned car with a guide.
                            Arrival at the hotel. Rest and relax.
                            Dinner and overnight at the hotel in Nosy Be.",
            '94'        => "Visit: NOSY KOMBA and TANIKELY",
            '95'        => "Nosy Komba is a volcanic island opposite Nosy Be. The village of Nosy Komba is decorated with its embroidery and wooden craft market. Nosy Komba is the sanctuary of macaque lemurs, Boa constrictor snakes, chameleons and various turtles.
                            Nosy Tanikely is located in the northern part of Madagascar; it is an amazing marine reserve with a white beach and a crystal clear sea surrounded by a coral reef. Tanikely is an exceptional destination for snorkeling and diving. At the top of this peak of the island, a lighthouse built in 1908 offers an exceptional panoramic view of Nosy-Be, NOSY-KOMBA and Madagascar.
                            Visits: Nosy Komba or the lemur island, Nosy Tanikely or the Tanikely Marine Reserve Duration: One day Departure: Port of Hell-ville Nosy Be
                            Description of the tours
                            Number of people: Customers, Guide, Skipper, Cook Type of boat: Speed ​​boat, 22 Life jackets available Lunch: Picnic on the beach
                            Departure from Ambatoloaka beach at 7:30 am, direction Nosy Komba for a short 20-minute speed boat ride. On schedule, visit the craft village with its embroidery and wooden craft market. After that, visit the mini park in which you will appreciate the endemic species of the island such as the famous macaque lemurs, Boa constrictor snakes, chameleons and various land turtles. Then, from Nosy Komba direction Nosy Tanikely for a 15-minute journey. Tanikely is an amazing marine reserve with a white sand beach and crystal clear sea surrounded by a coral reef. Lemurs, chameleons and bats can be seen in its forest. In addition, the marine reserve park is also full of diverse marine life such as sea turtles, starfish and clownfish. It is an ideal destination for lovers of swimming, sunbathing, relaxing and especially snorkeling. Finally at noon, typical and hearty dishes will be served with a fascinating view of the ocean. Return around 4:00 p.m.",
            '96'        => "<h5>Visit: IRANJA ISLAND</h5>
                        <p>

                        Departure from the hotel at 07:00, direction IRANJA ISLAND, from Ambatoloaka beach by speed boat, the journey lasts 1h15.
                        Once arrived on IRANJA island, you will be greeted with a breathtaking landscape. A total immersion in nature will enhance your day. To start the day, 2 beautiful islands await you, connected by a 2 km long stretch of white sand. A white and immaculate beach is available to you for all your moments of relaxation, where you can sunbathe, swim and take a short walk to discover some varieties of ferns, all on a turquoise blue sea.
                        At 00:30, a lovely lunch of seafood, dishes prepared with coconut and seasonal fruits will be served in the shade of the coconut trees.
                        Around 4:00 p.m., return to the hotel.
                        Dinner and overnight at the Hotel in Nosy Be.

                        </p>",
            '97'        => "<h5>Visit: ISLAND TOUR</h5>
                        <p>
                        Departure at 8:00 am, direction HELL VILLE CITY. The goal is to make you discover Nosy-Be through the culture of its people the Sakalava, its history and also its sacred places like the sacred tree and its 12 lakes.
                        In the city center, visit the big market and Hellville where you will discover not only all the spices and varieties of fruits characteristic of the local cuisine but also the vestiges and history left by the colonial era. Then a pleasant lunch will be offered to you in a restaurant on the beach of Andilana with a turquoise sea view which welcomes you for your moments of relaxation at noon.
                        Then direction Mont Passot, the second highest peak of Nosy Be offering a 360 ° panoramic view not only of Nosy Be but also of the small neighboring islands. This is the best place to see the sunset. The wonderful walk ends with this beautiful sunset spectacle.
                        Dinner and night at the Hotel in Nosy Be.
                        </p>",
            '98'        => "<b>RELAX</b>
                        <p>
                        Relax at the hotel.
                        Guests are free to choose an excursion or shopping which will be at an additional cost.
                        Dinner and overnight at the Hotel in Nosy Be.
                        </p>",
            '99'        => "DEPARTURE DAY",
            '100'        => "<b>RELAX</b>
                        <p>
                        Transfer by spacious car from your hotel to Fascene International Airport with one of our staff accompanying you for check-in.

                        <br>
                        HAVE A GOOD FLIGHT
                        VELOMA, MISAOTRA…

                        </p>",
            '101'        => "<li>Transfer from the hotel to the port: arrival and departure</li>
                            <li>Accommodation: Hotel in Nosy Be</li>
                            <li>Spacious and air-conditioned 4×4</li>
                            <li>All breakfasts</li>
                            <li>Lunches during excursions</li>
                            <li>Three co-living</li>
                            <li>Mineral water every day</li>
                            <li>Guide</li>
                            <li>Entrance fee</li>",
            '102'        => "<li>Lunch: Day 4 if guests stay at the hotel</li>
                            <li>Dinner: Day 4 if guest stays at the hotel</li>
                            <li>Drinks</li>
                            <li>Extra staff</li>",
            '103'        => "",
            '104'        => "",
            '57'        => "Explore Madagascar with the RN7 Tour: A journey to the heart of the South! Dive into an unforgettable adventure along the famous Route Nationale 7. ",
            '58'        => "Escape to Morondava",
            '59'        => "Escape to Morondava: where nature tells its secrets! Discover Morondava, a land of adventure and magic.",
            '60'        => "Escape to Morondava: long stay",
            '61'        => "Nosy Be Excursions",
            '62'        => "Excursions Nosy Be and surrounding islands",
            '63'        => "Nosy Be is known for its seaside tourism thanks to its heavenly beaches, its natural parks as well as a wide range of activities, enough to occupy its visitors. Our excursions are however organized and designed in such a way as to make our customers enjoy the authentic Nosy Be through 3 points: the Seaside, Nature, Culture.",
            '64'        => "Seaside excursions",
            '65'        => "Russian Bay",
            '66'        => "Explore crystal clear waters and golden sands.",
            '67'        => "Admire the spectacular scenery.",
            '68'        => " Turtle Island",
            '69'        => "Immerse yourself in the heart of the wilderness.",
            '70'        => "The Lokobe reserve",
            '71'        => "Experience adventure on the endless dunes.",
            '72'        => "Nosy Sakatia, Paradise Islands",
            '73'        => "Breathtaking sunsets.",
            '74'        => "Nosy Mitsio with Speedboat",
            '75'        => "Enter a magical and mysterious world.",
            '76'        => "Mitsio catamaran",
            '77'        => "Take an unforgettable catamaran trip to the Mitsio Islands",
            '78'        => "The Radama archipelago by catamaran ",
            'nuit'      => 'nights',
            'jour'      => 'days',
            '46'        => 'Follow us on social networks.',
            '47'        => 'information',
            '48'        => 'About us',
            '49'        => 'Subscribe',
            '50'        => "Please enter a valid email address.",
            '51'        => 'Cancel',
            '52'        => 'Send',
            '53'        => 'Airline companies',
            '54'        => 'Any questions ?',
            '55'        => 'North Mada',
            '56'        => 'RN7 circuit',
            '41'        => 'menu',
            '42'        => 'Excursions by sea',
            '43'        => 'Excursions on land',
            '44'        => 'Northern circuits',
            '45'        => 'RN7 circuits',
            '39'       => "Our excursions",
            '38'       => "Travelling can be both exciting and stressful, especially when it's to a new destination.",
            '37'       => "As well as organising excursions, we also provide land and sea transfers.",
            '36'       => "For maximum discovery of our magnificent culture, we offer a range of packages.",
            '35'    => "Nosy Be is known for its seaside tourism, and our excursions are perfectly organised.",
            'key16' => 'Wedding trip',
            'key17' => "An idyllic setting and personalised service to celebrate the most beautiful things on earth",
            'key18' => 'Wedding and honeymoon',
            'key19' => 'Travel',
            'key20' => 'incentive',
            'key21' => "It's a great experience that helps to strengthen links between colleagues. ",
            'key22' => 'A stay at the beach',
            'key23' => 'Ideal for lovers, more privacy while enjoying the beauty of the beaches',
            'key24' => '4 days 3 nights',
            'key25' => 'Who we are',
            'key26' => "Founded in 2004, NOSY BE PARADISE TOURS is an individual company 
            operating in the tourism sector. Its main activity is 
            specialising in the organisation of excursions to Nosy-Be and the surrounding islands. 
            not only on Nosy-Be and the surrounding small islands 
			but also in the northern part of Madagascar.",
            'key27' => 'WEEKEND AT NOSY IRANJA',
            'key28' => "Witness the most beautiful moment of sea turtle egg hatching during a weekend in Nosy Iranja.",
            'key29' => 'HELICOT TOUR OF THE ISLAND',
            'key30' => "Get up high and you can see even more. A breathtaking and unique landscape: beaches, 7 lakes,",
            'key31' => 'KITE SURFING',
            'key32' => "It's a holiday designed for all types of customers interested in board sports, whether beginners, amateurs or professionals.",
            'key33' => 'VIRGIN BEACH STAY',
            'key34' => 'Visits:Ideal for lovers,',
            'home'      => 'home',
            'excursion' => 'excursions',
            'contact'   => 'Contacts',
            'circuit'   => 'Circuits of Madagascar',
            'circuit-2' => 'circuits',
            'service'   => 'Services',
            'guide'     => 'Guide',
            'decouvrir'=> "Discover",
            'read'      => 'read more',
            'package'   => 'Our packages',
            'key1'      => 'Nature',
            'key2'      => 'faune et flore',
            'key3'      => 'Green tourism',
            'key4'      => 'culture – history',
            'key5'      => 'Discovery',
            'key6'      => 'EXCURSION – SAFARI',
            'key7'      => 'Savage',
            'key8'      => 'Intensive trip',
            'key9'      => 'Our activities',
            'key10'     => 'Big game fishing',
            'key11'     => "Whether you're passionate about sport fishing or simply want to discover this discipline, you'll find it here.",
            'key12'     => 'Live the experience',
            'key13'     => 'Catamaran Cruise',
            'key14'     => 'The Mitsio Archipelago and the Radama Islands with Paradise tours',
            'key15'     => 'With or without diving',
            // page home
            
        ],



        'fr' => [
            'français'  =>'fr',
            'inclus'    => 'Services Inclus',
            'non_inclus'=> 'Services Non Inclus',
            '79'        => "catamaran Mitsio et RADAMA",
            '80'        => "Entrez dans un monde magique et mystérieux.",
            '81'        => "Observation Baleine et Dauphin",
            '82'        => "Écoutez la puissance de la nature.",
            '83'        => "Pêche au gros",
            '84'        => "Une expérience relaxante et unique.",
            '85'        => "Croisière en Catamaran",
            '86'        => "Revivez l'histoire à travers des lieux authentiques.",
            '87'        => "Excursions côté terre",
            '88'        => "TOUR DIA LAVA LA RESERVE NATURELLE DE LOKOBE + NOSY KOMBA",
            '89'        => "Vivez l'aventure sur les dunes infinies.",
            '90'        => "Perfume tours : Tour de l’île",
            '91'        => "Découvrez une architecture moderne et vibrante.",
            '92'        => "ARRIVÉE À NOSY BE",
            '93'        => "Accueil à l'Aéroport International Fascene
                Installation et transfert à l'hôtel des clients dans une voiture spacieuse climatisée avec un guide.
                Arrivée à l'hôtel. Reposez-vous et détendez-vous.
                Dîner et nuit à l’hôtel à Nosy Be.",
            '94'        => " Visite :  NOSY KOMBA et TANIKELY",
            '95'        => "
                            Nosy Komba est une île volcanique face à Nosy Be. Le village de Nosy Komba est agrémenté de son marché de broderies et d'artisanat en bois. Nosy Komba est le sanctuaire des lémuriens macaques, des serpents Boa constrictor, des caméléons et diverses tortues.
                            Nosy Tanikely est située dans la partie nord de Madagascar ; c'est une réserve marine étonnante avec une plage blanche et une mer cristalline entourée d'un récif de corail. Tanikely est une destination exceptionnelle pour le snorkeling et la plongée. Au sommet de ce sommet de l'île, un phare construit en 1908 offre une vue panoramique exceptionnelle sur Nosy-Be, NOSY-KOMBA et Madagascar.
                            Visites : Nosy Komba ou l'île aux lémuriens, Nosy Tanikely ou la Réserve Marine de Tanikely Durée : Une journée Départ : Port de Hell-ville Nosy Be
                            Description des circuits
                            Nombre de personnes : Clients, Guide, Skipper, Cuisinier Type de bateau : Bateau rapide, 22 Gilets de sauvetage à disposition Déjeuner : Pique-nique sur la plage
                            Départ de la plage d'Ambatoloaka à 07h30, direction Nosy Komba pour une petite balade en speed boat de 20 minutes. A l'horaire, visitez le village artisanal avec son marché de broderies et d'artisanat en bois. Après cela, visite du mini parc dans lequel vous apprécierez les espèces endémiques de l'île comme les célèbres lémuriens macaques, les serpents Boa constrictor, les caméléons et diverses tortues terrestres. Ensuite, de Nosy Komba direction Nosy Tanikely pour un trajet de 15 minutes. Tanikely est une étonnante réserve marine avec une plage de sable blanc et une mer cristalline entourée d'un récif de corail. On peut apercevoir dans sa forêt des lémuriens, des caméléons et des chauves-souris. De plus, le parc de la réserve marine regorge également d'une vie marine diversifiée telle que des tortues de mer, des étoiles de mer et des poissons-clowns. C'est une destination idéale pour les amateurs de baignade, de bronzage, de farniente et notamment de snorkeling.
                            Enfin à midi, des plats typiques et copieux vous seront servis avec une vue fascinante sur l'océan. Retour vers 16h00.
                            ",
            '96'        => "<h5>Visite : ÎLE D'IRANJA</h5>
                            <p>
                                
                                Départ de l'hôtel à 07h00, direction IRANJA ISLAND, depuis la plage d'Ambatoloaka en speed boat, le trajet dure 1h15.
                                Une fois arrivé sur l'île IRANJA, vous serez accueilli avec un paysage à couper le souffle. Une immersion totale dans la nature embellira votre journée. Pour commencer la journée, 2 belles îles vous attendent, reliées par une étendue de sable blanc de 2 km de long. Une plage blanche et immaculée s'offre à vous pour tous vos moments de détente, où vous pourrez faire bronzette, baignade et petite promenade à la découverte de quelques variétés de fougères, le tout sur une mer bleu turquoise.
                                A 00h30, un joli déjeuner composé de fruits de mer, de plats préparés à base de noix de coco et de fruits de saison vous sera servi à l'ombre des cocotiers.
                                Vers 16h00, retour à l'hôtel.
                                Dîner et nuit à l’Hôtel à Nosy Be.

                            </p>",
            '97'        => "<h5>Visite : TOUR DE L'ÎLE</h5>
                        <p>
                            Départ à 8h00, direction HELL VILLE CITY. Le but est de vous faire découvrir Nosy-Be à travers la culture de son peuple « les Sakalava », son histoire et aussi ses lieux sacrés comme « l'arbre sacré et ses 12 lacs ».
                            En centre-ville, visitez le grand marché et Hellville où vous découvrirez non seulement toutes les épices et variétés de fruits caractéristiques de la cuisine locale mais aussi les vestiges et l'histoire laissés par l'époque coloniale. Ensuite un agréable déjeuner vous sera proposé dans un restaurant sur la plage d'Andilana avec une vue mer turquoise qui vous accueille pour vos moments de détente du midi.
                            Ensuite direction le Mont Passot, le deuxième plus haut sommet de Nosy Be offrant une vue panoramique à 360° non seulement sur Nosy Be mais aussi sur les petites îles voisines. C'est le meilleur endroit pour voir le coucher du soleil. La merveilleuse ballade s'achève avec ce joli spectacle de coucher de soleil.
                            Dîner et nuit à l’Hôtel à Nosy Be.
                        </p>",
            '98'        => "<b>SE DÉTENDRE</b>
                        <p>
                            Détendez-vous à l'hôtel.
                            Les clients sont libres de choisir une excursion ou du shopping qui sera en supplément.
                            Dîner et nuit à l’Hôtel à Nosy Be.
                        </p>",
            '99'        => "JOUR DE DÉPART",
            '100'        => "<b>SE DÉTENDRE</b>
                            <p>
                                Transfert en voiture spacieuse de votre hôtel à l'aéroport international de Fascene avec un de nos collaborateurs vous accompagnant pour l'enregistrement.
                                
                                <br>
                                BON VOL
                                VELOMA, MISAOTRA…

                            </p>",
            '101'        => "<li>Transfert de l’hôtel au port: arrivée et départ</li>
                            <li>Hébergement : Hôtel à Nosy Be</li>
                            <li>4×4 spacieux et climatisé</li>
                            <li>Tous les petits déjeuners</li>
                            <li>Déjeuners lors des excursions</li>
                            <li>Trois covivent</li>
                            <li>Eau minérale de tous les jours</li>
                            <li>Guide</li>
                            <li>Droit d'entrée</li>",
            '102'        => "<li>Déjeuner : jour 4 si les clients restent à l'hôtel</li>
                            <li>Dîner : 4 jours si le client séjourne à l'hôtel</li>
                            <li>Boissons</li>
                            <li>Personnel supplémentaire</li>",
            '103'        => "",
            '104'        => "",
            '57'        => "Explorez Madagascar avec le Circuit RN7 : Un voyage au cœur du Sud ! Plongez dans une aventure inoubliable à travers la célèbre Route Nationale 7. ",
            '58'        => "Évasion à Morondava",
            '59'        => "Évasion à Morondava : Là où la nature raconte ses secrets ! Partez à la découverte de Morondava, terre d'aventure et de magie.",
            '60'        => "Évasion à Morondava : long séjour",
            '61'        => "Excursions Nosy be",
            '62'        => "Excursions Nosy be et les île aux alentours",
            '63'        => " Nosy Be est connu pour un tourisme balnéaire grâce à ses plages paradisiaques, ses parcs naturels ainsi qu’une large gamme d’activité, de quoi occuper ses visiteurs. Nos excursions sont toutefois organisées et conçues de manière à faire profiter à nos clients le Nosy Be authentique à travers 3 points: le Balnéaire, la Nature, la Culture.",
            '64'        => "Excursions côté mer",
            '65'        => "Baie des Russes",
            '66'        => "Explorez les eaux cristallines et le sable doré.",
            '67'        => "Admirez des paysages spectaculaires.",
            '68'        => " Ile au tortue",
            '69'        => "Une immersion au cœur de la nature sauvage.",
            '70'        => "La réserve de Lokobe",
            '71'        => "Vivez l'aventure sur les dunes infinies.",
            '72'        => "Nosy Sakatia, Îles Paradisiaques",
            '73'        => "Des couchers de soleil à couper le souffle.",
            '74'        => "Nosy Mitsio avec Bateau rapide",
            '75'        => "Entrez dans un monde magique et mystérieux.",
            '76'        => "catamaran Mitsio",
            '77'        => "Partez pour une excursion inoubliable en catamaran aux îles Mitsio",
            '78'        => "L'archipel de Radama en catamaran ",
            'nuit'      => 'nuits',
            'jour'      => 'jours',
            '46'        => "Suivez nous sur les résaux sociaux.",
            '47'        => 'Information',
            '48'        => 'À propos',
            '49'        => "S'abonner",
            '50'        => "Veuillez entrer un email valide.",
            '51'        => "Annuler",
            '52'        => 'Envoyer',
            '53'        => "Compagnies aériennes",
            '54'        => 'Des questions ?',
            '55'        => 'North Mada',
            '56'        => 'Circuit RN7',
            '41'        => 'menu',
            '42'        => 'Excursions mer',
            '43'        => 'Excursions terre',
            '44'        => 'Circuits nord',
            '45'        => "Circuits RN7",
            '39'        => "Nos excursions",
            '38'        => "Voyager peut-être excitant et stressant à la foi, surtout lorsqu’il s’agit d’une nouvelle destination.",
            '37'        => "À part organisateur d’excursions, est aussi prestataire de transferts  terrestres et marins.",
            '36'        => "Pour un maximum de découverte dans notre magnifique culture, nous vous proposons différents packages.",
            '35'        => "Nosy Be est connu pour un tourisme balnéaire, nos excursions sont parfaitement organisées.",
            'home'      => 'Accueil',
            'excursion' => 'excursions',
            'circuit'   => 'Circuits de Madagascar',
            'contact'   =>  'Contact',
            'service'   => 'Services',
            'guide'     => 'Guide',
            'circuit-2' => 'circuits',
            'read'     => 'En savoir plus',
            'package'  => 'Nos packages',
            'key1'     => 'Nature',
            'key2'     => 'faune et flore',
            'key3'     => 'Tourisme vert',
            'key4'     => 'culture – histoire',
            'key5'     => 'Découverte',
            'key6'     => 'EXCURSION – SAFARI',
            'key7'     => 'Sauvage',
            'key8'     => 'Intensive trip',
            'key9'     => 'Nos activités',
            'key10'    => 'Pêche aux gros',
            'key11'    => 'Passionné de pêche sportive ou simplement envie de découvrir cette discipline.',
            'key12'    => "Vivez l'expérience",
            'key13'    => "Croisière en Catamaran",
            'decouvrir'=> "Découvrir",
            'key14'    => "L’Archipel des Mitsio et les îles Radama avec Paradise tours",
            'key15'    => "Avec ou sans plongée",
            'key16'    => "Voyage de noce",
            'key17'    => 'Un cadre idyllique et un service personnalisé pour fêter ce qu’il y a de plus beau sur terre',
            'key18'    => "Mariage et lune de miel",
            'key19'    => "Voyage",
            'key20'    => "incentive",
            'key21'    => "C’est une belle expérience qui permet de resserrer les liens entre collègue .",
            'key22'    => "Séjour à la plage",
            'key23'    => "Idéales pour les amoureux , plus d’intimité en savourant  la beauté des plages.",
            'key24'    => "4 Jours 3 nuits",
            'key25'    => "Qui sommes nous ?",

            'key26'    => "Créée en 2004, NOSY BE PARADISE TOURS est une entreprise individuelle 
            qui opère dans le secteur du tourisme. Elle a pour activité 
            principale la prestation de services touristiques spécialisée dans l’organisation des excursions 
            non seulement sur Nosy-Be et les petites îles environnantes 
			mais également dans la partie Nord de Madagascar Grande île.",

            'key27'    => "WEEK-END À NOSY IRANJA",
            'key28'    => "Témoigné le plus beau moment d’éclosion d’œuf des tortues de mer pendant un week-end à Nosy Iranja.",
            'key29'    => "TOUR DE L’ÎLE EN HELICOT",
            'key30'    => "Prendre de la hauteur permet de voir encore plus. Un paysage époustouflant et unique : plages, 7 lacs,",
            'key31'    => "KITE SURF",

            'key32'    => "C’est un séjour conçu pour tous types de clients qui s’intéresse au sport 			
                        de glisse que ce soit débutants amateurs , professionnels.",

            'key33'    => "SEJOUR PLAGE VIERGE",
            'key34'    => "Visites:Idéales pour les amoureux , plus d’intimité en savourant la nature et la beauté des plages vierges.",

            
        ],

        'it' => [
            'italiano'  => 'italiano',
            'inclus'    => 'Servizi inclusi',
            'non_inclus'=> 'Servizi non inclusi',
            '79'        => "catamarano Mitsio e RADAMA",
            '80'        => "Entrate in un mondo magico e misterioso.",
            '81'        => "Osservazione di balene e delfini",
            '82'        => "Ascoltate la forza della natura.",
            '83'        => "Pesca di grossa taglia",
            '84'        => "Un'esperienza rilassante e unica",
            '85'        => "Crociera in catamarano",
            '86'        => "Rivivere la storia attraverso luoghi autentici",
            '87'        => "Escursioni a terra",
            '88'        => "TOUR DIA LAVA LA RISERVA NATURALE DI LOKOBE + NOSY KOMBA",
            '89'        => "Vivete l'avventura sulle dune infinite.",
            '90'        => "Tour dei profumi: giro dell'isola",
            '91'        => "Scoprite l'architettura moderna e vivace.",
            '92'        => "ARRIVO A NOSY BE",
            '93'        => "Benvenuti all'aeroporto internazionale di Fascene
                            Sistemazione e trasferimento all'hotel del cliente in una spaziosa auto climatizzata con guida.
                            Arrivo in hotel. Riposati e rilassati.
                            Cena e pernottamento in hotel a Nosy Be.",
            '94'        => "Visita: NOSY KOMBA e TANIKELY",
            '95'        => "Nosy Komba è un'isola vulcanica di fronte a Nosy Be. Il villaggio di Nosy Komba è impreziosito dal suo mercato di ricami e di artigianato in legno. Nosy Komba è il santuario dei lemuri macachi, dei serpenti boa constrictor, dei camaleonti e di varie tartarughe.
                                Nosy Tanikely si trova nella parte settentrionale del Madagascar; Si tratta di una meravigliosa riserva marina con una spiaggia bianca e un mare cristallino, circondata da una barriera corallina. Tanikely è una destinazione eccezionale per lo snorkeling e le immersioni. Sulla cima di questa vetta dell'isola, un faro costruito nel 1908 offre una vista panoramica eccezionale su Nosy-Be, NOSY-KOMBA e il Madagascar.
                                Visite: Nosy Komba o l'isola dei lemuri, Nosy Tanikely o la riserva marina di Tanikely Durata: un giorno Partenza: porto di Hell-ville Nosy Be
                                Descrizione dei circuiti
                                Numero di persone: Clienti, Guida, Skipper, Cuoco Tipo di barca: Motoscafo, 22 Giubbotti di salvataggio disponibili Pranzo: Picnic sulla spiaggia
                                Partenza dalla spiaggia di Ambatoloaka alle 7:30 del mattino, direzione Nosy Komba per un breve tragitto in motoscafo di 20 minuti. Come da programma, visita al villaggio artigianale con il suo mercato di ricami e oggetti artigianali in legno. Successivamente, visitate il mini parco in cui potrete ammirare le specie endemiche dell'isola, come i famosi lemuri macaco, i serpenti boa constrictor, i camaleonti e varie tartarughe terrestri. Poi, da Nosy Komba dirigetevi verso Nosy Tanikely per un viaggio di 15 minuti. Tanikely è una meravigliosa riserva marina con una spiaggia di sabbia bianca e un mare cristallino circondato da una barriera corallina. Nella sua foresta si possono osservare lemuri, camaleonti e pipistrelli. Inoltre, il parco della riserva marina è ricco di una fauna marina molto varia, come tartarughe marine, stelle marine e pesci pagliaccio. È una meta ideale per gli amanti del nuoto, della tintarella, del relax e soprattutto dello snorkeling.
                                Infine, a mezzogiorno, vi saranno serviti piatti tipici e sostanziosi, con una vista affascinante sull'oceano. Rientro verso le 16:00.",
            '96'        => "<h5>Visita: ISOLA DI IRANJA</h5>
                            <p>

                            Partenza dall'hotel alle 07:00, direzione IRANJA ISLAND, dalla spiaggia di Ambatoloaka in motoscafo, il viaggio dura 1h15.
                            Una volta arrivati ​​all'isola di IRANJA, sarete accolti da un paesaggio mozzafiato. Un'immersione totale nella natura allieterà la vostra giornata. Per iniziare la giornata vi aspettano 2 bellissime isole, collegate da una distesa di sabbia bianca lunga 2 km. Per i vostri momenti di relax vi aspetta una spiaggia bianca e immacolata, dove potrete prendere il sole, nuotare e fare una breve passeggiata alla scoperta di diverse varietà di felci, il tutto su un mare blu turchese.
                            Alle 00:30 verrà servito un delizioso pranzo a base di frutti di mare, piatti a base di cocco e frutta di stagione all'ombra delle palme da cocco.
                            Verso le 16:00, rientro in hotel.
                            Cena e pernottamento in Hotel a Nosy Be.

                            </p>",
            '97'        => "<h5>Visita: TOUR DELL'ISOLA</h5>
                            <p>
                            Partenza alle ore 8:00, direzione HELL VILLE CITY. L'obiettivo è quello di farvi scoprire Nosy-Be attraverso la cultura del suo popolo 'i Sakalava', la sua storia e anche i suoi luoghi sacri come l'albero sacro e i suoi 12 laghi.
                            Nel centro della città, visitate il grande mercato e Hellville, dove scoprirete non solo tutte le spezie e le varietà di frutta caratteristiche della cucina locale, ma anche le vestigia e la storia lasciate dall'epoca coloniale. Successivamente vi verrà offerto un piacevole pranzo in un ristorante sulla spiaggia di Andilana con vista sul mare turchese, che vi accoglierà per i vostri momenti di relax a mezzogiorno.
                            Poi dirigetevi verso il Mont Passot, la seconda vetta più alta di Nosy Be, che offre una vista panoramica a 360° non solo di Nosy Be ma anche delle piccole isole vicine. Questo è il posto migliore per ammirare il tramonto. La meravigliosa passeggiata si conclude con questo incantevole spettacolo del tramonto.
                            Cena e pernottamento in Hotel a Nosy Be.
                            </p>",
            '98'        => "<b>RILASSATI</b>
                        <p>
                        Rilassatevi in ​​hotel.
                        Gli ospiti sono liberi di scegliere un'escursione o di fare shopping, il che comporterà un costo aggiuntivo.
                        Cena e pernottamento in Hotel a Nosy Be.
                        </p>",
            '99'        => "GIORNO DELLA PARTENZA",
            '100'        => "<b>RILASSATI</b>
                        <p>
                        Trasferimento in auto spaziosa dal vostro hotel all'aeroporto internazionale di Fascene con un membro del nostro staff che vi accompagnerà per il check-in.

                        <br>
                        BUON VOLO
                        VELOMA, MISAOTRA…

                        </p>",
            '101'        => "<li>Trasferimento dall'hotel al porto: arrivo e partenza</li>
                            <li>Alloggio: Hotel a Nosy Be</li>
                            <li>Spazioso 4×4 con aria condizionata</li>
                            <li>Tutte le colazioni</li>
                            <li>Pranzi durante le escursioni</li>
                            <li>Tre coesistono</li>
                            <li>Acqua minerale quotidiana</li>
                            <li>Guida</li>
                            <li>Quota di iscrizione</li>",
            '102'        => "<li>Pranzo: Giorno 4 se gli ospiti soggiornano in hotel</li>
                            <li>Cena: 4 giorni se il cliente soggiorna in hotel</li>
                            <li>Bevande</li>
                            <li>Personale aggiuntivo</li>",
            '103'        => "",
            '104'        => "",
            '57'        => "Esplorate il Madagascar con il tour RN7: un viaggio nel cuore del Sud! Immergetevi in un'avventura indimenticabile lungo la famosa Route Nationale 7. ",
            '58'        => "Fuga a Morondava",
            '59'        => "Fuga a Morondava: dove la natura racconta i suoi segreti! Scoprite Morondava, una terra di avventura e magia.",
            '60'        => "Fuga a Morondava: soggiorno lungo",
            '61'        => "Escursioni a Nosy Be",
            '62'        => "Escursioni Nosy Be e isole circostanti",
            '63'        => "Nosy Be è nota per il turismo balneare, grazie alle sue spiagge paradisiache, ai suoi parchi naturali e alla vasta gamma di attività che tengono occupati i suoi visitatori. Le nostre escursioni sono comunque organizzate e pensate in modo tale da permettere ai nostri clienti di vivere l'autentica Nosy Be attraverso 3 punti: Mare, Natura, Cultura.",
            '64'        => "Escursioni al mare",
            '65'        => "Baia russa",
            '66'        => "Esplora acque cristalline e sabbie dorate.",
            '67'        => "Ammirate il paesaggio spettacolare.",
            '68'        => " Isola delle tartarughe",
            '69'        => "Immergetevi nel cuore della natura selvaggia.",
            '70'        => "La riserva di Lokobe",
            '71'        => "Vivete l'avventura sulle dune infinite.",
            '72'        => "Nosy Sakatia, Isole Paradiso",
            '73'        => "Tramonti mozzafiato.",
            '74'        => "Nosy Mitsio con motoscafo",
            '75'        => "Entrate in un mondo magico e misterioso.",
            '76'        => "catamarano Mitsio",
            '77'        => "Un'indimenticabile gita in catamarano alle isole Mitsio",
            '78'        => "L'arcipelago di Radama in catamarano ",
            'nuit'      => 'notti',
            'jour'      => 'giorni',
            '46'        => 'Seguiteci sui social network.',
            '47'        => 'Informazioni',
            '48'        => 'Chi siamo',
            '49'        => 'Abbonarsi',
            '50'        => "Inserire un indirizzo e-mail valido.",
            '51'        => 'Annullamento',
            '52'        => 'Inviare',
            '53'        => 'Compagnie aeree',
            '54'        => 'Ci sono domande ?',
            '55'        => 'Mada del Nord',
            '56'        => 'Circuito RN7',
            'key8'      => "Viaggio d'incentiviazione",
            'key2'      => 'fauna e flora',
            'key3'      => 'Turismo verde',
            'key4'      => 'cultura – storia',
            'key5'      => 'Scoperta',
            'key6'      => 'ESCURSIONE – SAFARI',
            'key7'      => 'attaccare',
            '41'        => 'menu',
            '42'        => 'Escursioni in mare',
            '43'        => 'Escursioni a terra',
            '44'        => 'circuito nord',
            '45'        => 'Circuito RN7',
            '39'        => "Le nostre escursioni",
            '38'        => "Viaggiare può essere sia emozionante che stressante, soprattutto quando si tratta di una nuova destinazione.",
            '37'        => "Oltre all'organizzazione di escursioni, forniamo anche trasferimenti via terra e via mare.",
            '36'    => "Per scoprire al meglio la nostra magnifica cultura, offriamo una serie di pacchetti.",
            '35'    => "Nosy Be è nota per il suo turismo balneare e le nostre escursioni sono perfettamente organizzate.",
            'key16' => 'Luna di miele',
            'key17' => 'Un ambiente idilliaco e un servizio personalizzato per celebrare le cose più belle della terra',
            'key18' => 'Matrimonio e viaggio di nozze',
            'key19' => 'Viaggio',
            'key20' => 'incentivo',
            'key21' => 'È una grande esperienza che aiuta a rafforzare i legami tra colleghi.',
            'key22' => 'Pausa in spiaggia',
            'key23' => 'Ideale per gli amanti, più privacy mentre si gode della bellezza delle spiagge',
            'key24' => '4 giorni 3 notti',
            'key25' => 'Chi siamo?',
            'key26' => "Fondata nel 2004, NOSY BE PARADISE TOURS è una società individuale che opera nel settore del turismo. 
            operante nel settore del turismo. La sua attività principale è 
            l'organizzazione di escursioni a Nosy-Be e alle isole circostanti. 
            non solo su Nosy-Be e sulle piccole isole circostanti 
			ma anche nella parte settentrionale del Madagascar.",
            'key27' => 'WEEK-END IN IRANJA FICCANASO',
            'key28' => "Assistete al momento più bello della schiusa delle uova di tartaruga marina durante un weekend a Nosy Iranja.",
            'key29' => "GIRO DELL'ISOLA IN ELICOTTERO",
            'key30' => "Salendo in alto si può vedere ancora di più. Un paesaggio mozzafiato e unico: spiagge, 7 laghi,",
            'key31' => 'KITE SURFING',
            'key32' => "È una vacanza pensata per tutti i tipi di clienti interessati agli sport sulla neve, siano essi principianti, dilettanti o professionisti.  sia che si tratti di principianti, dilettanti o professionisti.",
            'key33' => 'SPIAGGIA VERGINE',
            'key34' => 'Visite: ideale per gli amanti,',
            'key12'    => "Vivere l'esperienza",
            'key13'    => "Crociera in catamarano",
            'key14'    => "L'arcipelago di Mitsio e le isole Radama con Paradise tours",
            'key15'    => 'Con o senza immersione',
            'decouvrir'=> "Découvrir",
            'home'      => 'Accoglienza',
            'excursion' => 'Escursioni',
            'contact'   =>'Contatto',
            'circuit'   => 'Circuito  del Madagascar',
            'service'   => 'Servizio',
            'guide'     => 'Guida',
            'circuit-2' => 'Circuito',
            'key9'      => "Le nostre attività",
            'key10'     => "Pesca grossa",
            'key11'     => "Che siate appassionati di pesca sportiva o che vogliate semplicemente scoprire questa disciplina, qui la troverete.",
            'read'      => 'scopri',
            'package'   => 'I nostri pacchetti ',
            'key1'      => 'Natura',
        ],
        'de' => [
            
            'deutch'    => 'de',
            'inclus'    => 'Enthaltene Dienstleistungen',
            'non_inclus'=> 'Nicht enthaltene Dienstleistungen',
            '79'        => "Katamaran Mitsio und RADAMA",
            '80'        => "Treten Sie ein in eine magische und geheimnisvolle Welt.",
            '81'        => "Wal- und Delfinbeobachtung",
            '82'        => "Hören Sie auf die Kraft der Natur.",
            '83'        => "Hochseefischen",
            '84'        => "Eine entspannende und einzigartige Erfahrung.",
            '85'        => "Katamaran-Kreuzfahrt",
            '86'        => "Erleben Sie die Geschichte an authentischen Orten.",
            '87'        => "Ausflüge zur Landseite",
            '88'        => "DIA LAVA TOUR LOKOBE NATURRESERVAT + NOSY KOMBA",
            '89'        => "Erleben Sie ein Abenteuer auf den endlosen Dünen.",
            '90'        => "Perfume tours: Inselrundfahrt",
            '91'        => "Entdecken Sie eine moderne und pulsierende Architektur.",
            '92'        => "ANKUNFT IN NOSY BE",
            '93'        => "Willkommen am Fascene International Airport
                            Installation und Transfer zum Kundenhotel in einem geräumigen, klimatisierten Auto mit Reiseleiter.
                            Ankunft im Hotel. Ausruhen und entspannen.
                            Abendessen und Übernachtung im Hotel in Nosy Be.",
            '94'        => "Besuch: NOSY KOMBA und TANIKELY",
            '95'        => "Nosy Komba ist eine Vulkaninsel gegenüber von Nosy Be. Das Dorf Nosy Komba schmückt sich mit seinem Markt für Stickereien und Holzhandwerk. Nosy Komba ist das Schutzgebiet von Makaken, Boa Constrictor-Schlangen, Chamäleons und verschiedenen Schildkröten.
                            Nosy Tanikely liegt im nördlichen Teil Madagaskars. Es ist ein erstaunliches Meeresschutzgebiet mit einem weißen Strand und kristallklarem Meer, umgeben von einem Korallenriff. Tanikely ist ein außergewöhnliches Ziel zum Schnorcheln und Tauchen. Auf dem Gipfel dieses Inselgipfels bietet ein 1908 erbauter Leuchtturm einen außergewöhnlichen Panoramablick auf Nosy-Be, NOSY-KOMBA und Madagaskar.
                            Besuche: Nosy Komba oder die Lemureninsel, Nosy Tanikely oder das Tanikely-Meeresreservat Dauer: Ein Tag Abfahrt: Hafen von Hell-ville Nosy Be
                            Beschreibung der Schaltungen
                            Personenzahl: Kunden, Guide, Skipper, Koch Bootstyp: Schnellboot, 22 Schwimmwesten verfügbar Mittagessen: Picknick am Strand
                            Abfahrt vom Strand von Ambatoloaka um 7:30 Uhr in Richtung Nosy Komba für eine kurze 20-minütige Fahrt mit dem Schnellboot. Auf dem Programm steht ein Besuch des Handwerksdorfs mit seinem Stickerei- und Holzhandwerksmarkt. Besuchen Sie anschließend den Minipark, in dem Sie die endemischen Arten der Insel bewundern können, wie etwa die berühmten Makaken, Boa Constrictor-Schlangen, Chamäleons und verschiedene Landschildkröten. Von Nosy Komba aus fahren Sie dann 15 Minuten in Richtung Nosy Tanikely. Tanikely ist ein erstaunliches Meeresschutzgebiet mit einem weißen Sandstrand und kristallklarem Meer, umgeben von einem Korallenriff. In seinem Wald können Lemuren, Chamäleons und Fledermäuse beobachtet werden. Darüber hinaus wimmelt es im Meeresschutzgebiet von vielfältigen Meereslebewesen wie Meeresschildkröten, Seesternen und Clownfischen. Es ist ein ideales Reiseziel für Liebhaber des Schwimmens, Sonnenbadens, Entspannens und vor allem des Schnorchelns.
                            Mittags werden Ihnen schließlich typische und herzhafte Gerichte bei einem faszinierenden Blick auf das Meer serviert. Rückkehr gegen 16:00 Uhr.",
            '96'        => "<h5>Besuchen Sie: IRANJA ISLAND</h5>
                        <p>

                        Abfahrt vom Hotel um 07:00 Uhr in Richtung IRANJA ISLAND, vom Strand Ambatoloaka mit dem Schnellboot, die Fahrt dauert 1 Stunde und 15 Minuten.
                        Sobald Sie auf der Insel IRANJA ankommen, werden Sie von einer atemberaubenden Landschaft begrüßt. Ein völliges Eintauchen in die Natur wird Ihren Tag erhellen. Zu Beginn des Tages erwarten Sie zwei wunderschöne Inseln, die durch einen 2 km langen weißen Sandstrand verbunden sind. Für Ihre Momente der Entspannung erwartet Sie ein weißer und makelloser Strand, an dem Sie am türkisblauen Meer ein Sonnenbad nehmen, schwimmen und bei einem kurzen Spaziergang verschiedene Farnarten entdecken können.
                        Um 00:30 Uhr wird im Schatten der Kokosnussbäume ein herrliches Mittagessen mit Meeresfrüchten, Kokosnussgerichten und Früchten der Saison serviert.
                        Gegen 16:00 Uhr Rückkehr zum Hotel.
                        Abendessen und Übernachtung im Hotel in Nosy Be.

                        </p>",
            '97'        => "<h5>Besuchen Sie: INSELRUNDFAHRT</h5>
                        <p>
                        Abfahrt um 8:00 Uhr Richtung HELL VILLE CITY. Das Ziel besteht darin, Ihnen dabei zu helfen, Nosy-Be durch die Kultur seines Volkes, der „Sakalava“, seine Geschichte und auch seine heiligen Orte wie „den heiligen Baum und seine 12 Seen“ kennenzulernen.
                        Besuchen Sie im Stadtzentrum den großen Markt und Hellville, wo Sie nicht nur alle für die lokale Küche typischen Gewürze und Obstsorten, sondern auch die Überreste und die Geschichte der Kolonialzeit entdecken können. Anschließend wird Ihnen ein angenehmes Mittagessen in einem Restaurant am Strand von Andilana mit türkisfarbenem Meerblick angeboten, das Sie für Ihre entspannten Mittagsmomente willkommen heißt.
                        Dann geht es weiter zum Mont Passot, dem zweithöchsten Gipfel von Nosy Be, der einen 360°-Panoramablick nicht nur über Nosy Be, sondern auch auf die kleinen Nachbarinseln bietet. Dies ist der beste Ort, um den Sonnenuntergang zu beobachten. Mit diesem hübschen Sonnenuntergangsspektakel endet der wunderbare Spaziergang.
                        Abendessen und Übernachtung im Hotel in Nosy Be.
                        </p>",
            '98'        => "<b>ENTSPANNEN</b>
                        <p>
                        Entspannen Sie sich im Hotel.
                        Den Gästen steht es frei, an einem Ausflug oder Einkaufsbummel teilzunehmen, wofür zusätzliche Kosten anfallen.
                        Abendessen und Übernachtung im Hotel in Nosy Be.
                        </p>",
            '99'        =>  "ABREISETAG",
            '100'        => "<b>ENTSPANNEN</b>
                        <p>
                        Transfer im geräumigen Auto von Ihrem Hotel zum internationalen Flughafen Fascene. Einer unserer Mitarbeiter begleitet Sie beim Check-in.

                        <br>
                        GUTEN FLUG
                        VELOMA, MISAOTRA …

                        </p>",
            '101'        => "<li>Transfer vom Hotel zum Hafen: Ankunft und Abreise</li>
                            <li>Unterkunft: Hotel in Nosy Be</li>
                            <li>Geräumiger und klimatisierter 4×4</li>
                            <li>Alle Frühstücke</li>
                            <li>Mittagessen während der Ausflüge</li>
                            <li>Drei existieren nebeneinander</li>
                            <li>Mineralwasser für jeden Tag</li>
                            <li>Anleitung</li>
                            <li>Eintrittsgebühr</li>",
            '102'        => "<li>Mittagessen: Tag 4, wenn die Gäste im Hotel übernachten</li>
                            <li>Abendessen: 4 Tage, wenn der Kunde im Hotel übernachtet</li>
                            <li>Getränke</li>
                            <li>Zusätzliches Personal</li>",
            '103'        => "",
            '104'        => "",
            '57'        => "Erkunden Sie Madagaskar mit der Rundreise RN7: Eine Reise ins Herz des Südens! Tauchen Sie ein in ein unvergessliches Abenteuer auf der berühmten Route Nationale 7. ",
            '58'        => "Ausbruch in Morondava",
            '59'        => "Ausbruch in Morondava: Wo die Natur ihre Geheimnisse erzählt! Gehen Sie auf Entdeckungsreise in Morondava, einem Land voller Abenteuer und Magie.",
            '60'        => "Flucht nach Morondava: langer Aufenthalt",
            '61'        => "Nosy Be Ausflüge",
            '62'        => "Ausflüge Nosy Be und umliegende Inseln",
            '63'        => "Nosy Be ist für seinen Badetourismus bekannt, dank seiner paradiesischen Strände, seiner Naturparks sowie einer breiten Palette an Aktivitäten, die für genügend Unterhaltung für seine Besucher sorgen. Unsere Ausflüge sind jedoch so organisiert und gestaltet, dass unsere Kunden das authentische Nosy Be an drei Punkten genießen können: Meer, Natur, Kultur.",
            '64'        => "Ausflüge am Meer",
            '65'        => "Russische Bucht",
            '66'        => "Entdecken Sie kristallklares Wasser und goldenen Sand.",
            '67'        => "Bewundern Sie spektakuläre Landschaften.",
            '68'        => " Schildkröteninsel",
            '69'        => "Ein Eintauchen in die Wildnis.",
            '70'        => "Das Lokobe-Reservat",
            '71'        => "Erleben Sie ein Abenteuer auf den endlosen Dünen.",
            '72'        => "Nosy Sakatia, Paradiesische Inseln",
            '73'        => "Atemberaubende Sonnenuntergänge.",
            '74'        => "Nosy Mitsio mit Schnellboot",
            '75'        => "Treten Sie ein in eine magische und geheimnisvolle Welt.",
            '76'        => "Katamaran Mitsio",
            '77'        => "Machen Sie einen unvergesslichen Katamaranausflug zu den Mitsio Islands",
            '78'        => "Das Radama-Archipel mit dem Katamaran ",
            'nuit'      => 'Nächte',
            '46'        => 'Folgen Sie uns in den sozialen Netzwerken.',
            '47'        => 'Informationen',
            '48'        => 'Über',
            '49'        => 'Abonnieren',
            '50'        => "Bitte geben Sie eine gültige E-Mail-Adresse ein.",
            '51'        => 'Annullieren',
            '52'        => 'Senden Sie',
            '53'        => 'Fluggesellschaften',
            '54'        => 'Haben Sie Fragen ?',
            '55'        => 'Nord Mada',
            '56'        => 'Rundreise RN7',
            'jour'      => 'Tage',
            'circuit'   => 'Rundreisen aus Madagaskar',
            '41'        => 'Menü',
            '42'        => 'Ausflüge zum Meer',
            '43'        => 'Excursions on land',
            '44'        => 'Nordkreis',
            '45'        => 'RN7-Schaltung',
            'key8'      => 'Incentive-Reise',
            'key2'      => 'Fauna und flora',
            'key3'      => 'Grüner  Tourismus',
            'key4'      => 'Kultur – Geschichte',
            'key5'      => 'Entdeckung',
            'key6'      => 'Safari – Ausflug',
            'key7'      => 'Wild',
            'read'      => 'mehr erfahren',
            'package'   => 'Unsere Pakete',
            'key1'      => 'Natur',
            'circuit-2' => 'Schaltung',
            'home'      => 'Willkommen',
            'excursion' => 'Ausflug',
            'contact'   =>  'Kontakt',
            'service'   => 'Dienste',
            'guide'     => 'Leitfaden',
            '39'    => "Unsere Exkursionen",
            '38'    => "Reisen kann aufregend und stressig zugleich sein, vor allem, wenn es sich um ein neues Reiseziel handelt.",
            '37'    => "Neben der Organisation von Ausflügen werden auch Land- und Seetransfers angeboten.",
            '36'    => "Für ein Maximum an Entdeckungen in unserer wunderschönen Kultur bieten wir Ihnen verschiedene Pakete an.",
            '35'    => "Nosy Be ist für den Strandtourismus bekannt, unsere Ausflüge sind perfekt organisiert.",
            'key16' => 'Hochzeitsreise',
            'key17' => 'Ein idyllischer Rahmen und ein persönlicher Service, um das Schönste auf Erden zu feiern',
            'key18' => 'Hochzeit und Flitterwochen',
            'key19' => 'Reise',
            'key20' => 'Incentives',
            'key21' => "Es ist eine schöne Erfahrung, die die Beziehungen zwischen den Kolleginnen und Kollegen stärkt. ",
            'key22' => 'Aufenthalt am Strand',
            'key23' => 'Ideal für Verliebte , mehr Privatsphäre beim Genießen der Schönheit der Strände',
            'key24' => '4 Tage 3 Nächte',
            'key25' => 'Wer sind wir?',
            'key26' => "NOSY BE PARADISE TOURS wurde 2004 gegründet und ist ein Einzelunternehmen. 
            die in der Tourismusbranche tätig ist. Ihre Tätigkeit besteht in 
            Hauptgeschäftsfeld die Erbringung touristischer Dienstleistungen, die auf die Organisation von Ausflügen spezialisiert sind. 
            nicht nur auf Nosy-Be und den umliegenden kleinen Inseln 
			sondern auch in den nördlichen Teil von Madagaskar Grande Île.",
            'key27' => 'WOCHENENDE IN NOSY IRANJA',
            'key28' => "Bezeugt den schönsten Moment, in dem Meeresschildkröten während eines Wochenendes in Nosy Iranja aus ihren Eiern schlüpfen.",
            'key29' => 'HELICOT-RUNDFAHRT UM DIE INSEL',
            'key30' => "Wenn man in die Höhe steigt, kann man noch mehr sehen. Eine atemberaubende und einzigartige Landschaft: Strände, 7 Seen,",
            'key31' => 'KITE SURFEN',
            'key32' => "Es ist ein Aufenthalt für alle Arten von Gästen, die sich für den Skisport interessieren, egal ob Anfänger, Amateur oder Profi.",
            'key33' => 'AUFENTHALT AM JUNGFERNSTRAND',
            'key34' => 'Touren:Ideal für Verliebte ,',
            'key15' => 'Mit oder ohne Tauchen',
            'key14' => "Mitsio-Archipel und Radama-Inseln mit Paradise tours",
            'key13' => 'Katamaran-Kreuzfahrt',
            'key12' => "Erleben Sie",
            'decouvrir'=> "Entdecken Sie",
            'key9'  => "Unsere Aktivitäten",
            'key10' => "Großfischen",
            'key11' => 'Leidenschaftlicher Sportangler oder einfach Lust, diese Disziplin zu entdecken.',


        ]
    ];



    /**
     * Récupère les traductions pour une langue donnée.
     */
    public static function getTranslations($lang)
    {
        if (!array_key_exists($lang, self::$translations)) {
            throw new \Exception("Langue non prise en charge.");
        }
        return self::$translations[$lang];
    }

    /**
     * Génère un switcher de langue dynamique pour la page courante.
     *
     * @param string $currentLang Langue actuelle
     * @param string $currentRoute Route actuelle
     * @return string HTML du switcher
     */
    public static function renderSwitcher($currentLang, $currentRoute)
    {
        $languages = [
            'en' => 'English', 
            'fr' => 'Français', 
            'it' => 'Italiano',
            'de' => 'Deutsch'
        ];

        $output = '<ul>';

        foreach ($languages as $code => $name) {
            // Construire l'URL en changeant uniquement la langue
            $newRoute = preg_replace('/^\/[a-z]{2}/', "/$code", $currentRoute);
            $activeClass = ($code === $currentLang) ? 'class="active"' : '';
            $output .= "<li><a href='$newRoute' $activeClass>$name</a></li>";
        }

        $output .= '</ul>';
        
        return $output;
    }
}
