<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draft Design - Upload Image and Comments</title>
    <style>
        body {
            background-image: url('images/ad.jpg'); /* Replace 'background-image.jpg' with your actual image file */
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; /* Display elements in a column layout */
            align-items: center; /* Align items to the center */
            min-height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Adjust opacity as needed */
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="file"] {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .uploaded-image img {
            max-width: 300px; /* Adjust the maximum width of the image */
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .comment {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="upload-container">
            <h2>Upload Image</h2>
            <form action="draftdesign.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="image" accept="image/*" required><br><br>
                <input type="submit" value="Upload Image" name="submit">
            </form>

            <?php
            // Handle image upload and insertion
            if (isset($_POST['submit'])) {
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "os";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Increase max_allowed_packet
                $sql = "SET GLOBAL max_allowed_packet=67108864"; // 64 MB
                $conn->query($sql);

                $image = $_FILES['image']['tmp_name'];
                $filename = $_FILES['image']['name'];

                // Read image file
                $imgData = file_get_contents($image);

                // Encode image data as base64
                $imgBase64 = base64_encode($imgData);

                // Insert image data into database
                $sql = "INSERT INTO uploaded_images (filename, image_data) VALUES ('$filename', '$imgBase64')";
                if ($conn->query($sql) === TRUE) {
                    echo "Image uploaded successfully.";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            }
            ?>
        </div>

        <div class="comment-container">
            <h2>Received Comments</h2>
            <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "os";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch comments from the database
            $sql_comments = "SELECT * FROM comments"; // Query to fetch comments
            $result_comments = $conn->query($sql_comments);

            if ($result_comments->num_rows > 0) {
                echo "<div class='comments'>";
                // Output data of each row
                while($row_comment = $result_comments->fetch_assoc()) {
                    echo "<div class='comment'>";
                    echo $row_comment["comment"];
                    echo "</div>";
                }
                echo "</div>";
            } else {
                echo "No comments yet.";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
