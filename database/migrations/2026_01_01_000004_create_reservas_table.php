<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('habitacion_id')->constrained('habitaciones')->cascadeOnUpdate()->restrictOnDelete();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->decimal('precio_total', 10, 2);
            $table->enum('estado', ['pendiente', 'confirmada', 'cancelada', 'completada'])->default('pendiente');
            $table->text('notas')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down(): void { Schema::dropIfExists('reservas'); }
};
