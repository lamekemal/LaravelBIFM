<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Selling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->boolean('status')->default(0);

            $table->string('slug');
            $table->foreign('slug')->references('slug')->on('products');
            $table->string('title');
            $table->foreign('title')->references('title')->on('products');
            $table->string('price');
            $table->foreign('price')->references('price')->on('products');
            $table->longText('description');
            $table->foreign('description')->references('description')->on('products');
            $table->string('image_path');
            $table->foreign('image_path')->references('image_path')->on('products');
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
        //
    }
}
