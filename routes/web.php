<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatti', function(){

    $contatti = [
        [
            'name'=> 'Francesco ',
            'surname'=> 'Mancino',
            'age'=> '20',
            'img'=> '/images/francesco.jpg',
        ],
        [
            'name'=> 'Wiliam',
            'surname'=> 'Signorini',
            'age'=> '22',
            'img'=> '/images/wiliam.jpg',
        ],
        [
            'name'=> 'Simone',
            'surname'=> 'Mongelli',
            'age'=> '19',
            'img'=> '/images/simone.jpg',
        ],

    ];
    $contatti2 = [
        [
            'name'=> 'Giovanni ',
            'surname'=> 'Lello',
            'age'=> '20',
            'img'=> '/images/giovanni.jpg',
        ],
        [
            'name'=> 'Lorenzo',
            'surname'=> 'Bianco',
            'age'=> '22',
            'img'=> '/images/lorenzo.jpg',
        ],
        [
            'name'=> 'Patrizio',
            'surname'=> 'Lucarelli',
            'age'=> '19',
            'img'=> '/images/patrizio.jpg',
        ],

    ];


    return view('contatti',['contatti'=> $contatti],['contatti2'=> $contatti2]);
});

Route::get('/chi-siamo', function(){
    return view('chiSiamo');
});