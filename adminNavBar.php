<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payroll Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var currentPage = location.pathname.split("/").pop();
            var navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            navLinks.forEach(function (link) {
                var linkPage = link.getAttribute('href').split("/").pop();
                if (linkPage === currentPage) {
                    link.classList.add('active');
                }
            });
        });
    </script>
    <style>
        .nav-link.active {
            color: #fff !important;
        }
    </style>
</head>
<body>

<div class="container-fluid p-3 bg-dark text-white">
    <h1>Payroll Management (Admin)</h1>
    <?php echo $_SESSION["username"]; ?>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="adminpage.php">Admin Home Page</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registerForm.php">Register Employee</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="employeeList.php">Employee List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="messageForm.php">Send Message</a>
            </li>
        </ul>
        <a href="logout.php" style="position: absolute; bottom: 0; right: 0; display: inline-block; padding: 10px 20px; background-color: #333; color: #fff; text-decoration: none; border-radius: 5px; transition: background-color 0.3s;">Logout</a>
    </div>
</nav>

</body>
</html>
