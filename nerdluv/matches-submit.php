<?php
include("top.html");
$all_singles = file("singles.txt", FILE_IGNORE_NEW_LINES);  //read only access to singles.txt
//$singles = explode("\n", $all_singles); //creates an array where each one is an individual
//print_r($singles);
include("bottom.html");
?>



<?php
  $user = $_GET["name"];
  $singles = array();
  foreach($all_singles as $key => $ind) {
    $singles = explode("\n", $all_singles[$key]);
    foreach($singles as $key => $keyval){
      $info[] = explode(",", $singles[$key]); //fill an array for each user
    }
  }
  print_r($info);

  //search for user in singles.txt

  $length = count($info) - 1; // count doesn't start at one must use count - 1 for searching index

  $user_index = 0; //initialize index
  for ($i = 0; $i <= $length; $i++) {
    if(strcmp($info[$i][0], $user) == 0) {
    		$user_index = $i;
    	}
  }

$to_match = $info[$user_index]; // array of only to be matched


// 0 = Name | 1 = Gender | 2 = Age | 3 = Personality Type | 4 = OS | 5 = Min Age | 6 = Max Age
//logic:
//gender != $to_match[1]
//age >= $to_match[5] (narrow to min age older)
// age <= $to_match[6] (narrow to younger than max age)
//OS $to_match[4] == $info[i][4] (creates OS match)
//personality must be done in separate for loop
  // check for a match for each letter in the string
  // for(n in length(personality)) {
        //  if( grep(personality[n], $info[i][n]) != NULL){
        //    person is a match
        //  }
      //  }
  //figure out above code in php

//Create empty matches array
$matches = array();
//iterate through every user
for($i = 0; $i <= $length; $i++){
  //make sure that the to person to be matched isn't the user
  if ($info[$i][0] != $user) {
    //find opposite gender
    if ($info[$i][1] != $to_match[1]) {
      //make sure the age is within user range
      if ($info[$i][2] >= $to_match[5] && $info[$i][2] <= $to_match[5]) {
        //find matching OS
        if ($info[$i][4] == $to_match[4]) {
          //find at least one matching personality trait
          for($n = 0; $n <= strlen($to_match[3]) - 1; $n++){
            //match the string position user is the haystack, $info is the needle
            if (strpos($to_match[3], $info[$i][3][$n])) {
              $matches[] = $info[$i].'\n';
            }
          }
        }
      }
    }
  }
}
  print_r($matches);


 ?>
