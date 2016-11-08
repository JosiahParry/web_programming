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






 ?>
