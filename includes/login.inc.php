<?php
    if(isset($_POST["login"])){
        global $db_conn;

        $username = $_POST["username"];
        $password = $_POST["password"];
        
        require_once 'dbconnect.inc.php';
        require_once 'functions.inc.php';
        
        if (emptyInput($username, $password) !== false) {
            header("location: ../login.php?error=emptyinput");
            exit();
        }

        loginUser($db_conn, $username, $password);
    } else {
        header("location: ../login.php");
        exit();
    }