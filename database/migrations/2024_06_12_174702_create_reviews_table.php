<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('restaurant_name');
            $table->text('review');
            $table->unsignedTinyInteger('rating'); // assuming a rating out of 5
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}


