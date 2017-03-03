<?php

use Illuminate\Database\Seeder;

class SupportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supports')->insert([
        	[
        		'name' => 'Ministère de la Culture et de la Communication',
        		'link' => 'http://www.culturecommunication.gouv.fr',
        		'thumbnail_link' => 'public\img\supports_thumbnails\mcc.png',
        	],
        	[
        		'name' => 'Ministère de l\'écologie, du développement durable et de l\'énergie',
        		'link' => 'http://www.developpement-durable.gouv.fr',
        		'thumbnail_link' => 'public\img\supports_thumbnails\medde.png',
        	],
        	[
        		'name' => 'Gouvernement du Mexique',
        		'link' => 'http://www.gob.mx',
        		'thumbnail_link' => 'public\img\supports_thumbnails\mexico.png',
        	],
        	[
        		'name' => 'Gouvernement du Guatemala',
        		'link' => 'http://www.guatemala.gob.gt/',
        		'thumbnail_link' => 'public\img\supports_thumbnails\guatemala.jpg',
        	],
        	[
        		'name' => 'STRATE Ecole de Design',
        		'link' => 'https://www.strate.design',
        		'thumbnail_link' => 'public\img\supports_thumbnails\strate.jpg',
        	]
        ]);
    }
}
