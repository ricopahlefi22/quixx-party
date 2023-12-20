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
        Schema::create('voting_zones', function (Blueprint $table) {
            $table->uuid('voting_zone_id')->primary()->default(DB::raw('(UUID())'));
            $table->string('name');
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
        Schema::dropIfExists('voting_zones');
    }
};
