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
        
        echo '<form action = "change-password-action.php" style = "width:500px; float: left;" class = "container-fluid p-3">
                <div class="mb-3">
                    <label class="form-label">Old Password</label>
                    <input type="password" class="form-control" name="old-pswd">
                </div>
                <div class="mb-3">
                    <label class="form-label">New Password</label>
                    <input type="password" class="form-control" name="new-pswd">
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
        
        </form>';

        ?>
        </body>
        </html>