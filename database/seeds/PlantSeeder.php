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
            'nombre_vulgar' => 'Tipa',
            'nombre_cientifico' => 'Tipuana',
            'plant_type_id' => '1',
            'cantidad' => '10'
        ]);

        Plants::create([
            'nombre_vulgar' => 'Fresno',
            'nombre_cientifico' => 'Fraxinus',
            'plant_type_id' => '1',
            'cantidad' => '10'
        ]);

        Plants::create([
            'nombre_vulgar' => 'Boj',
            'nombre_cientifico' => 'Buxus',
            'plant_type_id' => '2',
            'cantidad' => '10'
        ]);

        factory(Plants::class)->times(17)->create();
    }
}
