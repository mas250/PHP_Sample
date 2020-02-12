<?php
$name = '';
$password = '';
$gender = '';
$color = '';
$languages = [];
$comments = '';
$tc = '';

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
    if(!isset($_POST['languages']) || !is_array( $_POST['languages']) 
        || count($_POST['languages']) === 0){
        $ok = false;
    }
    else{
        $languages = $_POST['languages'];
    };
    if(!isset($_POST['comments']) || $_POST['comments'] === ''){
        $ok = false;
    }
    else{
        $comments = $_POST['comments'];
    };
    if(!isset($_POST['tc']) || $_POST['name'] === ''){
        $ok = false;
    }
    else{
        $tc = $_POST['tc'];
    };

    if($ok){
        printf('User name : %s
        <br>Password: %s
        <br>Gender: %s
        <br>Color: %s
        <br>Languages: %s   
        <br>Comments: %s
        <br>T&amp;c: %s',
        htmlspecialchars($name, ENT_QUOTES),       //better practice to use placeholders and
        htmlspecialchars($password, ENT_QUOTES),    //escape special characters so users cant run malicious code
        htmlspecialchars($gender, ENT_QUOTES),           
        htmlspecialchars($color, ENT_QUOTES),           
        htmlspecialchars(implode(' ', $languages), ENT_QUOTES),
        htmlspecialchars($comments, ENT_QUOTES),
        htmlspecialchars($tc, ENT_QUOTES));
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
        <input type="radio" name ="gender" value="f"> Female
        <input type="radio" name ="gender" value="m"> Male
        <input type="radio" name ="gender" value="o"> Other<br>
    Favorite color:
    <select name="color" name="name">
        <option value ="">Please select</option>
        <option value ="#0f0">red</option>
        <option value ="#00f">blue</option>
        <option value ="#0f0">green</option>
    </select><br>
    Languuages Spoken:
    <select name ="languages[]" multiple size="3">
    <option value ="en">English</option>
        <option value ="fr">French</option>
        <option value ="it">Italian</option>
    </select><br>
    Comments: <textarea name="comments"><?php 
        echo htmlspecialchars($comments, ENT_QUOTES);
    ?></textarea><br>
    <input type="checkbox" name ="tc" value="ok">
    I accept the T&amp;C<br>
    <input type="submit" name="submit" value="Register"><br>

</form>