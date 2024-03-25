<?php

$oldPswd = $_GET['old-pswd'];
$newPswd = $_GET['new-pswd'];
session_start();
$username = $_SESSION["username"];
require 'DBConnect.php';
$sql = "SELECT * FROM user WHERE username = ?";

try {
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();
} catch (Exception $ex) {
  echo $ex->getMessage;
  $conn->close();
  exit;
}

if (!empty($result) && $result->num_rows > 0) {
  $row = $result->fetch_assoc();
  if ($oldPswd == $row['password']) {
    $sql2 = "UPDATE user 
    SET password = ? 
    WHERE username = ?";
    
    try {
        $stmt = $conn->prepare($sql2);
        $stmt->bind_param("ss", $newPswd, $username);
        $stmt->execute();
        } catch (Exception $ex) {
        echo $ex->getMessage;
        $conn->close();
        exit;
}
    header("location:profile.php");
  } 
  else {
    header("location:change-phone.php");
  }
} 

else {
  header("location:change-phone.php");
}

$conn->close();
?>