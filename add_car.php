<?php
session_start();
//to check the user is authorized agency
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'agency') {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "sunsun55";
$dbname = "sde";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// TO Get data from the car form
$model = $_POST['model'];
$number = $_POST['number'];
$seating = $_POST['seating'];
$rent = $_POST['rent'];

// SQL query to insert car details into the database
$sql = "INSERT INTO cars (model, number, seating_capacity, rent_per_day)
        VALUES ('$model', '$number', $seating, $rent)";

if ($conn->query($sql) === TRUE) {
    header("Location: agency_dashboard.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
