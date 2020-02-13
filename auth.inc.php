<?php
    session_start();

    if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] != 1) {

        header('location: login.php');
    }

?>