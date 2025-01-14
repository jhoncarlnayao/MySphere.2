<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/content2.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="dark:bg-neutral-900 dark:border-neutral-700">
    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70" id="card-1">
        <div class="bg-gray-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
            <h3 class="text-lg font-bold text-gray-800 dark:text-white">Chat Bot</h3>
        </div>

        <div class="m-5" id="messages-box">
            <!-- Messages will appear here -->
        </div>

        {{-- SEND A MESSAGE TEXT AREA --}}
        <div id="send-message" class="relative flex-grow flex flex-col justify-end p-4">
            <div class="relative w-full">
                <textarea
                    class="max-h-36 py-3 ps-4 pe-20 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 resize-none overflow-y-auto"
                    placeholder="Enter your message..." rows="1"
                    data-hs-textarea-auto-height='{"defaultHeight": 48}'></textarea>
                <div class="absolute top-2 right-3 z-10">
                    <button id="send-button" type="button"
                        class="py-1.5 px-3 inline-flex shrink-0 justify-center items-center text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:bg-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send">
                            <path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z" />
                            <path d="m21.854 2.147-10.94 10.939" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const sendButton = document.getElementById('send-button');
        const messageInput = document.querySelector('textarea');
        const messageBox = document.getElementById('messages-box');

        sendButton.addEventListener('click', function() {
            const userMessage = messageInput.value.trim();
            if (userMessage === '') return;

        //    THIS IS THE MESSAGE USER SENT
            messageBox.innerHTML += `<div class="text-right my-2">
                <li class="flex ms-auto gap-x-2 sm:gap-x-4">
                    <div class="grow text-end space-y-3">
                        <div class="inline-flex flex-col justify-end">
                            <div class="inline-block bg-blue-600 rounded-2xl p-4 shadow-sm">
                                <p class="text-sm text-white">${userMessage}</p>
                            </div>
                            <span class="mt-1.5 ms-auto flex items-center gap-x-1 text-xs text-gray-500 dark:text-neutral-500">
                                <svg class="shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 6 7 17l-5-5"></path>
                                    <path d="m22 10-7.5 7.5L13 16"></path>
                                </svg>
                                Sent
                            </span>
                        </div>
                    </div>
                    <span class="shrink-0 inline-flex items-center justify-center size-[38px] rounded-full bg-gray-600">
                        <img src="{{ asset('img/chatlogo.jpg') }}" alt="" class="border rounded-full">
                    </span>
                </li>
            </div>`;

            // Send the message to the server
            fetch('/simple-chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ message: userMessage })
            })
            .then(response => response.json())
            .then(data => {
                let botReply = '';

                // Check if the response contains text and images
                if (data.text && data.img) {
                    botReply = `
                        <div class="text-left my-2">
                            <span class="px-3 py-2 bg-gray-300 rounded-lg">${data.text}</span><br>
                            <img src="${data.img[0]}" alt="Bot Image 1" width="200" class="mt-2 rounded-lg"><br>
                            <img src="${data.img[1]}" alt="Bot Image 2" width="200" class="mt-2 rounded-lg">
                        </div>`;
                } else {
                    // Default to text-only response
                    botReply = `<div class="text-left my-2 mb-4"><span class="px-3 py-2 bg-gray-300 rounded-lg">${data.reply}</span></div>`;
                }

                // Add the follow-up message
                botReply += `<div class="text-left my-2 mb-4"><span class="px-3 py-2 bg-gray-300 rounded-lg">${data.follow_up}</span></div>`;

                // Show the bot's reply and the follow-up message
                messageBox.innerHTML += botReply;
                
                // Scroll to the bottom of the message box
                messageBox.scrollTop = messageBox.scrollHeight;
            });

            // Clear the input field
            messageInput.value = '';
        });
    });
    </script>
</body>

</html>
