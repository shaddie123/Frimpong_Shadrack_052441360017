<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Registration Portal</h1><hr>
        <p>
            <img src="images/KsTU log.jpg">
        <h3>Welcome to the student registration portal</h3>
        </p>
    </header>

    <!--check for submission method-->
    <section>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            //collect user data
            $username = $_POST["username"];
            $password = $_POST["password"];
            $indexno = $_POST["indexno"];
            $dob = $_POST["dob"];
            $gender = $_POST["gender"];
            $program = $_POST["program"];
            $email = $_POST["email"];
            $targetDir = "uploads/";
            $targetFile = $targetDir . basename(
                $_FILES["profile"]["name"]
            );
            // handle file upload
            $fileType = strtolower(
                pathinfo(
                    $targetFile,
                    PATHINFO_EXTENSION
                )
            );
            $allowed = ["jpg", "jpeg", "png", "gif"];
            if (in_array(
                $fileType,
                $allowed
            )) {
                if (move_uploaded_file(
                    $_FILES["profile"]["tmp_name"],
                    $targetFile
                )) {
                    // save user data in session
                    $_SESSION['user'] = [
                        "username" => $username,
                        "password" => $password,
                        "indexno" => $indexno,
                        "dob" => $dob,
                        "gender" => $gender,
                        "program" => $program,
                        "email" => $email,
                        "file" => $targetFile
                    ];
                    // print the result on the screen after the user click on 'register'-->
                    echo "<h2 style='color:green;font-weight:bold;'>Registration successful! </h2>";

                    // redirect the user to the login page if registration was successful
                    // prompt the user if the profile picture format isn't supported
                    echo "<p> <a href='login.php'>Login here</a></p>";
                } else {
                    echo "<p style=color:red;'>File upload failed. Please try again.</p>";
                }
            } else {
                echo "<p style=color:red;'>Only JPG, PNG, GIF files allowed. Please <a href='register.php'>Go Back</a></p>";
            }
        } else {
            //switch to html
        ?>
            <form method="post" enctype="multipart/form-data">
                <label>Username:</label>
                <input type="text" name="username" required><br><br>

                <label>Password:</label>
                <input type="password" name="password" required><br><br>

                <label>Index Number:</label>
                <input type="text" name="indexno" required><br><br>

                <label>Date of Birth:</label>
                <input type="date" name="dob" required><br><br>

                <label>Gender:</label>
                <div class="gender-options">
                    <label for="male">
                        <input type="radio" id="male" name="gender" value="Male" required>Male
                    </label>

                    <label for="female">
                        <input type="radio" id="female" name="gender" value="Female" required>Female<br><br>
                    </label>
                </div>
                <label>Select Program:</label>
                <select name="program" required><br><br>
                    <option value="">-- Select Program --</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Artificial Intelligence">Artificial Intelligence</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Food Technology">Food Technology</option>
                    <option value="Building Technology">Building Technology</option>
                    <option value="Pharmaceutical science">Pharmaceutical Science</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Chemical Engineering">Chemical Engineering</option>
                    <option value="Electrical & Electronic Engineering">Electrical & Electronic Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="petro-chemical engineering">Petro-Chemical Engineering</option>
                    <option value="Oil and Gas Engineering">Oil & Gas Engineering</option>
                    <option value="Business Administration">Business Administration</option>
                    <option value="Hospitality Management">Hospitality Management</option>
                    <option value="Fashion & Design">Fashion & Design</option>
                    <option value="Financial Accounting">Financial Accounting</option>
                    <option value="Procurement & Supply Chain Management">Procurement & Supply Chain Management</option>
                </select>

                <label>Email:</label>
                <input type="email" name="email" required><br><br>

                <label>Profile Image:</label>
                <input type="file" name="profile" required><br><br>

                <button type="submit">Register</button>
            </form>

            <!--open php to close the blck-->
        <?php } ?>
        <!--close section-->
    </section>
    <footer>
        <p>&copy; CREATED BY BTECH 2B - GROUP3</p>
    </footer>
</body>

</html>