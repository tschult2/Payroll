<?php
session_start();

$page_title = "Forgot Password";
?>








<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forgot Password</title>
        <style>

            body {
                font-family: Arial, sans-serif;
                color: #fff;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-image: url("images/gray-shades.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
            }
            .container {
                width: 350px;
                background-color: rgba(0, 0, 0, 0.7);
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            }
            h2 {
                text-align: center;
            }
            input[type="email"], input[type="password"], input[type="submit"] {
                width: 100%;
                padding: 10px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type="submit"] {
                background-color: #555;
                color: #fff;
                border: none;
                cursor: pointer;
            }
            input[type="submit"]:hover {
                background-color: #777;
            }

        </style>
    </head>
    <body>



        <div class="container">
            <h2>Forgot Password</h2>
            <form action="passwordReset.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <input type="submit" name="password_reset_link" value="Submit">
            </form>
        </div>

    </body>
</html>
