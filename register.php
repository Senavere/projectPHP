<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="css/login-register.css" rel="stylesheet">

</head>
<body class="register-body">

    <main class="register-main">
        <h1 class="register-header">Register</h1>
        <form class="register-form">
            <div class="register-input">
                <div>
                    <label>Name</label>
                </div>
                <input type="text" placeholder="Enter your firstname" require>
                <input type="text" placeholder="Enter your surname" require>
            </div>
            <div class="register-input">
                <div>
                    <label>Email Address</label>
                </div>
                <input type="text" placeholder="Enter your email" require>
            </div>
            <div class="register-input">
                <div>
                    <label>Username</label>
                </div>
                <input type="text" placeholder="Enter a Username" require>
            </div>
            <div class="register-input">
                <div>
                    <label>Password</label>
                </div>
                <input type="text" placeholder="Enter a Password" require>
            </div>
            <div class="register-input">
                <div>
                    <label>Confirm Password</label>
                </div>
                <input type="text" placeholder="Confirm Password" require>
            </div>
        </form>

        <div class="register-btns">
            <button type="submit" class="register-btn">Submit</button>
            <a href="login.php"> <button type="submit" class="register-btn">Back</button> </a>
        </div>
    </main>

</body>
</html>