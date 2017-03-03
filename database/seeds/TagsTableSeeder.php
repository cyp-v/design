<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
        	['title' => 'accessibilité'],
        	['title' => 'agriculture'],
        	['title' => 'agronomie'],
        	['title' => 'alimentation'],
        	['title' => 'artisanat'],
        	['title' => 'arts'],
        	['title' => 'communication'],
        	['title' => 'confort'],
        	['title' => 'connectivité'],
        	['title' => 'culture'],
        	['title' => 'dépendance'],
        	['title' => 'divertissement'],
        	['title' => 'education'],
        	['title' => 'emploi'],
        	['title' => 'énergie'],
        	['title' => 'environnement'],
        	['title' => 'équipement'],
        	['title' => 'habitat'],
        	['title' => 'handicap'],
        	['title' => 'hygiène'],
        	['title' => 'industrie'],
        	['title' => 'isolement'],
        	['title' => 'mobilité'],
        	['title' => 'patrimoine'],
        	['title' => 'santé'],
        	['title' => 'sécurité'],
        	['title' => 'services'],
        	['title' => 'sport']
        ]);
    }
}