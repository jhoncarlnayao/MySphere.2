<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\AttendanceController;
use App\Models\AttendanceModel;

// Route::get('/', function () {
//     $attendances = AttendanceModel::all(); 
//     return view('welcome', compact('attendances'));
// });

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [AttendanceController::class, 'ViewAttendance'])->name('attendance.view');


Route::get('/content', function () {
    return view('CONTENTS.content');
}) ->name('content');


// !! MAKE AN ATTENDANCE ROUTE
Route::get('/Attendance', function () {
    return view('MODALS.AddAttendance');
});

// !! ROUTE FOR ADDING NEW ATTENDANCE
Route::post('/AddAttendance',[AttendanceController::class, 'MakeAttendance']) -> name('AddAttendance');


//! ROUTE FOR VIEWING ATTENDANCE IN A TABLE
// Route::get('/', [AttendanceController::class, 'ViewAttendance'])->name('attendance.view');




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
