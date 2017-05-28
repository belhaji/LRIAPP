<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre')->default('')->nullable();
            $table->string('description')->default('')->nullable();
            $table->string('lieux')->default('')->nullable();
            $table->integer('member_id')->default(0)->nullable();
            $table->integer('published')->default(0)->nullable();
            $table->date('date')->default(\Carbon\Carbon::now())->nullable();
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
        Schema::dropIfExists('events');
    }
}
