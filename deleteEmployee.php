<?php

$conn = mysqli_connect("localhost", "root", "", "Payroll");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employeeID = $_POST["employeeID"];
    
    $sql = "DELETE FROM user WHERE userID = $employeeID";
    
    if ($conn->query($sql) === TRUE) {
        echo "<h2>Employee deleted successfully</h2>";
    } else {
        echo "ERROR DELETING EMPLOYEE" . $conn->error;
    }
}

$conn->close();

echo "<h2>Returning to Employee List Page</h2>";
header("refresh:2;url=employeelist.php");
?>