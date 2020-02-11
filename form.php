<?php
if(isset($_POST['searchterm'])) {
    echo htmlspecialchars($_POST['searchterm'], ENT_QUOTES);
}
?>

<form
    action=""
    method="post"
    >
    User name: <input type="text" name="name"><br>
    Password: <input type="password" value="password"><br>
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
    Comments: <textarea name="comments"></textarea><br>
    <input type="checkbox" name ="tc" value="ok">
    I accept the T&amp;C<br>
    <input type="submit" name="Search"><br>

</form>