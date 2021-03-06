<?php
  include("top.html");
  $all_singles = file("singles.txt", FILE_IGNORE_NEW_LINES);  //read only access to singles.txt
  //$singles = explode("\n", $all_singles); //creates an array where each one is an individual
  //print_r($singles);

    $user = $_GET["name"];
    $singles = array();
    foreach($all_singles as $key => $ind) {
      $singles = explode("\n", $all_singles[$key]);
      foreach($singles as $key => $keyval){
        $info[] = explode(",", $singles[$key]); //fill an array for each user
      }
    }
    //print_r($info);

    //search for user in singles.txt

    $length = count($info) - 1; // count doesn't start at one must use count - 1 for searching index

    $user_index = 0; //initialize index
    for ($i = 0; $i <= $length; $i++) {
      if(strcmp($info[$i][0], $user) == 0) {
      		$user_index = $i;
      	}
    }

  $to_match = $info[$user_index]; // array of only to be matched

  $gender = $to_match[1];
  $age = $to_match[2];
  $p_type = $to_match[3];
  $os = $to_match[4];
  $min_age = $to_match[5];
  $max_age = $to_match[6];


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
  for($i = 0; $i < $length; $i++){
    //make sure that the to person to be matched isn't the user
    //find opposite gender
    if ($info[$i][1] != $gender) {
      //make sure the age is within user range
      if (($info[$i][2] >= $min_age) && ($info[$i][2] <= $max_age)) {
        //find matching OS
        if ($info[$i][4] == $os) {
          //find at least one matching personality trait
          for($n = 0; $n <= strlen($p_type) - 1; $n++) {
            //match the string position user is the haystack, $info is the needle
            if (strpos($p_type, $info[$i][3][$n])) {
              array_push($matches, $info[$i]);
              break;
            }
          }
        }
      }
    }
  }

?>

  <h2>Matches for <?= $user?></h2>
  <?php
    for($i = 0; $i <= count($matches) - 1; $i++){
   ?>
      <div class="match">
        <p>
          <?= $matches[$i][0] ?>
          <img src="user.jpg" alt="Potential Match" />
        </p>
        <ul>
            <li><strong>Gender:</strong>
                <?= $matches[$i][1] ?>
            </li>
            <li><strong>Age:</strong>
              <?= $matches[$i][2] ?>
            </li>
            <li><strong>Personality Type:</strong>
              <?= $matches[$i][3] ?>
            </li>
            <li><strong>OS:</strong>
              <?= $matches[$i][4] ?>
            </li>
        </ul>
      </div>
    <?php } ?>

 <?php
 include("bottom.html");
  ?>
