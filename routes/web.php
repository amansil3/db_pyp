<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/inventario', ['uses' => 'Plants_Controller@Index']);

Route::get('/inventario/{id}', ['uses' => 'Plants_Controller@Index']);

/*
Route::get('/inventario/{id}', function ($id) 
{
    return "Mostrando detalle del elemento: {$id}";
})->where('id', '[0-9]+');

Route::get('/inventario/nuevo', function ()
{
    return 'Crear nuevo elemento';
});
*/