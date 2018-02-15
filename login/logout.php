<?php
session_start();
require('connect.php');

/**
 * Created by PhpStorm.
 * User: erika
 * Date: 07/02/2018
 * Time: 10:41 AM
 */
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $active = "UPDATE users SET active='0' WHERE id_number='$username'";
    mysqli_query($link, $active);
}

unset($_SESSION['username']);
header('Location: login.html');