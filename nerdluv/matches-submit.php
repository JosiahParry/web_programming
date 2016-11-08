<?php
include("top.html");
$all_singles = file("singles.txt");  //read only access to singles.txt
//$singles = explode("\n", $all_singles); //creates an array where each one is an individual
print_r($singles);
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

  $person = fgets($all_singles);
  $ppl_info[$key] = explode(",", $person);
  }
  $person = $_GET["name"];
  print_r($person);
  print_r($singles);

  print_r($ppl_info);

 ?>
