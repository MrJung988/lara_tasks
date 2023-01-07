<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>

<body>
    <!-- Begin Page Content -->
    <div id="container">
        <form action="" method="post">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname">

            <label for="firstname">Last Name:</label>
            <input type="text" id="firstname" name="firstname">

            <label for="firstname">Email:</label>
            <input type="text" id="firstname" name="firstname">

            <label for="firstname">New Password:</label>
            <input type="text" id="firstname" name="firstname">

            <label for="firstname">Confirm Password:</label>
            <input type="text" id="firstname" name="firstname">

            <div id="lower">
                <input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
                <input type="submit" value="SignUp">
            </div>
            <span class="loginLink">Already SingUp? &nbsp; <a href="/login" style="text-decoration: none; color:blue;">Login</a></span>
        </form>
    </div>
    <!-- End Page Content -->
</body>

</html>