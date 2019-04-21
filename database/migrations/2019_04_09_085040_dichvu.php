<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dichvu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dichvu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name')->nullable();
            
            $table->text('titlehome')->nullable();
            $table->text('titlehomeeg')->nullable();
            $table->text('shortdes')->nullable();
            $table->text('shortdeseg')->nullable();
            $table->text('nameeg')->nullable();
            $table->text('slug')->nullable();
            $table->text('slugeg')->nullable();
            $table->text('displayhome')->nullable();
            $table->text('displayhomeeg')->nullable();
            $table->text('content')->nullable();
            $table->text('contenteg')->nullable();
            $table->text('titleseo')->nullable();
            $table->text('titleseoeg')->nullable();
            $table->text('metakeyword')->nullable();
            $table->text('metakeywordeg')->nullable();
            $table->text('metadescription')->nullable();
            $table->text('metadescriptioneg')->nullable();
            $table->text('img')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('dichvu');
    }
}
