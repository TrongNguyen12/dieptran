<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class About extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('name')->nullable();
            $table->text('nameeg')->nullable();


            $table->text('title')->nullable();
            $table->text('titleeg')->nullable();

            $table->text('content')->nullable();
            $table->text('contenteg')->nullable();

            $table->text('titlecontent1')->nullable();
            $table->text('titlecontent1eg')->nullable();

            $table->text('content1')->nullable();
            $table->text('content1eg')->nullable();


            $table->text('titlecontent2')->nullable();
            $table->text('titlecontent2eg')->nullable();

            $table->text('content2')->nullable();
            $table->text('content2eg')->nullable();

            $table->text('photo')->nullable();

            $table->text('titleseo')->nullable();
            $table->text('titleseoeg')->nullable();


            $table->text('keywordseo')->nullable();
            $table->text('keywordseoeg')->nullable();

            $table->text('descriptionseo')->nullable();
            $table->text('descriptionseoeg')->nullable();


            $table->text('namhd')->nullable();
            $table->text('duanHT')->nullable();
            $table->text('khthanthiet')->nullable();

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
        Schema::dropIfExists('about');
    }
}
