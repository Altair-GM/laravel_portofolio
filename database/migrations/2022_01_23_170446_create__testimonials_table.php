<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_testimonials', function (Blueprint $table) {
            $table->id();
            $table->integer('title1');
            $table->integer('title2');
            $table->integer('img');
            $table->integer('title3');
            $table->integer('txt');
            $table->integer('span');
            // $table->integer();
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
        Schema::dropIfExists('_testimonials');
    }
}
