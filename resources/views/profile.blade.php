<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/asset/css/login-reg.css">
    <title>Profile</title>
</head>
<body>
    {{View::make('layout.header')}}

    <div class="containers">
        <div class="picture">
            <img src="{{Storage::url(Auth::user()->profile)}}" alt="">
        </div>
        <form action="/profile/update" method="post" enctype="multipart/form-data">
            @csrf
            <div class="lefts">
                <div class="inputs">
                    <p>First Name</p>
                    <input type="text" name="firstname" id="firstname" value="{{Auth::user()->firstname}}">
                </div>
                @if ($errors->has('firstname'))
                <div class="error-box">
                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                </div>
                @endif
                <div class="inputs">
                    <p>Last Name</p>
                    <input type="text" name="lastname" id="lastname" value="{{Auth::user()->lastname}}">
                </div>
                @if ($errors->has('lastname'))
                <div class="error-box">
                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                </div>
                @endif
                <div class="inputs radio">
                    <p>Gender</p>
                    @if (Auth::user()->gender_id==1)
                    <input type="radio" name="gender" id="male" value="1" checked>
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="2">
                    <label for="female">Female</label>
                    @else
                    <input type="radio" name="gender" id="male" value="1" >
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="2" checked>
                    <label for="female">Female</label>

                    @endif
                </div>
                @if ($errors->has('gender'))
                <div class="error-box">
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                </div>
                @endif
                <div class="inputs">
                    <p>Password</p>
                    <input type="password" name="password" id="password">
                </div>
                @if ($errors->has('password'))
                <div class="error-box">
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                </div>
                @endif
                <button type="submit">Update Profile</button>
            </div>
            <div class="rights">
                <div class="inputs">
                    <p>Middle Name</p>
                    <input type="text" name="middlename" id="middlename"value="{{Auth::user()->middlename}}">
                </div>
                @if ($errors->has('middlename'))
                <div class="error-box">
                    <span class="text-danger">{{ $errors->first('middlename') }}</span>
                </div>
                @endif
                <div class="inputs">
                    <p>Email Address</p>
                    <input type="email" name="email" id="email" value="{{Auth::user()->email}}">
                </div>
                @if ($errors->has('email'))
                <div class="error-box">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                @endif
                <div class="inputs roles">
                    <p>Role</p>
                    <legend>{{Auth::user()->role->role_desc}}</legend>
                </div>
                @if ($errors->has('role'))
                <div class="error-box">
                    <span class="text-danger">{{ $errors->first('role') }}</span>
                </div>
                @endif
                <div class="inputs file">
                    <p>Display Picture</p>
                    <input type="file" name="picture" id="picture">
                </div>
                @if ($errors->has('picture'))
                <div class="error-box">
                    <span class="text-danger">{{ $errors->first('picture') }}</span>
                </div>
                @endif
            </div>
        </form>
    </div>
    {{View::make('layout.footer')}}

</body>
</html>

