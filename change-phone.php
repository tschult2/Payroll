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
        
        echo '<form action = "change-phone-action.php" style = "width:500px; float: left;" class = "container-fluid p-3">
                <div class="mb-3">
                    <label class="form-label">Old phone number</label>
                    <input type="text" class="form-control" name="old-phone">
                </div>
                <div class="mb-3">
                    <label class="form-label">New phone number</label>
                    <input type="text" class="form-control" name="new-phone">
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
        
        </form>';

        ?>
        </body>
        </html>