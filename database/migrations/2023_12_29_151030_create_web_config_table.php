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
        Schema::create('web_config', function (Blueprint $table) {
            $table->id();
            $table->string('token');
            $table->foreignUuid('party_id')->nullable();
            $table->foreign('party_id')->references('party_id')->on('parties');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_config');
    }
};
