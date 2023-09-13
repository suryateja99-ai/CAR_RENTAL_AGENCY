<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Available Cars to Rent</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            margin: 0;
        }

        .container {
            position: relative;
        }

        .car-listing {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
        }

        .car-listing h2 {
            font-size: 24px;
            margin: 0;
        }

        .car-listing p {
            font-size: 16px;
            margin: 5px 0;
        }

        .logout-button {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .logout-button form {
            display: inline;
        }

        .logout-button input[type="submit"] {
            background-color: #d9534f;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-register-buttons {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .login-register-buttons a {
            text-decoration: none;
            margin-left: 10px;
            font-size: 16px;
            color: #007bff;
        }

        .login-register-buttons a:hover {
            text-decoration: underline; 
        }
    </style>
</head>
<body>
    <h1>Car Rental Agency</h1>

    <div class="container">
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

        // SQL query to retrieve car details from the database
        $sql = "SELECT * FROM cars";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h2>Available Cars to Rent</h2>";
            while ($row = $result->fetch_assoc()) {
                echo "<div class='car-listing'>";
                echo "<h3>{$row['model']}</h3>";
                echo "<p>Vehicle Number: {$row['number']}</p>";
                echo "<p>Seating Capacity: {$row['seating_capacity']}</p>";
                echo "<p>Rent per Day: $ {$row['rent_per_day']}</p>";
                echo "</div>";
            }
        } else {
            echo "<h2>No cars available.</h2>";
        }

        // Close the database connection
        $conn->close();
        ?>

    </div>

    <div class="login-register-buttons">
        <a href="login.html">Login</a>
        <a href="registration.html">Register</a>
    </div>
</body>
</html>
