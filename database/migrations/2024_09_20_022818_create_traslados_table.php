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
        Schema::create('traslados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tarifa_id')->constrained();
            $table->string('nombre', 100);
            $table->string('email', 100);
            $table->string('telefono', 20);
            $table->boolean('estatus')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('traslados', function (Blueprint $table) {
            $table->dropForeign(['tarifa_id']);
        });
        Schema::dropIfExists('traslados');
    }
};
