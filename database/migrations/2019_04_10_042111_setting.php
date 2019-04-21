<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Setting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->increments('id');

            $table->text('name')->nullable();
            $table->text('nameeg')->nullable();

            $table->text('logo')->nullable();
            $table->text('favico')->nullable();
            

            $table->text('title')->nullable();
            $table->text('titleeg')->nullable();
            

            $table->text('company')->nullable();
            $table->text('companyeg')->nullable();
            

            $table->text('address')->nullable();
            $table->text('addresseg')->nullable();
            

            $table->text('phone')->nullable();
            $table->text('phoneeg')->nullable();
            

            $table->text('didong')->nullable();
            $table->text('didongeg')->nullable();
            

            $table->text('fax')->nullable();
            $table->text('faxeg')->nullable();
            

            $table->text('email')->nullable();
            $table->text('emaileg')->nullable();
            

            $table->text('photo')->nullable();
            $table->text('photoeg')->nullable();
            

            $table->longText('desc')->nullable();
            $table->longText('desceg')->nullable();

            $table->longText('content')->nullable();
            $table->longText('contenteg')->nullable();

            $table->integer('status');

            $table->longText('codechat')->nullable();
            $table->longText('copyright')->nullable();
            

            $table->longText('analytics')->nullable();

            $table->longText('keyword')->nullable();
            $table->longText('keywordeg')->nullable();

            $table->longText('description')->nullable();
            $table->longText('descriptioneg')->nullable();


            $table->longText('links1')->nullable();
            $table->longText('links2')->nullable();
            $table->longText('links3')->nullable();
            $table->longText('links4')->nullable();
            $table->longText('links5')->nullable();
            $table->longText('linksyt1')->nullable();
            $table->longText('linksyt2')->nullable();

            $table->longText('contentcode')->nullable();
            $table->longText('contentcodeeg')->nullable();
            $table->longText('codemap')->nullable();

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
        Schema::dropIfExists('setting');
    }
}
