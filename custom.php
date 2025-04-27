<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('background.jpg'); /* Add the path to your background image */
            background-size: cover;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Add transparency to the container */
            border-radius: 10px; /* Add rounded corners */
            position: relative; /* Position container relative for absolute positioning of logo */
        }
        .navbar {
            text-align: center;
            margin-bottom: 20px;
        }
        .nav-buttons {
            float: right; /* Align buttons to the right */
        }
        .nav-buttons a {
            padding: 10px 20px;
            color: #337ab7;
            text-decoration: none;
            margin-left: 10px;
        }
        .logo {
            position: absolute;
            top: 10px; /* Adjust this value as needed */
            left: 20px; /* Position the logo on the left */
        }
        .logo img {
            width: 100px; /* Adjust the width of the logo */
            height: auto;
        }
        h2, h3 {
            text-align: center;
        }
        img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
        textarea {
            width: 100%;
            max-width: 600px;
            padding: 10px;
            margin: 10px auto;
            resize: vertical;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="logo.png" alt="Logo"> <!-- Adjust the path and size of your logo -->
            </div>
            <div class="nav-buttons">
                <a href="index.php">Home</a>
                <a href="#">Back</a>
            </div>
        </div>
        <h2>Draft Image</h2>
        
        <?php
        // Connect to your database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "os";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Specify the d_id of the image you want to display
        $d_id = 1; // Change this value to the desired d_id

        // Fetch design image from the database based on d_id
        $sql = "SELECT * FROM uploaded_images WHERE d_id = $d_id"; // Fetch the image based on d_id
        $result = $conn->query($sql);

        // Check for errors in query execution
        if (!$result) {
            die("Query failed: " . $conn->error);
        }

        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Output data of the selected row
            $row = $result->fetch_assoc();
            // Displaying the image
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image_data']).'" />';
        } else {
            echo "No image found for the specified d_id";
        }

        // Close the database connection
        $conn->close();
        ?>

        <h3>Leave a Comment</h3>
        <form action="submit_comment.php" method="post">
            <textarea name="comment" rows="4" cols="50" required></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <?php
    // Check if the comment form is submitted
    if (isset($_POST['comment'])) {
        // Connect to your database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "os";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch comment from the form submission
        $comment = $_POST['comment'];

        // Prepare and execute SQL query to insert comment into the comments table
        $sql = "INSERT INTO comments (d_id, comment) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $d_id, $comment);

        // For example, assuming you have a variable $d_id containing the corresponding d_id value
        $d_id = 1; // Replace with your actual d_id value

        if ($stmt->execute()) {
            echo "Comment submitted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the prepared statement and database connection
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
