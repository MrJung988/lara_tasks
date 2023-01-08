<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <!-- Begin Page Content -->
    <div id="popupMessage">
        @if (session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
        @if (session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
        @endif
    </div>
    <div id="container">
        <form action="{{ route('loginUser') }}" method="post">
            @csrf
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <div id="lower">
                <input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
                <input type="submit" value="Login">
            </div>
            <span class="signupLink">Still not registered? &nbsp; <a href="/signup" style="text-decoration: none; color:blue;"> SignUp</a></span>
        </form>
    </div>
    <!-- End Page Content -->
</body>

</html>