<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/asset/css/cart.css">
    <title>Account Maintenance</title>
</head>
<body>
    {{View::make('layout.header')}}
    <div class="containers">
        <div class="titles">
            <h1>Account Maintenance</h1>
        </div>
        <div class="box maintenance">
            @forelse ($data as $item)
            <div class="items">
                <div class="left">
                    <h2>{{$item->firstname}} - {{$item->role->role_desc}}</h2>
                </div>
                <div class="middle maintenance">
                    <a href="/account/maintenance/{{$item->id}}">Update Role</a>
                </div>

                <div class="right maintenance">
                    <a href="/delete/user/{{$item->id}}">Delete User</a>
                </div>
            </div>
            @empty
            <h1>List is Empty!</h1>
            @endforelse
        </div>
    </div>
    {{View::make('layout.footer')}}
</body>
</html>
