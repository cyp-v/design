<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->enum('priority', ['highlighted', 'regular'])->default('regular');
            $table->string('title', 100); //obligatoire
            $table->text('excerpt'); //obligatoire
            $table->enum('status', ['published', 'unpublished'])->default('unpublished');
            $table->dateTime('published_at')->nullable();
            $table->text('content')->nullable();
            $table->string('thumbnail_link')->nullable();
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
        Schema::dropIfExists('topics');
    }
}
