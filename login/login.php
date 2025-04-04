
<?php
$login = false;
$showError = false;
if (isset($_POST['login'])) {
    include '../partials/_dbconnect.php';
$username = $_POST['username'];
$email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    //  $hash = password_hash($password, PASSWORD_DEFAULT);

    // $sql = "Select * From `user` Where username='$username' AND password='$password'";
    $sql = "Select * From `user` Where username='$username' AND phoneNo='$phone'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $login = true;
                session_start();
                $_SESSION['Loggedin'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                $_SESSION['phone'] = $phone;
                header("location: /krushi-manch/welcome.php");
            } 
        }
    } else {
        $showError = "Invalid Credentials";
    }
}

?>

<?php 
if (isset($_SESSION['Loggedin']) && ($_SESSION['Loggedin'] == true)) {
        $loggedin=true;
    }
    else{
        $loggedin=false;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - Krushi Manch</title>
    <link rel="stylesheet" href="login.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>
<body>
    <?php
        echo '<nav>
        <div class="logo">
            <img src="./Krushi_Manch.png" alt="#">
        </div>';


     echo '  <div class="dropdown">
    <i class="ri-user-line dropbtn"></i>
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
    </nav>';
?>
        <div class="container">
      <!-- Left Side - Signup Form -->
      <div class="signup-section">
        <h2>Log In here</h2>
        <p>"From soil to success"</p>

        <form action="../login/login.php" method="post">
            <label for="name">Name</label>
          <input type="text" id="name" name="username" placeholder="Enter your name" required />

          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Enter your email" required />
       
          <label for="email">phone No</label>
          <input type="number" name="phone" id="email" placeholder="Enter your phone" required />

          <label for="password">Password</label>
          <input type="password" id="password"  name="password" placeholder="Enter your password" required />

          <button type="submit" name="login" class="submit-btn">Log In</button>
            <p>Don't have an account? <a href="../regitration/signup.php">Sign Up</a></p>
        </form>
      </div>

      <!-- Right Side - Info Section -->
      <div class="info-section">       
      </div>
    </div>
  <?php
    if ($login) {
        echo '<script>
        Swal.fire({
            title: "You are successfully loggedin!",
            text: "thank you for joining us",
            icon: "success"
            }) </script>';
        }
        if ($showError) {
            echo '<script>
            Swal.fire({
                icon: "error",
                title: "Error!",
                text: " Please enter valid details",
                }) </script>';
            }
            
            ?>
</body>

</html>