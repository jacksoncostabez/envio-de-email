<?php

use App\Mail\newLaravelTips;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('envio-email', function () {

    $user = new stdClass();
    $user->name = 'Jackson Costa';
    $user->email = 'jacksoncostab@gmail.com'; //mail que recebe a msg.

    Mail::send(new newLaravelTips($user));

    // return new newLaravelTips($user);
});