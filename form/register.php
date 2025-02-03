<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

    
    <h2>Personal Information</h2>
    <hr width="50%">
    
    <?php
   // GET = Method
    // $fname = $_GET['txtFirstName'];
    // $lname = $_GET['txtLastName'];
    // $day = $_GET['cboDay'];
    // $month = $_GET['cboMonth'];
    // $year = $_GET['cboYear'];
    // $dob = "$day-$month-$year";
    // echo "<table>";
    // echo "<tr>";
    // echo "<td><b>First Name : </b></td>";
    // echo "<td>$fname</td>";
    // echo "</tr>";
    // echo "<tr>";
    // echo "<td><b>Last Name: </b></td>";
    // echo "<td>$lname</td>";
    // echo "</tr>";
    // echo "<tr>";
    // echo "<td><b>Date of Birth: </b></td>";
    // echo "<td>$dob</td>";
    // echo "</tr>";
    // echo "</table>";

    // POST = Method
    $fname = $_POST['txtFirstName'];
    $lname = $_POST['txtLastName'];
    
    echo "<table>";
    echo "<tr>";
    echo "<td><b>First Name : </b></td>";
    echo "<td>$fname</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><b>Last Name: </b></td>";
    echo "<td>$lname</td>";
    echo "</tr>";
    echo "</table>";

    ?>
    </center>
</body>
</html>