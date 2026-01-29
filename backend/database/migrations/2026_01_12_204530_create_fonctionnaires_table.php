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
        Schema::create('fonctionnaires', function (Blueprint $table) {
    $table->id();

    $table->string('civilite')->nullable();
    $table->string('nom');
    $table->string('prenom');
    $table->string('nom_ar')->nullable();
    $table->string('prenom_ar')->nullable();

    $table->string('cin')->unique();
    $table->string('telephone')->nullable();
    $table->string('email')->nullable();

    $table->foreignId('direction_id')->nullable()->constrained('directions')->nullOnDelete();
    $table->foreignId('division_id')->nullable()->constrained('divisions')->nullOnDelete();
    $table->foreignId('service_id')->nullable()->constrained('services')->nullOnDelete();

    $table->timestamps();
    $table->softDeletes();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fonctionnaires');
    }
};
