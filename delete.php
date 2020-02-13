<?php
    require 'auth.inc.php';
    include 'config.inc.php';
    //delete.php?id=2

    if(isset( $_GET['id'] ) && ctype_digit( $_GET['id'] )) {
        $id = $_GET['id'];
    }
    else {
        header('Location: select.php');
    }

    $db = new mysqli(
        MySQL_HOST,
        MySQL_USER,
        MySQL_PASSWORD,
        MySQL_DATABASE
    );

    $sql = "DELETE FROM users WHERE id=$id"; 
            //id has been checked for ctype to prevent sql injection

    $db->query($sql);
    echo '<p>User deleted</p>';
    $db->close();

?>
