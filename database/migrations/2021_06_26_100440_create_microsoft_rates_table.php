<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMicrosoftRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('microsoft_rates', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Rating');
            $table->integer('No_of_people_Rated');
            $table->string('Category');
            $table->string('Date');
            $table->string('Price');
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
        Schema::dropIfExists('microsoft_rates');
    }
}
