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
        
        echo '<form action = "change-email-action.php" style = "width:500px; float: left;" class = "container-fluid p-3">
                <div class="mb-3">
                    <label class="form-label">Old email</label>
                    <input type="email" class="form-control" name="old-email">
                </div>
                <div class="mb-3">
                    <label class="form-label">New email</label>
                    <input type="email" class="form-control" name="new-email">
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
        
        </form>';

        ?>
        </body>
        </html>