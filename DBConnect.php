<?php


$server = "localhost";
$database = "Payroll";
$username = "root";
$password = "";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "<h2>Connected successfully</h2>";
?>

// data from the form
$server = "localhost";
$database = "payroll";
$user = "root";
$password = "";

// Create connection
$conn = mysqli_connect($server, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());


