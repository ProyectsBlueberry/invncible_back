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
        Schema::create('service', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('status');

            $table->unsignedInteger('id_service');
            $table->foreign('id_service')->references('id')->on('service');

            $table->timestamps();
        });
        Schema::create('subcategories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('status');

            $table->unsignedInteger('id_category');
            $table->foreign('id_category')->references('id')->on('categories');

            $table->timestamps();
        });

        Schema::create('filters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('label');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sku');
            $table->string('filter_value');
            $table->string('storage_type');
            $table->string('status');

            $table->unsignedInteger('id_subcategory');
            $table->foreign('id_subcategory')->references('id')->on('subcategories');

            $table->unsignedInteger('id_filter');
            $table->foreign('id_filter')->references('id')->on('filters');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Service');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('subcategories');
        Schema::dropIfExists('filters');
        Schema::dropIfExists('products');

    }
};
