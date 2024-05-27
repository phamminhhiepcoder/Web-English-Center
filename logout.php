<?php
session_start();
include 'connect.php';

if ($_SESSION['loggedinAdmin'] === true) {
    $_SESSION['loggedinAdmin'] = false;
}

if ($_SESSION['loggedinClient'] === true) {
    $_SESSION['loggedinClient'] = false;
}
?>
