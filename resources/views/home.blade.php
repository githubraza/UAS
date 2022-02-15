<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/asset/css/book.css">
    <title>Books</title>
</head>
<body>
    {{View::make('layout.header')}}

    <div class="containers">
        <div class="box">
            <div class="titles">
                <div class="left">
                    <p>Author</p>
                </div>
                <div class="right">
                    <p>Title</p>
                </div>
            </div>

            @foreach ($data as $item)
            <div class="items">

                <div class="left">
                    <p>{{$item->author}}</p>
                </div>
                <div class="right">
                    <a href="/book/{{$item->title}}">{{$item->title}}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>



    {{View::make('layout.footer')}}
</body>
</html>
