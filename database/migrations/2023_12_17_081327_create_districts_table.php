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
        Schema::create('districts', function (Blueprint $table) {
            $table->uuid('district_id')->primary();
            $table->string('name');
            $table->foreignUuid('voting_zone_id')->nullable();
            $table->foreign('voting_zone_id')->references('voting_zone_id')->on('voting_zones');
            $table->foreignUuid('city_id')->nullable();
            $table->foreign('city_id')->references('city_id')->on('cities');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};
