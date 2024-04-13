<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSewNPcIWu-ENehjxBiB7Da8kF1NORopYPz_w&usqp=CAU" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<hr>
<!----------------------- header -------------------->
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
<!------------------------shop---------------------------->

<div class="container">

    <div class="left">
        <div class="image-container1">
            <img src="img/shop/7.jpg" alt="Left Image">
            <div class="hover-content1">
                <h5 class="text1">We are ShopEasy</h5>
                <h5 class="text2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                <button class="button1" id="mybtn1">Purchase Now!</button>
            </div>
        </div>
    </div>

    <div class="right">
        <div class="image-container1">
            <img src="img/shop/1.jpg" alt="Image 1">
            <div class="text3">
                <h2>Women's</h2>
                <h5>Lorem ipsum dolor sit amet.</h5>
                <div class="hover-content">
                    <h5 class="text4">Women</h5>
                    <h5 class="text5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                    <button class="button" id="mybtn2">Discover More</button>
                </div>
            </div>
        </div>

        <div class="image-container1">
            <img src="img/shop/2.jpg" alt="Image 1">
            <div class="text3">
                <h2>Men's</h2>
                <h5>Lorem ipsum dolor sit amet.</h5>
                <div class="hover-content">
                    <h5 class="text4">Men</h5>
                    <h5 class="text5">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h5>
                    <button class="button" id="mybtn3">Discover More</button>
                </div>
            </div>
        </div>


        <div class="image-container1">
            <img src="img/shop/3.jpg" alt="Image 1">
            <div class="text3">
                <h2>Kid's</h2>
                <h5>Lorem ipsum dolor sit amet.</h5>
                <div class="hover-content">
                    <h5 class="text4">Kid</h5>
                    <h5 class="text5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h5>
                    <button class="button" id="mybtn4">Discover More</button>
                </div>
            </div>
        </div>

        <div class="image-container1">
            <img src="img/shop/4.jpg" alt="Image 1">
            <div class="text3">
                <h2>Accessories</h2>
                <h5>Lorem ipsum dolor sit amet.</h5>
                <div class="hover-content">
                    <h5 class="text4">Accessories</h5>
                    <h5 class="text5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                    <button class="button" id="mybtn5">Discover More</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-----------------------slider------------------------>

<div class="wrapper">
    <div class="sometext">
        <h3 style="font-weight: 600; font-size: 30px; padding: 10px;">The Best Options,<span style="font-weight: 600; font-size: 30px;"> For You.</span></h3>
    </div>
    <i id="left" class="ri-arrow-left-s-line"></i>
    <ul class="carousel">
        <li class="card">
            <div class="imimg"><img src="img/shop/8.png" alt="img" draggable="false"></div>
            <h2>MAN OUTERWEAR</h2>
            <span>Long sleeve T-shirt</span>
        </li>
        <li class="card">
            <div class="imimg"><img src="img/shop/6.jpg" alt="img" draggable="false"></div>
            <h2>KID'S</h2>
            <span>Classic Spring Collection</span>
        </li>
        <li class="card">
            <div class="imimg"><img src="img/shop/9.png" alt="img" draggable="false"></div>
            <h2>WOMAN OUTERWEAR</h2>
            <span>Jacket withside strips</span>
        </li>
        <li class="card">
            <div class="imimg"><img src="img/shop/5.jpg" alt="img" draggable="false"></div>
            <h2>Men FootWear</h2>
            <span>Basic White Shoe</span>
        </li>
        <li class="card">
            <div class="imimg"><img src="img/shop/11.png" alt="img" draggable="false"></div>
            <h2>WOMEN OUTERWEAR</h2>
            <span>Neon sweatshirt</span>
        </li>
        <li class="card">
            <div class="imimg"><img src="img/shop/10.png" alt="img" draggable="false"></div>
            <h2>Women FootWear</h2>
            <span>White platform boots</span>
        </li>
    </ul>
    <i id="right" class="ri-arrow-right-s-line"></i>
</div>


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
</body>

</html>