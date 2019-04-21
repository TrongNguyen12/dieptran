<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Postnew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postnew', function (Blueprint $table) {

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

            $table->bigInteger('id_catepost')->unsigned();

            $table->foreign('id_catepost')
                  ->references('id')
                  ->on('catepost')
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
        Schema::dropIfExists('postnew');
    }
}
