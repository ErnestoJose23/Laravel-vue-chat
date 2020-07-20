<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row" id="app">
            
            <ul class="list-group offset-4 col-4">
                <li class="list-group-item active">Chat Room</li>
                <example-component></example-component>
                <input type="text" class="form-control" placeholder="Type your message" v-model='message' @keyup.enter='send'>
               
            </ul>
        </div>
    </div>
    
    <script src="{{ asset('js/app.js')  }}"></script>
</body>
</html>
