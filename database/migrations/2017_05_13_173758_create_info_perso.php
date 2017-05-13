<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoPerso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_persos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->default("");
            $table->string('prenom')->default("");
            $table->string('tel')->default("");
            $table->string('bio')->default("");
            $table->string('adresse')->default("");
            $table->date('date_naissance')->default(\Carbon\Carbon::now());
            $table->string('lieu_naissance')->default("");
            $table->string('situation_familliale')->default("");
            $table->string('status')->default("");
            $table->integer('member_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_persos');
    }
}
