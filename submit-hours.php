<?php include 'header.php';

$date = $_GET['date'];
$hours = $_GET['hours'];
$tasks = $_GET['tasks'];

$message = "";
session_start();
$userid = $_SESSION['userid'];
require 'DBConnect.php';


for ($x = 0; $x < 7; $x++) 
{
    if ($hours[$x] > 0)                         //if user worked on day $x
    {
        $sql = "insert into submission values (0, '$date[$x]', '$hours[$x]', '$tasks[$x]', '$userid')";

        try {
            $conn->query($sql);
            $message = "Update Successful";
        } catch (Exception $ex) {
            $message = "Update Failed";
        }
    }
}

$conn->close();

if ($message == "Update Successful")
{
echo "<div class='alert alert-success'>
  <strong>Success!</strong> Your hours have been successfully logged in the database.
</div>";
}

else if ($message == "Update Failed")
{
echo "<div class='alert alert-danger'>
  <strong>Error!</strong> There was an error processing your hours in the database. Please try again.
</div>";
}

else
{
echo "<div class='alert alert-info'>
  <strong>Info!</strong> There is no hours submitted on the last page. Please try again.
</div>";
}
    
echo "<div class='text-center pt-4 pb-4'>
    <a href = 'employee.php'>
    <button class='btn btn-outline-dark'>Return</button>
    </a>
    </div>";
