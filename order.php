<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="order_style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: url('images/payment.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .container {
            max-width: 600px;
            margin: 100px auto;
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        #errorMsg {
            color: red;
            margin-top: 10px;
        }
    </style>   
    <title>Opulent Space Order Payment Form</title>
</head>
<body>
    <div class="container">
        <h1>Opulent Space Order Payment Form</h1>
        <form id="paymentForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phoneno">Phone number:</label>
            <input type="text" id="phoneno" name="phoneno" required>

            <!-- Expanded Address Section -->
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="city">City:</label>
            <input type="text" id="city" name="city" required>

            <label for="state">State:</label>
            <input type="text" id="state" name="state" required>

            <label for="zipCode">Zip Code:</label>
            <input type="text" id="zipCode" name="zipCode" pattern="[0-9]{6}" title="Please enter a valid 6-digit zip code" required>

            <!-- Amount Field -->
            <label for="amount">Amount:</label>
            <input type="text" id="amount" name="amount" readonly required>

            <!-- Payment Method (Cash On Delivery) -->
            <label for="paymentMethod">Payment Method:</label>
            <input type="text" id="paymentMethod" name="paymentMethod" value="Cash On Delivery" readonly>

            <!-- Submit Button -->
            <button type="submit">Submit</button>
        </form>
    </div>

    <script src="order_code.js"></script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve product name and price from URL parameters
        $productName = isset($_POST['productName']) ? $_POST['productName'] : '';
        $price = isset($_POST['price']) ? $_POST['price'] : '';

        // Assuming you already have established a database connection, you need to fill in your connection details
        $servername = "localhost";
        $username = "root";
        $password = ""; // Fill in your database password here
        $database = "os";

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO orders (name, email, phoneno, address, city, state, zip_code, amount, payment_method) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Bind parameters
        $stmt->bind_param("ssisssiss", $name, $email, $phone, $address, $city, $state, $zipCode, $amount, $paymentMethod);

        // Set parameters and execute
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phoneno'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zipCode = $_POST['zipCode'];
        $amount = $_POST['amount'];
        $paymentMethod = $_POST['paymentMethod'];

        $stmt->execute();

        // Check if the query executed successfully
        if ($stmt->affected_rows > 0) {
            echo "<script>alert('Order placed successfully!');</script>";
        } else {
            echo "<script>alert('Error placing order: " . $stmt->error . "');</script>";
        }

        // Close statement and database connection
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
