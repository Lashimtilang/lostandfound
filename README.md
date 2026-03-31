# Lost and Found Portal Within the Campus

## Project Description
The Lost and Found Portal is a web-based application designed to help students and staff report, search, and recover lost items within the campus. It provides a simple and efficient platform where users can post details of lost or found items, making it easier to reconnect owners with their belongings.
It allow the users to:
    -report lost items.
    -report found items.
    -claim items.
    -search items.
## Features:
  - User Registration and Login.
  - Search lost item.
  - Report Lost Item.
  - Upload Found Item.
  - Upload Image Support.
  - Claim System.
  - Dark/Light Mode.

## Technologies Used:
 - Frontend
     •	HTML
     •	CSS
     •	JavaScript
-Backend
     •	PHP
     •	Session Management for authentication
-Database
     •	MySQL
     •	Managed using XAMPP (Apache + MySQL)

## Prerequisites
Before running this project locally, make sure you have the following installed:

- Web Browser (Google Chrome / Firefox)
- Code Editor (VS Code recommended)
- XAMPP / WAMP (for server and database)
- Git (optional)
- PHP (v7.4 or higher)
- MySQL (via phpMyAdmin or CLI)


## Installation Steps:

Follow the steps below to run the project on your local system:

### Step 1: Install Required Software
Make sure you have installed:
- XAMPP or WAMP (for Apache and MySQL)
- A web browser (Chrome, Edge, etc.)

### Step 2: Download the Project
- Go to the GitHub repository
- Click on *Code → Download ZIP*
- Extract the downloaded ZIP file

### Step 3: Move Project Folder
- Copy the extracted project folder
- Paste it inside:
  - C:\xampp\htdocs\ (if using XAMPP)
  - or C:\wamp\www\ (if using WAMP)

### Step 4: Start the Server
- Open XAMPP/WAMP Control Panel
- Start the following services:
  - Apache
  - MySQL

### Step 5: Create Database
- Open your browser and go to: `http://localhost/phpmyadmin`
- Click on **New**
- Enter database name:
        **lostfound**
   then,Click **Create**

### Step 6: Import Database
- Select the created database
- Click on **Import**
- Choose the database.sql file from the project folder
- Click **Go**

### Step 7: Configure Database
- Open the project folder
- Find the configuration file (e.g., db.php)
- Update the database details if needed:

### Step 8: Run the Project
- Open your browser
- Visit:http://localhost/lostfound

## Given below is a YouTube link to explain the overall functioning of the portal:
    - https://youtu.be/sCDc23IDVUI?si=xVvxW5fZSfwWMuSi
