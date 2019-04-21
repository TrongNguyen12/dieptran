<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetaiSevice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalSevice', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->text('title')->nullable();

            $table->text('shortdescription')->nullable();

            $table->string('slug')->nullable();

            $table->text('content')->nullable();

            $table->text('photo')->nullable();

            $table->text('titleseo')->nullable();

            $table->text('keywordseo')->nullable();

            $table->text('descriptionseo')->nullable();

            $table->date('dateUpdate')->nullable();

            $table->text('contenteg')->nullable();

            $table->text('shortdescriptioneg')->nullable();

            $table->text('titleeg')->nullable();

            $table->text('titleseoeg')->nullable();

            $table->text('keywordseoeg')->nullable();

            $table->integer('status')->nullable();

            $table->text('descriptionseoeg')->nullable();

            $table->bigInteger('id_cateSevice')->unsigned();

             $table->foreign('id_cateSevice')
                  ->references('id')
                  ->on('dichvu')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('detalSevice');
    }
}
