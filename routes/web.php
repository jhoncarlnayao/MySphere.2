<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ContentController;
use App\Models\AttendanceModel;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use App\Http\Controllers\BotManController;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     $attendances = AttendanceModel::all(); 
//     return view('welcome', compact('attendances'));
// });

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [AttendanceController::class, 'ViewAttendance'])->name('attendance.view');

Route::get('/content2', function () {
    return view('CONTENTS.content2');
});




// ?? MAKE AN ATTENDANCE ROUTE
Route::get('/Attendance', function () {
    return view('MODALS.AddAttendance');
});

// ?? DELETE MODAL ROUTE
Route::get('/DeleteModal', function () {
    return view('MODALS.DeleteConfirmation');
});



// !! ROUTE FOR ADDING NEW ATTENDANCE
Route::post('/AddAttendance',[AttendanceController::class, 'MakeAttendance']) -> name('AddAttendance');

// !! ROUTE FOR DELETING ATTENDANCE
Route::delete('AttendanceData/{id}', [AttendanceController::class, 'DeleteAttendance'])->name('DeleteAttendance');

//! ROUTE FOR VIEWING ATTENDANCE IN A TABLE
// Route::get('/', [AttendanceController::class, 'ViewAttendance'])->name('attendance.view');

// !! ROUTE FOR CONTENT PAGE SELECTING
Route::get('/content/{type}', [ContentController::class, 'loadContent'])->name('load.content');


// !! BOT MAN ROUTE
// Route::post('/simple-chat', function (Request $request) {
//     $message = strtolower($request->input('message'));

//     $responses = [
//         'hello' => 'Hi there!',
//         'how are you' => 'I am just a bot, but I am fine!',
//         'bye' => 'Goodbye!',
//     ];
    

//     $reply = $responses[$message] ?? "I don't understand that.";

//     return response()->json(['reply' => $reply]);
// });
Route::post('/simple-chat', [BotManController::class, 'BotMan'])->name('simple-chat');







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
