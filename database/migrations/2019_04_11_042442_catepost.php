<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Catepost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catepost', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name')->nullable();
            $table->text('slug')->nullable();
            $table->text('title')->nullable();
            $table->text('keyword')->nullable();
            $table->text('description')->nullable();
            $table->text('nameeg')->nullable();
            $table->text('titleeg')->nullable();
            $table->text('keywordeg')->nullable();
            $table->text('descriptioneg')->nullable();
            $table->integer('status')->nullable();
            $table->string('lang')->nullable();
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
        Schema::dropIfExists('catepost');
    }
}
