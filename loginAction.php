<?php
$host = "localhost";
$user = "root";
$db_password = "";
$db = "Payroll";

session_start();

$data = mysqli_connect($host, $user, $db_password, $db);

if ($data === false) {
    die("Connection Error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password_input = $_POST["password"];

    $sql = "SELECT * FROM user WHERE username='" . $username . "'";
    
    $result = mysqli_query($data, $sql);

    if ($result) {
        $row = mysqli_fetch_array($result);
        if (password_verify($password_input, $row['password'])) {
            if ($row["usertype"] == "employee") {
                $_SESSION["username"] = $username;
                header("location:employee.php");
            } elseif ($row["usertype"] == "admin") {
                $_SESSION["username"] = $username;
                header("location:adminpage.php");
            } else {
                echo "username or password is incorrect";
            }
        } else {
            echo "Username or password is incorrect";
        }
    } else {
        echo "Username or password is incorrect";
    }
}
?>
