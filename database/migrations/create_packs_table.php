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
        Schema::create('packs', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('name_short');
            $table->text('desc');
            $table->integer('duration_days');
            $table->integer('duration_nights');
            $table->integer('price');
            $table->integer('min_pax');
            $table->boolean('fac_homestay');
            $table->boolean('fac_guide');
            $table->boolean('fac_insurance');
            $table->integer('fac_meal');
            $table->integer('fac_snack');
            $table->boolean('fac_merchandise');
            $table->boolean('is_deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packs');
    }
};
