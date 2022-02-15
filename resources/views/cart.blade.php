<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/asset/css/cart.css">
    <title>Order</title>
</head>
<body>
    {{View::make('layout.header')}}
    <div class="containers">
        <div class="titles">
            <h1>{{Auth::user()->firstname}}, Order Data</h1>
        </div>
        <div class="box">
            @forelse ($data as $item)
            <div class="items">
                <div class="middle">
                    <h2>{{$item->book->title}}</h2>
                    <p>{{$item->book->author}}</p>
                </div>
                <div class="right">
                    <a href="/delete/{{$item->book->id}}">Delete</a>
                </div>
            </div>
            @empty
            <h1>List is Empty!</h1>

            @endforelse

        </div>
        @if (!($data->isEmpty()))
        <div class="checkout">
            <a href="/checkout">Submit</a>
        </div>
        @endif
    </div>

    {{View::make('layout.footer')}}
</body>
</html>

