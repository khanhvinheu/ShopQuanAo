<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Categorys', function (Blueprint $table) {
            $table->bigIncrements('id');          
            $table->string('title')->unique();
            $table->bigInteger('idParent')->unsigned()->nullable();
            $table->foreign('idParent')->references('id')->on('Categorys')->onDelete('cascade');
            $table->string('img')->nullable();
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
        Schema::dropIfExists('Categorys');
    }
}
