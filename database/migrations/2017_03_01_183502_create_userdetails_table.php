<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('thumbnail_link')->nullable();
            $table->enum('show_email', ['published', 'unpublished'])->default('unpublished');
            $table->string('tel', 30)->nullable();
            $table->enum('show_tel', ['published', 'unpublished'])->default('unpublished');
            $table->enum('position', ['Designer', 'Project participant'])->default('Project participant');
            $table->text('approach')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('userdetails');
    }
}
