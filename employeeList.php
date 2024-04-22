<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("location:index.php");
    exit;
}
?>

<?php include 'adminNavBar.php'; ?>

<!DOCTYPE html>

<html>

    <head>
        <title>Employee List Page</title>
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
                background-color: lightgray
            }

        </style>

    </head>

    <body>
    <center>
        <h1><b>Employee List</b></h1>
    </center>

    <center><form action="" method="post">
            <label for="usertype">Filter by Usertype:</label>
            <select name="usertype" id="usertype">
                <option value="">All</option>
                <option value="admin" <?php if (isset($_POST['usertype']) && $_POST['usertype'] == 'admin') echo 'selected="selected"'; ?>>Admin</option>
                <option value="employee" <?php if (isset($_POST['usertype']) && $_POST['usertype'] == 'employee') echo 'selected="selected"'; ?>>Employee</option>
            </select>
            <input type="submit" value="Submit">
        </form></center>

    <br>

    <table>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Usertype</th>
        <th>DELETE</th>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "Payroll");
        if ($conn->connect_error) {
            die("Connection failed:" . $conn->connect_error);
        }

        $usertype = isset($_POST['usertype']) ? $_POST['usertype'] : '';
        $sql = "SELECT userID, firstName, lastName, username, email, phoneNumber, usertype FROM user";

        if (!empty($usertype)) {
            $sql .= " WHERE usertype = '$usertype'";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["userID"] . "</td><td>" . $row["firstName"] . "</td><td>" . $row["lastName"] . "</td><td>" . $row["username"] .
                "</td><td>" . $row["email"] . "</td><td>" . $row["phoneNumber"] . "</td><td>" . $row["usertype"] . "</td>" .
                "<td><form action='deleteEmployee.php' method='post' onsubmit='return confirm(\"Are you sure you want to delete this employee?\")'><input type='hidden' name='employeeID' value='" . $row["userID"] . "'>
                    <input type='submit' value='DELETE'></form></td></tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No results found</td></tr>";
        }

        $conn->close();
        ?>

    </table>

</body>

</html>