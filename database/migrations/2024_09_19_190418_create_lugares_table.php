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
        Schema::create('lugares', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 70);
            $table->string('clave', 10)->nullable();
            $table->string('tipo', 30)->nullable();
            $table->foreignId('zona_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lugares', function (Blueprint $table) {
            $table->dropForeign(['zona_id']);
        });

        Schema::dropIfExists('lugares');
    }
};
