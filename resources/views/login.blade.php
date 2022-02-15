<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/asset/css/login-reg.css">
    <title>Log In</title>
</head>
<body>
    {{View::make('layout.header')}}

    <div class="containers">
        <div class="titles">
            <h1>Log In</h1>
        </div>
        <form action="/login/users" method="post" >
            @csrf
            <div class="lefts">
                @if ($errors->has('errs'))
                <div class="error-box">
                    <span class="text-danger">{{ $errors->first('errs') }}</span>
                </div>
                @endif
                <div class="inputs">
                    <p>Email</p>
                    <input type="email" name="email" id="email">
                </div>
                @if ($errors->has('email'))
                <div class="error-box">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
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
                <button type="submit">Log In</button>
                <div class="link">
                    <a href="/signup">Have an Account?</a>
                </div>
            </div>
        </form>
    </div>
    {{View::make('layout.footer')}}


</body>
</html>
