
<?php

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
        	[
        		'user_id' 		 => 2,
        		'priority' 		 => 'regular',
        		'title' 		 => 'Présentation du projet',
        		'excerpt' 		 => 'Présentation du projet d’association devant l’assemblée de France Design Education',
        		'status' 		 => 'published',
        		'content' 		 => 'News1: Lorem ipsum dolor sit amet, cu nec veri maiestatis, alia commodo recusabo at per. Cum et mazim tation rationibus. Has ut mentitum invenire, ad mea iisque dissentiet. Id iriure eruditi usu, has quodsi aliquip docendi at, qui no modo autem voluptua. An pri nonumes delectus, sea vidit omnis eu.',
                'thumbnail_link' => 'logo_violet.jpg',
        	],
        	[
        		'user_id' 		 => 2,
        		'priority' 		 => 'regular',
        		'title' 		 => 'Intervention lors d’un colloque',
        		'excerpt' 		 => 'Intervention sur le thème « Que peut le design pour les populations défavorisées ? » lors du colloque « Design, innovation sociale et vie publique » du réseau « Design en recherche »',
        		'status' 		 => 'published',
        		'content' 		 => 'News2: Lorem ipsum dolor sit amet, cu nec veri maiestatis, alia commodo recusabo at per. Cum et mazim tation rationibus. Has ut mentitum invenire, ad mea iisque dissentiet. Id iriure eruditi usu, has quodsi aliquip docendi at, qui no modo autem voluptua. An pri nonumes delectus, sea vidit omnis eu.',
                'thumbnail_link' => 'logo_violet.jpg',
        	],
        	[
        		'user_id' 		 => 2,
        		'priority' 		 => 'regular',
        		'title' 		 => 'Lancement de la collecte de cas',
        		'excerpt' 		 => 'Lancement de la collecte de cas de design solidaire en vue de la création de notre « Banque d’exemples »',
        		'status' 		 => 'published',
        		'content' 		 => 'News3: Lorem ipsum dolor sit amet, cu nec veri maiestatis, alia commodo recusabo at per. Cum et mazim tation rationibus. Has ut mentitum invenire, ad mea iisque dissentiet. Id iriure eruditi usu, has quodsi aliquip docendi at, qui no modo autem voluptua. An pri nonumes delectus, sea vidit omnis eu.',
                'thumbnail_link' => 'logo_violet.jpg',
        	],
        	[
        		'user_id' 		 => 1,
        		'priority' 		 => 'regular',
        		'title' 		 => 'News 4',
        		'excerpt' 		 => 'La quatrième actualité, par Admin',
        		'status' 		 => 'published',
        		'content' 		 => 'News4: Lorem ipsum dolor sit amet, cu nec veri maiestatis, alia commodo recusabo at per. Cum et mazim tation rationibus. Has ut mentitum invenire, ad mea iisque dissentiet. Id iriure eruditi usu, has quodsi aliquip docendi at, qui no modo autem voluptua. An pri nonumes delectus, sea vidit omnis eu.',
                'thumbnail_link' => 'logo_violet.jpg',
        	],
        	[
        		'user_id' 		 => 1,
        		'priority' 		 => 'regular',
        		'title' 		 => 'News 5',
        		'excerpt' 		 => 'La cinquième actualité, par Admin',
        		'status' 		 => 'published',
        		'content' 		 => 'News5: Lorem ipsum dolor sit amet, cu nec veri maiestatis, alia commodo recusabo at per. Cum et mazim tation rationibus. Has ut mentitum invenire, ad mea iisque dissentiet. Id iriure eruditi usu, has quodsi aliquip docendi at, qui no modo autem voluptua. An pri nonumes delectus, sea vidit omnis eu.',
                'thumbnail_link' => 'logo_violet.jpg',
        	],
        	[
        		'user_id' 		 => 1,
        		'priority' 		 => 'regular',
        		'title' 		 => 'News 6',
        		'excerpt' 		 => 'La sixième actualité, par Admin',
        		'status' 		 => 'published',
        		'content' 		 => 'News6: Lorem ipsum dolor sit amet, cu nec veri maiestatis, alia commodo recusabo at per. Cum et mazim tation rationibus. Has ut mentitum invenire, ad mea iisque dissentiet. Id iriure eruditi usu, has quodsi aliquip docendi at, qui no modo autem voluptua. An pri nonumes delectus, sea vidit omnis eu.',
                'thumbnail_link' => 'logo_violet.jpg',
        	]
        ]);
    }
}
