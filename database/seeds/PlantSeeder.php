<?php

use App\Plantas as Plants;
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
            'tipo_id' => '1',
            'cantidad' => '10'
        ]);
        Plants::create([
            'nombre' => 'Fresno',
            'cientifico' => 'Fraxinus',
            'tipo_id' => '1',
            'cantidad' => '10'
        ]);
        Plants::create([
            'nombre' => 'Boj',
            'cientifico' => 'Buxus',
            'tipo_id' => '2',
            'cantidad' => '10'
        ]);
    }
}
