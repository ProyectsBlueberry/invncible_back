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
        Schema::create('link_to', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_product');
            $table->unsignedInteger('id_product_ref');
            $table->timestamps();
            $table->foreign(columns: 'id_product')->references('id')->on('products');
            $table->foreign('id_product_ref')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('link_to');
    }
};
