<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BotManController extends Controller
{
    public function BotMan (Request $request) { 
        $message = strtolower($request->input('message'));

        $responses = [
            'hello' => 'Hi there! Fuujin!',
            'how are you' => 'I am just a bot, but I am fine!',
            'bye' => 'Goodbye!',
            'america ya' => [
    'text' => 'America ya!',
    'img'  => [
        asset('img/chatlogo.jpg'),
        asset('img/chatlogo.jpg')
    ]
]

        ];
        
    
    $reply = $responses[$message] ?? "I don't understand that.";
    if (is_array($reply)) {
    return response()->json($reply);
}
        return response()->json(['reply' => $reply]);

}
}