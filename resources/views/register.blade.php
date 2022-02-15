<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/asset/css/login-reg.css">
    <title>Sign Up</title>
</head>

<body>
    {{View::make('layout.header')}}

    <div class="containers">
        <div class="titles">
            <h1>Sign Up</h1>
        </div>
        <form action="/signup/users" method="post" enctype="multipart/form-data">
            @csrf
            <div class="lefts">
                <div class="inputs">
                    <p>First Name</p>
                    <input type="text" name="firstname" id="firstname">
                </div>
                @if ($errors->has('firstname'))
                <div class="error-box">
                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                </div>
                @endif
                <div class="inputs">
                    <p>Last Name</p>
                    <input type="text" name="lastname" id="lastname">
                </div>
                @if ($errors->has('lastname'))
                <div class="error-box">
                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                </div>
                @endif
                <div class="inputs radio">
                    <p>Gender</p>
                    <input type="radio" name="gender" id="male" value="1">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="2">
                    <label for="female">Female</label>
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
                <button type="submit">Sign Up</button>
                <div class="link">
                    <a href="/login">Already Have an Account?</a>
                </div>
            </div>
            <div class="rights">
                <div class="inputs">
                    <p>Middle Name</p>
                    <input type="text" name="middlename" id="middlename">
                </div>
                @if ($errors->has('middlename'))
                <div class="error-box">
                    <span class="text-danger">{{ $errors->first('middlename') }}</span>
                </div>
                @endif
                <div class="inputs">
                    <p>Email Address</p>
                    <input type="email" name="email" id="email">
                </div>
                @if ($errors->has('email'))
                <div class="error-box">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                @endif
                <div class="inputs select">
                    <p>Role</p>
                    <select name="role" id="role">
                        <option value=""></option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
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
