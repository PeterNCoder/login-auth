<?php
session_start();
require_once("security.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I'm a Junior Front-End Web Developer. I'm an analytical problem solver with well-developed soft skills and a mentor to my peers.">
    <meta name="keywords" content="Web Development, Front-End, Back-End">
    <link rel="stylesheet" href="styles/normalize-fwd.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Page</title>
</head>

<body>
    <header>
        <h1>Page</h1>
        <a href="logout.php">Logout</a>
    </header>

    <main>

    <?php
    echo "<p>Hello, ".ucfirst(strtolower($_SESSION['username'])).". Welcome!</p>";
    ?>

    </main>

    <footer>
        <p>&copy; Peter Nguyen 2023</p>
    </footer>
</body>
</html>