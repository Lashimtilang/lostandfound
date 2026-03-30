Project Title:
"Lost and Found Portal Within the Campus"

Description:
The Lost and Found Portal is a web-based application designed to help students and staff report,search, and recover lost item within the campus.Users can post details of lost or found items, and an claim or return items efficiently.

Prerequisites:
Make sure to have the following installed before running the project:
1. Frontend:
     .HTML
     .CSS
     .JavaScript
2. Backend:
     . PHP
     .Session Management for authentication
3. Database:
     . MySQL
     . Managed using XAMPP (Apache + MySQL)
4. Git
5. Web Browser(Chrome,Edge, etc.)


Installation Steps:
steps 1: git clone
           https://github.com/Lashimtilang/lostfound/new/main?filename=README.md.

steps 2: Move Project to server Directory
          . Copy the project folder into:
          .htdocs(if using XAMPP)
           Example:\xampp\htdocs\lostfound

steps 3: Start Apache and MySQL
 .Open XAMPP Control Panel
 .start:
    .Apache
    .MySQL
 
steps 4: Setup the Database
           Open the Database
              1. Open your browser and go to:
                    http://localhost/phpmyadmin
              2. create a new database:
                     lostfound

              3. Import the database file:
                  . Click on the database-> Import
                  . Select database.sql file from your project
                  . Click Go

steps 5: Configure Database Connection
         . Open your project file(e.g., db.php)
         . Update the database details:
                $host = "localhost";
                $user = "root";
                $password = "";
                $database = "lostfound";

steps 6: Run the Project
          Open your browser and go to:
                http://localhost/lostfound




