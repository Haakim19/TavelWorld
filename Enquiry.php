<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel World</title>
    <link rel="icon" href="./Assets/icon/location.png" type="image/png">
    <link rel="stylesheet" href="./CSS/Navbar.CSS">
    <link rel="stylesheet" href="./CSS/Footer.css">
    <link rel="stylesheet" href="./CSS/enquiry.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&family=Jaldi:wght@400;700&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
</head>

<body>
    <div class="bg-img">
        <!-- Navigation Bar -->
        <nav class="navbar">
            <div class="logo">
                <img src="./Assets/icon/location.png" alt="" />
                Travel <span>World</span>
            </div>
            <div class="page">
                <a href="index.html">Home</a>
                <a href="Aboutus.html">About us</a>
                <a href="Packages.html">Packages</a>
                <a href="Destination.html">Destination</a>
                <a href="Enquiry.php" class="enquiry-btn">Enquiry</a>
            </div>
        </nav>
        <img class="hero-img" src="./Assets/Images/luxury.jpg" alt="">
        <!-- Enquiry Form -->
        <div class="container">
            <div class="enquiry">
                <h1>Enquiry Form</h1>
            </div>
            <form action="dataInsert.php" method="post">
                <input type="text" placeholder="Full Name" name="FullName" required>
                <div class="separator"></div>
                <input type="email" placeholder="Email" name="Email" required>
                <div class="separator"></div>
                <input type="tel" placeholder="Phone Number" name="PhoneNumber" required>
                <div class="separator"></div>
                <select id="tour-packages" name="tour-packages" required>
                    <option value="" disabled selected id="placeholder">Select a tour package</option>
                    <option value="cultural_heritage">Cultural Heritage Tours - $550</option>
                    <option value="beach_escapes">Beach Escapes - $700</option>
                    <option value="wildlife_safari">Wildlife and Safari Adventures - $600</option>
                    <option value="hill_country">Hill Country Retreats - $400</option>
                    <option value="adventure">Adventure and Outdoor Activities - $350</option>
                    <option value="wellness">Wellness and Ayurveda Retreats - $800</option>
                    <option value="food_culinary">Food and Culinary Tours - $450</option>
                    <option value="luxury">Luxury Escapes - $1,200</option>
                </select>
                <div class="separator"></div>
                <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Feedback" name="msg"></textarea>
                <div class="separator"></div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <?php
    if (isset($_SESSION['alert'])) {
        echo "<script>window.alert('" . addslashes($_SESSION['alert']) . "');</script>";
        unset($_SESSION['alert']); // Clear the alert after displaying it
    }

    ?>

    <footer class="footer"></footer>
    <div class="footer-content">
        <div class="footer-section about">
            <h2>About Travel World</h2>
            <p>Travel World is dedicated to providing the best travel experiences across Sri Lanka, focusing on quality service, customer satisfaction, and eco-friendly tourism practices.</p>
        </div>
        <div class="footer-section links">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="Home.html">Home</a></li>
                <li><a href="Aboutus.html">About Us</a></li>
                <li><a href="Packages.html">Packages</a></li>
                <li><a href="Destination.html">Destination</a></li>
                <li><a href="Enquiry.php">Enquiry</a></li>
            </ul>
        </div>
        <div class="footer-section contact">
            <h2>Contact Us</h2>
            <p>Email: info@travelworld.com</p>
            <p>Phone: +94 123 456 789</p>
            <p>Address: 123 Travel Lane, Colombo, Sri Lanka</p>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2023 Travel World | Designed by Travel World Team
    </div>
    </footer>
</body>

</html>