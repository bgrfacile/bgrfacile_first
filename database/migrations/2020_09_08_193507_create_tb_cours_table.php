<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cours', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->integer('matieres_id');
            $table->integer('niveaux_id');
            $table->string('name');
            $table->string('resume')->nullable();
            $table->longText('content');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('tb_cours');
    }
}
