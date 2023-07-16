<?php
session_start();
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
    if(isset($_SESSION['username'])){
	    echo "<p class ='border'>Hello, ".ucfirst(strtolower($_SESSION['username'])).". Welcome!</p>";
    } else {
        $_SESSION['errors'] = array("<p class='bad'>Please log in to view content.</p>");
        header("location: login.php");
        exit();
    }
    ?>

    </main>

    <footer>
        <p>&copy; Peter Nguyen 2023</p>
    </footer>
</body>
</html>