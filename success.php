<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
    <style>
        body {
            text-align: center;
        }

        #header {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        #home-button {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #0074d9;
            color: #fff;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }

        #content {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div id="header">
        <button id="home-button" onclick="goHome()">Home</button>
    </div>
    <div id="content">
       <img src="https://www.icegif.com/wp-content/uploads/2022/08/icegif-1000.gif" alt="Your Photo" width="300" height="200">
        <h1>Thank You! For Booking the rent for our car you will get car by selected date.</h1>
        <p>We appreciate your visit.</p>
    </div>

    <script>
        function goHome() {
            window.location.href = "customer_dashboard.php";
        }
    </script>
</body>
</html>
