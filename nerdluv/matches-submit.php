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
  $user = $_GET["name"];
  $singles = array();
  foreach($all_singles as $key => $ind) {
    $singles = explode("\n", $all_singles[$key]);
    foreach($singles as $key => $keyval){
      $info[] = explode(",", $singles[$key]); //fill an array for each user
    }
  }
  var_dump($info);

  //search for user in singles.txt
  $length = count($info) - 1; // count doesn't start at one must use count - 1 for searching index
  $user_index = int();
  for ($i = 0; $i <= $length; $i++) {
    if($info[$i][0] == $user) {
      $user_index == $i;
    }
  }

  var_dump($user_index);




 ?>
