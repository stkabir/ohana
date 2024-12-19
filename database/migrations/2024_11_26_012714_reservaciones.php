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
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id();
            $table->string('folio', 100);
            $table->foreignId('cliente_id')->constrained();
            $table->integer('numero_personas');
            $table->decimal('total', 10, 2);
            $table->timestamps();
        });
        
        Schema::create('reservaciones_personas',function(Blueprint $table) {
            $table->id();
            $table->foreignId("reservaciones_id")->constrained();
            $table->string("nombre",100);
            $table->timestamps();
        });

        Schema::create('reservaciones_detalles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reservaciones_id')->constrained();
            $table->decimal('subtotal', 10,2);
            $table->decimal('impuestos', 10,2);
            $table->timestamps();
        });
        
        Schema::create('reservaciones_detalles_traslados', function(Blueprint $table) {
            $table->id();
            $table->foreignId('reservaciones_detalles_id')->constrained(indexName:'reservacioines_detalles_traslados');
            $table->foreignId('lugar_inicio_id')->constrained('lugares');
            $table->foreignId('lugar_fin_id')->constrained('lugares');
            $table->string('fecha', 40);
            $table->string('hora',20);
            $table->string('aerolinea', 40);
            $table->string('numero_vuelo', 10);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservaciones_detalles_traslados', function (Blueprint $table) {
            $table->dropForeign(['lugar_inicio_id']);
            $table->dropForeign(['lugar_fin_id']);
        });

        Schema::dropIfExists('reservaciones_detalles_traslados');

        
        Schema::table('reservaciones_personas', function (Blueprint $table) {
            $table->dropForeign(['reservaciones_id']);
        });

        Schema::dropIfExists('reservaciones_personas');
        
        
        Schema::table('reservaciones_detalles', function (Blueprint $table) {
            $table->dropForeign(['reservaciones_id']);
        });

        Schema::dropIfExists('reservaciones_detalles');

        
        Schema::table('reservaciones', function (Blueprint $table) {
            $table->dropForeign(['cliente_id']);
        });
        
        Schema::dropIfExists('reservaciones');
    }
};
