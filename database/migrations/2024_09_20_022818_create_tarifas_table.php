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
            $table->foreignId('servicio_id')->constrained();
            $table->foreignId('origen_id')->constrained('lugares');
            $table->foreignId('destino_id')->constrained('lugares');
            $table->string('pax1', 3);
            $table->string('pax2', 3);
            $table->decimal('precio', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tarifas', function (Blueprint $table) {
            $table->dropForeign(['servicio_id']);
            $table->dropForeign(['origen_id']);
            $table->dropForeign(['destino_id']);
        });
        Schema::dropIfExists('tarifas');
    }
};
