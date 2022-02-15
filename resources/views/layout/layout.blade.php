<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/asset/css/home.css">
    <title>Amazing EBook</title>
</head>
<body>
    {{View::make('layout.header')}}

    <div class="containers">
        <div class="circle">
            @yield('content')

            
        </div>
    </div>
    {{View::make('layout.footer')}}
</body>
</html>

