<?php
session_start();
/**
 * Created by PhpStorm.
 * User: erika
 * Date: 07/02/2018
 * Time: 10:28 AM
 */
    require('connect.php');

    if (isset($_POST['username']) and isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        //$count = mysqli_num_rows($result);
        //echo var_dump($result);

        $user = mysqli_fetch_row($result);
        if ($user[0] == $username && $user[2] == $password) {
            $_SESSION['username'] = $username;

            echo "Hi, " . $_SESSION['username']. "
            " . "<br>";

            $active = "UPDATE users SET active='1' WHERE username='$username'";
            mysqli_query($link, $active);

            echo "<a href='logout.php'>Logout</a>";
        } else {
            echo "Invalid Login Credentials";
            echo "<a href='login.html'><br>Back</a>";
        }
    }

    /**if (isset($_SESSION['username'])) {
        echo "Hi, " . $_SESSION['username']. "
        " . "<br>";
        echo "<a href='logout.php'>Logout</a>";
    }*/
