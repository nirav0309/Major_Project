<!-- 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSewNPcIWu-ENehjxBiB7Da8kF1NORopYPz_w&usqp=CAU" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

  <header class="sticky">
    <a href="#" class="logo"><img src="img/new/logo.png"></a>

    <div class="right-links">



</div>

    <ul class="navbar">
      <li><a href="index.php" class="active">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="shop.html">Shop</a></li>

      <div class="dropdown">
        <button class="dropbtn">Categories</button>
        <div class="dropdown-content">
          <a href="men.html">Men</a>
          <a href="women.html">Women</a>
          <a href="kid.html">Kid</a>
        </div>
      </div>

      </li>
      <li><a href="contact.html">Contact</a></li>
    </ul>

    <div class="icons">
      <a href="#"><i class="ri-search-line"></i></a>
  
      <a href="php/logout.php"> <i class="ri-logout-box-line"></i></a>
      <a href="#"><i class="ri-shopping-cart-line"></i></a>
      <div class="bx bx-menu" id="menu-icon"></div>
    </div>
  </header>

  <p style="height: 150px; width: 300px; color: white;" >ahvhgduahd</p>

    <div class="mymain">
    
    <div class="next" >
          <div class="mytext" style="font-size: 120px;">
          <p id="pre" style="text-align: center; margin-top:10px; box-size: 30px;" >Hello <b>/b>, Welcome</p>
          </div>
        </div>
        <p id="pre" style="text-align: center; margin-bottom:40px; font-size:65px;" >Your email is <b></b>.</p>
</div>
</div>

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

</body>

</html> -->



<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
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
      <li><a href="about.html">About</a></li>
      <li><a href="shop.html">Shop</a></li>

      <div class="dropdown">
        <button class="dropbtn">Categories</button>
        <div class="dropdown-content">
          <a href="men.html">Men</a>
          <a href="women.html">Women</a>
          <a href="kid.html">Kid</a>
        </div>
      </div>

      </li>
      <li><a href="contact.html">Contact</a></li>
    </ul>



    <div class="icons">
      <a href="search.php"><i class="ri-search-line"></i></a>
      <a href="login.php"><i class="ri-user-line"></i></a>
      <a href="#"><i class="ri-shopping-cart-line"></i></a>
      <div class="bx bx-menu" id="menu-icon"></div>
    </div>
  </header>

  <!------------------about us---------------------->
  <section class="hero" style="height: 80vh; ">
    <div class="heading">
      <h1 style=" height:100px;">Thank You </h1>
    </div>

    <div class="right-links">

      <?php

      $id = $_SESSION['id'];
      $query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id");

      while ($result = mysqli_fetch_assoc($query)) {
        $res_Uname = $result['Username'];
        $res_Email = $result['Email'];
        $res_id = $result['Id'];
      }

      echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";

      ?>

    </div>

    <main>

      <div class="main-box top">
        <div class="top">
          <div class="box">
            <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
          </div>
          <div class="box">
            <p>Your email is <b><?php echo $res_Email ?></b>.</p>
          </div>
        </div>

      </div>

    </main>
  </section>



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

</body>

</html>