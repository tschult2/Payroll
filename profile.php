<html>
    <head>
        <style>
            h2 {
                padding-top: 20px;
            }
        </style>
    </head>

    <body>

        <?php include 'header.php';
        
        session_start();
        $username = $_SESSION["username"];
        $email = "";
        $phoneNumber = "";
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
        $email = $row['email'];
        $phoneNumber = $row['phoneNumber'];
        
        }
        
        
        echo '<form style = "width:900px; float: center;" class = "container-fluid p-3 bg-secondary text-white">

        <h2 style = "padding:0"; class = "text-center">Account</h2>
        <img src = "https://cdn-icons-png.flaticon.com/512/18/18601.png" alt "Avatar"
        class = "alignment-center" style = "width: 300px; padding:50; display: block; margin-left: auto; margin-right: auto;">

        <a href = "change-password.php">
        <button style = "float: right" type="button" class="btn btn-dark">Change Password</button>
        </a>
        <h2 style = "font-size: 20px">Password: ********</h2>
        
        <a href = "change-email.php">
        <button style = "float: right" type="button" class="btn btn-dark">Change Email</button>
        </a>
        <h2 style = "font-size: 20px">Email: ' . $email . '</h2>
        
        <a href = "change-phone.php">
        <button style = "float: right" type="button" class="btn btn-dark">Change Phone Number</button>
        </a>
        <h2 style = "font-size: 20px">Phone Number: ' . $phoneNumber . '</h2>
   
        </form>';

        ?>
        </body>
        </html>

