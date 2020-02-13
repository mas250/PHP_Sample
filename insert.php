<?php
include 'config.inc.php';

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
            MySQL_HOST,
            MySQL_USER,
            MySQL_PASSWORD,
            MySQL_DATABASE
        );
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
readfile('header.tmpl.html');
?>

<form
    action=""
    method="post">
    <div class="form-group">
    <label for="name">User name:</label>
    <input type="text" class="form-control" name="name" id="name" value="<?php
    echo htmlspecialchars($name, ENT_QUOTES);
    ?>"><br>
    </div>
    <div class="form-group">
    <label for="password">Password: </label>
    <input type="password" class="form-control" name="password" id="password"><br>
    </div>
    <div class="form-group">
    <div><label>Gender: </label></div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" name ="gender" id="gender-f" value="f"<?php
            if($gender === 'f'){
                echo 'checked';
            }
        ?>> 
        <label class="form-check-label" for="gender-f">Female</label>
        </div>
        <input type="radio" name ="gender" value="m"<?php
            if($gender === 'm'){
                echo 'checked';
            }
        ?>> 
        <label class="form-check-label" for="gender-m">Male</label>
        </div>
        <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" name ="gender" id="gender-o" value="o"<?php
            if($gender === 'o'){
                echo 'checked';
            }
        ?>> Other<br>
        </div>
        </div>
        <div class="form-group">
    <label for="color">Favorite color:</label>
    <select class="form-control" name="color" id="color">
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

<?php 
    readfile('footer.tmpl.html');
?>
