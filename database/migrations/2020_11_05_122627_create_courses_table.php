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
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('subject_id')->constrained();
            $table->text('description')->nullable();
            $table->longText('content');
            $table->text('image_path')->nullable();
            $table->integer('liker')->default(0);
            $table->enum('enligne', [0, 1, 2])->default(0);//0: brouillon 1:en ligne 2:semblant de suppression
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
        Schema::dropIfExists('cours');
    }
}
