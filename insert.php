<?php
$name = '';
$password = '';
$gender = '';
$color = '';

if(isset($_POST['submit'])) {
    $ok = true ;

    if(!isset($_POST['name']) || $_POST['name'] === ''){
        $ok = false;
    }
    else{
        $name = $_POST['name'];
    };

    if(!isset($_POST['password']) || $_POST['password'] === ''){
        $ok = false;
    }
    else{
        $password = $_POST['password'];
    };
    if(!isset($_POST['gender']) || $_POST['gender'] === ''){
        $ok = false;
    }
    else{
        $gender = $_POST['gender'];
    };
    if(!isset($_POST['color'])|| $_POST['color'] === ''){
        $ok = false;
    }
    else{
        $color = $_POST['color'];
    };


    if($ok){
        $db = new mysqli(
            'localhost',
            'root',
            '',
            'php');
            $sql = sprintf(
                "INSERT INTO users(name, gender, color) VALUES('%s', '%s', '%s') ",
                $db->real_escape_string($name),
                $db->real_escape_string($gender),
                $db->real_escape_string($color));
            $db->query($sql);
            echo '<p>User added.</p>';
            $db->close();
    }

}
?>

<form
    action=""
    method="post"
    >
    User name: <input type="text" name="name" value="<?php
    echo htmlspecialchars($name, ENT_QUOTES);
    ?>"><br>
    Password: <input type="password" name="password"><br>
    Gender:
        <input type="radio" name ="gender" value="f"<?php
            if($gender === 'f'){
                echo 'checked';
            }
        ?>> Female
        <input type="radio" name ="gender" value="m"<?php
            if($gender === 'm'){
                echo 'checked';
            }
        ?>> Male
        <input type="radio" name ="gender" value="o"<?php
            if($gender === 'o'){
                echo 'checked';
            }
        ?>> Other<br>
    Favorite color:
    <select name="color" name="name">
        <option value ="">Please select</option>
        <option value ="#f00"<?php
            if ($color === '#f00'){
                echo ' selected';
            }
        ?>>red</option>
        <option value ="#00f"<?php
            if ($color === '#00f'){
                echo ' selected';
            }
        ?>>blue</option>
        <option value ="#0f0"<?php
            if ($color === '#0f0'){
                echo ' selected';
            }
        ?>>green</option>
    </select><br>
    Languuages Spoken:
    <select name ="languages[]" multiple size="3">
    <option value ="en"<?php

    ?>>English</option>
        <option value ="fr"<?php

    ?>>French</option>
        <option value ="it"<?php

    ?>>Italian</option>
    </select><br>
    Comments: <textarea name="comments"></textarea><br>
    <input type="checkbox" name ="tc" value="ok"<?php


    ?>>
    I accept the T&amp;C<br>
    <input type="submit" name="submit" value="Register"><br>

</form>
