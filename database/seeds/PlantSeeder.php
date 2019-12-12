<?php

use App\Planta as Plants;
use Illuminate\Database\Seeder;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plants::create([
            'nombre' => 'Tipa',
            'cientifico' => 'Tipuana',
            'plant_type_id' => '1',
            'cantidad' => '10'
        ]);
        Plants::create([
            'nombre' => 'Fresno',
            'cientifico' => 'Fraxinus',
            'plant_type_id' => '1',
            'cantidad' => '10'
        ]);
        Plants::create([
            'nombre' => 'Boj',
            'cientifico' => 'Buxus',
            'plant_type_id' => '2',
            'cantidad' => '10'
        ]);
    }
}
