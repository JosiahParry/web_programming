<?php
include("top.html");
$all_singles = fopen("singles.txt", "r");  //read only access to singles.txt
$singles = explode("\n", $all_singles); //creates an array where each one is an individual
print_r($singles);
include("bottom.html");
?>
