<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSewNPcIWu-ENehjxBiB7Da8kF1NORopYPz_w&usqp=CAU" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>


<!----------------------- header -------------------->
<header class="sticky">
    <a href="#" class="logo"><img src="img/new/logo.png"></a>

    <ul class="navbar">
        <li><a href="#" class="active">Home</a></li>
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

        <li><a href="contact.php">Contact</a>
        </li>
    </ul>

    <div class="icons">
        <a href="search.php"><i class="ri-search-line"></i></a>
        <a href="login.php"><i class="ri-user-line"></i></a>
        <a href="#"><i class="ri-shopping-cart-line"></i></a>
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>
</header>

<!-------------------------home------------------------>
<section class="home">
    <div class="home-text">
        <!-- <h4>In this season, find the best</h4> -->

        <span is="type-async" id="type-text" style="font-size: 25px; font-weight: 300; "></span>
        <span class="blinking-cursor">_</span>
        <h1>Exclusive collection for everyone</h1>
        <a href="shop.php" class="btn">Explore now</a>
    </div>

    <div class="home-img">
        <img src="img/new/backdround.png">
    </div>
</section>


<!---------------------------feature------------------------------->
<section class="feature">
    <div class="middle-text">
        <h2>Disover more <span>Good things.</span></h2>
    </div>

    <div class="feature-content">
        <div class="row row1">
            <div class="main-row">
                <div class="row-text">
                    <h6>Explore new arrivals</h6>
                    <h3>Give the gift <br>
                        of choice</h3>
                    <a href="men.php" class="row-btn">Show me all</a>
                </div>
                <div class="row-img">
                    <img src="img/new/1.png">
                </div>
            </div>
        </div>

        <div class="row row2">
            <div class="main-row">
                <div class="row-text">
                    <h6>Explore new arrivals</h6>
                    <h3>Give the gift <br>
                        of choice</h3>
                    <a href="men.php" class="row-btn">Show me all</a>
                </div>
                <div class="row-img">
                    <img src="img/new/2.png">
                </div>
            </div>
        </div>

        <div class="row row3">
            <div class="main-row">
                <div class="row-text">
                    <h6>Explore new arrivals</h6>
                    <h3>Give the gift <br>
                        of choice</h3>
                    <a href="women.php" class="row-btn">Show me all</a>
                </div>
                <div class="row-img">
                    <img src="img/new/3.png">
                </div>
            </div>
        </div>
    </div>

</section>

<!----------------------product--------------------->
<section class="product">
    <div class="middle-text">
        <h2>New Arrivals. <span>Best selling of the month</span></h2>
    </div>

    <div class="product-content">
        <div class="box">
            <div class="box-img">
                <img src="img/product/T-shirt-darkblue.png">
            </div>
            <h3>Manhatta Toy Wrt</h3>
            <h4>New Design 2023</h4>
            <div class="inbox">
                <div>
                    <a href="#" class="price">$19.99</a>
                </div>
                <div class="rating">
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                </div>
            </div>
            <div class="heart">
                <i class="ri-heart-fill"></i>
            </div>
            <div class="cart1">
                <i class="ri-shopping-cart-2-fill"></i>
            </div>
        </div>

        <div class="box">
            <div class=" box-img">
                <img src="img/product/T-shirt-black.png">
            </div>
            <h3>Manhatta Toy Wrt</h3>
            <h4>New Design 2023</h4>
            <div class="inbox">
                <div>
                    <a href="#" class="price">$19.99</a>
                </div>
                <div class="rating">
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                </div>
            </div>
            <div class="heart">
                <i class="ri-heart-fill"></i>
            </div>
            <div class="cart1">
                <i class="ri-shopping-cart-2-fill"></i>
            </div>
        </div>

        <div class="box">
            <div class=" box-img">
                <img src="img/product/jeans-black.png">
            </div>
            <h3>Manhatta Toy Wrt</h3>
            <h4>New Design 2023</h4>
            <div class="inbox">
                <div>
                    <a href="#" class="price">$19.99</a>
                </div>
                <div class="rating">
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                </div>
            </div>
            <div class="heart">
                <i class="ri-heart-fill"></i>
            </div>
            <div class="cart1">
                <i class="ri-shopping-cart-2-fill"></i>
            </div>
        </div>

        <div class="box">
            <div class=" box-img">
                <img src="img/product/sweater-white.png">
            </div>
            <h3>Manhatta Toy Wrt</h3>
            <h4>New Design 2023</h4>
            <div class="inbox">
                <div>
                    <a href="#" class="price">$19.99</a>
                </div>
                <div class="rating">
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                    <a href="#"><i class="ri-star-fill"></i></a>
                </div>
            </div>
            <div class="heart">
                <i class="ri-heart-fill"></i>
            </div>
            <div class="cart1">
                <i class="ri-shopping-cart-2-fill"></i>
            </div>
        </div>

    </div>
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

<!-----------------js link-------------->
<script src="https://unpkg.com/scrollreveal"></script>
<script type="text/javascript" src="js/script.js"></script>

<body>

</body>

</html>