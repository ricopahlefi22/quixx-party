<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('voting_places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('village_id')->nullable();
            $table->foreign('village_id')->references('id')->on('villages');
            $table->foreignId('district_id')->nullable();
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreignId('voting_zone_id')->nullable();
            $table->foreign('voting_zone_id')->references('id')->on('voting_zones');
            $table->foreignId('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voting_places');
    }
};
