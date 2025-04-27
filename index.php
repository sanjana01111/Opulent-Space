<?php
// This is a PHP comment
// You can put PHP code here

// For example, you can define variables or perform any server-side logic
$companyName = "Opulent Space";
$currentYear = date("2024");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName; ?>: Best Interior Design Solutions for your Home | Get Free Quotes</title>
    <link rel="stylesheet" href="index_style.css">
</head>
<body>

<style>

body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    color: #141414; /* Text color for the entire page */
}

/* Header */

/* Add this CSS to resize the logo */
.navbar img.logo {
    width: 140px; /* Adjust the width as needed */
    height: 140px;
}

header {
    background-color: #222;
    color: #fff; /* Text color for the header */
    text-align: center;
    padding: 20px 0;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

.navbar img {
    cursor: pointer;
    height: 100px;
    width:auto
}

.navbar ul {
    display: flex;
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.navbar ul li {
    margin-right: 20px;
}

.navbar ul li a {
    color: #fff; /* Text color for the navigation links */
    text-decoration: none;
    font-weight: bold;
    font-size: 16px;
}

/* Banner */
.banner {
    background-image: url('images/home.jpg');
    background-size: cover;
    background-position: center;
    padding: 100px 0;
    text-align: center;
    /*filter: brightness(0.5);*/
}

.banner h1 {
    font-size: 3em;
    margin-bottom: 20px;
    color: #fff; /* Text color for the banner heading */
}

.banner p {
    font-size: 1.5em;
    margin-bottom: 30px;
    color: #fff; /* Text color for the banner paragraph */
}

.banner button {
    background-color: #fff; /* Background color for the button */
    color: #000; /* Text color for the button */
    padding: 10px 20px;
    border: none;
    font-size: 1.2em;
    cursor: pointer;
    transition: background-color 0.3s;
}

.banner button:hover {
    background-color: #333; /* Hover background color for the button */
}

/* Modal CSS styles */
.modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        /* Add color to the button */
        .modal-content button {
            background-color: #4caf50; /* Green background color */
            color: white; /* Text color */
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .modal-content button:hover {
            background-color: #45a049; /* Darker green background color on hover */
        }


        .modal-content {
    background-color: #ffffff; /* Light white background color */
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%; /* Adjust width as needed */
    border-radius: 10px;
    position: relative;
}

.login-options {
    display: flex;
    flex-direction: column;
}

.login-option {
    margin-bottom: 10px; /* Add some space between options */
}

.login-option button {
    width: 100%; /* Make buttons fill the container width */
}



        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

/* Main content */
.up {
    display: none;
}

.m2 {
    background-image: url('path_to_your_background_image.jpg');
    background-size: cover;
    background-position: center;
    padding: 50px 20px;
    text-align: center;
    color: #000; /* Text color for the main content */
}

.m2 h1 {
    font-size: 2em;
    margin-bottom: 20px;
}

.m2 .d2 {
    display: flex;
    justify-content: space-around;
    margin-top: 40px;
}

.m2 .d2 div {
    flex: 1;
    padding: 0 20px;
}

.m2 .d2 img {
    max-width: 100%;
    border-radius: 5px;
    margin-bottom: 10px;
}

.m2 .d2 h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.m2 .d2 p {
    font-size: 1.1em;
    color: #000; /* Text color for the paragraph */
    margin-bottom: 20px;
}

.m2 .d2 p.rd {
    color: #fff; /* Text color for the read more link */
    cursor: pointer;
    transition: color 0.3s;
}

.m2 .d2 p.rd:hover {
    color: #ddd; /* Hover color for the read more link */
}

/* Achievements */
.m4 {
    background-image: url('path_to_your_achievements_image.jpg');
    background-size: cover;
    background-position: center;
    padding: 50px 20px;
    text-align: center;
    color: #000; /* Text color for the achievements section */
}

.m4 h1 {
    font-size: 2em;
    margin-bottom: 20px;
}

.m4 .d4 {
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-top: 40px;
}

.m4 .d4 div {
    flex: 1;
    padding: 0 20px;
}

.m4 .d4 img {
    max-width: 100%;
    margin-bottom: 10px;
}

.m4 .d4 h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

/* Design Steps */
.m6 {
    background-color: #f8f8f8;
    padding: 50px 20px;
    text-align: center;
}

.m6 h1 {
    font-size: 2em;
    margin-bottom: 20px;
}

.m6 .d6 {
    position: relative;
    margin-bottom: 20px;
}

.m6 .d6 img {
    max-width: 100%;
}

.m6 .d6-2 {
    margin-bottom: 20px;
}

.m6 .d6-2 h1 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.m6 .d6-2 p {
    font-size: 1.1em;
    color: #777;
    margin-bottom: 20px;
}

.m6 .d6-3 {
    margin-bottom: 20px;
}

.m-last {
    background-color: #fff;
    padding: 50px;
    text-align: center;
    color: #333;
    margin-bottom: 40px;
}

.d1,
.d2 {
    display: flex;
    justify-content: space-around;
    margin-top: 40px;
}

.d1 div,
.d2 div {
    flex: 1;
    padding: 0 20px;
}

.d1 img,
.d2 img {
    max-width: 100%;
    border-radius: 5px;
    margin-bottom: 10px;
}

.d1 h2,
.d2 h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.d1 p,
.d2 p {
    font-size: 1.1em;
    color: #333;
    margin-bottom: 20px;
}

.d1 p.rd,
.d2 p.rd {
    color: #fff;
    cursor: pointer;
    transition: color 0.3s;
}

.d1 p.rd:hover,
.d2 p.rd:hover {
    color: #ddd;
}

/* Footer */
footer {
    background-color: #333;
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

    /* Chatbot Container */
        .chatbot-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 80px; /* Adjust container width */
            height: 80px; /* Adjust container height */
            background-image: url('path_to_your_background_image.jpg'); /* Add background image */
            background-size: cover;
            background-position: center;
            border-radius: 50%; /* Make it circular */
            cursor: pointer;
            z-index: 9999; /* Ensure container appears on top of other content */
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden; /* Ensure circular shape */
        }

        /* Chatbot Button */
        .chatbot-button {
            width: 70px; /* Adjust button width */
            height: 70px; /* Adjust button height */
            background-color: #020202; /* Adjust button background color */
            border-radius: 50%; /* Make it circular */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .chatbot-button img {
            width: 50px; /* Adjust image width */
            height: 50px; /* Adjust image height */
            border-radius: 20%; /* Make it circular */
        }

        .chatbot-button:hover {
            background-color: #0056b3; /* Adjust hover background color */
        }
</style>   

    <div class="banner">
        <div class="navbar">
            <img onclick="btn('index.php');" src="images\finallogo.png" class="logo">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="design.php">Designs</a></li>
                <li><a href="#" onclick="openModal()">Login</a></li> <!-- Modified -->
                <div id="loginModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal()">&times;</span>
                        <h2>Login Options</h2>
                        <button onclick="window.location.href='admin/adminlogin.php'">Admin Login</button>
                        <button onclick="window.location.href='login.php'">Customer Login</button>
                    </div>
                </div>
                <li><a href="book.php">Customize</a></li>
                <li><a href="aboutus.php">About Us</a></li>
            </ul>
        </div>

        <div class="content">
            <h1>Edge & Elegance</h1>
            <p>Happy new home, where adventures and memories await.</p>
        </div>
    </div>

    <!-- Rest of your HTML content -->
    <div class="up" onclick="totop();">
        <i class="fas fa-arrow-up"></i>
    </div>
    <div class="m2">
        <div class="t2">
            <h1>One-stop shop for all things home interiors</h1>
            <p>Welcome to a world where imagination takes shape, and spaces become canvases for self-expression. Embark on a captivating journey with our website, 'OpulentSpace’, where the art of interior design unfolds before your eyes. In this digital sanctuary, we invite you to explore the boundless possibilities of transforming your living spaces into refined reflections of your unique style.</p>
        </div>
        <div class="d2">
            <div>
                <img src="images\h22.jpg">
                <h2>Living Room</h2>
                <p>Get the complete home interior experience with award-winning designers, service partners, and the best brands.</p>
                <p onclick="btn('');" class="rd">Let's tell you more →</p>
            </div>
            <div>
                <img src="images\h21.jpg">
                <h2>Kitchen</h2>
                <p>Choose high quality, budget-friendly modular solutions like kitchens, wardrobes, TV units, and more in your favourite colours, sizes, and designs.</p>
                <p onclick="btn('show.kitchen?topic=kitchen');" class="rd">Let's tell you more →</p>
            </div>
        </div>
    </div>

    <div class="m4">
        <div class="t4">
            <h1>Our Achievements</h1>
        </div>
        <div class="d4">
            <div><img src="images\h2.jpg"><h3>2 homes delivered every hour</h3></div>
            <div><img src="images\h5.jpg"><h3>1,500+ expert designers</h3></div>
            <div><img src="images\h8.jpg"><h3>2.5 lakh+ catalogue products</h3></div>
            <div><img src="images\h7.jpg"><h3>21 cities</h3></div>
        </div>
    </div>

    <div class="m6">
        <div class="t6">
            <h1>Design Home In Just 5 Simple steps</h1>
        </div>
        <div class="d6">
            <img src="images\mdd.jpg" usemap="#img-mp">
            <div id="img-bk" style="width: 65px;"></div>
        </div>
        <div class="d6-2">
            <h1 id="d6-2-h1">Meet designer</h1>
            <p id="d6-2-p">Let's get to know you better and we'll share design concepts and a quote</p>
        </div>
        <div class="d6-3">
            <div class="slider">
                <div class="slide">
                    <!-- adding images -->
                    <div class="imgs f" id="cls-f">
                        <img src="images\md1.jpg" width="600" height="550">
                    </div>
                    <div class="imgs">
                        <img src="images\md2.jpg" width="600" height="550">
                    </div>
                    <div class="imgs">
                        <img src="images\md3.jpg" width="600" height="550">
                    </div>
                    <div class="imgs">
                        <img src="images\md4.jpg" width="600" height="550">
                    </div>
                    <div class="imgs">
                        <img src="images\md5.jpg" width="600" height="550">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <map name="img-mp">
        <area shape="circle" coords="32,75,36" id="ara1" onclick="clk1();">
        <area shape="circle" coords="142,75,36" id="ara2" onclick="clk2();">
        <area shape="circle" coords="252,75,36" id="ara3" onclick="clk3();">
        <area shape="circle" coords="362,75,36" id="ara4" onclick="clk4();">
        <area shape="circle" coords="472,75,36" id="ara5" onclick="clk5();">
      </map>

      <div class="m-last">
        <div class="last">
            <div>
                <h1>Your dream home is just a click away</h1>
                <h1>GET STARTED</h1>
            </div>
        </div>
    </div>

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
    <!-- Chatbot Button -->
    <div class="chatbot-container">
    <a href="cb.php" class="chatbot-button">
        <img src="admin/images/cb2.jpg" alt="Chatbot">
    </a>
</div>

<?php
// Retrieve username from URL parameter
if(isset($_GET['username'])) {
    $username = $_GET['username'];
    echo "<p>Welcome, $username!</p>";
}
?>



    <script>
        // JavaScript to open and close modal
        function openModal() {
            document.getElementById("loginModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("loginModal").style.display = "none";
        }

        // Close modal if user clicks outside of it
        window.onclick = function(event) {
            var modal = document.getElementById("loginModal");
            if (event.target == modal) {
                closeModal();
            }
        }

        function handleSuccessfulLogin(username) {
        alert("Login successful!"); // Replace this with your actual login logic
        // Redirect to index.php and pass username as a parameter
        window.location.href = "index.php?username=" + encodeURIComponent(username);
    }

    // Function to handle successful registration
    function handleSuccessfulRegistration(newUsername) {
        alert("Registration successful!"); // Replace this with your actual registration logic
        // Redirect to index.php and pass username as a parameter
        window.location.href = "index.php?username=" + encodeURIComponent(newUsername);
    }

    // Function to validate login form
    function validateLoginForm() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        // Basic validation - check if the fields are not empty
        if (username.trim() === "" || password.trim() === "") {
            alert("Username and password are required!");
        } else {
            // Add your authentication logic here (e.g., check against a database)
            // For demonstration purposes, assume login is successful
            handleSuccessfulLogin(username);
        }
    }

    // Function to validate signup form
    function validateSignupForm() {
        var newUsername = document.getElementById("newUsername").value;

        // Basic validation - check if the username is not empty
        if (newUsername.trim() === "") {
            alert("Username is required!");
        } else {
            // Add your registration logic here (e.g., store in a database)
            // For demonstration purposes, assume registration is successful
            handleSuccessfulRegistration(newUsername);
        }
    }

    </script>

</body>
</html>
