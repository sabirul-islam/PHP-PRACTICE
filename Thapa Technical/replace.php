<?php

// echo str_replace("sabirul", "shimul", "Awsome sabirul"); # This function is case sensitive
// echo str_ireplace("SabIruL", "shimul", "Awsome sabirul"); # This function is  case insensitive
$name = "Md|Sabirul|Islam|shimul";

echo str_replace("|"," ",$name);

?>