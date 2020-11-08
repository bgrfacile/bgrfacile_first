<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('subject_id')->constrained();
            $table->string('description')->nullable();
            $table->longText('content');
            $table->string('image')->nullable();
            $table->float('note', 8, 2)->nullable();
            $table->integer('liker')->default(0);
            $table->enum('enligne', [0, 1, 2]);//0: brouillon 1:en ligne 2:semblant de suppression
            $table->timestamps();
//            $table->unsignedBigInteger('user_id');
//            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
