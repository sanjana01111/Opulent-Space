<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opulent Space: Best Interior Design Solutions for your Home | Get Free Quotes</title>
    <link rel="stylesheet" href="aboutus_style.css">
</head>
<body>

<style>

body, h1, h2, h3, p, ul, li, button {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    color: #333;
    background-color: #f5f5f5;
    line-height: 1.6;
}

.navbar img.logo {
    width: 120px; /* Adjust the width as needed */
}

/* Header */
header {
    background-color: #222;
    color: #fff;
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
    color: #0d0d0d;
    text-decoration: none;
    font-weight:bolder;
    font-size: 20px;
}

/* Banner */
.banner {
  background-image: url("images/visit-background.jpg");
  background-size: cover;
  background-position: center;
  padding: 100px 20px;
  text-align: center;
}

.banner h1 {
  font-size: 3em;
  margin-bottom: 20px;
  color: #fff;
}

.banner p {
  font-size: 1.5em;
  margin-bottom: 30px;
  color: #fff;
}

.banner button {
  background-color: #fff;
  color: #000;
  padding: 10px 20px;
  border: none;
  font-size: 1.2em;
  cursor: pointer;
  transition: background-color 0.3s;
}

.banner button:hover {
  background-color: #333;
}

.m1{
    padding: 50px;
}
.t1{
    text-align: center;
}
.t1 h1{
    font-size: 45px;
    margin: 0 0 15px 0;
}
.t1 p{
    font-size: 25px;
}
.d1{
    margin: 100px 25px 25px 25px;
    display: flex;
    justify-content: space-around;
}
.d1 div{
    width: 525px;
    height: 295.8px;
    border-radius: 10px;
    overflow: hidden;
}
.d1 div img{
    border-radius: 10px;
    height: inherit;
    width: inherit;
    display: block;
    transition: .5s;
}
.d1 div img:hover{
    transform: scale(1.1);
}
.d1 div h1{
    margin: 70px 0 10px 0;
    font-size: 40px;
}
.d1 div p{
    margin: 10px 0 5px 0;
    font-size: 25px;
}



.m2{
    padding: 25px;
    margin: 50px 0 50px 0;
}
.d2{
    display: flex;
    justify-content: space-evenly;
}
.d2 div{
    width: 600px;
    overflow: hidden;
}
.d2 div h1{
    font-size: 45px;
}
.d2 div p{
    margin: 20px 0 30px 0;
    font-size: 20px;
}
.d2 div a{
   text-decoration: none;
   color: black;
}
.d2 div img{
    border-radius: 5px;
    display: block;
}
.rd{
    color: #eb595f;
}



.m3{
    padding: 25px 50px 50px 50px;
    /* margin: 75px 0 0 0; */
}
.t3{
    width: 100%;
    text-align: center;
    margin: 0 0 30px 0;
}
.t3 h1{  
    font-size: 45px;
}
.t3 p{
    font-size: 25px;
}
.d3{
    text-align: center;
}





.d4{
    width: 100%;
    text-align: center;
    display: flex;
    justify-content: space-evenly;
}

.b{
    width: 600px;
    margin: 100px 0 0 0;
}
.b h2{
   font-size: 40px;
   text-align: left;
   margin: 25px 0 10px 0;
}
.b p{
   font-size: 20px;
   text-align: left;
}



.m5{
    width: 100%;
    text-align: center;
}
.m5 img{
    width: 800px;
    border-radius: 10px;
    cursor: pointer;
    /* filter: brightness(50%); */
}

.slider{
    margin: auto;
    margin-top: 70px;
    margin-bottom: 100px;
    width: 600px;
    height: 375px;
    border-radius: 10px;
    /* border: 2px solid #eb595f; */
    overflow: hidden;
}
.slide{
width: 600px;
height: 375px;
display: flex;
}
.slide input{
display: none;
}
.imgs{
transition: 2s;
}
.imgs img{
width: 600px;
height: 375px;
}

/* css for man slide */
.nav_man{
color: #eb595f;
position: absolute;
width: 600px;
margin-top: 337.5px;
display: flex;
justify-content: center;
}
.man_btn{
border: 2px solid #eb595f;
padding: 5px;
border-radius: 10px;
cursor: pointer;
transition: 1s;
}
.man_btn:not(:last-child){
margin-right: 40px;
}
.man_btn:hover{
background: #eb595f;
}
#radio1:checked ~ .f{
margin-left: 0;
}
#radio2:checked ~ .f{
margin-left: -600px;
}
#radio3:checked ~ .f{
margin-left: -1200px;
}
#radio4:checked ~ .f{
margin-left: -1800px;
}
#radio5:checked ~ .f{
margin-left: -2400px;
}
#radio6:checked ~ .f{
margin-left: -3000px;
}

/* automatic navigation */

.nav_auto{
position: absolute;
display: flex;
width: 600px;
justify-content: center;
margin-top: 337.5px;
}
.nav_auto div{
border: 2px solid #eb595f;
padding: 5px;
border-radius: 10px;
transition: 1s;
}
.nav_auto div:not(:last-child){
margin-right: 40px;
}
#radio1:checked~ .nav_auto .auto-btn1{
background: #eb595f;
}
#radio2:checked~ .nav_auto .auto-btn2{
background: #eb595f;
}
#radio3:checked~ .nav_auto .auto-btn3{
background: #eb595f;
}
#radio4:checked~ .nav_auto .auto-btn4{
background: #eb595f;
}
#radio5:checked~ .nav_auto .auto-btn5{
background: #eb595f;
}
#radio6:checked~ .nav_auto .auto-btn6{
background: #eb595f;
}

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


