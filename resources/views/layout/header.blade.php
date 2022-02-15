<link rel="stylesheet" href="/asset/css/main.css">

<div class="navbar">
    <div class="navbar-top">
        <div class="title">
            <h1>Amazing E-Book</h1>
        </div>
        <div class="right">
            @guest
            <a href="/signup">Sign Up</a>
            <a href="/login">Log In</a>
            @else
            <a href="/logout">Log Out</a>
            @endguest
        </div>
    </div>

    @guest

    @else
    <div class="navbar-bot">
        <a href="/home">Home</a>
        <a href="/cart">Cart</a>
        <a href="/profile">Profile</a>
        @if (Auth::user()->role_id==1)
        <a href="/account/maintenance">Account Maintenance</a>
        @endif
    </div>
    @endguest
</div>
