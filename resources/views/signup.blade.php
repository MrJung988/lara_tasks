<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
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
        <form action="{{ route('signupUser') }}" method="post">
            @csrf
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <span class="text-danger small required">@error('username') {{$message}} @enderror</span>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <span class="text-danger small required">@error('email') {{$message}} @enderror</span>

            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password">
            <span class="text-danger small required">@error('new_password') {{$message}} @enderror</span>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password">
            <span class="text-danger small required">@error('confirm_password') {{$message}} @enderror</span>

            <div id="lower">
                <input type="submit" value="SignUp">
            </div>
            <span class="loginLink">Already SignUp? &nbsp; <a href="/login" style="text-decoration: none; color:blue;">Login</a></span>
        </form>
    </div>
    <!-- End Page Content -->
</body>

</html>