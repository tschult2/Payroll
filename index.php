<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "Payroll";

session_start();

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {

    die("Connection Error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];

    $password = $_POST["password"];

    $sql = "select * from user where username='" . $username . "' AND password='" . $password . "' ";

    $result = mysqli_query($data, $sql);

    $row = mysqli_fetch_array($result);

    if ($row["usertype"] == "employee") {

        $_SESSION["username"] = $username;

        header("location:employee.php");
    } elseif ($row["usertype"] == "admin") {

        $_SESSION["username"] = $username;

        header("location:adminpage.php");
    } else {

        echo "username or password is incorrect";
    }
}
?>

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
    <form action="#" method="POST">
        
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
        </div>
    </div>
</body>
</html>





