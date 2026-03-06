<!--Include config.php to start the session-->
<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <img src="images/KsTU log.jpg" alt="KsTU Logo">
        <h1>Login Page</h1>
        <hr>
        <nav>
            <a href="index.html">Return Home</a><br><br>
        </nav>
    </header>

    <!--Check if form is submitted-->
    <section>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // run the logic
            if (!isset($_SESSION['user'])) {

                echo "<p style='color:red;'>You haven't registered yet. Please <a href='register.php'>register here</a></p>";
            } else {
                $username = $_POST["username"];
                $password = $_POST["password"];

                // <!--check whether the username or password matches the one in the session-->
                if ($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']) {
                    $_SESSION['logged_in'] = true;
                    header("Location: dashboard.php");
                    exit;
                } else {
                    echo "<p style='color:red;'>Invalid username or password. Please <a href='login.php'>try again</a></p>";
                }
            }
        } else {
            // close php and switch back to normal html and show only  the login form
        ?>
            <!--now the login form follows-->
            <form method="post">
                <label>Username:</label>
                <input type="text" name="username" required><br>

                <label>Password:</label>
                <input type="password" name="password" required><br>
                <button type="submit">Login</button><br>
            </form>
            <!--reopen php to close the block-->
        <?php } ?>
        <!--close the section-->
    </section><br>
    <footer>
        <p>&copy;CREATED BY BTECH 2B - GROUP3</p>
    </footer>
</body>
</html>