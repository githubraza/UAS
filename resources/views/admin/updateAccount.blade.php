<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/asset/css/updaterole.css">
    <title>Update Account</title>
</head>
<body>
    {{View::make('layout.header')}}
    <div class="containers">
        <h2>{{$data[0]->firstname}} - {{$data[0]->role->role_desc}}</h2>

        <form action="/account/maintenance/{{$data[0]->id}}/update" method="post">
            @csrf
            {{ method_field('PUT') }}
            <div class="inputs">
                <p>Role</p>
                <select name="role" id="role">
                    @if ($data[0]->role_id==1)
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                    @else
                    <option value="2">User</option>
                    <option value="1">Admin</option>
                    @endif
                </select>
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
    {{View::make('layout.footer')}}
</body>
</html>
