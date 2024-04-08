<?php include 'adminNavBar.php';?>

<!DOCTYPE html>

<html>

    <head>
        <title>Register Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


        
    </head>

    <body>




    <center><h1><b>Register Employee</b></h1></center>

    <div class="register"><form name="register" action="registerAction.php" class="w3-container w3-card-4" style="margin-top: 15px; margin-bottom: 15px";>
            <center><h2 class="w3-text-gray"><b>Registration Form</b></h2></center>
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
    

</body>

</html>
