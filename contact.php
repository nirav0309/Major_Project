<?php
require('connection.php');
session_start();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate the input
    if (empty($name) || empty($email) || empty($message)) {
        // Display an error message
        echo 'Please fill in all required fields.';
        return;
    }

    // Set the recipient email address
    $to = 'niravparikh03@gmail.com'; // Replace 'owner@example.com' with the actual email address

    $subject = 'Contact Us Form Submission';
    $headers = "From: $email";
    $messageBody = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $messageBody, $headers)) {
        // Display a success message
        echo 'Your message has been sent successfully.';
    } else {
        // Display an error message
        echo 'There was an error sending your message. Please try again later.';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSewNPcIWu-ENehjxBiB7Da8kF1NORopYPz_w&usqp=CAU" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->
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

    <!-- Contact Section -->
    <section style="background: #F0F0E0;">
        <div class="contact-container">
            <div class="form-container">
                <h3>Say Hello.<span style="font-weight: 600; font-size: 30px;"> Don't Be Shy!</span></h3>
                <span>Details to details is what makes Ourshop different from the other themes.</span>
                <form action="contact.php" method="post" class="contact-form">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
                    <input type="submit" value="Send" class="send-button">
                </form>
                <div id="success-message" style="display: none;">Your message has been sent successfully!</div>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.74843098654!2d72.41492996723889!3d23.02047410040258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1692004003107!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="contact">
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
    </section>

    <div class="end-text">
        <p>© 2023 All Rights Reserved by .........</p>
    </div>

        <!-- Contact Script -->
        <script>
        const contactForm = document.querySelector('.contact-form');
        const successMessage = document.getElementById('success-message');

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Use FormData to serialize the form data
            const formData = new FormData(contactForm);

            fetch('contact_process.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    if (data === 'success') {
                        // Show the success message and hide the form
                        contactForm.style.display = 'none';
                        successMessage.style.display = 'block';
                    }
                });
        });
    </script>
    <!-- JavaScript Links -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>