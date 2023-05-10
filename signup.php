<html lang="en">
<head>
    <title>Sign Up</title>
</head>
<body>
    <form action="includes/signup.inc.php" method="post">
        Username: <input type="text" name="username" placeholder="tryceratops7"><br>
        Password: <input type="password" name="password" placeholder="12345"><br>
        <input type="submit" name="signup" value="Sign Up">
    </form>
    <a href="login.php">Log In</a>
    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Missing something. Fill all inputs</p>";
            }
            if ($_GET["error"] == "usernametaken") {
                echo "<p>Username taken. Try something else</p>";
            }
        }
    ?>
</body>
</html>