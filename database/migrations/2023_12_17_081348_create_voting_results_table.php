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
        Schema::create('voting_results', function (Blueprint $table) {
            $table->uuid('voting_result_id')->primary()->default(DB::raw('(UUID())'));
            $table->integer('number');
            $table->foreignId('voting_place_id')->nullable();
            $table->foreign('voting_place_id')->references('id')->on('voting_places');
            $table->foreignId('village_id')->nullable();
            $table->foreign('village_id')->references('id')->on('villages');
            $table->foreignId('district_id')->nullable();
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreignId('voting_zone_id')->nullable();
            $table->foreign('voting_zone_id')->references('id')->on('voting_zones');
            $table->foreignId('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreignId('party_id')->nullable();
            $table->foreign('party_id')->references('id')->on('candidates');
            $table->foreignId('candidate_id')->nullable();
            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voting_results');
    }
};
