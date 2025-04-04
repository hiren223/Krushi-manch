<?php
 
 $servername ="localhost";
 $username="root";
 $password="";
 $database="krushi-manch";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 if (isset($_POST['submit'])) {
   $name = $_POST['name'];
  $phone = $_POST['phone'];
   $rentdays = $_POST['rent_days'];
   $rentprice = $_POST['rent_price'];
   $location = $_POST['location'];
   $vehicle = $_POST['vehicle'];

   $fimage_tamp = $_FILES['front']['tmp_name'];
   $frimage = $_FILES['front']['name'];
   
   $limage_tamp = $_FILES['left']['tmp_name'];
   $leimage = $_FILES['left']['name'];
   
   $rimage_tamp = $_FILES['right']['tmp_name'];
   $riimage = $_FILES['right']['name'];
   
   $bimage_tamp = $_FILES['back']['tmp_name'];
   $baimage = $_FILES['back']['name'];



   $front = './images/' . $frimage;
   $left = './images/' . $leimage;
   $right = './images/' . $riimage;
   $back = './images/' . $baimage;

    move_uploaded_file($fimage_tamp, $front);
    move_uploaded_file($limage_tamp, $left);
    move_uploaded_file($rimage_tamp, $right);
    move_uploaded_file($bimage_tamp, $back);

   $sql = "INSERT INTO `trector-rent` (`name`, `number`, `rent_days`, `rent_price`, `location`, `vehicle-name`, `front`,`right`,  `left` , `back`) VALUES ('$name', '$phone','$rentdays', '$rentprice', '$location', '$vehicle', '$front', '$right', '$left', '$back')";
   $result = mysqli_query($conn, $sql);

    if($result){
        echo ' <script>
        alert("Vehicle added for rent successfully!");
        window.location.href= /krushi-manch/tractor/tractor.php;
        </script>';
    }
    else{
        echo ' <script>
        alert("Vehicle not added for rent successfully!");
        window.location.href= /krushi-manch/tractor/tractor.php;
        </script>';
    }
}


?>