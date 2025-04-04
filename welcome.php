<?php
session_start();
if (!isset($_SESSION['Loggedin']) || ($_SESSION['Loggedin'] != true)) {
    header("location : ./krushi-manch/login/login.php");
    exit;
}
?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "krushi-manch";

$conn = mysqli_connect($servername, $username, $password, $database);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO `message` (`name`, `email`, `message`) VALUES ('$name', '$email','$message ')";
    $result = mysqli_query($conn, $sql);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <title>Krushi Manch</title>
</head>

<body>
    <?php
    require './partials/nav.php';
    ?>
<!-- Start Home Page -->
     <section id="home">
            <div class="homeimg">
                <div class="box"></div>
                <div class="hometext">
                    <h1> "It's not just farming, <br> it's <span> feeding the world."</span></h1>
                    <p>Explore our comprensive resources, connect with follw farmers, and grow your expertise.
                       <br> Discover expert trip, market trends, and tools to enhance your farming journey.🌱🌾
                    </p>
                    
                </div>
            </div>
    </section>
    <!-- Close Home Page -->

    <!-- Start Service Page -->
    <section id="service">
        <h1>Services</h1>
        <div class="service">
            <div class="service-card">
                <a href="Users login/contact.html">
                    <img src="image/user.jpg" alt="User Management">
                    <h3>User Management</h3>
                    <p>Registration/login for Farmers and Buyers.</p>
                </a>
            </div>
            <div class="service-card">
                <a href="#">
                    <img src="image/Marketplace.jpg" alt="Marketplace">
                    <h3>Marketplace</h3>
                    <p>Post Crops/Products for Sale: Farmers can list products with details (type, price, quantity, and
                        images).</p>
                </a>
            </div>
            <div class="service-card">
                <a href="#">
                    <img src="image/information.jpg" alt="Information Hub">
                    <h3>Information Hub</h3>
                    <p>Personalized guidance for optimal crop yields.</p>
                </a>
            </div>
            <div class="service-card">
                <a href="http://localhost:3000/" target="_blank">
                    <img src="image/communication.jpg" alt="Communication and Networking">
                    <h3>Communication and Networking</h3>
                    <p>Chat Feature: Direct messaging between farmers and buyers. A discussion board for farmers to
                        share
                        ideas, solutions, and challenges.</p>
                </a>
            </div>
            <div class="service-card">
                <a href="./Rental sevice/index.html">
                    <img src="image/Rental -service.jpg" alt="Rental service">
                    <h3>Rental service</h3>
                    <p>All farming equipments are available on rent.</p>
                </a>
            </div>
            <div class="service-card">
                <a href="./EMI calculator/index.html">
                    <img src="image/EMI-Calculator.jpg" alt="EMI Calculator">
                    <h3>EMI Calculator</h3>
                    <p>Loan application and EMI calculators for farmers to purchase equipment or seeds.</p>
                </a>
            </div>
        </div>
    </section>
    <!-- close Service Page -->

    <!-- Start About Page -->
    <section id="about-us">
        <div id="aboutcontainer">
            <h1>About Us</h1>
            <div class="aboutcontent">
                <!-- Our Story Section -->
                <div class="section">
                    <div class="icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h2>Our Story</h2>
                    <p>Our story unfolds with the first furrow turned, hands calloused yet tender. Generations before us
                        sowed the same soil, their whispers carried by the wind. We honor their legacy, tilling the
                        earth with reverence. Each seed planted is a promise - a promise of sustenance, resilience, and
                        growth.</p>
                </div>

                <!-- Our Mission Section -->
                <div class="section">
                    <div class="icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h2>Our Mission</h2>
                    <p>"Empowering Farmers, Nourishing Communities: Our mission is to foster sustainable agriculture,
                        share knowledge, and cultivate a resilient farming ecosystem where every seed planted yields
                        prosperity." 🌱🌾</p>
                </div>

                <!-- Our Vision Section -->
                <div class="section">
                    <div class="icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h2>Our Vision</h2>
                    <p>"Cultivating Tomorrow's Harvest, Rooted in Sustainability: Our vision is to create a global
                        network where farmers thrive, ecosystems flourish, and the legacy of agriculture endures for
                        generations to come."🌱🌎</p>
                </div>
            </div>
        </div>
    </section>
    </section>
    <!-- close About Page -->

    <!-- Start Contact Page -->
    <section id="contact">
        <h1>Contact US</h1>
        <div class="container">
            <div class="left">
                <img src="image/contact.jpg" alt="Contact Us">
            </div>
            <div class="right">
                <div class="topic-text">Send us a message</div>
                <p>If you have any work from our team or any types of quries related to Our services, you can send a
                    message from
                    here. It's Our pleasure to help you.</p> <br>
                <form action="welcome.php" method="post">
                    <div class="input-box">
                        <input type="text" placeholder="Enter your name" name="name" required>
                    </div> <br>

                    <div class="input-box">
                        <input type="text" placeholder="Enter your email" name="email" required>
                    </div> <br>

                    <div class="input-box">
                        <textarea placeholder="Enter You Message" name="message" required
                            style="height: 60px;"></textarea>
                    </div>

                    <div class="button">
                        <button name="submit" id="button"> Send Now</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- close Contact Page -->

    <!-- Start Footer -->
    <footer>
        <div id="container">
            <img src="image/logo.png" alt="#">
            <div class="left-side">
                <div class="details"><i class="ri-map-pin-line"></i> <span> Gandhinagar,Gujrat-382421 </span></div>
                <div class="details"><i class="ri-phone-line"></i> <span>+91 00000 00000 </span> </div>
                <div class="details"><i class="ri-mail-line"></i> <span> krushimanch.info@gmail.com </span></div>
            </div>
            <div class="right-side">
                <h3>About The Company</h3>
                <div class="text">
                    Our company provide all farming service such as Market Place to sell goods,<br>Rental Equipment
                    service,Real Time Communication for Farmers,EMI Calculator,etc.
                </div> 
                <a href="#"><i class="ri-whatsapp-line"></i></a>
                <a href="#"><i class="ri-telegram-2-line"></i></a>
                <a href="#"><i class="ri-facebook-fill"></i></a>
                <a href="#"><i class="ri-instagram-line"></i></a>
                <a href="#"><i class="ri-twitter-x-line"></i></a>
            </div>
        </div>
        <div class="copy"><span>Copyright © 2025 krushi manch, All Rights Reserved</span>
        </div>
    </footer>
    <!-- Close Footer -->
<?php 
 if ($result) {
      echo '<script>
        Swal.fire({
            title: "Your message sent successfully",
            text: "thank you for message",
            icon: "success"
            }) </script>';
   } else {
      echo '<script>
            Swal.fire({
                icon: "error",
                title: "Error!",
                text: "Your message not sent",
                }) </script>';
   }
?>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navLinks = document.querySelectorAll("nav ul.text li a");
        const checkbox = document.getElementById("click");

        navLinks.forEach(link => {
            link.addEventListener("click", function () {
                checkbox.checked = false; // Uncheck the checkbox to close menu
            });
        });
    });
</script>


</html>