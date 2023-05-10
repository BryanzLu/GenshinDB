<?php

function createUser($c, $username, $password) {
    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $stmt = oci_parse($c, $sql);
    if (!$stmt) {
        header("location: ../signup.php?error=failed");
        exit();
    }
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    oci_bind_by_name($stmt, ":username", $username);
    oci_bind_by_name($stmt, ":password", $hashedPwd);
    oci_execute($stmt);
    oci_commit($c);
    oci_close($c);
    header("location: ../login.php?error=none");
    exit();
}

function loginUser($c, $username, $password ) {
    $user = userExists($c, $username);
    if ($user === false) {
        header("location: ../login.php?error=invaliduser");
        exit();
    }

    $hashedPwd = $user["PASSWORD"];
    $checkPwd = password_verify($password, $hashedPwd);

    if ($checkPwd === false) {
        header("location: ../login.php?error=incorrectpassword");
        exit();
    }

    if ($checkPwd === true) {
        //session_save_path('/home/d/danjiro/public_html');
        session_start();
        $_SESSION["username"] = $user["USERNAME"];
        $_SESSION["userid"] = $user["USERID"];
        header("location: ../oracle-starter.php");
        exit();
    }
}

function emptyInput($username, $password) {
    if (empty($username) || empty($password)) {
        return true;
    } else {
        return false;
    }
}

function userExists($c, $username) {
    $sql = "SELECT * FROM users WHERE username = (:username)";
    $stmt = oci_parse($c, $sql);
    if (!$stmt) {
        header("location: ../signup.php?error=failed");
        exit();
    }
    oci_bind_by_name($stmt, ":username", $username);
    oci_execute($stmt);
    if ($row = oci_fetch_assoc($stmt)) {
        return $row;
    } else {
        return false;
    }
    oci_close($c);
}
