<?php
require('connection.php');
session_start();

// ...
if (isset($_POST['Logout'])) {
  session_destroy();
  header("location: login.php");
}

if (isset($_POST['Login'])) {
  // Check if email and password are provided
  if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // You should hash the password for security
    $hashedPassword = $password;

    $host = 'localhost'; // Hostname
    $username = 'root'; // Database username
    $password = ''; // Database password

    // Create a connection to the MySQL server
    $connection = mysqli_connect($host, $username, $password);

    // Select the appropriate database here
    $db_selected = mysqli_select_db($connection, 'testing');
    if (!$db_selected) {
      die("Database selection failed: " . mysqli_error($connection));
    }

    // Perform a query to check if the user with the provided email and hashed password exists
    $query = "SELECT * FROM registered_users WHERE email = '$email' AND confirm = '$hashedPassword'";
    $result = mysqli_query($connection, $query);

    if ($result) {
      // Check if a matching user was found
      if (mysqli_num_rows($result) == 1) {
        // User is authenticated, set session variables
        $user = mysqli_fetch_assoc($result);
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $user['username'];
        // Redirect to a welcome page or perform any other actions
        // header('Location: welcome.php');
        // exit();
      } else {
        // User not found, display an error message
        echo "Invalid email or password.";
      }
    } else {
      // Query execution error
      echo "Error: " . mysqli_error($connection);
    }
  } else {
    // Email and password not provided
    echo "Please provide both email and password.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSewNPcIWu-ENehjxBiB7Da8kF1NORopYPz_w&usqp=CAU" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
  <!-------------header-------------->
  <header class="sticky">
    <a href="#" class="logo"><img src="img/new/logo.png"></a>

    <ul class="navbar">
      <li><a href="index.php" class="active">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="shop.php">Shop</a></li>

      <div class="dropdown">
        <button class="dropbtn">Categories</button>
        <div class="dropdown-content">
          <a href="men.php">Men</a>
          <a href="women.php">Women</a>
          <a href="kid.php">Kid</a>
        </div>
      </div>

      </li>
      <li><a href="contact.php">Contact</a></li>
    </ul>


    <div class="icons">
      <a href="search.php"><i class="ri-search-line"></i></a>
      <a href="login.php"><i class="ri-user-line"></i></a>
      <a href="#"><i class="ri-shopping-cart-line"></i></a>
      <div class="bx bx-menu" id="menu-icon"></div>
    </div>
  </header>

  <!-------------------------login------------------------>
  <?php
  if (isset($_SESSION['logged_in'])) {

    echo '<img style="margin:auto;margin-top: 141px;display:flex;text-align: center;font-size: 75px;width:180px;" src="img/images/user.png" alt="Girl in a jacket">';

    echo "<h1 style=\"
    margin-top: 41px;
    text-align: center;
    color: white;
    font-size: 75px;
    text-shadow: -2px 3px 7px #cc00ff;
    \">Welcome To This Website - $_SESSION[username]</h1>";

    echo "<form method='post'><button type='submit' name='Logout' style='background-color: #ff0000;color: #fff;border: none;padding: 10px 20px;border-radius: 5px;cursor: pointer;margin:auto;width: 193px;height: 52px;font-size: 22px;font-weight: bold;display: flex;box-shadow: -3px 0px 10px 0 #ff2fbd;flex-wrap: nowrap;align-content: center;justify-content: center;align-items: center;'>Logout <i class='ri-logout-box-line' style='font-size: 18px; vertical-align: middle; margin-left: 5px;'></i></button></form>";
  }
  ?>
  <br>
  <!-----------------when user logged in welcome text--------------->
  <?php
  if (isset($_SESSION['logged_in']) == false) {
    echo "
    
    <section class=\"container11 forms\">
    <div class=\"form login\">
      <div class=\"form-content\">

        <header class=\"log1\">Login</header>
        <form action=\"\" method=\"post\">
          <div class=\"field input-field\">
            <input type=\"email\" name=\"email\" placeholder=\"Email\" class=\"input\" autocomplete=\"off\">
          </div>
          <div class=\"field input-field\">
            <input type=\"password\" name=\"password\" placeholder=\"Password\" class=\"password\" autocomplete\=\"off\">
            <i class='bx bx-hide eye-icon'></i>
          </div>

          <div class=\"field button-field\">
            <button name=\"Login\">Login</button>
          </div>
        </form>
        <div class=\"form-link\">
          <span>Don't have an account? <a href=\"\" class=\"link signup-link\">Signup</a></span>
        </div>
      </div>

    </div>


    <!-- Signup Form -->
    <div class=\"form signup\">
      <div class=\"form-content\">

        <header class=\"log2\">Signup</header>
        <form action=\"login_register.php\" method=\"post\">
          <div class=\"field input-field\">
            <input type=\"Username\" name=\"username\" placeholder=\"Username\" class=\"input\" autocomplete=\"off\">
          </div>
          <div class=\"field input-field\">
            <input type=\"email\" name=\"email\" placeholder=\"Email\" class=\"input\" autocomplete=\"off\">
          </div>
          <div class=\"field input-field\">
            <input type=\"password\" name=\"psw\" placeholder=\"Create password\" class=\"password\" autocomplete=\"off\">
          </div>
          <div class=\"field input-field\">
            <input type=\"password\" name=\"confirm\" placeholder=\"Confirm password\" class=\"password\" autocomplete=\"off\">
            <i class='bx bx-hide eye-icon'></i>
          </div>
          <div class=\"field button-field\">
            <button name=\"Register\">Register</button>
          </div>
        </form>
        <div class=\"form-link\">
          <span>Already have an account? <a href=\"#\" class=\"link login-link\">Login</a></span>
        </div>
      </div>

    </div>

  </section>
  ";
  }
  ?>


  <!-------------------footer------------->

  <secion class="contact">
    <div class="main-contact">
      <div class="contact-content">
        <h5>Getting started</h5>
        <li><a href="#">Release Notes</a></li>
        <li><a href="#">Upgrade Guide</a></li>
        <li><a href="#">Browser Support</a></li>
        <li><a href="#">Dark Mode</a></li>
      </div>

      <div class="contact-content">
        <h5>Explore</h5>
        <li><a href="#">Prototyping</a></li>
        <li><a href="#">Design System</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Support</a></li>
      </div>

      <div class="contact-content">
        <h5>Resources</h5>
        <li><a href="#">Prototyping</a></li>
        <li><a href="#">Design System</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Support</a></li>
      </div>

      <div class="contact-content">
        <h5>Community</h5>
        <li><a href="#">Prototyping</a></li>
        <li><a href="#">Design System</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Support</a></li>
      </div>

    </div>
  </secion>

  <div class="end-text">
    <p>© 2023 All Rights Reserved by .........</p>
  </div>


  <script src="https://unpkg.com/scrollreveal"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script>
    document.querySelector('.signup-link').addEventListener('click', function() {
      document.querySelector('.login').style.display = 'none';
      document.querySelector('.signup').style.display = 'block';
    });

    document.querySelector('.login-link').addEventListener('click', function() {
      document.querySelector('.signup').style.display = 'none';
      document.querySelector('.login').style.display = 'block';
    });
  </script>

</body>

</html>