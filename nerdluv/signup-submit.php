<?php
include("top.html");
$singles = "singles.txt";
//Get names from signup.htmk
$name = $_POST["name"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$personality = $_POST["personality"];
$os = $_POST["fav_os"];
$min_age = $_POST["minage"];
$max_age = $_POST["maxage"];


$user_temp = array($name, $gender, $age, $personality, $os, $min_age, $max_age."\n");
$user_info = implode(",", $user_temp);
@file_put_contents($singles, $user_info, FILE_APPEND);

?>
<!--HTML thank you Part-->
  <h1> Thank you! </h1>
    <p> Welcome to NerdLuv <?= $name ?>!</p>
    <p> Now <a href="matches.php">log in to see your matches! </a></p>
<?php
include("bottom.html");
 ?>
