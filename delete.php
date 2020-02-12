<?php

    //delete.php?id=2

    if(isset( $_GET['id'] ) && ctype_digit( $_GET['id'] )) {
        $id = $_GET['id'];
    }
    else {
        header('Location: select.php');
    }

    $db = new mysqli(
        'localhost',
        'root',
        '',
        'php'
    );

    $sql = "DELETE FROM users WHERE id=$id"; 
            //id has been checked for ctype to prevent sql injection

    $db->query($sql);
    echo '<p>User deleted</p>';
    $db->close();

?>
