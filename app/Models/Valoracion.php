<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model {
    use HasFactory;
    protected $table = 'valoraciones';
    protected $fillable = ['cliente_id', 'habitacion_id', 'puntuacion', 'comentario'];
    protected $casts = ['puntuacion' => 'integer'];

    public function cliente() { return $this->belongsTo(User::class, 'cliente_id'); }
    public function habitacion() { return $this->belongsTo(Habitacion::class, 'habitacion_id'); }
}
