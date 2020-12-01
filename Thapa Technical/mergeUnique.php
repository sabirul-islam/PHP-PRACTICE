<?php

$array1 = array('red', 'yellow', 'blue');
$array2 = array('green', 'red', 'blue', 'black');

$merge = array_merge($array1, $array2);
echo "<pre>";
print_r($merge);

$unique = array_unique($merge);
echo "<pre>";
print_r($unique);

?>