<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantas extends Model
{
    protected $table = 'plants';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'cientifico',
        'tipo_id',
        'cantidad'
    ];

    protected $casts = [
    	'estado' => 'boolean'
    ];

    public function tipo()
    {
    	return $this->belongsTo(PlantType::class);
    }
}
