<?php
include("top.html");
$all_singles = file("singles.txt", FILE_IGNORE_NEW_LINES);  //read only access to singles.txt
//$singles = explode("\n", $all_singles); //creates an array where each one is an individual
//print_r($singles);
include("bottom.html");
?>


0 = Name
1 = Gender
2 = Age
3 = Personality Type
4 = OS
5 = Min Age
6 = Max Age

<?php
  $singles = array();
  foreach($all_singles as $key => $ind) {
    $singles = explode("\n", $all_singles[$key]);
    foreach($singles as $key => $info){
      $test[] = explode(",", $singles[$key]);
    }
  }
  //$person = $_GET["name"];
  var_dump($test);
 ?>
