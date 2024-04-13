<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add your CSS links here -->
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSewNPcIWu-ENehjxBiB7Da8kF1NORopYPz_w&usqp=CAU" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>

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

    <section class="feature">

        <!-- Feature Array -->
        <?php
        $features = array(
            array(
                "title" => "Discover the Beauty of Nature",
                "subtitle" => "Experience the wonders of the natural world",
                "image" => "img/kid/1.jpg",
            ),
            array(
                "title" => "Travel to Exotic Destinations",
                "subtitle" => "Explore the hidden gems of the world",
                "image" => "img/kid/2.jpg",
            ),
            array(
                "title" => "Healthy Living & Wellness",
                "subtitle" => "Take a step towards a healthier life",
                "image" => "img/kid/3.jpg",
            ),
            array(
                "title" => "Creative Arts & Crafts",
                "subtitle" => "Unleash your artistic potential",
                "image" => "img/kid/4.jpg",
            ),
            array(
                "title" => "Culinary Adventures",
                "subtitle" => "Cook and savor delicious dishes",
                "image" => "img/kid/5.jpg",
            ),
            array(
                "title" => "Fashion Trends & Style",
                "subtitle" => "Express yourself through fashion",
                "image" => "img/men/1.jpg",
            ),
            array(
                "title" => "Explore the Universe",
                "subtitle" => "Astronomy and the mysteries of space",
                "image" => "img/men/2.png",
            ),
            array(
                "title" => "Tech Innovations & Gadgets",
                "subtitle" => "Stay up-to-date with the latest technology",
                "image" => "img/men/3.png",
            ),
            array(
                "title" => "Music & Melodies",
                "subtitle" => "Harmonize your life with music",
                "image" => "img/men/4.jpg",
            ),
        );

        ?>

        <input type="text" id="search" placeholder="Search" style="width: 100%; padding: 10px; font-size: 18px; margin-top:65px;">


        <div class="feature-content">
            <?php
            foreach ($features as $index => $feature) {
                echo '<div class="row row' . ($index + 1) . '">
                        <div class="main-row">
                            <div class="row-text">
                                <h6>' . $feature['title'] . '</h6>
                                <h3>' . $feature['subtitle'] . '</h3>
                                <a href="kid.php" class="row-btn">Show me all</a>
                            </div>
                            <div class="row-img">
                                <img src="' . $feature['image'] . '">
                            </div>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </section>

    <script>
        const searchInput = document.getElementById('search');
        const featureContent = document.querySelector('.feature-content');
        const featureItems = featureContent.querySelectorAll('.row');

        searchInput.addEventListener('input', () => {
            const searchTerm = searchInput.value.toLowerCase();
            featureItems.forEach(item => {
                const title = item.querySelector('h6').textContent.toLowerCase();
                const subtitle = item.querySelector('h3').textContent.toLowerCase();
                if (title.includes(searchTerm) || subtitle.includes(searchTerm)) {
                    item.style.display = 'block'; // Show the item
                } else {
                    item.style.display = 'none'; // Hide the item
                }
            });
        });
    </script>

    <!-- Add the rest of your HTML content -->

    <!-- Add your JavaScript links here -->
</body>

</html>