<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Campus Lost & Found</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<script src="js/script.js"></script>
</head>
<body>

<header>
    <h2> Welcome to Assam Don Bosco University Lost & Found Portal!</h2>
    <nav>
        <button onclick="toggleTheme()">🌙</button>
        <?php if(isset($_SESSION['user'])): ?>
            <a href="dashboard.php">Dashboard</a>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        <?php endif; ?>
    </nav>
</header>

<div class="container">