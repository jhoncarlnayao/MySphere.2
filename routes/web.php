<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('welcome');
});


// !! MAKE AN ATTENDANCE ROUTE

Route::get('/Attendance', function () {
    return view('MODALS.AddAttendance');
});










// !! OPEN A DISCORD APP
Route::get('/launch-discord', function () {
    try {
        $response = Http::get('http://localhost:3001/launch-discord');

        if ($response->status() === 200) {
            //? Success
            $message = 'Discord has been successfully launched!';
        } else {
            //? Failure
            $message = 'Failed to launch Discord. Please try again.';
        }
    } catch (\Exception $e) {
        //? Error
        $message = 'An error occurred while connecting to the launcher service.';
    }

    return view('NOTIFICATIONS.openapp-notification', compact('message'));
});
