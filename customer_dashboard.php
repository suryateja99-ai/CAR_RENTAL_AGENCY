<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <div class="logout-button">
    <form action="logout.php" method="POST">
        <input type="submit" value="Logout">
    </form>
    </div>
    <title>Available Cars to Rent</title>
    <h1>Car Rental Agency</h1>
</head>
<body>
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
        echo "<h1>Available Cars to Rent</h1>";
        while ($row = $result->fetch_assoc()) {
            echo "<div class='car-listing'>";
            echo "<h2>{$row['model']}</h2>";
            echo "<p>Vehicle Number: {$row['number']}</p>";
            echo "<p>Seating Capacity: {$row['seating_capacity']}</p>";
            echo "<p>Rent per Day: $ {$row['rent_per_day']}</p>";
            echo "<button class='rent-button' data-car-id='{$row['car_id']}'>Rent Now</button>";
            //  A form for start and end date input
            echo "<div class='date-input' style='display: none;'>";
            echo "<form action='process_rent.php' method='POST'>";
            echo "<input type='hidden' name='car_id' value='{$row['car_id']}'>";
            echo "<input type='hidden' name='model' value='{$row['model']}'>";
            echo "<input type='hidden' name='number' value='{$row['number']}'>";
            echo "<input type='hidden' name='seating_capacity' value='{$row['seating_capacity']}'>";
            echo "<input type='hidden' name='rent_per_day' value='{$row['rent_per_day']}'>";
            echo "Start Date: <input type='date' name='start_date' required><br>";
            echo "End Date: <input type='date' name='end_date' required><br>";
            echo "<input type='submit' value='Submit'>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<h1>No cars available.</h1>";
    }

    // Close the database connection
    $conn->close();
    ?>

    <script>
        // JavaScript to date-input display on Rent Now button click
        const rentButtons = document.querySelectorAll('.rent-button');

        rentButtons.forEach(button => {
            button.addEventListener('click', () => {
                const dateInput = button.nextElementSibling;
                dateInput.style.display = 'block';
            });
        });
    </script>

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

        .rent-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .date-input {
            margin-top: 10px;
        }

        .date-input input[type="date"] {
            padding: 5px;
            font-size: 16px;
            margin-right: 10px;
        }

        .date-input input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 16px;
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
}

    </style>
</body>
</html>
