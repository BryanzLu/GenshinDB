<?php
    if(isset($i_POST['logout'])) {
        session_start();
        session_unset();
        session_destroy();

        header("location: ../login.php");
        exit();
    } else {
        header("location: ../login.php");
        exit();
    }