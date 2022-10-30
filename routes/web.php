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
    return view('home',[
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});
Route::get('/records', function(){
    $records = [
        [
            "record_title" => "Januari 2022",
            "income" => 500000,
            "expense" => 300000,
            "summary" => ""
        ],
        [
            "record_title" => "Februari 2022",
            "income" => 300000,
            "expense" => 700000,
            "summary" => ""
        ]

    ];
    return view('records',[
        "title" => "Records",
        "records" => $records
    ]);
});
