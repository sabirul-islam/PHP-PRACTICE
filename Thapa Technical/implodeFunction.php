<?php
# Join elements of an array with a string;

#implode function
// $colors = array('red', 'blue', 'yellow');

// $result = implode(", ", $colors);
// echo "$result <br>";

// echo '<pre>';
// print_r($colors);

#explode function
$colors = "My favourite color is red blue yellow green";
// $colors = "My,favourite,color,is, red blue yellow green";
$res = explode(" ", $colors);
// $res = explode(",", $colors);

echo "<pre>";
print_r($res);

foreach($res as $value){
    echo "$value ";
}



?>