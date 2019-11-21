<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlantasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function index()
    {
        $plants = DB::table('plants')->post();

        return view('ruta',['plants' => $plants])->with('Consulta');
    }

    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('cientifico');
            $table->string('tipo');
            $table->integer('cantidad');
            $table->boolean('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plants');
    }
}
