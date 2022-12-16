<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    $data = [
        'people' => [
            [
                'image' => '../img/simone.png',
                'role' => 'Leader Supremo',
                'description' => 'Di che cosa, bene, non si sà'

            ],

            [
                'image' => '../img/gabriele.png',
                'role' => 'Altissimo Leader',
                'description' => 'Di che cosa, bene, non si sà'

            ],

            [
                'image' => '../img/alessio.png',
                'role' => 'Leader dei Leader',
                'description' => 'Di che cosa, bene, non si sà'

            ],
        ]
    ];

    return view('about', $data);
})->name('about');
