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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->integer('number');
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('city')->nullable();
            $table->string('level')->nullable();
            $table->foreignId('voting_zone_id')->nullable();
            $table->foreign('voting_zone_id')->references('id')->on('voting_zones');
            $table->foreignId('party_id')->nullable();
            $table->foreign('party_id')->references('id')->on('parties');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
