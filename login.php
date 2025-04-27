<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url("images/login3.jpeg");
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        header,
        footer {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .login-container h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: calc(100% - 16px); /* Adjusted width */
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 4px;
        }

        button {
            background-color: #4caf50;
            color: rgb(249, 246, 246);
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .toggle-link {
            color: #007BFF;
            cursor: pointer;
        }

        .toggle-link:hover {
            text-decoration: underline;
        }

        /* Your CSS styles */
    </style>
</head>
<body>

<header>
    <h1>Welcome to Opulent Space</h1>
    <p>Best Interior Design Solutions for your Home</p>
</header>

<div class="login-container" id="loginFormContainer">
    <h2>Login</h2>
    <form id="loginForm" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" name="login" onclick="redirectToIndex()">Sign In</button>

    </form>
    <p>Not signed up? <span class="toggle-link" onclick="toggleForms('signup')">Sign Up</span></p>
</div>

<div class="login-container" id="signupFormContainer" style="display: none;">
    <h2>Sign Up</h2>
    <form id="signupForm" method="post">
        <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullname" required>
        </div>

        <div class="form-group">
            <label for="newUsername">Username:</label>
            <input type="text" id="newUsername" name="newusername" required>
        </div>

        <div class="form-group">
            <label for="newPassword">Password:</label>
            <input type="password" id="newPassword" name="password" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
        </div>

        <button type="submit" name="signup" onclick="redirectToIndex()">Register</button>

    </form>
    <p>Already signed up? <span class="toggle-link" onclick="toggleForms('login')">Sign In</span></p>
</div>

<footer>
    <p>Designed By SNAV</p>
    <p>© <?php echo date("Y"); ?> Opulent Space. All Rights Reserved</p>
</footer>

<script>
    function toggleForms(formToShow) {
        if (formToShow === 'signup') {
            document.getElementById("loginFormContainer").style.display = "none";
            document.getElementById("signupFormContainer").style.display = "block";
        } else if (formToShow === 'login') {
            document.getElementById("loginFormContainer").style.display = "block";
            document.getElementById("signupFormContainer").style.display = "none";
        }
    }

    function redirectToIndex() {
        window.location.href = 'index.php';
    }
</script>

<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Replace with your actual username
$password = ""; // Replace with your actual password
$dbname = "os"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle login form submission
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform your login authentication here
    // Example: Check username and password against database records
    // If authentication succeeds, redirect the user to a new page
}

// Handle signup form submission
if (isset($_POST['signup'])) {
    $fullname = $_POST['fullname'];
    $newusername = $_POST['newusername'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Insert user data into the database
    $sql = "INSERT INTO Users (full_name, username, password, email) VALUES ('$fullname', '$newusername', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // Optionally, you can redirect the user to a new page after successful registration
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();


// Handle login form submission
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform your login authentication here
    // Example: Check username and password against database records
    // If authentication succeeds, redirect the user to index.php with the username as a parameter
    // Example: header("Location: index.php?username=".$username);
}

// Handle signup form submission
if (isset($_POST['signup'])) {
    $fullname = $_POST['fullname'];
    $newusername = $_POST['newusername'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Insert user data into the database
    $sql = "INSERT INTO Users (full_name, username, password, email) VALUES ('$fullname', '$newusername', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
        // Redirect the user to index.php with the username as a parameter
        header("Location: index.php?username=".$newusername);
        exit(); // Terminate the current script
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

</body>
</html>
