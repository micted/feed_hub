<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaystoreRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playstore_rates', function (Blueprint $table) {
            $table->id();
            $table->string('App');
            $table->string('Category');
            $table->string('Rating');
            $table->string('Reviews');
            $table->integer('Size');
            $table->float('Installs');
            $table->string('Type');
            $table->string('Price');
            $table->string('Content_Rating');
            $table->string('Last_Updated');
            $table->string('Current_Ver');
            $table->string('Android_Ver');
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
        Schema::dropIfExists('playstore_rates');
    }
}
