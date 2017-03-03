<?php

use Illuminate\Database\Seeder;

class UserdetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userdetails')->insert([
        	[
        		'user_id' 	     => 3,
        		'thumbnail_link' => 'public\img\users_thumbnails\designer1.jpg',
        		'tel' 		     => '+33644218970',
        		'position' 	     => 'Designer',
        		'approach' 	     => 'Je suis designer à mon compte depuis 5 ans maintenant. Mon travail traite essentiellement du développement de la culture de variétés anciennes de quinoa dans les Andes et du folklore qui entoure celle-ci.',
        		'show_email'     => 'published',
        		'show_tel' 	     => 'published',
        		'link' => 'https://fr.wikipedia.org/wiki/Designer',
       		],
        	[
        		'user_id' 	     => 4,
        		'thumbnail_link' => 'public\img\users_thumbnails\project_participant1.jpg',
        		'tel' 		     => '+33652318922',
        		'position' 	     => 'Project participant',
        		'approach' 	     => 'Passionné de design et intransigeant sur mes valeurs, je donne de mon temps libre en tant que bénévole pour m\'impliquer dans des projets qui conjuguent créativité, esthétique, développement durable et éthique.',
        		'show_email'     => 'published',
        		'show_tel' 	     => 'published',
        		'link' 		     => 'https://fr.wikipedia.org/wiki/Designer',
       		]
       	]);
    }
}
