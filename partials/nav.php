<?php

    if (isset($_SESSION['Loggedin']) && ($_SESSION['Loggedin'] == true)) {
        $loggedin=true;
    }
    else{
        $loggedin=false;
    }

    echo '
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Krushi Manch</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="shortcut icon" href="/test website/image/K.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <!-- Satrt Navbar -->
    <nav>
        <div class="logo">
            <img src="image/Krushi_Manch.png" alt="#">
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul class="text">
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#about-us">About Us</a></li>
            <li><a href="#contact">Contact Us</a></li>';

     echo '   </ul>';

     echo '  <div class="dropdown">
    <i class="ri-user-line dropbtn"> </i>
    <div class="dropdown-content">';
       if (!$loggedin) {
        echo ' <a class="nav-link" href="http://localhost/krushi-manch/login/login.php">Login</a>                      
                            <a class="nav-link" href="http://localhost/krushi-manch/regitration/signup.php">singup</a>
                        ';
    }
       if ($loggedin) {
        echo    ' <a class="nav-link" href="/krushi-manch/login/login.php">logout</a>           
                             ';
    }
    echo '
    </div>
</div>';
echo '
    </nav>
    <!-- Close Navbar -->

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
'?>