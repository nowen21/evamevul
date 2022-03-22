<?php

use Illuminate\Support\Facades\Route;

$routexxx = 'welcomex';
$controll = 'Frontend\Welcomex\FWelcomexController@';
Route::group(['prefix' => '/'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
    ])->name($routexxx);

    Route::get('listaxxx', [
        'uses' => $controll . 'getListaxxx',
    ])->name($routexxx . '.listaxxx');

    Route::post('activoxx', [
        'uses' => $controll . 'getActivos',
    ])->name($routexxx . '.activoxx');

    Route::post('impactos', [
        'uses' => $controll . 'getImpactosAjax',
    ])->name($routexxx . '.impactos');

    Route::post('probabil', [
        'uses' => $controll . 'getProbabilAjax',
    ])->name($routexxx . '.probabil');


});
