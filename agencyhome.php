<!DOCTYPE html>
<html>
<head>
    <style>
        
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        
        .header {
            background-color: #0074D9;
            color: #fff;
            padding: 10px;
            text-align: right;
        }
    </style>
</head>
<body>
<a href="logout.php" style="color: #fff; text-decoration: none; float: right;">Logout</a>
<div class="header">
    <center><h1>Car Rental Agency</h1></center>
    <a href="agency_dashboard.php" style="color: #fff; text-decoration: none; margin-left: 10px;">Add Vehicles</a>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "sunsun55";
$dbname = "sde";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT model, number, seating_capacity, rent_per_day, name, start_date, end_date FROM bookings";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error); 
}

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Model</th>";
    echo "<th>Number</th>";
    echo "<th>Seating Capacity</th>";
    echo "<th>Rent per Day</th>";
    echo "<th>Customer Name</th>";
    echo "<th>Start Date</th>";
    echo "<th>End Date</th>";
    echo "</tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["model"]."</td>";
        echo "<td>".$row["number"]."</td>";
        echo "<td>".$row["seating_capacity"]."</td>";
        echo "<td>".$row["rent_per_day"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["start_date"]."</td>";
        echo "<td>".$row["end_date"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No bookings found.";
}

// Close the database connection
$conn->close();
?>

</body>
</html>
