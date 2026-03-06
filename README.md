
STUDENT LOGIN SYSTEM — BTCT 2B GROUP 3

PROJECT OVERVIEW:
This project is a backend web application built with **PHP sessions**.  
It demonstrates secure student login, session management, dashboard display, and logout functionality. 

PURPOSE:
This project was developed as part of the BTech Computer Technology (BTCT 2B) coursework at KsTU.

## KEY FEATURES:
- **index.php** : The first welcome page to ensure registration and login.

- **register.php** : This is where the user register to save user data in the session.

- **login.php**: Validates user credentials and direct user to the Dashboard.

- **dashboard.php**: Displays user details after successful login. 

- **logout.php**: Ends the session and redirects to the index page(Home).  

- **about.php**: Contains group members with their index numbers and roles.

- **config.php** : Ensures successful start and end of the session.

- **uploads** : where user's profile picture is saved during registration to display on the Dashboard.

## QUICK TUTORIALS:
-Start Apache and MySQL on your local server **(XAMPP)**
-Create your project on **Vscode**
-Place the project folder in **htdocs** inside **(XAMPP)** folder

-Open your browser and type https://localhost/project_name/index.php to start the process,

## HOW TO USE:
-Log in with your student login credentials(only if registered) else the system will remind you to register before login.

-Access the dashboard to view details.

-Use the logout button to securely end the session.

## CHALLENGES:
-Wrong user credentials threw errors leading to system crash until the **if - else** commands were introduced to check system looping until user enter the right credentials.

-Browser cache files kept on hindering proper functionality of the session until **config.php** file was introduced to ensure proper configuration of the session.

-**Ctrl + Shift + R** shortcut was used periodically to ensure the browser start the localhost without any hicuff.

Visit the **About Us** page to see group member information.

This project was successfully uploaded to **GitHub** by **Btech2bgroup3 - Backend** which can be viewed to discover the full details using the organization name mentioned above. 


