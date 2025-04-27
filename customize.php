<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Customize Details</title>
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
<div class="content">
    <br><br>
    <?php include "connect.php"; ?>
    <table border="1" cellpadding="6" cellspacing="8">
        <tr>
            <th colspan="6">Customize Details</th> <!-- Changed colspan to accommodate the new column -->
        </tr>
        <tr>
            <th>Design ID</th>
            <th>Customer Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Message</th>
            <th>Add Design</th> <!-- New column header -->
        </tr>
        <?php
        $s = mysqli_query($con,"select * from customdetails");
        while($r = mysqli_fetch_array($s))
        {
        ?>
        <tr>
            <td><?php echo $r['d_id']; ?></td>
            <td><?php echo $r['name']; ?></td>
            <td><?php echo $r['phone']; ?></td>
            <td><?php echo $r['email']; ?></td>
            <td><?php echo $r['message']; ?></td>
            <td><a href="draftdesign.php?design_id=<?php echo $r['d_id']; ?>">Draft Design</a></td> <!-- Added new column with button linking to draftdesign.php -->
        </tr>
        <?php
        }
        ?>
    </table>
</div>
</body>
</html>
