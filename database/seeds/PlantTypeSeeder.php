<?php

use App\PlantType as Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlantTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'tipo' => 'Árbol',
        ]);
        Type::create([
            'tipo' => 'Arbusto',
        ]);
        Type::create([
            'tipo' => 'Plantín',
        ]);
    }
}
