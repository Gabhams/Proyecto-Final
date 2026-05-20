<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->string('numero', 10)->unique();
            $table->foreignId('tipo_id')->constrained('tipos_habitacion')->cascadeOnUpdate()->restrictOnDelete();
            $table->decimal('precio_noche', 8, 2);
            $table->unsignedTinyInteger('capacidad')->default(2);
            $table->text('descripcion')->nullable();
            $table->string('foto')->nullable();
            $table->enum('estado', ['disponible', 'ocupada', 'mantenimiento'])->default('disponible');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down(): void { Schema::dropIfExists('habitaciones'); }
};
