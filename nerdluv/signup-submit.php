<?php
include("top.html");
//Get names from signup.htmk
$name = $_POST["name"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$personality = $_POST["personality"];
$os = $_POST["fav_os"];
$min_age = $_POST["minage"];
$max_age = $_POST["maxage"];


$user_info = array($first_name, $gender, $age, $personality, $os, $min_age, $max_age."\n");

print_r($user_info);
?>
//HTML thank you Part
  <h1> Thank you! </h1>
    <p> Welcome to NerdLuv <?= $name ?>!</p>
    <p> Now <a href="matches.php">log in to see your matches! </a></p>
<?php
include("bottom.html");
 ?>
