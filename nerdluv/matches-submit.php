<?php
include("top.html");
$all_singles = "singles.txt";  //read only access to singles.txt
$singles = explode("\n", $all_singles); //creates an array where each one is an individual
print_r($singles);
include("bottom.html");
?>
