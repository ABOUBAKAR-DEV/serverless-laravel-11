<?php

use Illuminate\Support\Facades\Route;
use Bref\Context\Context;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    echo 'Hello  world';
    DB::table('users')->insert([
        'name' => 'Abk ',
        'email' => 'foumbot',
        'password'=>now()
    ]);
    return view('welcome');
});
