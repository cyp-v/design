<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
===== FRONT =====
*/

Route::get('/', 'FrontController@index')->name('home');

Route::get('/social_design', 'FrontController@showSocialDesign')->name('social_design');

Route::get('/news', 'FrontController@showTopics')->name('topics_all');

Route::get('/news/{id}', 'FrontController@showTopicById')->name('topic_single');

Route::get('/projects', 'FrontController@showProjects')->name('projects_all');

Route::get('/project/{id}', 'FrontController@showProjectById')->name('project_single');

Route::get('/tag/{id}', 'FrontController@showProjectsByTag')->name('projects_tag');

Route::get('/association', 'FrontController@showAssociation')->name('association');

Route:: get('/get_involved', 'FrontController@showGetInvolved')->name('get_involved');

Route::get('/contact', 'FrontController@showContact')->name('contact');

/*
===== LOGIN =====
*/

Route::any('/login', 'LoginController@showLogin')->name('login'); 

Route::get('/logout', 'LoginController@logout')->name('logout');

/*
===== ADMIN =====
*/

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{
	// ----- DASHBOARD -----

	Route::get('dashboard', 'Admin\DashboardController@showDashboard');

	// ----- PROJECT -----
	
	Route::resource('project', 'Admin\ProjectController');

	// ----- TOPIC -----
	
	Route::resource('topic', 'Admin\TopicController');

	// ----- PROFILE -----
	
	Route::resource('profile', 'Admin\ProfileController');
});