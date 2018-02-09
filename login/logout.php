<?php
/**
 * Created by PhpStorm.
 * User: erika
 * Date: 07/02/2018
 * Time: 10:41 AM
 */
session_start();
if (isset($_SESSION['$username'])) {
    unset($_SESSION['$username']);
}
session_destroy();
header('Location: login.html');