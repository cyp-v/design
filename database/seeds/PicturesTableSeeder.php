<?php

use Illuminate\Database\Seeder;

class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pictures')->insert([
        	['link' => 'tisserandes_du_guatemala_1.jpg'],
        	['link' => 'tisserandes_du_guatemala_2.jpg'],
        	['link' => 'tisserandes_du_guatemala_3.jpg'],
        	['link' => 'tisserandes_du_guatemala_4.jpg'],
        	['link' => 'bepro_motorcycle_helmet_1.jpg'],
        	['link' => 'bepro_motorcycle_helmet_2.jpg'],
        	['link' => 'bepro_motorcycle_helmet_3.jpg'],
        	['link' => 'bepro_motorcycle_helmet_4.jpg'],
        	['link' => 'mobilier_pour_prison_1.jpg'],
        	['link' => 'mobilier_pour_prison_2.jpg'],
        	['link' => 'mobilier_pour_prison_3.jpg'],
        	['link' => 'mobilier_pour_prison_4.jpg'],
        	['link' => 'mobilier_composite_en_jute_1.jpg'],
        	['link' => 'mobilier_composite_en_jute_2.jpg'],
        	['link' => 'mobilier_composite_en_jute_3.jpg'],
        	['link' => 'mobilier_composite_en_jute_4.jpg'],
        	['link' => 'see_better_to_learn_better_1.jpg'],
        	['link' => 'see_better_to_learn_better_2.jpg'],
        	['link' => 'see_better_to_learn_better_3.jpg'],
        	['link' => 'see_better_to_learn_better_4.jpg'],
        	['link' => 'ideas_box_1.jpg'],
        	['link' => 'ideas_box_2.jpg'],
        	['link' => 'ideas_box_3.jpg']
        ]);
    }
}
