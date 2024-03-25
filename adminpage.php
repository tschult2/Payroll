<?php
session_start();

if (!isset($_SESSION["username"])) {

    header("location:index.php");
}
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
                font-size: 25px;
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



    <center><h1>Admin Page</h1>

        <?php echo $_SESSION["username"] ?>

        <br>
        <br>
        <a href="logout.php">Logout</a>

    </center>



    <div class="register"><form name="register" action="registerAction.php" class="w3-container w3-card-4" style="margin-top: 25px; margin-bottom: 25px";>
            <h2 class="w3-text-gray">Registration</h2>
            <p>      
                <label class="w3-text-gray"><b>First Name</b></label>
                <input class="w3-input w3-border" name="firstname" type="text" required></p>
            <p>      
                <label class="w3-text-gray"><b>Last Name</b></label>
                <input class="w3-input w3-border" name="lastname" type="text" required></p> 
            <p>      
                <label class="w3-text-gray"><b>Username</b></label>
                <input class="w3-input w3-border" name="username" type="text" required></p>
            <p>     
                <label class="w3-text-gray"><b>Password</b></label>
                <input class="w3-input w3-border" name="password" type="password" required></p>
            <p>      
                <label class="w3-text-gray"><b>Email</b></label>
                <input class="w3-input w3-border" name="email" type="email" required></p>
            <p>      
                <label class="w3-text-gray"><b>Phone Number</b></label>
                <input class="w3-input w3-border" name="phonenumber" type="text" maxlength="10" required></p>

            <p>
            <label class="w3-third"></label>
            <label class="w3-text-gray"><b>Usertype</b></label>
            <br>
                <input class="w3-radio" type="radio" name="usertype" value="admin">
                <label>Admin</label>
                <br>
                <input class="w3-radio" type="radio" name="usertype" value="employee">
                <label>Employee</label>
                <br></p>
            

            
            <p>      
            <center><button class="w3-btn w3-gray">Register</button></p></center>


        </form></div>
    
    

    <br>
    
    
    <center><h2><b>List of Employees</b></h2></center>
    
    
    <table>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Usertype</th>
        
        <?php
        
        $conn = mysqli_connect("localhost", "root", "", "Payroll");
        if ($conn-> connect_error) {
            die("Connection failed:". $conn-> connect_error);
        }
        
        $sql = "SELECT userID, firstName, lastName, username, email, phoneNumber, usertype from user";
        $result = $conn-> query($sql);
        
        if ($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>". $row["userID"] ."</td><td>". $row["firstName"] ."</td><td>". $row["lastName"] ."</td><td>". $row["username"] .
                        "</td><td>". $row["email"] ."</td><td>". $row["phoneNumber"] ."</td><td>". $row["usertype"] ."</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "0 result";
        }
        
        $conn-> close();
        ?>
        
    </table>
    
    
    <br>
    

</body>

</html>
