<?php

use App\Tag;
use App\Project;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
        	[
        		'user_id' 	  	 	  => 2,
        		'priority' 	  	 	  => 'regular',
        		'title' 	  	 	  => 'Tisserandes du Guatémala',
        		'excerpt' 	 	 	  => 'Projet Tisserandes du Guatémala par Design Without Borders',
        		'status' 	  	 	  => 'published',
                'published_at'        => Carbon::now(),
        		'objective'   	 	  => 'Améliorer la production des tisserandes du Guatemala',
        		'country' 	  	 	  => 'Guatemala',
        		'population'  	 	  => 'coopérative d\'artisanes maya',
        		'progression' 	 	  => 'A donné lieu à réalisation',
                'progression_details' => '',
                'starting_date'       => NULL,
        		'context' 		 	  => 'Les produits artisanaux sont de médiocre qualité (insuffisances techniques et manque de bons matériaux). Peu innovants, ils se ressemblent tous. Ils sont mal payés (notamment car marchandés).',
        		'brief' 		 	  => 'Améliorer la qualité et l’originalité des produits, ainsi que leur commercialisation pour augmenter les revenus des artisanes Maya du Guatemala.',
        		'methodology' 	 	  => '-Conseil sur techniques, matériaux, procédures garantissant la qualité -Information des tisserandes sur les attentes des clients et touristes -Détermination de prix fixes (non marchandables) et de nouveaux circuits commerciaux -Design de produits finals (synthèse entre tendances occidentales et culture Maya)',
        		'contributors' 	 	  => 'Commanditaires : Ong locale Ati’Ala et Fundacion Solar Designer : Design Without Borders (Norvège) Partenaire : Xuaan Chi Yai (société guatémaltèque de commerce et conseil en management) Financement : Fundacion Solar, The Peace Corps, Norwegian agency for development cooperation, Norsk Form, Xuaan Chi Yai',
        		'conception' 	 	  => '-	Diversification de la production : séries de d’enfant) et collections textiles destinées produits (sacs, linge de table, vêtements aux touristes. -	Création et promotion du nouveau label commercial Zumos -	Vente directe aux touristes, mais aussi vente en boutique au Guatemala et à l\'étranger avec garantie "commerce équitable".',
        		'thumbnail_link' 	  => 'tisserandes_du_guatemala.jpg',
        		'video_link'          => '',
                'project_link'		  => 'http://www.norskform.no',
                'created_at'          => Carbon::now()
        	],
        	[
        		'user_id' 		 	  => 2,
        		'priority' 		 	  => 'regular',
        		'title' 		 	  => 'BePro motorcycle helmet',
        		'excerpt' 		 	  => 'Projet BePro motorcycle helmet par Design Without Borders',
        		'status' 		 	  => 'published',
                'published_at'        => Carbon::now(),
        		'objective' 	 	  => 'Sécuriser la pratique de la moto en Ouganda',
        		'country' 		 	  => 'Ouganda',
        		'population' 	 	  => 'Les motocyclistes et notamment les taxis-motos et leurs passagers',
        		'progression' 	 	  => 'A donné lieu à réalisation',
                'progression_details' => '',
                'starting_date'       => NULL,
        		'context' 			  => 'En Ouganda les accidents de deux roues sont nombreux et graves, notamment parce qu\'il y a très peu de port de casque. Raison à cela : les casques devant être importés, ils sont chers et inadaptés aux conditions locales.',
        		'brief' 			  => 'Concevoir un casque : - adapté aux conditions d\'usage et aux goûts locaux - efficace mais peu cher - pouvant être fabriqué sur place (ce qui sera source d\'emploi)',
        		'methodology' 	  	  => '-Analyse des usages, du marché et des circuits commerciaux - Sélection et test des matériaux - Echanges avec les entreprises locales (pour la fabrication) et les graphistes locaux (pour une décoration des casques propre à séduire les jeunes). - Développement de prototypes',
        		'contributors' 		  => '- Commanditaire : Injury Control Center - Uganda - Design: Martin Martinuzzi et Vanja Steinbru de Design Without Borders, association norvégienne, (management du projet et design produit) et Ivan Brigye, designer ougandais (graphisme et logo) - Partenaires techniques : Gonzaga Ntege, ingénieur ougandais (adaptation à la production locale et au marché) - Partenaires commerciaux : - Partenaires financiers : The Peace Corps, Norwegian agency for development cooperation, Norsk Form, Richiencoy Services Ltd - ',
        		'conception' 		  => '- Conception simplifiée et taille unique avec ajustement par jeu de coussinets standardisés, permettant fabrication locale et prix bas. - Adaptation au climat ( amélioration de l\'aération) et à l\'usage (ouverture auriculaire facilitant la conversation avec les passagers) - Adaptation à l\'esthétique et aux goûts locaux (décoration graphisme, communication)',
        		'thumbnail_link'	  => 'bepro_motorcycle_helmet.jpg',
        		'video_link'          => '',
                'project_link'		  => 'www.norskform.no',
                'created_at'          => Carbon::now()
        	],
        	[
        		'user_id' 		 	  => 3,
        		'priority' 		 	  => 'regular',
        		'title' 		 	  => 'Mobilier pour prison',
        		'excerpt' 		 	  => 'Projet de mobilier de prison par Bernard Moïse',
        		'status' 		 	  => 'published',
                'published_at'        => Carbon::now(),
        		'objective' 	 	  => 'Améliorer les conditions de vie des détenus',
        		'country' 		 	  => 'France',
        		'population' 	 	  => 'Détenus des prisons',
        		'progression' 	 	  => 'En attente de réalisation',
        		'progression_details' => 'L\'administration n\'a pas donné suite à l\'expérience',
                'starting_date'       => NULL,
        		'context' 			  => 'Le mobilier de prison français, conçu essentiellement dans une optique sécuritaire, est de fait déshumanisant pour les détenus et ne favorise pas leur future réinsertion.',
        		'brief' 			  => 'Concevoir un mobilier : 1/ possible à fabriquer dans les ateliers pénitentiaires 2/ respectant les contraintes pénitentiaires, mais plus humain',
        		'methodology' 	  	  => '-Visites et observation de la vie dans différentes prisons françaises, -Conversations avec personnel pénitentiaire et détenus, -Echanges avec la Régie Industrielle des Etablissements Pénitentiaires',
        		'contributors' 		  => 'Commanditaire : Ministère de la Justice Designer : Bernard Moïse Partenaires : Régie Industrielle des Etablissements Pénitentiaires, Mobilier National Financement du design : Bourse Agora, Bourse de la Vocation',
        		'conception' 		  => '-	Choix matériaux (bois, métal) compatible avec ateliers pénitentiaires. -	Mobilier modulable pour s’adapter à tout type de cellule. -	Conception respectant les contraintes pénitentiaires, mais permettant de rester le plus proche possible des comportements de la vie normale (assurance d’un minimum de confort, sauvegarde d\'une certaine intimité, esthétique valorisante)',
        		'thumbnail_link'	  => 'mobilier_pour_prison.jpg',
                'video_link'          => '',
                'project_link'        => '',
                'created_at'          => Carbon::now()
        	],
        	[
        		'user_id' 		 	  => 4,
        		'priority' 		 	  => 'regular',
        		'title' 		 	  => 'Mobilier composite en jute',
        		'excerpt' 		 	  => 'Projet de mobilier composite en jute par Joran Briand',
        		'status' 		 	  => 'published',
                'published_at'        => Carbon::now(),
        		'objective' 	 	  => 'Diversifier les utilisations du jute',
        		'country' 		 	  => 'Bangladesh',
        		'population' 	 	  => 'Paysans producteurs de jute et petits industriels locaux',
        		'progression' 	 	  => 'A donné lieu à réalisation',
                'progression_details' => '',
                'starting_date'       => NULL,
        		'context' 			  => 'La production de jute fait vivre 40 millions de Bangladais. Mais la demande de jute est en chute du fait de la concurrence des fibres synthétiques.',
        		'brief' 			  => 'Proposer de nouvelles applications pertinentes et rentables pour les Bangladais. Mettre au point un produit de substitution aux fibres synthétiques importées de Chine.',
        		'methodology' 	  	  => '-Echanges avec fabricants de toile de jute et spécialistes des matériaux. -Recherche de formes de mobilier ergonomiques et adaptées aux qualités structurelles du matériau. - Tests de prototypes',
        		'contributors' 		  => 'Commanditaires : ONG Gold of Bengal, ONG Watever Designer : Trust in Design Partenaires techniques : Gold of Bengal, Editions Saintluc Partenaire financier : VIA',
        		'conception' 		  => '-    Tabouret moulé en composite (toile de jute + résine) -  Conception rendant possible à terme la fabrication locale - Esthétique adaptée au goût européen. -  Facilement transportable vers marchés cibles (empilable) -  Correspondant aux normes de commerce équitable « Max Havelaar »',
        		'thumbnail_link'	  => 'mobilier_composite_en_jute.jpg',
        		'video_link'          => '',
                'project_link'		  => 'http://www.trustindesign.com',
                'created_at'          => Carbon::now()
        	],
        	[
        		'user_id' 		 	  => 4,
        		'priority' 		 	  => 'regular',
        		'title' 		 	  => 'See better to learn better',
        		'excerpt' 		 	  => 'Projet See better to learn better par l\'agence de design Fuse Project',
        		'status' 		 	  => 'published',
                'published_at'        => Carbon::now(),
        		'objective' 	 	  => 'Améliorer la vue des écoliers pour qu\'ils apprennent mieux',
        		'country' 		 	  => 'Mexique',
        		'population' 	 	  => 'Ecoliers, collégiens',
        		'progression' 	 	  => 'A donné lieu à réalisation',
                'progression_details' => '',
                'starting_date'       => NULL,
        		'context' 			  => 'Plus d’1 milliard de personnes dans le monde souffrent d’une mauvaise vue non corrigée. 11% des écoliers mexicains travaillent mal parce qu’ils auraient besoin de lunettes. 90% des personnes qui manquent de lunettes sont dans les pays en voie de développement.',
        		'brief' 			  => 'Concevoir un produit : 1/ peu cher 2/ Adapté aux enfants : souple et solide, bonne acceptabilité, non stigmatisant, à la mode et amusant, personnalisable par choix des 2 couleurs.',
        		'methodology' 	  	  => 'A préciser.',
        		'contributors' 		  => 'Designer : Fuse Project (USA) Fabricant : Augen Optics (Mexique) Partenaire : Gouvernement mexicain',
        		'conception' 		  => 'Conception de la monture en 2 parties entièrement personnalisables au niveau des couleurs et du pad pour le nez : 7 couleurs, 5 formes, 3 tailles. Les objectifs économiques seront recherchés par le mode de fabrication (soudure ultrason, forme simple, fabrication au Mexique) et adaptable aux différentes morphologies (10$ examen optique + lunettes) Et l’adaptabilité aux enfants par la prise en compte des différentes morphologies, pas la souplesse et la solidité, une bonne acceptabilité, non stigmatisant, à la mode et amusant, personnalisable par choix des 2 couleurs.',
        		'thumbnail_link'	  => 'see_better_to_learn_better.jpg',
        		'video_link'          => '',
                'project_link'		  => 'http://www.fuseproject.com/products-45',
                'created_at'          => Carbon::now()
        	],
        	[
        		'user_id' 		 	  => 3,
        		'priority' 		 	  => 'regular',
        		'title' 		 	  => 'Médiathèque en kit Ideas Box',
        		'excerpt' 		 	  => 'Projet Ideas Box par Philippe Starck',
        		'status' 		 	  => 'published',
                'published_at'        => Carbon::now(),
        		'objective' 	 	  => 'Apporter des biens culturels à ceux qui n\'en ont pas',
                'country'             => '',
        		'population' 	 	  => 'Populations en situation d\'urgence humanitaire ou de grande précarité',
        		'progression' 	 	  => 'A donné lieu à réalisation',
                'progression_details' => '',
                'starting_date'       => NULL,
        		'context' 			  => 'Dans la plupart des situations d’urgence ou de grande précarité, dans les pays riches comme dans les pays en développement, de nombreux adultes et enfants n’ont accès ni aux livres, ni à l’information, ni à l’éducation.',
        		'brief' 			  => 'Concevoir une médiathèque aux caractéristiques suivantes:    - un outil standardisé, mais modulable et évolutif - facile à transporter, à installer et à faire fonctionner - robuste, autonome et consommant peu d’énergie - économique en fabrication et fonctionnement.',
        		'methodology' 	  	  => 'A préciser.',
        		'contributors' 		  => 'Commanditaire : Bibliothèques sans Frontière Designer : Philippe Starck, Ambroise Maggiar Partenaires fondateurs : Fondation Pierre Bellon, Fondation Alexander Soros, Société Philippe Starck Partenaires globaux : UNHCR, Agence RosaPark, New-York Public Library',
        		'conception' 		  => '- Médiathèque en kit qui tient sur 2 palettes. -  Installation en 20 minutes d’un espace culturel de 100 m2 - Contenu couvrant nombreux besoins: connexion internet, ordinateurs, tablettes tactiles, livres numériques et papier, vidéos, caméras, ressources pédagogiques numériques et jeux vidéo',
        		'thumbnail_link'	  => 'ideas_box.jpg',
        		'video_link'          => '',
                'project_link'		  => 'https://www.ideas-box.org',
                'created_at'          => Carbon::now()
        	]
        ]);
        
        Project::find(1)->tags()->attach([5, 24]);
        Project::find(2)->tags()->attach([23, 26]);
        Project::find(3)->tags()->attach([8, 18, 26]);
        Project::find(4)->tags()->attach([8, 16, 18, 21]);
        Project::find(5)->tags()->attach([13, 25]);
        Project::find(6)->tags()->attach([1, 9, 10, 12, 13]);

        Project::find(1)->pictures()->attach([1, 2, 3 ,4]);
        Project::find(2)->pictures()->attach([5, 6, 7, 8]);
        Project::find(3)->pictures()->attach([9, 10, 11, 12]);
        Project::find(4)->pictures()->attach([13, 14, 15, 16]);
        Project::find(5)->pictures()->attach([17, 18, 19, 20]);
        Project::find(6)->pictures()->attach([21, 22, 23]);

        Project::find(1)->supports()->attach([4]);
        Project::find(2)->supports()->attach([2]);
        Project::find(3)->supports()->attach([5]);
        Project::find(4)->supports()->attach([2, 5]);
        Project::find(5)->supports()->attach([3]);
        Project::find(6)->supports()->attach([1]);
    }
}
