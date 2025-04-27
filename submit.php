<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);
    $subscribe = isset($_POST["subscribe"]) ? "Yes" : "No"; // Check if the subscribe checkbox is checked

    // Validate form data
    $errors = array();
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    // Add more validation rules for other fields if necessary...

    // If there are no errors, process the form
    if (empty($errors)) {
        // Here you can perform any additional processing such as sending an email, storing data in a database, etc.
        
        // For demonstration purposes, let's just display a thank you message
        echo "Thank you for your submission, $name! We will get in touch with you shortly.";
    } else {
        // If there are errors, display them
        echo "The following errors occurred:<br>";
        foreach ($errors as $error) {
            echo "- $error<br>";
        }
    }
} else {
    // If the form is not submitted, redirect the user back to the form page
    header("Location: index.php");
    exit();
}
?>
