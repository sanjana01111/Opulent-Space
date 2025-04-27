<?php
// Establish database connection
$conn = mysqli_connect('localhost', 'root', '', 'os');

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Check if form data is received via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are present
    if(isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message'])) {
        // Extract form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO customdetails (name, email, phone, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $name, $email, $phone, $message);

        // Execute SQL statement
        if ($stmt->execute()) {
            // Close prepared statement
            $stmt->close();
            
            // Redirect to thank you page
            header("Location: thankyou.php");
            exit(); // Ensure script execution stops after redirection
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Error: Required fields are missing.";
    }
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opulent Space: Best Interior Design Solutions for your Home | Get Free Quotes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-image: url("admin/images/adminlogin.png"); /* Full-page background image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Fixed background */
            color: #333; /* Text color */
        }

        .container {
            width: 80%;
            margin: auto;
        }

        /* Header */
        .banner {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background for better readability */
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }

        .banner .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 1rem;
        }

        .banner .navbar img.logo {
            width: 100px;
        }

        .banner nav ul {
            list-style: none;
        }

        .banner nav ul li {
            display: inline;
            margin-right: 1rem;
        }

        .banner nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        .content {
            margin-top: 2rem;
            text-align: center;
            color: #fff; /* Text color */
        }

        /* Quote Form */
        .quote-form {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background for better readability */
            padding: 2rem;
            margin-top: 2rem;
            text-align: center;
            color: #333; /* Text color */
            width: 80%;
            margin: auto;
        }

        form {
    width: 300px; /* Set a fixed width for the form */
    margin: auto; /* Center align the form horizontally */
    text-align: center; /* Center align text within the form */
    padding: 2rem;
    color: #333; /* Text color */
}

label {
    display: block; /* Display labels as block elements */
    margin-bottom: 0.5rem;
}

input[type="text"],
input[type="email"],
input[type="tel"],
textarea {
    width: 100%; /* Take up full width */
    padding: 0.5rem;
    margin-bottom: 1rem; /* Add some space between elements */
}

textarea {
    resize: vertical; /* Allow vertical resizing */
}

input[type="submit"] {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 0.5rem 1rem;
    cursor: pointer;
    display: block; /* Display as block to take up full width */
    margin: 0 auto; /* Center align the button horizontally */
}

input[type="submit"]:hover {
    background-color: #555;
}


        
        
        /* Services Section */
        .services {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background for better readability */
            padding: 2rem 0;
            text-align: center;
            color: #333; /* Text color */
        }

        .services h2 {
            margin-bottom: 2rem;
        }

        .service-items {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .service-item {
            flex: 1 1 300px;
            margin: 0 1rem;
            background-color: #f9f9f9;
            padding: 1rem;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .service-item h3 {
            margin-bottom: 0.5rem;
        }

        /* Footer */
        footer {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background for better readability */
            color: #fff;
            padding: 20px;
        }

        footer .ftr-m {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        footer .ftr-m .ftr-t {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 40%;
        }

        footer .ftr-m .ftr-t ul {
            display: flex;
            list-style: none;
        }

        footer .ftr-m .ftr-t ul li {
            padding: 0 10px;
        }

        footer .ftr-m .ftr-t ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer .ftr-m .ftr-t ul li a:hover {
            color: #0b0b0b;
        }

        footer .ftr-m .ftr-d {
            width: 60%;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        footer .ftr-m .ftr-d div {
            width: 30%;
            margin-bottom: 20px;
        }

        footer .ftr-m .ftr-d div h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        footer .ftr-m .ftr-d div ul {
            list-style: none;
            padding: 0;
        }

        footer .ftr-m .ftr-d div ul li {
            padding: 5px 0;
        }

        footer .ftr-m .ftr-d div ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer .ftr-m .ftr-d div ul li a:hover {
            color: #020202;
        }

        footer .ftr-m .ftr-b {
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }

        footer .ftr-m .ftr-b h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        footer .ftr-m .ftr-b p {
            font-size: 14px;
        }
    </style>
</head>
<body>
<header class="banner">
        <div class="navbar">
            <img src="images/finallogo.png" class="logo" alt="Opulent Space Logo">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="design.php">Design Ideas</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <h1>Order Customized design</h1>
        </div>
    </header>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Phone:</label><br>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" required></textarea><br><br>

    <input type="submit" value="Submit">
</form>


<section class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-items">
                <div class="service-item">
                    <h3>Interior Design</h3>
                    <p>Transform your space with our expert interior design solutions.</p>
                </div>
                <div class="service-item">
                    <h3>Home Decoration</h3>
                    <p>Add style and elegance to your home with our decoration services.</p>
                </div>
                <div class="service-item">
                    <h3>Renovation</h3>
                    <p>Revitalize your home with our renovation expertise.</p>
                </div>
            </div>
        </div>
    </section>

<footer>
<div class="ftr-m">
            <div class="ftr-t">
                <img src="images\finallogo.png">
                <ul>
                    <li><a target="_blank" href="https://api.whatsapp.com/send/?phone=+918879109025&text=Hey There! I am interested in interior designs on website. Can I know more on this?"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/meetpatel_2801/"><i class="fab fa-instagram"></i></i></a></li>
                </ul>
            </div>
            <div class="ftr-d">
                <div>
                    <h3>Design ideas</h3>
                    <ul>
                        <li><a href="livingroom.php?topic=living-room">Living Rooms</a></li>
                        <li><a href="kitchen.php?topic=kitchen">Kitchens</a></li>
                        <li><a href="masterbedroom.php?topic=masterbedroom">Master Bedrooms</a></li>
                        <li><a href="kidsbedroom.php?topic=kidsbedroom">Kids Bedrooms</a></li>
                    </ul>
                </div>
               <div>
                    <h3>Explore</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="design.php">Designs</a></li>
                        <li><a href="book.php">Meet Designer</a></li>
                         <li><a href="aboutus.php">About Us</a></li>
                    </ul>
                </div><div>
                    <h3>Get in touch</h3>
                    <ul>
                        <li>Call us</li>
                        <a href="tel:1234567890">+91 1234567890</a>
                        <li>Email us</li>
                        <a href="mailto:opulentspace01@gmail.com">opulentspace01@gmail.com</a>
                    </ul>
                </div>
            </div>
            <div class="ftr-b">
                <h2>Designed By SNAV</h2>
                <p>© <?php echo $currentYear; ?> <?php echo $companyName; ?>.com | All Rights Reserved</p>
            </div>
        </div>
</footer>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("quote-form");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission behavior

        // Get form data
        const formData = new FormData(form);

        // Send form data to server using AJAX
        fetch('connect.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (response.ok) {
                console.log("Form data sent successfully.");
                window.location.href = "thankyou.php"; // Redirect to thank you page
            } else {
                console.error("Error sending form data.");
            }
        })
        .catch(error => console.error("Error:", error));
    });
});
</script>


</body>
</html>