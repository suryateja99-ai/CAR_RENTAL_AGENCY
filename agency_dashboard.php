<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<div class="head">
        <center><h1>CAR RENTAL AGENCY</h1></center>
 </div>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .head{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: #007BFF;
            padding: 10px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
        }

        input[type="text"], input[type="number"], input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .home-button {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none; 
        }
    </style>
</head>
<body>
    <a class="home-button" href="agencyhome.php"><i class="fa fa-home">HOME</i></a>
    
    <div class="container">
        <h2>Add New Car</h2>
        <form id="car-form" action="add_car.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="model">Vehicle Model:</label>
                <input type="text" id="model" name="model" required>
            </div>
            <div class="form-group">
                <label for="number">Vehicle Number:</label>
                <input type="text" id="number" name="number" required>
            </div>
            <div class="form-group">
                <label for="seating">Seating Capacity:</label>
                <input type="number" id="seating" name="seating" required>
            </div>
            <div class="form-group">
                <label for="rent">Rent per Day:</label>
                <input type="number" id="rent" name="rent" required>
            </div>
            <button class="btn" type="submit">Add Car</button>
        </form>
    </div>
</body>
</html>
