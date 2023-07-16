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
    <title>Login</title>
</head>

<body>
    <header>
        <h1>Login</h1>
    </header>

    <main>

        <?php
        if (isset($_SESSION['errors'])) {
            echo "<ul>";
            foreach($_SESSION['errors'] as $error){
                echo "<li>$error</li>";
            }
            echo "</ul>";
            unset($_SESSION['errors']);
        }
        ?>

        <form method="POST" action="processor.php">
            <fieldset>
                <legend>Login</legend>

                <label for="username">Username</label>
                <input type="text" name="username" id="username">

                <label for="password">Password</label>
                <input type="password" name="password" id="password">

                <input type="submit" value="Log In">
            </fieldset>               
        </form>

    </main>

    <footer>
        <p>&copy; Peter Nguyen 2023</p>
    </footer>
</body>
</html>