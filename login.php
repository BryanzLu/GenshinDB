<html lang="en">
<head>
    <title>Log In</title>
</head>
<body>
    <form action="includes/login.inc.php" method="post">
        Username: <input type="text" name="username" placeholder="Username"><br>
        Password: <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="login" value="Log In">
    </form> 
    <a href="signup.php">Sign Up</a>
    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "none") {
                echo "<p>Sign up successful. Log in</p>";
            }
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Missing something. Fill all inputs</p>";
            }
            if ($_GET["error"] == "invaliduser") {
                echo "<p>Wrong username. Try again</p>";
            }
            if ($_GET["error"] == "incorrectpassword") {
                echo "<p>Wrong password. Try again";
            }
        }
    ?>
</body>
</html>