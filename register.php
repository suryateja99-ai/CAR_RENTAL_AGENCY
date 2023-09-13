<?php
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

// Getting data from the registration
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$userType = $_POST['user-type'];

// To insert data into the database
$sql = "INSERT INTO registration_details (name, email, password, phone, address, user_type)
        VALUES ('$name', '$email', '$password', '$phone', '$address', '$userType')";

// Check if the query was successful
if ($conn->query($sql) === TRUE) {
    header("Location: login.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
