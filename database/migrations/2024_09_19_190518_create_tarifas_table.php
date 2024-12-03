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
        Schema::create('tarifas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('origen_id')->constrained('lugares');
            $table->foreignId('destino_id')->constrained('lugares');
            $table->foreignId('unidad_id')->constrained('unidades');
            $table->string('pax1', 10);
            $table->string('pax2', 10);
            $table->decimal('precio1', 10, 2);
            $table->decimal('precio2', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tarifas', function (Blueprint $table) {
            $table->dropForeign(['origen_id']);
            $table->dropForeign(['destino_id']);
            $table->dropForeign(['unidad_id']);
        });
        Schema::dropIfExists('tarifas');
    }
};
