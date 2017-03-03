<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
	        	'role' 		=> 'administrator',
	        	'name' 		=> 'admin',
	        	'email' 	=> 'admin@gmail.com',
	        	'password' 	=> bcrypt('admin'),
        	],
        	[
	        	'role' 		=> 'administrator',
	        	'name' 		=> 'Jean-Gilles Cahn',
	        	'email' 	=> 'contact@partageonsledesign.org',
	        	'password' 	=> bcrypt('jean-gilles'),
        	],
        	[
	        	'role' 		=> 'author',
	        	'name' 		=> 'Designer 1',
	        	'email' 	=> 'designer1@gmail.com',
	        	'password' 	=> bcrypt('designer1'),
        	],
        	[
	        	'role' 		=> 'author',
	        	'name' 		=> 'Project participant 1',
	        	'email' 	=> 'projectparticipant1@gmail.com',
	        	'password' 	=> bcrypt('projectparticipant1'),
        	]
        ]);
    }
}
