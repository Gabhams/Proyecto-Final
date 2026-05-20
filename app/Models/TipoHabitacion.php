<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoHabitacion extends Model {
    use HasFactory;
    protected $table = 'tipos_habitacion';
    protected $fillable = ['nombre', 'descripcion'];

    public function habitaciones() { return $this->hasMany(Habitacion::class, 'tipo_id'); }
}
