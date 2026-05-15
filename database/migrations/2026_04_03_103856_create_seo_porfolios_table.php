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
        Schema::create('seo_porfolios', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('title')->nullable();
            $table->json('seo_results')->nullable();
            $table->json('result_images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_porfolios');
    }
};
