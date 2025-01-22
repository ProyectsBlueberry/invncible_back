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
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_product');
            $table->string('storage_mode');
            $table->string('strip_id')->nullValue;
            $table->string('promotional_code')->nullValue;
            $table->boolean('stock');
            $table->timestamps();
            $table->foreign(columns: 'id_product')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'inventories');
    }
};
