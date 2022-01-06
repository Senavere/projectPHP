<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="css/login-register.css" rel="stylesheet">

</head>
<body>

    <h1 class="login-header">Instagram</h1>

    <h3 class="login-second-header">Login</h3>

    <form class="login-form">
        <div class="login-input">
            <label>Username</label>
            <input type="text" require>
        </div>
        <div class="login-input">
            <label>Password</label>
            <input type="text" require>
        </div>
    </form>

    <div class="login-btns">
        <button type="submit" class="login-btn">Continue</button>
        <a href="register.php"><button type="submit" class="login-btn">Register</button></a>
    </div>

</body>
</html>