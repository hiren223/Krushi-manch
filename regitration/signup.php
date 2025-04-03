<?php
    $showAlert =false;
    $showError =false;
    if(isset($_POST['signup'])){
    include '../partials/_dbconnect.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cPassword'];

    
    $exists = false;
    
    $existSql = "SELECT * FROM `user` WHERE username='$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        $showError = "Username Already Exists";
    }
    else{
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `user` ( `username`,`email`, `phoneNo`, `password`, `date`) VALUES ('$username',  '$email', '$phone', '$hash', current_timestamp())";
            
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert = true;
            }
            else{
                $showError="Password do not match";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>;
<title>Registration - Krushi Manch</title>
</head>

<body>    
  

     <div class="container">
      <!-- Left Side - Signup Form -->
      <div class="signup-section">
        <h2>Create Your Account</h2>
        <p>"Growing together, thriving forever."</p>

        <form action="../regitration/signup.php" method="POST">
          <label for="name">Name</label>
          <input type="text" id="name" name="username" placeholder="Enter your name" required />

          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Enter your email" required />

          <label for="mnumber">Mobile No.</label>
          <input type="number" name="phone" id="mnumber" placeholder="enter your mobile number" required />

          <label for="password">Password</label>
          <input type="password" id="password"  name="password" placeholder="Enter your password" required />

          <label for="password">Confirm Password</label>
          <input type="password" id="password"  name="cPassword" placeholder="Enter your password" required />

          <button type="submit" name="signup" class="submit-btn">Sign in</button>

        </form>
      </div>

      <!-- Right Side - Info Section -->
      <div class="info-section">   
        <!-- <img src="/images/smart-agriculture-iot-with-hand-planting-tree-background (1).jpg" alt="#">     -->
      </div>
    </div>
 <?php
    if($showAlert){
        echo ' <script>
        Swal.fire({
  title: "You are successfully registered!",
  text: "thank you for joining us",
  icon: "success"
}) </script>';
    }
    if($showError){
        echo ' <script>
        Swal.fire({
  icon: "error",
  title: "Error!",
  text: " Username Already Exists",
}) </script>';
    }

    ?>
</body>

</html>