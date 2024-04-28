<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('energy_drinks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id');
            $table->string('description');
            $table->integer('content');
            $table->boolean('sugar_free')->default(false);
            $table->decimal('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('energy_drinks');
    }
};
