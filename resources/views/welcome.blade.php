<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="layout">
        <div class="sidebar">
            {{-- !! SIDE BAR --}}
            @include('SIDE-BAR.sidebar')
        </div>
        <div class="content" id="content">
            {{-- !! CONTENT --}}
            @include('CONTENTS.content')
        </div>
    </div>
    
      

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/preline/dist/preline.js"></script>
    <script>
        document.querySelectorAll('.sidebar-button').forEach(button => {
            button.addEventListener('click', function() {
                let contentId = button.getAttribute('data-content');  // Get the content identifier

                fetchContent(contentId);  // Call the function to load the content
            });
        });

        function fetchContent(contentId) {
            fetch(`/load-content/${contentId}`)  // Request content from server
                .then(response => response.text())
                .then(data => {
                    document.getElementById('content').innerHTML = data;  // Inject the content into the content area
                })
                .catch(error => console.error('Error loading content:', error));
        }
    </script>
</body>
</html>
