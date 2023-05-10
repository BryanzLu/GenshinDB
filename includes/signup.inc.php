<?php
    if(isset($_POST["signup"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        require_once 'dbconnect.inc.php';
        require_once 'functions.inc.php';
        
        if (emptyInput($username, $password) !== false) {
                header("location: ../signup.php?error=emptyinput");
                exit();
        }

        if (userExists($db_conn, $username) !== false) {
            header("location: ../signup.php?error=usernametaken");
            exit();
        }

        createUser($db_conn, $username, $password);
    } else {
        header("location: ../signup.php");
        exit();
    }