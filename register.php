<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="css/login-register.css" rel="stylesheet">

</head>
<body>

    <h1 class="register-header">Register</h1>

    <form class="register-form">
        <div class="register-input">
            <input type="text" placeholder="Firstname" require>
        </div>
        <div class="register-input">
            <input type="text" placeholder="Surname" require>
        </div>
        <div class="register-input">
            <input type="text" placeholder="Email Address" require>
        </div>
        <div class="register-input">
            <input type="text" placeholder="Username" require>
        </div>
        <div class="register-input">
            <input type="text" placeholder="Password" require>
        </div>
        <div class="register-input">
            <input type="text" placeholder="Confirm Password" require>
        </div>
    </form>

    <div class="register-btns">
        <button type="submit" class="register-btn">Submit</button>
        <a href="login.php"> <button type="submit" class="register-btn">Back</button> </a>
    </div>

</body>
</html>