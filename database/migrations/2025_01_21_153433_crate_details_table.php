<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_product');
            $table->string('first_title');
            $table->string('second_title');
            $table->string('subtitle');
            $table->string('description');
            $table->timestamps();
            $table->foreign('id_product')->references('id')->on('products');
            
                
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'details');
    }
};
