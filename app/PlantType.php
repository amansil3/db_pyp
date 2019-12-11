<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantType extends Model
{
    protected $table = 'plant_type';

    protected $primaryKey = 'id';

    protected $fillable = ['tipo'];
}
