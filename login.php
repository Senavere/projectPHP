<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="css/login-register.css" rel="stylesheet">

</head>
<body class="login-body">

    <main class="login-main">
        <h1 class="login-header">Instagram</h1>

        <h3 class="login-second-header">Login</h3>

        <form class="login-form">
            <div class="login-input">
                <label>Username</label>
                <input type="text" placeholder="Enter username here..." require>
            </div>
            <div class="login-input">
                <label>Password</label>
                <input type="text" placeholder="Enter password here..." require>
            </div>
        </form>

        <div class="login-btns">
            <button type="submit" class="login-btn">Continue</button>
            <a href="register.php"><button type="submit" class="login-btn">Register</button></a>
        </div>
    </main>

</body>
</html>