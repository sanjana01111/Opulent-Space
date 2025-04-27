<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <style>
        body {
            background-image: url('images/ad.jpg'); /* Replace 'background-image.jpg' with your actual image file */
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .content {
            margin: 50px auto;
            width: 80%;
            background-color: rgba(255, 255, 255, 0.8); /* Adjust opacity as needed */
            padding: 20px;
            border-radius: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: center; /* Center all text */
        }
        th {
            background-color: #333;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php include "header.php"; ?>
<div class="content">
    <br><br>
    <?php include "connect.php"; ?>
    <table border="1" cellpadding="6" cellspacing="8">
        <tr>
            <th colspan="11">Order Details</th>
        </tr>
        <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>
            <th>Total Amount</th>
            <th>Payment Method</th>
        </tr>
        <?php
        $result = mysqli_query($con, "SELECT * FROM orders");
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row['order_id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phoneno']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['state']; ?></td>
                <td><?php echo $row['zip_code']; ?></td>
                <td><?php echo $row['amount']; ?></td>
                <td><?php echo $row['payment_method']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>

</body>
</html>
