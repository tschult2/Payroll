<?php
session_start();

if (!isset($_SESSION["username"])) {

    header("location:index.php");
}
?>

<?php include 'adminNavBar.php'; ?>


<!DOCTYPE html>

<html>

    <head>
        <title>Admin Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



    </head>

    <body>



    <center><h1><b>Admin Home Page</b></h1>

        <?php echo $_SESSION["username"] ?>

    </center>






</body>

</html>
