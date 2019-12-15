<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    protected $table = 'plants';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre_vulgar',
        'nombre_cientifico',
        'plant_type_id',
        'cantidad'
    ];

    protected $casts = [
    	'estado' => 'boolean'
    ];

    public function tipo()
    {
    	return $this->belongsTo(PlantType::class);
    }
   
   /*
    factory(Plant::class)->create([
        'profession_id' => $professionId
    ]);
    */
}
