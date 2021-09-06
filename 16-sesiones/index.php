<?php

// log in
session_start();


// if user is not logged in, redirect to login page
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

// sin terminar



?>