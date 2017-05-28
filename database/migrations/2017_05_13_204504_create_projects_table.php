<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre')->default('')->nullable();
            $table->date('date_debut')->default(\Carbon\Carbon::now())->nullable();
            $table->date('date_fin')->default(\Carbon\Carbon::now())->nullable();
            $table->integer('member_id')->default(0)->nullable();
            $table->integer('sous_domaine_id')->default(0)->nullable();
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
        Schema::dropIfExists('projects');
    }
}
