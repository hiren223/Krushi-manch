<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="shortcut icon" href="/test website/image/K.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Reantal-Trectors</title>
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
            <li><a class="active" href="/Rental sevice/tractor/index.html">Home</a></li>
            <li><a href="#category">Category</a></li>
        </ul>
    </nav>
    <!-- close navbar -->
    <div class="tractor" >
        <div class="slider-container">
            <div class="slides-wrapper">
                <div class="slide"><img src="/Rental sevice/tractor/image/john_deere_5310.png" alt="John deere 5310"></div>
                <div class="slide"><img src="/Rental sevice/tractor/image/john-deere-right-angle.png" alt="John deere 5310">
                </div>
                <div class="slide"><img src="/Rental sevice/tractor/image/john-deere-left-angle.png" alt="John deere 5310">
                </div>
                <div class="slide"><img src="/Rental sevice/tractor/image/john-deere-5310-front.png" alt="John deere 5310">
                </div>
            </div>
        </div>
        <div class="text">
            <h3><?php echo $row['vehicle-name']; ?></h3>
            <p><b>Rental price :</b> ₹500/h</p>
            <button>Get On Rent</button>
        </div>
    </div>
    <div class="table">
<h2>John Deere 5310 Specifications</h2>
<table>
    <tr>
        <th colspan="2">John Deere 5310 Engine</th>
    </tr>
    <tr>
        <td>Engine Type</td>
        <td>3-Cylinder, Direct Injection, Turbo Charged, Inline FIP</td>
    </tr>
    <tr>
        <td>Engine Rated RPM</td>
        <td>2400 RPM</td>
    </tr>
    <tr>
        <td>HP Category</td>
        <td>55 HP</td>
    </tr>
    <tr>
        <td>No. of Cylinders</td>
        <td>3</td>
    </tr>
    <tr>
        <td>Fuel Pump Type</td>
        <td>Inline FIP</td>
    </tr>
    <tr>
        <td>Starter Motor</td>
        <td>2.5 kW</td>
    </tr>
    <tr>
        <th colspan="2">John Deere 5310 Transmission</th>
    </tr>
    <tr>
        <td>Transmission Type</td>
        <td>Collarshift</td>
    </tr>
    <tr>
        <td>No. of Gears Forward</td>
        <td>9 Forward</td>
    </tr>
    <tr>
        <td>No. of Gears Reverse</td>
        <td>3 Reverse</td>
    </tr>
    <tr>
        <td>Speed Forward - kmph</td>
        <td>2.85 - 31.60 kmph</td>
    </tr>
    <tr>
        <td>Speed Reverse - kmph</td>
        <td>3.65 - 24.50 kmph</td>
    </tr>
    <tr>
        <td>Brake Type</td>
        <td>Oil Immersed Disc Brakes</td>
    </tr>
    <tr>
        <th colspan="2">John Deere 5310 PTO</th>
    </tr>
    <tr>
        <td>Max PTO (HP)</td>
        <td>47 HP</td>
    </tr>
    <tr>
        <td>PTO RPM</td>
        <td>540 RPM</td>
    </tr>
    <tr>
        <td>PTO Type</td>
        <td>Independent, 6 Splines</td>
    </tr>
    <tr>
        <th colspan="2">John Deere 5310 Steering</th>
    </tr>
    <tr>
        <td>Steering Type</td>
        <td>Power Steering</td>
    </tr>
    <tr>
        <th colspan="2">John Deere 5310 Hydraulics</th>
    </tr>
    <tr>
        <td>Lift Capacity</td>
        <td>1600 kg</td>
    </tr>
    <tr>
        <th colspan="2">John Deere 5310 Dimensions & Weight</th>
    </tr>
    <tr>
        <td>Ground Clearance</td>
        <td>435 mm</td>
    </tr>
    <tr>
        <td>Turning Radius With Brake</td>
        <td>3150 mm</td>
    </tr>
    <tr>
        <td>Overall Length</td>
        <td>3580 mm</td>
    </tr>
    <tr>
        <td>Overall Width</td>
        <td>1870 mm</td>
    </tr>
    <tr>
        <td>Total Weight</td>
        <td>2100 kg</td>
    </tr>
    <tr>
        <th colspan="2">John Deere 5310 Wheels & Tyres</th>
    </tr>
    <tr>
        <td>Front Tyre</td>
        <td>6.5 x 20, 8 PR</td>
    </tr>
    <tr>
        <td>Rear Tyre</td>
        <td>16.9 x 28, 12 PR</td>
    </tr>
</table>
    </div>
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