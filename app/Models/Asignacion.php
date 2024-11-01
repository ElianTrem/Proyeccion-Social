<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = 'asignaciones'; 
    protected $primaryKey = 'id_asignacion'; 
    public $timestamps = false;

    protected $fillable = [
        'id_proyecto',
        'id_estudiante',
        'id_tutor',
        'fecha_asignacion'
    ];

    
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto');
    }

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }

    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'id_tutor');
    }
}