<?php

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$username = $_GET['username'];
$password = $_GET['password'];
$email = $_GET['email'];
$phonenumber = $_GET['phonenumber'];
$usertype = $_GET['usertype'];

$sql = "insert into user values (0, '$firstname', '$lastname', '$username', '$password', '$email', '$phonenumber', '$usertype')";

require 'DBConnect.php';

try {
  $conn->query($sql);
  echo "<h2>Data update successful</h2>";
} catch (Exception $ex) {
  echo "<h2>Update failed: " . $ex->getMessage() . "</h2>";
}
$conn->close();

echo "<h2>Returning to Admin Page</h2>";
header("refresh:2;url=adminpage.php");
?>
