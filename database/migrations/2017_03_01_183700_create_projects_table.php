<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->enum('priority', ['highlighted', 'regular'])->default('regular');
            $table->string('title', 100); //obligatoire
            $table->text('excerpt'); //obligatoire
            $table->enum('status', ['published', 'unpublished'])->default('unpublished');
            $table->dateTime('published_at')->nullable();
            $table->text('objective')->nullable();
            $table->string('country')->nullable();
            $table->string('population')->nullable();
            $table->enum('progression', ['A donné lieu à réalisation', 'En attente de réalisation'])->default('En attente de réalisation');
            $table->text('progression_details')->nullable();
            $table->dateTime('starting_date')->nullable();
            $table->text('context')->nullable();
            $table->text('brief')->nullable();
            $table->text('methodology')->nullable();
            $table->text('contributors')->nullable();
            $table->text('conception')->nullable();
            $table->string('thumbnail_link')->nullable();
            $table->string('video_link')->nullable();
            $table->string('project_link')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
