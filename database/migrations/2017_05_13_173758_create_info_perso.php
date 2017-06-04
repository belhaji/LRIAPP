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
            $table->string('nom')->default("")->nullable();
            $table->string('prenom')->default("")->nullable();
            $table->string('tel')->default("")->nullable();
            $table->text('bio')->nullable();
            $table->string('adresse')->default("")->nullable();
            $table->date('date_naissance')->default(\Carbon\Carbon::now())->nullable();
            $table->string('lieu_naissance')->default("")->nullable();
            $table->string('situation_familliale')->default("")->nullable();
            $table->string('status')->default("")->nullable();
            $table->integer('member_id')->nullable();
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
