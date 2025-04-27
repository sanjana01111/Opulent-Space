<?php
// Check if the comment form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate comment input
    if (empty($_POST['comment'])) {
        echo "Comment field is required.";
    } else {
        // Retrieve comment from the form submission
        $comment = $_POST['comment'];

        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "os";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to insert comment into the comments table
        $sql = "INSERT INTO comments (d_id, comment) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);

        // Assuming you have a variable $d_id containing the corresponding d_id value
        $d_id = 1; // Replace with your actual d_id value

        // Bind parameters and execute the statement
        $stmt->bind_param("is", $d_id, $comment);

        if ($stmt->execute()) {
            echo "Comment submitted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close statement and database connection
        $stmt->close();
        $conn->close();
    }
} else {
    // Redirect to the form page if accessed directly
    header("Location: custom.php");
    exit();
}
?>
