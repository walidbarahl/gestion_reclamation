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
        Schema::create('reclamations', function (Blueprint $table) {
    $table->id();

    $table->string('objet');
    $table->text('description');
    $table->string('statut')->default('nouvelle'); // nouvelle, en_cours, traitee

    $table->foreignId('citoyen_id')->constrained('citoyens')->cascadeOnDelete();

    $table->foreignId('direction_id')->nullable()->constrained('directions')->nullOnDelete();
    $table->foreignId('division_id')->nullable()->constrained('divisions')->nullOnDelete();
    $table->foreignId('service_id')->nullable()->constrained('services')->nullOnDelete();

    $table->foreignId('fonctionnaire_id')->nullable()->constrained('fonctionnaires')->nullOnDelete();

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamations');
    }
};