</style>

    
    <div class="banner">
        <div class="navbar">
            <img onclick="btn('index.php');" src="images/finallogo.png" class="logo">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="book.php">Customise</a></li>
                <li><a href="design.php">Design ideas</a></li>
                <li><a href="aboutus.php">About Us</a></li>
            </ul>
        </div>

        <div class="content">
            <p></p>
        </div>
    </div>

    <div class="up" onclick="totop();">
        <i class="fas fa-arrow-up"></i>
    </div>

    <div class="m1">
        <div class="t1">
            <h1>READY TO DIVE INTO THE WORLD OF INTERIORS?</h1>
            <p>Join us at the threshold of creativity, where every click opens the door to a world where aesthetics meet functionality, and your dream living spaces come to life. Step inside and let 'Elegance Unveiled' be your trusted companion on the exciting journey of creating timeless interiors.</p>
        </div>
        <div class="d1">
            <div>
                <img src="images\aboutus\aboutus1.jpg">
            </div>
            <div>
                <h1>Looks for each room</h1>
                <p>Take a walkthrough of beautifully designed bedrooms, living rooms, modular kitchens and everything in between.</p>
            </div>
        </div>  
        <div class="d1">
            <div>
                <h1>Experience our products</h1>
                <p>See our wide range of modular products and furniture to make the best choice before you make a purchase.</p>
            </div>
            <div>
                <img src="images\aboutus\aboutus2.jpg">
            </div>
        </div>  
        <div class="d1">
            <div>
                <img src="images\aboutus\aboutus3.jpg">
            </div>
            <div>
                <h1>Check the material & finish options</h1>
                <p>Get a touch and feel of material finishes, wallpapers, upholstery and more!</p>
            </div>
        </div>  
        <div class="d1">
            <div>
                <h1>Get design consultation</h1>
                <p>Meet an expert designer, get personalised design consultation for your home and place your order.</p>
            </div>
            <div>
                <img src="images\aboutus\aboutus4.jpg">
            </div>
        </div>  
    </div>
    
    <div class="m4">
        <div class="d4">
            <div class="a">
                <div class="slider">
                    <div class="slide">
                    <!-- radio buttons -->
                    <input type="radio" name="radio_btn" id="radio1" checked>
                    <input type="radio" name="radio_btn" id="radio2">
                    <input type="radio" name="radio_btn" id="radio3">
                    <input type="radio" name="radio_btn" id="radio4">
                    <input type="radio" name="radio_btn" id="radio5">
                    <input type="radio" name="radio_btn" id="radio6">
                    <!-- adding images -->
                    <div class="imgs f">
                        <img src="images\aboutus\aboutus-slide1.jpg">
                    </div>
                    <div class="imgs">
                        <img src="images\aboutus\aboutus-slide2.jpg">
                    </div>
                    <div class="imgs">
                        <img src="images\aboutus\aboutus-slide3.jpg">
                    </div>
                    <div class="imgs">
                        <img src="images\aboutus\aboutus-slide4.jpg">
                    </div>
                    <div class="imgs">
                        <img src="images\aboutus\aboutus-slide5.jpg">
                    </div>
                    <div class="imgs">
                        <img src="images\aboutus\aboutus-slide6.jpg">
                    </div>
                    <!-- auto navigation -->
                    <div class="nav_auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                        <div class="auto-btn5"></div>
                        <div class="auto-btn6"></div>
                    </div>
                    <!-- mannual navigation -->
                    <div class="nav_man">
                        <label for="radio1" class="man_btn"></label>
                        <label for="radio2" class="man_btn"></label>
                        <label for="radio3" class="man_btn"></label>
                        <label for="radio4" class="man_btn"></label>
                        <label for="radio5" class="man_btn"></label>
                        <label for="radio6" class="man_btn"></label>
                    </div>
                    </div>
                </div>
            </div>
            <div class="b">
                <h2>Contact Us</h2>
                <p>1234567890</p>
                <p>9087654321</p>
                <p>opulentspace01@gmail.com</p>
            </div>
        </div>
    </div>

    <div class="m-last">
        <div class="last">
            <div>
                <center><h1>Your dream home is just a click away</h1>
                <h1>GET STARTED</h1></center>
            </div>
        </div>
    </div>

    <footer>
        <div class="ftr-m">
            <div class="ftr-t">
                <img src="images/finallogo.png">
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
                        <li><a href="masterbedroom.php?topic=master-bedroom">Master Bedrooms</a></li>
                        <li><a href="kidsbedroom.php?topic=kids-bedroom">Kids Bedrooms</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Explore</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="design.php">Designs</a></li>
                        <li><a href="book.php">Book A Design</a></li>
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
                <p>© 2024 Opulent Space.com | All Rights Reserved</p>
            </div>
        </div>
    </footer>

<script>

setInterval(function(){
    if(document.getElementById('radio1').checked){
        document.getElementById("radio2").checked = true;
      }
    else if(document.getElementById('radio2').checked){
        document.getElementById("radio3").checked = true;
      }
    else if(document.getElementById('radio3').checked){
        document.getElementById("radio4").checked = true;
      }
    else if(document.getElementById('radio4').checked){
        document.getElementById("radio5").checked = true;
      }
    else if(document.getElementById('radio5').checked){
        document.getElementById("radio6").checked = true;
      }
    else if(document.getElementById('radio6').checked){
        document.getElementById("radio1").checked = true;
      }
  }, 4500)

</script>

</body>
</html>
