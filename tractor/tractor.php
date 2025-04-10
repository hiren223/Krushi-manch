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
            <img src="./tractor-image/Krushi_Manch.png" alt="#">
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul class="text">
            <li><a class="active" href="/krushi-manch/Rental sevice/index.html">Home</a></li>
            <li><a href="#category">Category</a></li>
            <li><a href="/krushi-manch/from/index.html"><i class="ri-upload-cloud-2-line">Upload</i></a></li>
        </ul>
    </nav>

    <!-- Start Service Page -->
<div class="service">
   <?php
$sql = "SELECT * FROM `trector-rent`";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $vehicleName = htmlspecialchars($row['vehicle-name']);
    $id = $row['Id']; 
    ?>
    
    <div class="service-card">
        <div class="slider-container">
            <div class="slides-wrapper">
                <div class="slide"><img src="../from/<?php echo $row['front']; ?>" alt="<?php echo $vehicleName; ?>"></div>
                <div class="slide"><img src="../from/<?php echo $row['left']; ?>" alt="<?php echo $vehicleName; ?>"></div>
                <div class="slide"><img src="../from/<?php echo $row['right']; ?>" alt="<?php echo $vehicleName; ?>"></div>
                <div class="slide"><img src="../from/<?php echo $row['back']; ?>" alt="<?php echo $vehicleName; ?>"></div>
            </div>
        </div>
        <h3><?php echo $vehicleName; ?></h3>

        <!-- Pass ID to details page -->
        <a href="../tractor details/index.php?id=<?php echo $id; ?>">
            <button>More details</button>
        </a>
    </div>

<?php } ?>

</div>
</section>
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