<?php
// Start the session to access user data 
session_start();

// Check if the user is logged in 
if (!isset($_SESSION['logged_in'])) {

    // If not logged in, redirect to login page
    header("Location: login.php");

    exit;
}
// Get user details from session 
$user = $_SESSION['user'];

?>
<!-- Dashboard Content -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <!--Link to external css-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <header>
            <!--search bar form-->
            <form class="search-bar">
                <label for="search" style="display: none;">Search"></label>
                <input type="text" id="search" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
            <!--Navigation links-->
            <img src="images/KsTU log.jpg" alt="KsTU Logo">
            
            <a href="index.html">Home</a>
            <a href="logout.php">Logout</a><br>
            <h1>KUMASI TECHNICAL UNIVERSITY </h1>
            <hr />
        </header>

        <!--welcomes user and displays user's detailes from the session-->
        <section>
            <h2>Welcome, <?php echo $_SESSION['user']['username']; ?>!</h2><br>
            <img src="<?php echo $_SESSION['user']['file']; ?>" alt="Profile Picture" width="120"><br><br>
            <p><strong>Index Number:</strong> <?php echo $_SESSION['user']['indexno']; ?></p><br>
            <p><strong>Date of Birth:</strong> <?php echo $_SESSION['user']['dob']; ?></p><br>
            <p><strong>Gender:</strong> <?php echo $_SESSION['user']['gender']; ?></p><br>
            <p><strong>Program:</strong> <?php echo $_SESSION['user']['program']; ?></p><br>
            <p><strong>Email:</strong> <?php echo $_SESSION['user']['email']; ?></p>
        </section>

        <!-- contact channels -->
        <section class="contact-channels">
            <h2>📞 Connect With Us 🌍</h2>
            <hr />
            <ul>
                <li>
                    <img src="icons/address.gif" alt="Location" class="icon">Kumasi, Ghana
                </li>
                <li>
                    <img src="icons/email icon.png" alt="Email" class="icon">
                    <a href="mailto:kstu.edu.gh">kstu.edu.gh</a>
                </li>
                <li>
                    <img src="icons/call icon.png" alt="Call us" class="icon">
                    <a href="tel:+233530503343">+233530 503 343</a>
                </li>
                <li>
                    <img src="icons/whatsapp icon.png" alt="whatsapp" class="icon">
                    <a href="https://wa.me/233530503343" target="_blank">@KsTU</a>
                </li>
                <li>
                    <img src="icons/ig icon.png" alt="instagram" class="icon">
                    <a href="https://instagram.com/KsTU" target="_blank">KsTU</a>
                </li>
                <li>
                    <img src="icons/facebook icon.png" alt="Facebook" class="icon">
                    <a href="https://facebook.com/KumasiTechnicalUniversity" target="_blank">Kumasi Technical University</a>
                </li>
                <li>
                    <img src="icons/tiktok icon.png" alt="tiktok" class="icon">
                    <a href="https://tiktok.com/@kstu.gh" target="_blank">@kstu.gh</a>
                </li>
                <li>
                    <img src="icons/youtube_icon.png" alt="youtube" class="icon">
                    <a href="htts://youtube.com/KumasiTechnicalUniversity">Kumasi Technical University</a>
                </li>
            </ul>
        </section>

        <footer>
            <p>&copy;CREATED BY BTECH 2B - GROUP3</p>
        </footer>
    </nav>
</body>
</html>