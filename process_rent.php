<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "sunsun55";
$dbname = "sde";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $model = $_POST['model'];
    $number = $_POST['number'];
    $seating = $_POST['seating_capacity'];
    $rent = $_POST['rent_per_day'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    
    // Retrieve user's name from session
    $user_name = $_SESSION['name']; 

    // SQL query to insert rent details into the "bookings" table
    $sql = "INSERT INTO bookings (model, number, seating_capacity, rent_per_day, name, start_date, end_date) VALUES ('$model','$number','$seating','$rent', '$user_name', '$start_date', '$end_date')";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the main page or a confirmation page
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
