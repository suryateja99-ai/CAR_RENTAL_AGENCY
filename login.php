<?php
session_start();

// Database connection details
$servername = "localhost";
$username = "root";
$password = "sunsun55";
$dbname = "sde";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Getting data from the login form
$name = $_POST['name'];
$password = $_POST['password'];

// Query for Validate user credentials and get user_type
$sql = "SELECT user_type FROM registration_details WHERE name='$name' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Login successful
    $row = $result->fetch_assoc();
    $userType = $row['user_type'];

    // Redirect based on user_type
    session_start();
    $_SESSION['name'] = $name; // Store user's email in the session for future use
    if ($userType === 'agency') {
        header("Location: agencyhome.php");
    } elseif ($userType === 'customer') {
        header("Location: customer_dashboard.php");
    } else {
        echo "Unknown user type.";
    }
} else {
    // Login failed
    echo "Invalid email or password. <a href='login.html'>Try again</a>";
}

// Close the database connection
$conn->close();
?>
