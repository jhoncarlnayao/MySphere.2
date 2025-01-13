<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class BotManController extends Controller
{
    public function BotMan(Request $request) { 
        // Get the incoming message and convert it to lowercase
        $message = strtolower($request->input('message'));

        // Define responses
        $responses = [
            'hello' => 'Hi there! Fuujin!',
            'haloo' => 'Hi there! Fuujin!',
            'hi' => 'Hi there! Fuujin!',
            'how are you' => 'I am just a bot, but I am fine!',
            'bye' => 'Goodbye!',
            'suggest a good anime' => [
            'text' => 'If you love action and comedy, you should watch *Sakamoto Days*! It’s about a retired hitman living a peaceful life… or at least trying to! 🔥😎',
            'img' => [
                asset('img/sakamoto1.jpg'),
                asset('img/sakamoto2.jpg')
            ]
            ],
            'thankyou' => 'You\'re welcome!',
            'tell me a joke' => [
            'jokes' => [
                'Why do programmers prefer dark mode? Because light attracts bugs! 🐞',
                'Why did the developer go broke? Because he used up all his cache! 💸',
                'How do you comfort a JavaScript bug? You console it. 😎',
                'Why did the computer get cold? It forgot to close its Windows! 🖥️❄️',
                'What do you call a programmer from Finland? Nerdic. 🇫🇮💻',
                'Why was the computer tired when it got home? It had too many tabs open! 💤',
                'Why don’t bachelors like Git? Because they are afraid to commit. 💍',
                '404 joke not found. 🚫',
                'How did the hacker escape the police? He just ransomware! 🏃‍♂️💻',
                'Why was the smartphone acting lazy? It had too many apps running in the background! 📱'
            ]
            ],

            // 'bye' =>[
            //     'text' => 'Goodbye!!',
            //     'img' => asset('img/adiosmessage.jpg')
            // ]
        ];

// !!!!!! This is the code for the calculator !!!!!! STARTTTT=====================================================================================================
        if (preg_match('/(\d+)\s*\+\s*(\d+)/', $message, $matches)) {
            $num1 = $matches[1];
            $num2 = $matches[2];
            $sum = $num1 + $num2;  // Perform the addition
            
            // Return the result of the addition
            return response()->json([
                'reply' => "The result of $num1 + $num2 is $sum.",
                'follow_up' => 'How can I assist you further?'
            ]);
        }

        if (preg_match('/(\d+)\s*\*\s*(\d+)/', $message, $matches)) {
            $num1 = $matches[1];
            $num2 = $matches[2];
            $product = $num1 * $num2;  // Perform the multiplication
            
            // Return the result of the multiplication
            return response()->json([
                'reply' => "The result of $num1 * $num2 is $product.",
                'follow_up' => 'How can I assist you further?'
            ]);
        }

        if (preg_match('/(\d+)\s*\/\s*(\d+)/', $message, $matches)) {
            $num1 = $matches[1];
            $num2 = $matches[2];
            if ($num2 == 0) {
                return response()->json([
                    'reply' => "Division by zero is not allowed.",
                    'follow_up' => 'How can I assist you further?'
                ]);
            }
            $quotient = $num1 / $num2;  // Perform the division
            
            // Return the result of the division
            return response()->json([
                'reply' => "The result of $num1 / $num2 is $quotient.",
                'follow_up' => 'How can I assist you further?'
            ]);
        }

        if (preg_match('/(\d+)\s*\-\s*(\d+)/', $message, $matches)) {
            $num1 = $matches[1];
            $num2 = $matches[2];
            $difference = $num1 - $num2;  // Perform the subtraction
            
            // Return the result of the subtraction
            return response()->json([
                'reply' => "The result of $num1 - $num2 is $difference.",
                'follow_up' => 'How can I assist you further?'
            ]);
        }
// !!!!!! This is the code for the calculator !!!!!! ENDDDD=====================================================================================================





        // If no match for addition, check predefined responses
        $reply = $responses[$message] ?? "I don't understand that.";


// !!!!!!!!!!! This is the code for a random jokes =======================================================================
        if ($message === 'yes' && Session::get('last_interaction') === 'joke') {
            $jokes = $responses['tell me a joke']['jokes'];
            $randomJoke = $jokes[array_rand($jokes)];
            return response()->json([
                'reply' => $randomJoke,
                'follow_up' => 'Want to hear another one?'
            ]);
        }


        if (isset($reply['jokes'])) {
            $randomJoke = $reply['jokes'][array_rand($reply['jokes'])];
            
            Session::put('last_interaction', 'joke');
    
            return response()->json([
                'reply' => $randomJoke,
                'follow_up' => 'Want to hear another one?'
            ]);
        }
// !!!!!!!!!!! This is the code for a random jokes =======================================================================

        // If the reply is an array (with both text and images)
        if (is_array($reply)) {
            // Send the response and a follow-up message
            return response()->json([
                'text' => $reply['text'],
                'img' => $reply['img'],
                'follow_up' => 'Hello there! How can I assist you further?'
            ]);
        }

        // Default text-only reply
        return response()->json([
            'reply' => $reply,
            'follow_up' => 'How can I assist you further?'
        ]);
        
    }
}
