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
        <style>
            h2{
                padding: 20px;
            }
            body {
                font-family: Arial, sans-serif;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>


    </head>

    <body>


<?php include 'header.php';
require 'DBConnect.php';
$name = '';
$sql = "SELECT * FROM user WHERE username = ?";
try {
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $_SESSION["username"]);
  $stmt->execute();
  $result = $stmt->get_result();
} catch (Exception $ex) {
  echo $ex->getMessage;
  $conn->close();
  exit;
}

if (!empty($result) && $result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $name = $row['firstName'];
}
  

echo '<h2>Welcome ' . $name . '</h2>'; ?>
        

        <form action="submit-hours.php">
            <table>
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Date</th>
                        <th>Hours Worked</th>
                        <th>Tasks</th>
                    </tr>
                </thead>
                <tbody id="timesheet-body">
                    <!-- Timesheet rows will be dynamically added here -->
                </tbody>
            </table>
            <div class="text-center pt-4">
            <button class="btn btn-outline-dark">Submit</button>
            </div>
        </form>

<div class="text-center pt-4 pb-4">
    <a href = "logout.php">
    <button class="btn btn-outline-dark">Logout</button>
    </a>
</div>

<script>
  // Function to add rows dynamically for each day of the current week (Monday to Friday)
  function addRowsForCurrentWeek() {
    var daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    var today = new Date();
    var sunday = new Date(today);
    sunday.setDate(today.getDate() - today.getDay()); // Get Sunday of the current week
    var saturday = new Date(today);
    saturday.setDate(today.getDate() + (6 - today.getDay())); // Get Saturday of the current week

    var currentDate = new Date(sunday);
    var timesheetBody = document.getElementById('timesheet-body');
    while (currentDate <= saturday) {
      var dateString = currentDate.toISOString().split('T')[0];
      var dayOfWeek = daysOfWeek[currentDate.getDay()];
      var newRow = `
        <tr>
          <td>${dayOfWeek}</td>
          <td><input type="text" name="date[]" value="${dateString}" readonly></td>
          <td><input type="number" min="0" name = "hours[]" placeholder="0"></td>
          <td><input type="text" name = "tasks[]" placeholder="Enter tasks"></td>
        </tr>
      `;
      timesheetBody.insertAdjacentHTML('beforeend', newRow);
      currentDate.setDate(currentDate.getDate() + 1); // Move to the next day
    }
  }

  // Add rows for the current week
  addRowsForCurrentWeek();
</script>
        

    </center>



</body>

<footer>
    <?php include 'footer.php';?>
</footer>

</html>