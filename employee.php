<?php
session_start();

if (!isset($_SESSION["username"])) {

    header("location:index.php");
}
?>



<!DOCTYPE html>

<html>

    <head>

        <title></title>

    </head>

    <body>


<?php include 'header.php';
echo '<center><h1>Employee Page</h1>';

 $_SESSION["username"] ?>

        <br>
        <br>
        <a href="logout.php">Logout</a>

    </center>



</body>

</html>