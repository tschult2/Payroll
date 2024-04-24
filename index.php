

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Payroll Management Login Page</title>
    </head>
    <body>
        <form action="loginAction.php" method="POST">

            <div class="box">
                <div class="container">
                    <div class="top-header">
                        <header>Login</header>
                    </div>
                    <div class="input-field">
                        <input type="text" label="username" name="username" class="input" placeholder="Username" required>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" label="password" name="password" class="input" placeholder="Password" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-field">
                        <input type="submit" class="submit" value="Submit">
                    </div>
                    <br>
                    <div>
                        <center><a href="forgotPassword.php" style="color: white">Forgot Password</a></center>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>







