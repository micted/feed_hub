<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaystoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playstores', function (Blueprint $table) {
            $table->id();
            $table->string('appId')->nullable();            
            $table->string('userName')->nullable();
            $table->string('userImage')->nullable();         
            $table->string('content')->nullable();
            $table->integer('thumbsUpCount')->nullable();  
            $table->float('reviewCreatedVersion')->nullable();   
            $table->string('replyContent')->nullable();
            $table->string('at')->nullable();
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
        Schema::dropIfExists('playstores');
    }
}
