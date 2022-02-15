<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/asset/css/detail.css">
    <title>Book Detail</title>
</head>
<body>
    {{View::make('layout.header')}}
    <div class="containers">
        <div class="titles">
            <h2>E-Book Title</h2>
        </div>
        <div class="item">
            <label for="title">Title</label>
            <p id="title">{{$data[0]->title}}</p>
        </div>
        <div class="item">
            <label for="author">Author</label>
            <p id="author">{{$data[0]->author}}</p>
        </div>
        <div class="item">
            <label for="desc">Description</label>
            <p id="desc">{{$data[0]->description}}</p>
        </div>
        <div class="button-rent">
            <a href="/book/{{$data[0]->title}}/rent">Rent</a>
        </div>
    </div>

    {{View::make('layout.footer')}}
</body>
</html>

