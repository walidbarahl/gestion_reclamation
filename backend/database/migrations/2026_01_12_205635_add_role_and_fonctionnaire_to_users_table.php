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
        Schema::table('users', function (Blueprint $table) {
    $table->string('role')->default('fonctionnaire');
    $table->foreignId('fonctionnaire_id')->nullable()->constrained('fonctionnaires')->nullOnDelete();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
    $table->dropForeign(['fonctionnaire_id']);
    $table->dropColumn(['role', 'fonctionnaire_id']);
});
    }
};
