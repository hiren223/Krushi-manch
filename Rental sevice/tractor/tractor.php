<!-- SELECT * FROM `trector-rent`; -->
<?php 
 $servername ="localhost";
 $username="root";
 $password="";
 $database="krushi-manch";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="shortcut icon" href="/test website/image/K.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Reantal service</title>
</head>

<body>
    <!-- start navbar -->
    <nav>
        <div class="logo">
            <img src="image/Krushi_Manch.png" alt="#">
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul class="text">
            <li><a class="active" href="/Rental sevice/index.html">Home</a></li>
            <li><a href="#category">Category</a></li>
            <li><a href="#about-us">About Us</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="http://localhost/krushi-manch/Rental%20sevice/tractor/tractor%20details/from/index.html"><i class="ri-upload-2-fill">Upload</i></a></li>
        </ul>
    </nav>

    <!-- Start Service Page -->
<section id="category">
    <h1>Category</h1>
    <div class="service">
        <?php 
        $sql = "SELECT * FROM `trector-rent`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) { 
        ?>
        <div class="service-card">
            <a href="#">
                <div class="slider-container">
                    <div class="slides-wrapper">
                        <div class="slide"><img src="<?php echo $row['front_image']; ?>"></div>
                        <div class="slide"><img src="<?php echo $row['left_image']; ?>"></div>
                        <div class="slide"><img src="<?php echo $row['right_image']; ?>"></div>
                        <div class="slide"><img src="<?php echo $row['back_image']; ?>"></div>
                    </div>
                </div> 
                <br><br>
                <h3><?php echo $row['vehicle name']; ?></h3>
                <button><a href="/Rental service/tractor/tractor details/index.html">More details</a></button>
            </a>
        </div>
        <?php 
        } 
        ?>
    </div>
</section>


            
               
            <!-- <div class="service-card">
                <a href="#">
                    <div class="slider-container">
                        <div class="slides-wrapper">
                            <div class="slide"><img src="/Rental sevice/tractor/image/Mahindra_575.png"
                                    alt="Mahindra 575"></div>
                            <div class="slide"><img src="/Rental sevice/tractor/image/mahindra-575-di-leftside.png"
                                    alt="Mahindra 575"></div>
                            <div class="slide"><img src="/Rental sevice/tractor/image/Mahindra_575.png"
                                    alt="Mahindra 575"></div>
                            <div class="slide"><img src="/Rental sevice/tractor/image/mahindra-575-di-leftside.png"
                                    alt="Mahindra 575"></div>
                        </div>
                    </div><br><br><br>
                    <h3>Mahindra 575 (2wd)</h3>
                    <button> <a href="#">More details</a></button>
                </a>
            </div>
            <div class="service-card">
                <a href="#">
                    <div class="slider-container">
                        <div class="slides-wrapper">
                            <div class="slide"><img src="/Rental sevice/tractor/image/MF-1035.png"
                                    alt="Messey ferguson 1035 Di"></div>
                            <div class="slide"><img src="/Rental sevice/tractor/image/MF-1035.png"
                                    alt="Messey ferguson 1035 Di"></div>
                        </div>
                    </div>
                    <h3>Massey Ferguson 1035 Di (2wd)</h3>
                    <button> <a href="#">More details</a></button>
                </a>
            </div>
            <div class="service-card">
                <a href="#">
                    <div class="slider-container">
                        <div class="slides-wrapper">
                            <div class="slide"><img src="/Rental sevice/tractor/image/new-holland-3630.png"
                                    alt="New Holland 3630"></div>
                            <div class="slide"><img src="/Rental sevice/tractor/image/New_Holland_3630_leftangle.png"
                                    alt="New Holland 3630"></div>
                            <div class="slide"><img src="/Rental sevice/tractor/image/holland-3630-tx.png"
                                    alt="New Holland 3630"></div>
                        </div><br><br><br><br><br>
                    </div>
                    <h3>New Holland 3630 (2wd)</h3>
                    <button> <a href="#">More details</a></button>
                </a>
            </div>
            <div class="service-card">
                <a href="#">
                    <div class="slider-container">
                        <div class="slides-wrapper">
                            <div class="slide"><img src="/Rental sevice/tractor/image/Powertrac_eure.png"
                                    alt="Powertrac Eruo "></div>
                            <div class="slide"><img src="/Rental sevice/tractor/image/powertrac-euro.png"
                                    alt="Powertrac Eruo "></div>
                            <div class="slide"><img src="/Rental sevice/tractor/image/powertrac-Euro-Front.png"
                                    alt="Powertrac Eruo "></div>
                            <div class="slide"><img src="/Rental sevice/tractor/image/powertrac-euro-backangle.png"
                                    alt="Powertrac Eruo "></div>
                        </div>
                    </div> 
                    <h3>Powertrac Euro (4wd)</h3>
                    <button> <a href="#">More details</a></button>
                </a>
            </div>
            <div class="service-card">
                <a href="#">
                    <div class="slider-container">
                        <div class="slides-wrapper">
                            <div class="slide"><img src="/Rental sevice/tractor/image/swaraj_855FE.png" alt="Swaraj 855 FE "></div>
                            <div class="slide"><img src="/Rental sevice/tractor/image/Swaraj_855 FE_right.png" alt="Swaraj 855 FE "></div>
                            <div class="slide"><img src="/Rental sevice/tractor/image/swaraj_855FE.png" alt="Swaraj 855 FE "></div>
                            <div class="slide"><img src="/Rental sevice/tractor/image/Swaraj_855 FE_right.png" alt="Swaraj 855 FE ">
                            </div>
                        </div><br><br><br>
                    </div>
                    <h3>Swaraj 855 FE</h3>
                    <button> <a href="#">More details</a></button>
                </a>
            </div> -->
    <!-- close Service Page -->
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
<script>
    class Slider {
        constructor(container) {
            this.currentSlide = 0;
            this.container = container;
            this.slidesWrapper = container.querySelector('.slides-wrapper');
            this.slides = container.querySelectorAll('.slide');
            this.interval = null; // Store the interval ID
            this.init();
        }

        init() {
            this.showSlide(this.currentSlide);
            this.startInterval(); // Start automatic sliding
        }

        showSlide(index) {
            const offset = -index * 100; // Calculate the offset for the slide
            this.slidesWrapper.style.transform = `translateX(${offset}%)`; // Apply the transform
        }

        nextSlide() {
            this.currentSlide = (this.currentSlide + 1) % this.slides.length;
            this.showSlide(this.currentSlide);
        }

        startInterval() {
            this.interval = setInterval(() => this.nextSlide(), 1700);
        }
    }

    // Initialize sliders for all card containers
    document.querySelectorAll('.slider-container').forEach(container => {
        new Slider(container);
    });
</script>

</html>