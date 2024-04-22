<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("location:index.php");
    exit;
}

include 'adminNavBar.php';

$conn = mysqli_connect("localhost", "root", "", "Payroll");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submissionID = $_POST['submissionID'];
    $approvalStatus = $_POST['approvalStatus'];

    $updateQuery = "UPDATE submission SET approvalStatus='$approvalStatus' WHERE submissionID='$submissionID'";
    if (mysqli_query($conn, $updateQuery)) {
        header("location:adminpage.php");
        exit;
    } else {
        echo "Error updating approval status: " . mysqli_error($conn);
    }
}

$sql = "SELECT userID, submissionID, date, hoursWorked, approvalStatus FROM submission";

if (isset($_GET['userID']) && is_numeric($_GET['userID'])) {
    $userID = $_GET['userID'];
    $sql .= " WHERE userID = $userID";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style type="text/css">
            table {
                border-collapse: collapse;
                width: 100%;
                color: black;
                font-family: monospace;
                font-size: 20px;
                text-align: center;
            }

            th {
                background-color: black;
                color: white;
            }

            tr:nth-child(even) {
                background-color: lightgray;
            }
        </style>
    </head>
    <body>


    <center><h1><b>Timecard Submission Table</b></h1></center>

    <center>
        <form method="get" action="adminpage.php">
            <label for="userID">Filter by User ID:</label>
            <input type="number" id="userID" name="userID">
            <input type="submit" value="Filter">
            <input type="button" value="Reset" onclick="window.location.href = 'adminpage.php'">
        </form>
    </center>

    <br>


    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Submission ID</th>
                <th>Date</th>
                <th>Hours Worked</th>
                <th>Approval Status</th>
                <th>Approval Status UPDATE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["userID"] . "</td>";
                    echo "<td>" . $row["submissionID"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "<td>" . $row["hoursWorked"] . "</td>";
                    echo "<td>" . $row["approvalStatus"] . "</td>";
                    echo "<td>
                            <form method='post'>
                                <input type='hidden' name='submissionID' value='" . $row["submissionID"] . "'>
                                <select name='approvalStatus'>
                                    <option value='Accepted'>Accepted</option>
                                    <option value='Rejected'>Rejected</option>
                                </select>
                                <input type='submit' value='UPDATE'>
                            </form>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No results found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    mysqli_close($conn);
    ?>
</body>
</html>